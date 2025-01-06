<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productinformation', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('product_name'); // Name of the product
            $table->text('description')->nullable(); // Description of the product
            $table->decimal('price', 8, 2); // Price of the product
            $table->integer('stock'); // Stock quantity
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productinformation');
    }
}