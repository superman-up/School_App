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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("Student Name",20);
            $table->string("Father's Name",20);
            $table->string("DOB",30);
            $table->string("Address",100);
            $table->string("City",20);
            $table->string("State",25);
            $table->integer("Pin")->unsigned();
            $table->string("Phone No", 15)->unique();
            $table->string("Email",20)->unique();
            $table->string("Class", 20);
            $table->string("Marks%",30)->comment("Percentage");
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
        Schema::dropIfExists('students');
    }
};
