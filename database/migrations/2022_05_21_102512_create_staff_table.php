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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->smallInteger('address_id');
            $table->binary('picture');
            $table->string('email');
            $table->tinyInteger('store_id');
            $table->tinyInteger('active');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('staff');
    }
};
