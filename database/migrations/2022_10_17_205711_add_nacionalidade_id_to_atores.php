<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNacionalidadeIdToAtores extends Migration
{
   
    public function up()
    {
        Schema::table('atores', function (Blueprint $table) {
            $table->bigInteger('nacionalidade_id')->unsigned()->nullable();
            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidades');
        });
    }

    
    public function down()
    {
        Schema::table('atores', function (Blueprint $table) {
            
        });
    }
}
