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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('grade');
            $table->string('lob');
            $table->string('shortLOB');
            $table->string('bu');
            $table->string('shortBU');
            $table->string('practiceGroup');
            $table->string('shortPG');
            $table->string('office');
            $table->string('rackRate');
            $table->string('budRecovey');
            $table->string('costRate');
            $table->string('budgetUtil');
            $table->string('fte');
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
        Schema::dropIfExists('staff');
    }
};
