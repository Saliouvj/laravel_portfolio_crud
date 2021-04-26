<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResume3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume3s', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('subtitre1');
            $table->string('subtitre2');
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
            $table->string('text4');
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
        Schema::dropIfExists('resume3s');
    }
}
