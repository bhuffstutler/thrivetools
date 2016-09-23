<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartCommunicationHelperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_communication_helper', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->string('facility')->nullable();
            $table->boolean('is_dept')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chart_communication_helper');
    }
}
