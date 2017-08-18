<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsMasteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('masteries',function(Blueprint $table){
            $table->string('name',64);
            $table->integer('mastery_id');
            $table->text('description1');
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
            $table->text('description4')->nullable();
            $table->text('description5')->nullable();
            $table->string('image')->nullable();
            $table->integer('ranks')->nullable();
            $table->string('prereq')->nullable();
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
        $table->dropColumn('mastery_id');
        $table->dropColumn('description1');
        $table->dropColumn('description2');
        $table->dropColumn('description3');
        $table->dropColumn('description4');
        $table->dropColumn('description5');
        $table->dropColumn('plaintext');
        $table->dropColumn('image');
        $table->dropColumn('ranks');
        $table->dropColumn('prereq');
    }
}
