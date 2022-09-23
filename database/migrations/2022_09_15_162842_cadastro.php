<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias', function (Blueprint $table){
            $table->id();
            $table->string('capitulo');
            $table->string('titulo');
            $table->string('sinopse');
            $table->string('data');
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
        Schema::dropIfExists('historias');
    }


};
