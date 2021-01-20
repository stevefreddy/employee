<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 191);
            $table->string('lastname', 191);
            $table->date('date_of_birth');
            $table->string('education_qualification', 191);
            $table->string('address', 191);
            $table->string('email', 191);
            $table->string('phone', 191);
            $table->string('photo', 191)->nullable();
            $table->string('resume', 191)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
