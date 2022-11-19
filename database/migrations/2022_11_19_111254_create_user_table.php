<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('email');
            $table->string('password');
            $table->string('name')->nullable();
            $table->string('family_name')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->tinyInteger('deleted')->default('1')->comment('0 = deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
