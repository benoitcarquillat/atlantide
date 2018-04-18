<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    { 
        Schema::create('avis', function (Blueprint $table) { 
            $table->increments('id'); 
            $table->string('avis'); 
            $table->integer('note'); 
            $table->unsignedInteger('idLieux')->nullable(); 
            $table->foreign('idLieux')->references('id')->on('lieux'); 
            $table->unsignedInteger('idEvenement')->nullable(); 
            $table->foreign('idEvenement')->references('id')->on('evenement');
            $table->unsignedInteger('idUser'); 
            $table->foreign('idUser')->references('id')->on('users'); 
            $table->timestamps(); 
        }); 
    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('avis'); 
    } 
}
