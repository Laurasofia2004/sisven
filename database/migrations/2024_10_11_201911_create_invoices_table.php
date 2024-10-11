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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->integer('number')->unique()->notNullable();
            $table->date('date')->notNullable();
            $table->unsignedInteger('customer_id')->notNullable();  
            $table->unsignedInteger('pay_mode_id')->notNullable();  
    
        
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('pay_mode_id')->references('id')->on('pay_mode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
