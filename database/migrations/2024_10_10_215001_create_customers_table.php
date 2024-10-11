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
        Schema::create('customers', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->char('document_number', 15)->unique()->notNullable();
            $table->char('first_name', 50)->notNullable();
            $table->char('last_name', 50)->notNullable();
            $table->char('address', 50);
            $table->date('birthday');
            $table->char('phone',16);
            $table->char('email',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
