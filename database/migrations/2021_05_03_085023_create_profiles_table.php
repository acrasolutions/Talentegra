<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('fullname', 256)->nullable();
            $table->string('company_name', 256)->nullable();
            $table->string('role_job', 256)->nullable();
            $table->string('display_name', 256)->nullable();
            $table->string('speciality_strength', 256)->nullable();
            $table->string('location', 256)->nullable();
            $table->string('postalcode', 256)->nullable();
            $table->string('gender', 256)->nullable();
            $table->string('dob', 256)->nullable();
            $table->json('subject_tech')->nullable();
            $table->json('user_education')->nullable();
            $table->json('professional_exp')->nullable();
            $table->json('teaching_details')->nullable();
            $table->json('profile_description')->nullable();
            
            
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
        Schema::dropIfExists('profiles');
    }
}
