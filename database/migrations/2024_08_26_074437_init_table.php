<?php

use App\Models\ApplicationInformation;
use App\Models\Branch;
use App\Models\Country;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\JobPosition;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->id('branch_id');
            $table->string('branch_name', 255);
            $table->string('province', 255);
            $table->string('city', 255);
            $table->string('region', 255);
        });

        Schema::create('employee', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('middle_name', 60)->nullable();
            $table->string('role', 64);
            $table->string('contact', 255);
            $table->string('email', 255);
            $table->string('username', 255);
            $table->string('password', 255);
            $table->string('status', 255);
            $table->foreignIdFor(Branch::class, 'branch_id');
        });

        Schema::create('country', function (Blueprint $table) {
            $table->id('country_id');
            $table->string('country', 100);
        });

        Schema::create('job_position', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('job', 255);
            $table->foreignIdFor(Country::class, 'country_id');
        });

        Schema::create('applicant_information', function (Blueprint $table) {
            $table->id('applicant_id');
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('middle_name', 255)->nullable();
            $table->string('gender', 10);
            $table->string('contact_number', 255);
            $table->string('email', 255);
            $table->date('dob');
            $table->string('citizenship', 255);
            $table->string('region', 255);
            $table->string('province', 255);
            $table->string('city', 255);
            $table->string('brgy', 255);
            $table->longText('image')->charset('binary');
        });

        Schema::create('application', function (Blueprint $table) {
            $table->id('application_id');
            $table->string('type_of_application', 255);
            $table->date('date_of_application');
            $table->string('control_number', 255);
            $table->string('status', 255);
            $table->foreignIdFor(ApplicationInformation::class, 'applicant_id');
            $table->foreignIdFor(Branch::class, 'branch_id');
            $table->foreignIdFor(JobPosition::class, 'job_id');
        });

        Schema::create('educational_attainment', function (Blueprint $table) {
            $table->id('educat_id');
            $table->string('level', 255);
            $table->string('institution', 255);
            $table->string('inclusive_date', 255);
            $table->string('degree', 255);
        });

        Schema::create('work_experience', function (Blueprint $table) {
            $table->id('work_ex_id');
            $table->string('job_title', 255);
            $table->string('experience', 255);
        });

        Schema::create('app_record', function (Blueprint $table) {
            $table->id('record_id');
            $table->date('date_created');
            $table->longText('valid_id')->charset('binary');
            $table->longText('med_cert')->charset('binary');
            $table->longText('marriage_cert')->charset('binary')->nullable();
            $table->longText('birth_cert')->charset('binary');
            $table->longText('nbi_clearance')->charset('binary');
            $table->longText('passport')->charset('binary');
            $table->longText('pag_ibig')->charset('binary')->nullable();
        });
    }

    public function down(): void
    {
        //
    }
};
