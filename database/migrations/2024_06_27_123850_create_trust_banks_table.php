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
        Schema::create('trust_banks', function (Blueprint $table) {
            $table->id();
            $table->ulid()->unique();

            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('branch_name');
            $table->string('bank_code');
            $table->string('branch_code');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trust_banks');
    }
};
