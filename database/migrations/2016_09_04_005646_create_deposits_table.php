<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('observation');
            $table->string('state', 1);
            $table->timestamps();
        });

        DB::table('deposits')->insert(
            array(
                'id' => '1',
                'name' => 'Lockers 1',
                'address' => 'Calle calama 467',
                'observation' => 'niguno',
                'state' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('deposits')->insert(
            array(
                'id' => '2',
                'name' => 'locker 2',
                'address' => 'Calle Antofagasta 4167',
                'observation' => 'niguno',
                'state' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('deposits')->insert(
            array(
                'id' => '3',
                'name' => 'Lockers 3',
                'address' => 'Calle Rivdavia 1467',
                'observation' => 'niguno',
                'state' => '1',
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
        Schema::drop('deposits');
    }
}
