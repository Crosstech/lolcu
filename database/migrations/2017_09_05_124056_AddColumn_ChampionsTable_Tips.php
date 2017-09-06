<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnChampionsTableTips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('champions', function (Blueprint $table) {
            $table->text('allytip1')->nullable();
            $table->text('allytip2')->nullable();
            $table->text('allytip3')->nullable();
            $table->text('enemytip1')->nullable();
            $table->text('enemytip2')->nullable();
            $table->text('enemytip3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('champions', function (Blueprint $table) {
            $table->dropColumn('allytip1');
            $table->dropColumn('allytip2');
            $table->dropColumn('allytip3');
            $table->dropColumn('enemytip1');
            $table->dropColumn('enemytip2');
            $table->dropColumn('enemytip3');
        });
    }
}
