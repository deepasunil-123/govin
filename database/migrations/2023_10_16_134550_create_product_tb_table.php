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
        Schema::create('product_tb', function (Blueprint $table) {
            $table->id();
            $table->string('cat_id');
            $table->string('sub_cat_id');
            $table->string('pro_name');
            $table->string('qty');
            $table->string('price');
            $table->string('photo');
            $table->string('seller_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tb');
    }
};
