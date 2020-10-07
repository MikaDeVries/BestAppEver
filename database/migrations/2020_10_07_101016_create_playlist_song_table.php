<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('playlist_song')):
            Schema::create('playlist_song', function (Blueprint $table) {
                $table->id();

                $table->bigInteger('playlist_id')->unsigned();
                $table->bigInteger('song_id')->unsigned();
                $table->foreign('playlist_id')
                    ->references('id')
                    ->on('playlists');
                 $table->foreign('song_id')
                    ->references('id')
                    ->on('songs');


                $table->timestamps();
            });
        endif;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist_song');
    }
}
