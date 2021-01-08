<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKidsClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids_clubs', function (Blueprint $table) {
            $table->id();
            $table->enum('locale', ['en', 'ar']);
            $table->string('banner_path')->nullable();
            $table->text('overview')->nullable();
            $table->text('services_facilities')->nullable();
            $table->text('memberships')->nullable();
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
        Schema::dropIfExists('kids_clubs');
    }
}
