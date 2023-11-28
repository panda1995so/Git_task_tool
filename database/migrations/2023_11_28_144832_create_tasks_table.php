<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('pjtable_Num')->comment('PJ名');
            $table->text('task_Name')->comment('タスク名');
            $table->text('About')->comment('タスク内容');
            $table->integer('main_Mg')->comment('担当者');
            $table->date('limitDate')->comment('期日');
            $table->integer('priority')->comment('優先度');
            $table->integer('progress')->comment('進捗');
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
        Schema::dropIfExists('tasks');
    }
}
