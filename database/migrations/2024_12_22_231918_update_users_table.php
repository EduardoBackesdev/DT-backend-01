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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('second_name'); // Remove o campo second_name
            $table->dropColumn('number'); // Remove o campo second_name
            $table->string('email')->unique(); // Adiciona o campo email
            $table->string('password'); // Adiciona o campo password
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('second_name'); // Restaura o campo second_name
            $table->dropColumn('email'); // Remove o campo email
            $table->dropColumn('password'); // Remove o campo password
        });
    }
};
