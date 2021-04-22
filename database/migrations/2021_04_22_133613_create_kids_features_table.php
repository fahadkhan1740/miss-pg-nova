<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKidsFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids_features', function (Blueprint $table) {
            $table->id();
            $table->enum('locale', ['en', 'ar']);
            $table->string('title');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('icon')->nullable();
            $table->string('image_path')->nullable();
            $table->string('banner_path')->nullable();
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
        Schema::dropIfExists('kids_features');
    }
}
