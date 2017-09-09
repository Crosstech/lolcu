<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnChampionsTableRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('champions', function (Blueprint $table) {
            $table->string('tag1')->nullable();
            $table->string('tag2')->nullable();
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
            $table->dropIfExists('tag1');
            $table->dropIfExists('tag2');
        });
    }
}
