<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsSummonerSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('summonerspells',function(Blueprint $table){
            $table->string('name',64);
            $table->integer('spell_id');
            $table->string('key');
            $table->text('summonerlevel')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('name');
        $table->dropColumn('spell_id');
        $table->dropColumn('description');
        $table->dropColumn('key');
        $table->dropColumn('image');
        $table->dropColumn('summonerlevel'); 
    }
}
