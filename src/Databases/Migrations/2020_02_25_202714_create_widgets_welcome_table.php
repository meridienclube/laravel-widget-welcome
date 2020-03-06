<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsWelcomeTable extends Migration
{
    public function up()
    {
        Schema::create('widgets_welcome_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('message');
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
        Schema::dropIfExists('widgets_welcome_messages');
    }
}
