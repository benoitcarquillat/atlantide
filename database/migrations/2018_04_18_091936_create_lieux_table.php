<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    { 
        Schema::create('lieux', function (Blueprint $table) { 
            $table->increments('id');
            $table->string('type');
            $table->string('nom', 255); 
            $table->string('description'); 
            $table->string('img', 255);
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
        Schema::dropIfExists('lieux'); 
    } 
}
