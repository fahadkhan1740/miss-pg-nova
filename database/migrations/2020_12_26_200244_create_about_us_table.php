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
            $table->enum('locale', ['en', 'ar']);
            $table->string('title');
            $table->string('sub_title');
            $table->string('banner_path')->nullable();
            $table->string('image_path')->nullable();
            $table->text('overview')->nullable();
            $table->text('history_vision')->nullable();
            $table->text('mission')->nullable();
            $table->text('core_values')->nullable();
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
