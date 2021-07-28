<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCargaToClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
        DB::table('clientes')->insert([
            ['name'=> 'Claudianus Boast','email'=> 'cboast0@fastcompany.com', 'telefone'=> '(19) 957645371','municipio_id'=> '1','data_nascimento'=> '1993-06-07'],
            ['name'=> 'Loni Jennions','email'=> 'ljennions1@va.gov', 'telefone'=> '(19) 905613161','municipio_id'=> '2','data_nascimento'=> '1985-05-09'],
            ['name'=> 'Margi Gilhouley','email'=> 'mgilhouley2@telegraph.co.uk', 'telefone'=> '(19) 966290104','municipio_id'=> '1','data_nascimento'=> '1984-09-13'],
            ['name'=> 'Lexy Sprulls','email'=> 'lsprulls3@moonfruit.com', 'telefone'=> '(19) 976121601','municipio_id'=> '3','data_nascimento'=> ' 1999-10-19'],
            ['name'=> 'Marie Shatliff','email'=> 'mshatliff4@cbslocal.com', 'telefone'=> '(19) 991376354','municipio_id'=> '3','data_nascimento'=> ' 1990-07-20'],
            ['name'=> 'Graig Mouncey','email'=> 'gmouncey5@so-net.ne.jp', 'telefone'=> '(19) 941806149','municipio_id'=> '1','data_nascimento'=> '1990-03-27'],
            ['name'=> 'Laurice Liger','email'=> 'lliger0@php.net', 'telefone'=> '(35) 971740954','municipio_id'=> '4','data_nascimento'=> '1992-10-25'],
            ['name'=> 'Kendrick Sooper','email'=> 'ksooper1@slate.com', 'telefone'=> '(31) 944324086','municipio_id'=> '5','data_nascimento'=> ' 1981-06-02'],
            ['name'=> 'Gordon Levington','email'=> 'glevington2@hpost.com', 'telefone'=> '(31) 922405868','municipio_id'=> '5','data_nascimento'=> ' 1993-11-25'],
            ['name'=> 'Noam Scolland','email'=> 'nscolland3@mozilla.org', 'telefone'=> '(35) 996817669','municipio_id'=> '4','data_nascimento'=> '1999-12-31'],
            ['name'=> 'Lindon Skehens','email'=> 'lskehens4@npr.org', 'telefone'=> '(35) 967671104','municipio_id'=> '4','data_nascimento'=> '1985-01-10'],
            ['name'=> 'Kimbra Rase','email'=> 'krase5@topsy.com', 'telefone'=> '(35) 999428030','municipio_id'=> '4','data_nascimento'=> '1999-05-05'],
            ['name'=> 'Lorenzo Fisk','email'=> 'lfisk6@businessweek.com', 'telefone'=> '(31) 912695467','municipio_id'=> '5','data_nascimento'=> ' 1985-12-22'],
            ['name'=> 'Bourke Flavelle','email'=> 'bflavelle7@fc2.com', 'telefone'=> '(35) 959386145','municipio_id'=> '6','data_nascimento'=> '1984-04-10'],
            ['name'=> 'Curran McSharry','email'=> 'cmcsharry8@webeden.co.uk', 'telefone'=> '(35) 902916131','municipio_id'=> '6','data_nascimento'=> '1983-01-15'],
            ['name'=> 'Aveline Dowtry','email'=> 'adowtry9@miibeian.gov.cn', 'telefone'=> '(31) 945227500','municipio_id'=> '5','data_nascimento'=> ' 1994-12-23'],
            ['name'=> 'John Sebastian','email'=> 'jsebastiana@cbslocal.com', 'telefone'=> '(31) 907366740','municipio_id'=> '5','data_nascimento'=> ' 1998-04-06'],
            ['name'=> 'Reynolds Greenan','email'=> 'rgreenanb@bloomberg.com', 'telefone'=> '(35) 923551410','municipio_id'=> '6','data_nascimento'=> '1985-07-19']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
    }
}
