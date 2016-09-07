<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('second_name');
            $table->string('phone');
            $table->string('address');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->timestamps(); 
        });

        DB::table('operators')->insert(
            array(
                'id' => '1',
                'name' => 'Juan Carlos',
                'second_name' => ' Ojeda Gomez',
                'phone' => '7868758765',
                'address' => 'Calama 5464',
                'user_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('operators')->insert(
            array(
                'id' => '2',
                'name' => 'Javier',
                'second_name' => 'Vasquez',
                'phone' => '78435345',
                'address' => 'San Martin 623',
                'user_id' => '2',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('operators')->insert(
            array(
                'id' => '3',
                'name' => 'Fernando',
                'second_name' => 'Marin',
                'phone' => '75645654',
                'address' => 'Esteban Arce 456',
                'user_id' => '3',
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
        Schema::drop('operators');
    }
}
