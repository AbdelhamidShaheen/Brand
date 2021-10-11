<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->foreign('store_id', 'product_store_fk')->references('id')->on('stores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('trader_id', 'product_trader_fk')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('category_id', 'product_category_fk')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropForeign('product_store_fk');
            $table->dropForeign('product_trader_fk');
            $table->dropForeign('product_category_fk');
        });
    }
}
