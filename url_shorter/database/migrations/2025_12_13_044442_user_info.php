<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Into this up function the schema will create user_info table where remaining those column
    public function up(): void
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('email', 255)->unique();
            $table->string('password');
        });
    }

    // when we rollback or delete the user_info table then this schema will perform it
    public function down(): void
    {
        Schema::dropIfExists('user_info');
    }
};