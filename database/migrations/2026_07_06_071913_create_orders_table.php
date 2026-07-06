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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unsigned()->autoIncrement()->nullable(false);
            $table->string('payment_amount')->nullable(false)->collation('utf8mb4_unicode_ci');
            $table->integer('sub_total')->nullable(false);
            $table->integer('tax')->nullable(false);
            $table->integer('discount')->nullable(false);
            $table->integer('service_charge')->nullable(false);
            $table->integer('total')->nullable(false);
            $table->integer('payment_method')->nullable(false);
            $table->integer('total_item')->nullable(false);
            $table->integer('id_kasir')->nullable(false);
            $table->string('nama_kasir')->nullable(false)->collation('utf8mb4_unicode_ci');
            $table->string('transaction_time')->nullable(false)->collation('utf8mb4_unicode_ci');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->enum('order_type', ['dinein','reservation'])->default('null')->collation('utf8mb4_unicode_ci');
            $table->bigInteger('id_reservasi')->nullable(false)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
