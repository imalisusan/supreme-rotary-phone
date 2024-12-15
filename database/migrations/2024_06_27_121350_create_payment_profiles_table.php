<?php

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
        Schema::create('payment_profiles', function (Blueprint $table) {
            $table->id();
            $table->ulid()->unique();

            $table->bigInteger('payable_id')->unsigned();
            $table->tinyInteger('payable_type')->unsigned();

            $table->foreignId('channel_bank_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('account_number');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_profiles');
    }
};
