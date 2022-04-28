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
        Schema::create('user_leave_balances', function (Blueprint $table) {
            $table->id();
            $table->string('leave')->nullable();
            $table->string('current')->nullable();
            $table->string('available')->nullable();
            $table->string('scheduled')->nullable();
            $table->date('started_at')->nullable();
            $table->date('finished_at')->nullable();

            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_leave_balances');
    }
};
