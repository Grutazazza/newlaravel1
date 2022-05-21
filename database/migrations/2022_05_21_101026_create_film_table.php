<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id('film_id');
            $table->string('title');
            $table->text('description');
            $table->year('release_year');
            $table->tinyInteger('language_id');
            $table->tinyInteger('original_language_id');
            $table->tinyInteger('rental_duration');
            $table->decimal('rental_rate');
            $table->smallInteger('length');
            $table->decimal('replacement_cost');
            $table->enum('rating', ['1', '2','3', '4','5']);
            $table->set('special_features', ['special_feature', 'special_feature']);
            $table->timestamp('last_update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
};
