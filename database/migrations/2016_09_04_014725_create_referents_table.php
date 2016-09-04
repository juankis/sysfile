<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone',10);
            $table->string('ci',10);
            $table->string('email',60);
            $table->string('autorization',1);
            $table->string('state',1);
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')
                  ->references('id')->on('departments')
                  ->onDelete('cascade');
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
        Schema::drop('referets');
    }
}
