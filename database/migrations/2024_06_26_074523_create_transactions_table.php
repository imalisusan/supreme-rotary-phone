<?php

use App\Enums\TransactionStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->ulid()->unique();
            $table->foreignId('contribution_id')->constrained()->cascadeOnDelete();
            $table->foreignId('payment_method_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->date('transaction_date');
            $table->time('transaction_time');
            $table->string('payment_ref');
            $table->longText('description');
            $table->string('transaction_code')->nullable();
            $table->string('receipt_number')->nullable();
            $table->tinyInteger('status')->default(TransactionStatus::AWAITING_PAYMENT);
            $table->json('payment_response')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
