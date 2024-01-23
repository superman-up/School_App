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
            $table->string("Student_Name");
            $table->string("Father_Name");
            $table->string("DOB",30);
            $table->string("Address");
            $table->string("City",50);
            $table->string("State",50);
            $table->integer("Pin")->unsigned();
            $table->string("phone", 15)->unique();
            $table->string("email",50)->unique();
            $table->string("Class", 20);
            $table->string("Marks",10)->comment("Percentage");
            $table->string("Image",50);
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
