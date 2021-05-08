<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('sub_title_en');
            $table->string('title_ar');
            $table->string('sub_title_ar');
            $table->string('banner_path')->nullable();
            $table->string('image_path')->nullable();
            $table->text('overview_en')->nullable();
            $table->text('history_vision_en')->nullable();
            $table->text('mission_en')->nullable();
            $table->text('core_values_en')->nullable();
            $table->text('overview_ar')->nullable();
            $table->text('history_vision_ar')->nullable();
            $table->text('mission_ar')->nullable();
            $table->text('core_values_ar')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
