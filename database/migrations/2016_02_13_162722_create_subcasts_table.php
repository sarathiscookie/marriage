<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcasts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cast_id')->unsigned()->index();
            $table->string('subcast', 50);
            $table->timestamps();

            $table->foreign('cast_id')->references('id')->on('casts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subcasts');
    }
}
