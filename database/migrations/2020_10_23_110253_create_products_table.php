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
            $table->id();
            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->integer('admin_role');
            $table->string('product_name');
            $table->text('product_description');
            $table->string('feature_image');
            $table->integer('stock');
            $table->string('size')->nullable();
            $table->string('model')->nullable();
            $table->double('product_price');
            $table->double('tax')->default(0);
            $table->string('manufactured_by')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
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
