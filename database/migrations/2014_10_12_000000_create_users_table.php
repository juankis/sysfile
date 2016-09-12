<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('type');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'id' => '1',
                'username' => 'juan1',
                'type' => '1',
                'email' => 'juan1@hotmail.com',
                'password' => bcrypt('7868758765'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('users')->insert(
            array(
                'id' => '2',
                'username' => 'carlos',
                'type' => '2',
                'email' => 'carlos@hotmail.com',
                'password' => bcrypt('89798798'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('users')->insert(
            array(
                'id' => '3',
                'username' => 'juan_carlos',
                'type' => '2',
                'email' => 'juan_carlos@hotmail.com',
                'password' => bcrypt('7324765'),
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
        Schema::drop('users');
    }
}
