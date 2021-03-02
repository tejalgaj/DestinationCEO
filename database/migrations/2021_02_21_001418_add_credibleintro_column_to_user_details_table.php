<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCredibleintroColumnToUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
            //
            $table->text('credibleintro');
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            //
            $table->dropColumn('credibleintro');
            $table->dropColumn('linkedin');
            $table->dropColumn('github');
        });
    }
}
