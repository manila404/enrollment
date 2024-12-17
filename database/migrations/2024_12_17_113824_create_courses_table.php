<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('course_id')->primary(); // Set as primary key
            $table->string('description');
            $table->integer('credit_units');
            $table->boolean('IT_dpt')->default(false); /* IT Department - check or uncheck */
            $table->boolean('CS_dpt')->default(false); /* CS Department - check or uncheck */
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
