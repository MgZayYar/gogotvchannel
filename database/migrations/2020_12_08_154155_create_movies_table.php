<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('codeno');
            $table->char('title',50);
            $table->text('photo');
            $table->year('year');
            $table->integer('length');
            $table->char('language',50);
            $table->date('release_date');
            $table->char('release_country',50);
            $table->longText('description');
            $table->longText('link1');
            $table->longText('link2');
            $table->longText('link3');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
