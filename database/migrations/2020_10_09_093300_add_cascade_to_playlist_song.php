<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCascadeToPlaylistSong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('playlist_song', function (Blueprint $table) {
            $table->dropForeign(['song_id']);
            $table->foreign('song_id')
            ->references('id')->on('songs')
            ->onDelete('cascade')
            ->change();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('playlist_song', function (Blueprint $table) {
            //
        });
    }
}
