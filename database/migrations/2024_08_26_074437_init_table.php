<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('middle_name', 1)->nullable();
            $table->string('branch', 20);
            $table->string('role', 10);
            $table->string('contact', 255);
            $table->string('email', 255);
            $table->string('status', 10);
        });

        Schema::create('job_position', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('job', 255);
        });
        Schema::create('country', function (Blueprint $table) {
            $table->id('country_id');
            $table->string('country', 100);

        });
        Schema::create('applicant', function (Blueprint $table) {
            $table->id('applicant_id');
            $table->string('firstName', 60);
            $table->string('lastName', 60);
            $table->string('middleName', 255);
            $table->string('gender', 10);
            $table->string('contactnumber', 255);
            $table->string('email', 255);
            $table->date('dob', 20);
            $table->string('citizenship', 255);
            $table->string('province', 255);
            $table->string('city', 255);
            $table->string('brgy', 255);
            $table->date('applicationdate', 255);
            $table->string('applicationtype', 20);
            $table->string('branch', 255);
            $table->string('controlid', 255);
        });
        Schema::create('record', function (Blueprint $table) {
            $table->id('record_id');
            $table->date('datecreated', 255);
            $table->blob('valid_id');
            $table->blob('MedCert');
            $table->blob('MarriageCert')->nullable;
            $table->blob('birthCert');
            $table->blob('nbiclearance');
            $table->blob('passport');
            $table->blob('Pag-ibig')->nullable;
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
