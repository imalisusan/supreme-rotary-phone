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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->ulid()->unique();
            $table->foreignId('participant_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->tinyInteger('status')->default(TransactionStatus::AWAITING_PAYMENT);
            $table->string('transaction_reference')->nullable();
            $table->longText('payment_details')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
