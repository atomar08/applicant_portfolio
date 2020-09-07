<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// NOTE:
// This tables shows Many-To-Mnay relationship between Applicant & Job 
// Currently this table/relationship is not used & required
// This relationship is defined for future
// For this assignment this relationship can be ignored

class CreateApplicantJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_jobs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->foreignId('applicant_id')->constrained();
            
            $table->foreignId('jobs_id')->constrained();
          
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
        Schema::dropIfExists('applicant_jobs');
    }
}
