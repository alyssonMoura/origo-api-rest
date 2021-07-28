<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('sigla')->unique();
            $table->timestamps();
        });
        DB::table('estados')->insert([
            ['name'=>'São Paulo','sigla'=> 'SP'],
            ['name'=>'Rio de Janeiro','sigla'=> 'RJ'],
            ['name'=>'Minas Geraes','sigla'=> 'MG'],
            ['name'=>'Espirito Santo','sigla'=> 'ES']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
