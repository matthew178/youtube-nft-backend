<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->increments('video_id');
            $table->string('video_title');
            $table->text('video_desc');
            $table->string('video_type');
            $table->tinyInteger('is_nft');
            $table->decimal('nft_pricing')->default(0.00);
            $table->integer('views_count');
            $table->string('video_duration');
            $table->string('video_path_url');
            $table->string('thumbnail_path_url');
            $table->integer('user_id');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->tinyInteger('deleted')->default('1')->comment('0 = deleted');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
}
