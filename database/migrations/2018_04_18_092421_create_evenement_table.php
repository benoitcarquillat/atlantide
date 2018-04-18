<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    { 
        Schema::create('evenement', function (Blueprint $table) { 
            $table->increments('id'); 
            $table->string('type');
            $table->string('nom', 255); 
            $table->string('description'); 
            $table->string('img', 255);
            $table->dateTime('dateDebut')->nullable(); 
            $table->dateTime('dateFin')->nullable(); 
            $table->string('adresse');
            $table->string('ville', 255);
            $table->integer('codeP');
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
        Schema::dropIfExists('evenement'); 
    } 
}
