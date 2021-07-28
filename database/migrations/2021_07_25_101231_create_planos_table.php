<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price',5,2);
            $table->timestamps();
        });

        DB::table('planos')->insert([
            ['name'=>'Basic','price'=> '100.00'],
            ['name'=>'Free','price'=> '0.00'],
            ['name'=>'Plus','price'=> '187.00']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planos');
    }
}
