<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->integer('cate_id')->unsigned();
            $table->string('prod_name');
            $table->integer('prod_price');
            $table->string('prod_picture');
            $table->string('prod_accessories');
            $table->string('prod_warranty');
            $table->float('prod_promotion');
            $table->string('prod_status');
            $table->boolean('prod_instock');
            $table->string('prod_description');
            $table->boolean('prod_featured');
            $table->foreign('cate_id')->references('cate_id')->on('vp_categories');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vp_products');
    }
}
