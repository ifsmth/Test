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
            $table->id();
            $table->string('customer_first_name', 100);
            $table->string('customer_surname', 100);
            $table->string('customer_last_name', 100)->nullable();
            $table->string('customer_phone_number', 15)->nullable();
            $table->string('customer_city', 100)->nullable();
            $table->text('customer_address')->nullable();
            $table->string('order_status', 50)->nullable();
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
