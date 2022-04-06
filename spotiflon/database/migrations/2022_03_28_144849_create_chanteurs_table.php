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
        Schema::create('chanteurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("maison disque");
            $table->string("style");
            $table->string("biographie");
            $table->string("Annes de naissance");
            $table->string("Album vendu");
            
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
        Schema::dropIfExists('chanteurs');
    }
};
