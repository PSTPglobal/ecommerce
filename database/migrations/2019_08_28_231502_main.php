<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Main extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rol', function (Blueprint $table){
           $table->increments('idRol');
           $table->string('rol');
           $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUser');
            $table->string('name');
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->integer('idRol')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idRol')
                ->references('idRol')
                ->on('rol')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::create('direction', function (Blueprint $table) {
            $table->increments('idDirection');
            $table->string('street');
            $table->string('number');
            $table->string('colony');
            $table->string('city');
            $table->string('state');
            $table->integer('idUser')->unsigned();
            $table->timestamps();

            $table->foreign('idUser')
                ->references('idUser')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::create('categs', function (Blueprint $table){
            $table->increments('idCategory');
            $table->string('category');
            $table->timestamps();
        });
        Schema::create('payment', function (Blueprint $table){
            $table->increments('idPayment');
            $table->string('payment');
            $table->timestamps();
        });
        Schema::create('product', function (Blueprint $table){
            $table->increments('idProduct');
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('status');
            $table->integer('idCategory')->unsigned();
            $table->timestamps();

            $table->foreign('idCategory')
                ->references('idCategory')
                ->on('categs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::create('opinion', function (Blueprint $table){
            $table->increments('idOpinion');
            $table->string('opinion');
            $table->string('qualification')->nullable();
            $table->integer('idProduct')->unsigned();
            $table->timestamps();

            $table->foreign('idProduct')
                ->references('idProduct')
                ->on('product')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::create('order_product', function (Blueprint $table){
            $table->increments('idOrderProduct');
            $table->integer('idProduct')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->integer('idPayment')->unsigned();
            $table->string('total');
            $table->string('date');
            $table->string('status');
            $table->string('quantity');
            $table->timestamps();

            $table->foreign('idProduct')
                ->references('idProduct')
                ->on('product')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('idUser')
                ->references('idUser')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('idPayment')
                ->references('idPayment')
                ->on('payment')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('rol');
        Schema::dropIfExists('users');
        Schema::dropIfExists('direction');
        Schema::dropIfExists('categs');
        Schema::dropIfExists('payment');
        Schema::dropIfExists('product');
        Schema::dropIfExists('opinion');
        Schema::dropIfExists('order_product');
    }
}
