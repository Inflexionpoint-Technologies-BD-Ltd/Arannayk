<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->text("address")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("office_time")->nullable();

            $table->string("fb_link")->nullable();
            $table->string("yt_link")->nullable();
            $table->string("ln_link")->nullable();
            $table->string("flicker_link")->nullable();
            $table->string("twitter_link")->nullable();

            $table->string("rjsc")->nullable();

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
        Schema::dropIfExists('contacts');
    }
}
