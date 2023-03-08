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
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("cat_id")->unsigned();
            $table->foreign("cat_id")->references("id")->on('tbl_category');  
            
            $table->integer("subcat_id")->unsigned();
            $table->foreign("subcat_id")->references("id")->on('tbl_subcategory');  
            $table->string("subcat_name");     

            $table->string("product_name");
            $table->string("product_photo");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
};
