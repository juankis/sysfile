<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('phone',10);
            $table->string('location',50);
            $table->string('postal_code',10);
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')
                  ->references('id')->on('customers')
                  ->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('addresses')->insert(
            array(
                'id' => '1',
                'address' => 'Calama 5464',
                'customer_id' => '1',
                'phone' => '7868758765',
                'location' => 'Centro',
                'postal_code' => '11123',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('addresses')->insert(
            array(
                'id' => '2',
                'address' => 'America 444',
                'customer_id' => '1',
                'phone' => '7868758765',
                'location' => 'temporal',
                'postal_code' => '98790',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            )
        );

        DB::table('addresses')->insert(
            array(
                'id' => '3',
                'address' => 'Estban Arce 5464',
                'customer_id' => '1',
                'phone' => '69879798',
                'location' => 'centro',
                'postal_code' => '10999',
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
        Schema::drop('addresses');
    }
}
