<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('estado_id')->unsigned();
            $table->timestamps();
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
        });

        DB::table('municipios')->insert([
            ['name'=>'Araraquara','estado_id'=> '1'],
            ['name'=>'Limeira','estado_id'=> '1'],
            ['name'=>'Rio Claro','estado_id'=> '1'],
            ['name'=>'Areado','estado_id'=> '3'],
            ['name'=>'Belo Horizonte','estado_id'=> '3'],
            ['name'=>'Itapeva','estado_id'=> '3'],
            ['name'=>'Rio de Janeiro','estado_id'=> '2'],
            ['name'=>'Paratí','estado_id'=> '2'],
            ['name'=>'Cabo Frio','estado_id'=> '2'],
            ['name'=>'Vitória','estado_id'=> '4'],
            ['name'=>'Vila Velha','estado_id'=> '4']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
