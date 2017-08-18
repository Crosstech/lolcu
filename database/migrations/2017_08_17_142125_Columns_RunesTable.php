<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsRunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('runes',function(Blueprint $table){
            $table->string('name',64);
            $table->string('rune_id');
            $table->text('description')->nullable();
            $table->string('plaintext')->nullable();
            $table->string('image')->nullable();
            $table->integer('tier')->nullable();
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
        $table->dropColumn('rune_id');
        $table->dropColumn('description');
        $table->dropColumn('plaintext');
        $table->dropColumn('image');
        $table->dropColumn('tier');   
    }
}
