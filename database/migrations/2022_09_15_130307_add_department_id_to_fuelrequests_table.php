<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartmentIdToFuelrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fuelrequests', function (Blueprint $table) {
            //

            $table->unsignedBigInteger('department_id')->index();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('CASCADE')->onUpdate('CASCADE');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fuelrequests', function (Blueprint $table) {
            //
        });
    }
}
