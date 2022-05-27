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
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('task_id');
            $table->string('task_name');
            $table->string('task_det')->nullable()->default(null);
            $table->date('task_date');
            $table->time('task_datetime')->nullable()->default(null);
            $table->string('task_pri');
            $table->date('task_comp')->nullable()->default(null);
            $table->date('task_reach')->nullable()->default(null);
            $table->integer('task_sta');
            $table->timestamps();
        });
        Schema::table('tasks', function (Blueprint $table) {
            //
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { {
            Schema::dropIfExists('tasks');
        }

        Schema::table('tasks', function (Blueprint $table) {

            // 5.8 以降は専用のスキーマビルダが用意されている
            $table->dropSoftDeletes();
        });
    }
};
