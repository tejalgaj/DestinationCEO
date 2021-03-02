<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('schoolname');
            $table->string('degree');
           
            $table->date('enddate');
            $table->string('fieldofstudy')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('GPA')->nullable();
            $table->string('graduated');
            $table->text('relevant_courses')->nullable();
            $table->text('awards')->nullable();
            $table->text('extra_activity')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
