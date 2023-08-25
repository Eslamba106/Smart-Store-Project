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
        Schema::table('newproducts', function (Blueprint $table) {
            $table->string('name');
            $table->string('image_path');
            $table->longText('description');
            $table->string('strike');
            $table->string('price');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('newproducts', function (Blueprint $table) {
            //
        });
    }
};
