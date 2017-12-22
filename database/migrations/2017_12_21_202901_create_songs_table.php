<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_hungarian_ci';
            $table->increments('id');
            $table->smallInteger('number')->unique();
            $table->string('title',100)->unique();
            $table->string('title_original',100)->nullable();
            $table->string('slug',100)->unique();
            $table->text('text');
            $table->string('youtube',100)->nullable();
            $table->string('sheet_music',50)->nullable();
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
        Schema::dropIfExists('songs');
    }
}
