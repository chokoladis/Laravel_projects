<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTodolist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_todolist', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('todolist_id');

            $table->index('user_id', 'user_todolist_user_id');
            $table->index('todolist_id', 'user_todolist_todolist_id');

            $table->foreign('user_id', 'user_todolist_user_id')->on('users')->references('id');
            $table->foreign('todolist_id', 'user_todolist_todolist_id')->on('to_do_lists')->references('id');

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
        Scheme::dropIfExists('user_todolist');
    }
}
