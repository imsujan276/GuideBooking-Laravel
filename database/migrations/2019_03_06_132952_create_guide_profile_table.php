<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rate_per_day');
            $table->string('certificate_image')->nullable();
            $table->integer('availability_status')->default(1);
            $table->text('skill_experience');
            $table->string('languages');
            $table->string('tour_date');
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
        Schema::dropIfExists('guide_profile');
    }
}
