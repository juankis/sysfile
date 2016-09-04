<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone', 10);
            $table->string('state', 1);
            $table->string('email', 60);
            $table->timestamps();
        });

        DB::table('customers')->insert(
            array(
                'id' => '1',
                'name' => 'River srl',
                'phone' => '45678990',
                'state' => '1',
                'email' => 'javier@hotmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('customers')->insert(
            array(
                'id' => '2',
                'name' => 'Ferchos',
                'phone' => '768768987',
                'state' => '1',
                'email' => 'fercho@hotmail.com',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('customers')->insert(
            array(
                'id' => '3',
                'name' => 'Chachas srl',
                'phone' => '7678876869',
                'state' => '1',
                'email' => 'chachas@hotmail.com',
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
        Schema::drop('customers');
    }
}
