<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Into this up function the schema will create url_shorter table where remaining those column
    public function up(): void
    {
        Schema::create('url_shorter',function(Blueprint $table){
            $table-> integer('url_id')->primary();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('user_id') // parent table primary key
                  ->on('user_info') // parent table name
                  ->onDelete('cascade');
            $table-> string('original_url',50);
            $table-> string('shorter_url',30);
            $table->timestamps();
        });
    }

    // if i need rollback in future then this function will be execute
    public function down(): void
    {
        Schema::dropIfExists('url_shorter');
    }
};
