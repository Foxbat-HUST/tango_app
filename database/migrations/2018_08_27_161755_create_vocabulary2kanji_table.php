<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocabulary2kanjiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocabulary2kanji', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("vocabularyId")->unsigned();
            $table->integer("kanjiId")->unsigned();
            $table->integer("order")->unsigned();
            $table->foreign("vocabularyId")->references("id")->on("vocabulary");
            $table->foreign("kanjiId")->references("id")->on("kanji");
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
        Schema::dropIfExists('vocabulary2kanji');
    }
}
