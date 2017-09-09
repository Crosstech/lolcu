<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnChampionsTableStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('champions', function (Blueprint $table) {
            $table->decimal('hp',5,2);
            $table->decimal('mp',5,2);
            $table->integer('move_speed');
            $table->integer('armor');
            $table->integer('spell_block');
            $table->integer('attack_range');
            $table->integer('attack_damage');
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
            $table->dropIfExists('hp');
            $table->dropIfExists('mp');
            $table->dropIfExists('move_speed');
            $table->dropIfExists('armor');
            $table->dropIfExists('spell_block');
            $table->dropIfExists('attack_range');
            $table->dropIfExists('attack_damage');
        });
    }
}
