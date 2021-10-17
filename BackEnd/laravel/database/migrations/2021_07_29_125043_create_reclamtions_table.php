<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamtionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamtions', function (Blueprint $table) {
            $table->id()->unique();
            $table->String('name');
            $table->String('pname');
            $table->String('numcin')->unique();
            $table->String('nump');
            $table->String('loacalitation');
            $table->String('marque');
            $table->String('model');
            $table->String('desc');
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
        Schema::dropIfExists('reclamtions');
    }
}
