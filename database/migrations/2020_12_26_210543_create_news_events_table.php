<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_events', function (Blueprint $table) {
            $table->id();

            $table->string('title_en');
            $table->string('short_description_en');
            $table->text('long_description_en');

            $table->string('title_ar');
            $table->string('short_description_ar');
            $table->text('long_description_ar');

            $table->string('banner_path')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('news_events');
    }
}
