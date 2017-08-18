<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items',function(Blueprint $table){
            $table->string('name',64);
            $table->integer('item_id');
            $table->text('description');
            $table->text('plaintext');
            $table->string('image');
            $table->integer('gold_buy');
            $table->integer('gold_sell');
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
        $table->dropColumn('item_id');
        $table->dropColumn('description');
        $table->dropColumn('plaintext');
        $table->dropColumn('image');
        $table->dropColumn('gold_buy');
        $table->dropColumn('gold_sell');
    }
}
