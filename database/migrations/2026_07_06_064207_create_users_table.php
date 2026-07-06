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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unsigned()->autoIncrement();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->text('two_factor_secret');
            $table->text('two_factor_recovery_codes');
            $table->timestamp('two_factor_confirmed_at');
            $table->string('remember_token');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->enum('role', ['admin','staff','user',]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};