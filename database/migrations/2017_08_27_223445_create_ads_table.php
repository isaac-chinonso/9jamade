<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id');
            $table->string('title');
            $table->double('price');
            $table->string('description');
            $table->integer('state_id');
            $table->string('slug')->nullable();
            $table->boolean('status');
            $table->integer('subscription_id')->nullable();
            $table->string('subscription_date',10)->nullable();
            $table->string('expire_date',10)->nullable();
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
        Schema::dropIfExists('ads');
    }
}
