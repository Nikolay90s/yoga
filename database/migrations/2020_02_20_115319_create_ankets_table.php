<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ankets', function (Blueprint $table) {
            $table->bigIncrements('id');
          	$table->integer('user_id')->unsigned()->default(0);
          	$table->foreign('user_id')->references('id')->on('users');
          	$table->string('image', 191);
          	$table->string('avatar', 191);
          	$table->text('storis');
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
        Schema::dropIfExists('ankets');
    }
}