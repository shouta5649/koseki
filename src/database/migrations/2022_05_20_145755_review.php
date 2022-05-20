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
        Schema::create('review', function (Blueprint $table) {
            $table->increments('review_id'); //レヴューID
            $table->string('review_ice'); //レヴューの評価
            $table->date('review_date'); //レヴューを登録した日付
            $table->string('review_layer'); //どういった層が楽しめる作品かのジャンルわけ
            $table->string('review_genre'); //作品のジャンル
            $table->string('review_impre') ->nullable()->default(null);//感想
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
        Schema::dropIfExists('review');
    }
};
