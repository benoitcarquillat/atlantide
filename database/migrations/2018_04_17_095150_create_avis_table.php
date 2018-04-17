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
            $table->unsignedInteger('idActivity'); 
            $table->foreign('idActivity')->references('id')->on('avis'); 
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
