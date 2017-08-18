<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsChampionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('champions',function(Blueprint $table){
            $table->string('name',64);
            $table->integer('champion_id');
            $table->string('title');
            $table->text('description');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('magic');
            $table->integer('difficulty');
            $table->string('image');
            $table->string('partype');
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
        $table->dropColumn('champion_id');
        $table->dropColumn('title');
        $table->dropColumn('description');
        $table->dropColumn('attack');
        $table->dropColumn('magic');
        $table->dropColumn('difficulty');
        $table->dropColumn('image');
        $table->dropColumn('parttype');
    }
}
