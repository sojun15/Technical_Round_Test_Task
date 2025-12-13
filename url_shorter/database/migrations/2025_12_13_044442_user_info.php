<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('email', 255)->unique();
            $table->string('password');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_info');
    }
};