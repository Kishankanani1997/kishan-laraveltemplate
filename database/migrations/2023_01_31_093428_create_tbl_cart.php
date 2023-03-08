<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cart', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("email");
            $table->string("password");
            $table->string("mobile");
            $table->string("address");
            $table->string("pincode");

            $table->integer("cat_id")->unsigned();
            $table->foreign("cat_id")->references("id")->on('tbl_category');

            $table->integer("product_id")->unsigned();
            $table->foreign("product_id")->references("id")->on('tbl_product');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_cart');
    }
};
