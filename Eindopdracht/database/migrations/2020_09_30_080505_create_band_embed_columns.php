<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandEmbedColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bands', function(Blueprint $table) {
            $table->string('embed_url_1');
            $table->string('embed_url_2');
            $table->string('embed_url_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bands', function(Blueprint $table) {
            $table->dropColumn('embed_url_1');
            $table->dropColumn('embed_url_2');
            $table->dropColumn('embed_url_3');
        });
    }
}
