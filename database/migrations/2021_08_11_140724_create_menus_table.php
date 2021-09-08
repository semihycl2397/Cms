<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            //$table->integer('ust_menu_id');
            //$table->integer('type_id');
            //$table->string('order');
            //$table->integer('user_id');
            //$table->tinyInteger('is_active');
            //$table->tinyInteger('is_header');
            //$table->tinyInteger('is_footer');
            //$table->integer('content_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('phone');
            $table->string('dob');
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
        Schema::dropIfExists('Menus');
    }
}
