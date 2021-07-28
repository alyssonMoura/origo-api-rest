<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCargaToClientePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente_planos', function (Blueprint $table) {
            //
        });
        DB::table('cliente_planos')->insert([
            ['cliente_id'=> '1','plano_id'=> '1'],
            ['cliente_id'=> '2','plano_id'=> '1'],
            ['cliente_id'=> '3','plano_id'=> '1'],
            ['cliente_id'=> '4','plano_id'=> '1'],
            ['cliente_id'=> '5','plano_id'=> '1'],
            ['cliente_id'=> '6','plano_id'=> '1'],
            ['cliente_id'=> '7','plano_id'=> '1'],
            ['cliente_id'=> '8','plano_id'=> '1'],
            ['cliente_id'=> '9','plano_id'=> '1'],

            ['cliente_id'=> '10','plano_id'=> '1'],
            ['cliente_id'=> '11','plano_id'=> '1'],
            ['cliente_id'=> '12','plano_id'=> '1'],
            ['cliente_id'=> '13','plano_id'=> '1'],
            ['cliente_id'=> '10','plano_id'=> '3'],
            ['cliente_id'=> '11','plano_id'=> '3'],
            ['cliente_id'=> '12','plano_id'=> '3'],
            ['cliente_id'=> '13','plano_id'=> '3'],
            ['cliente_id'=> '6','plano_id'=> '2'],
            ['cliente_id'=> '7','plano_id'=> '2'],
            ['cliente_id'=> '8','plano_id'=> '2'],
            ['cliente_id'=> '9','plano_id'=> '2'],
            ['cliente_id'=> '10','plano_id'=> '2'],
            ['cliente_id'=> '11','plano_id'=> '2'],
            ['cliente_id'=> '12','plano_id'=> '2'],
            ['cliente_id'=> '13','plano_id'=> '2'],
            ['cliente_id'=> '14','plano_id'=> '1'],
            ['cliente_id'=> '15','plano_id'=> '1'],
            ['cliente_id'=> '16','plano_id'=> '1'],
            ['cliente_id'=> '17','plano_id'=> '1']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente_planos', function (Blueprint $table) {
            //
        });
    }
}
