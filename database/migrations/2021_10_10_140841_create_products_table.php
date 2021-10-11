<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->integer('id', true);
           $table->json('title');
           $table->json('description');
           $table->text('avatar')->nullable()->default('avatars/products');
           $table->text('slug');
           $table->integer('quantity')->unsigned()->default(0);
           $table->integer('store_id')->index('product_store_fk');
           $table->integer('trader_id')->index('product_trader_fk');
           $table->integer('category_id')->index('product_category_fk');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
