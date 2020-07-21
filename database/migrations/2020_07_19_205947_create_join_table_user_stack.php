<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinTableUserStack extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_stack', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('stack_id');
            $table->string('level');
            $table->string('years');            
            $table->primary(['user_id','stack_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_stack');
    }
}
