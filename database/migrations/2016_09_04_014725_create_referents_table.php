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

        DB::table('referets')->insert(
            array(
                'id' => '1',
                'name' => 'Fernando M.',
                'phone' => '876875687',
                'ci' => '6546354',
                'email' => 'FernandoM@hotmail.com',
                'autorization' => '3',
                'state' => '1',
                'department_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('referets')->insert(
            array(
                'id' => '2',
                'name' => 'Fidel',
                'phone' => '12325235',
                'ci' => '67567457',
                'email' => 'Fidel@hotmail.com',
                'autorization' => '3',
                'state' => '1',
                'department_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('referets')->insert(
            array(
                'id' => '3',
                'name' => 'Mauricio',
                'phone' => '67586657',
                'ci' => '786587557',
                'email' => 'Mauricio@hotmail.com',
                'autorization' => '2',
                'state' => '1',
                'department_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );
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
