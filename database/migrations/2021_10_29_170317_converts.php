<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Converts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('converts', function (Blueprint $table) {

        $table->id();
        $table->string('name')->nullable();
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->datetime('date')->nullable();
        $table->string('old_group_id')->nullable();
        $table->tinyInteger('sent_1')->nullable();
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

        Schema::dropIfExists('converts');

    }
}
