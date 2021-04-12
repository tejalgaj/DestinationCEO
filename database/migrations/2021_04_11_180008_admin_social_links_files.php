<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminSocialLinksFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
 Schema::create('admin_social_links_files', function (Blueprint $table) {
            $table->id();
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('google');
            $table->string('linkedIn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     
Schema::dropIfExists('admin_social_links_files');   
    }
}
