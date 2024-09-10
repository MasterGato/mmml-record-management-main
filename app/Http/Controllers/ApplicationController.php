<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Country;
use App\Models\JobPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Applicant;
use App\Models\Application;
use App\Models\EducationAttainment;

class ApplicationController extends Controller
{


    public function stepOne(Request $request)
    {
        $data = $request->all();

        $applicantType = $data['applicantType'];
        $branch = $data['branch'];
        $position = $data['position'];
        $country = $data['country'];


        $branch_name = Branch::where('branch_id', $branch)->first();

        $country_name = Country::where('country_id', $country)->first();

        $job_positions = JobPosition::where('job_id', $position)->first();


        session(['application' => [
            'applicantType' => $applicantType,
            'branch' => $branch,
            'branch_name' => $branch_name->branch_name,
            'position' => $position,
            'position_name' => $job_positions->job,
            'country' => $country,
            'country_name' => $country_name->country,
        ]]);

        return redirect()->route('personal-information');
    }

    public function personalInformation()
    {

        return view('onlineApplication.personal-information');
    }

    public function saveApplication(Request $request)
    {


        $data = $request->all();



        $firstName = $data['first_name'];
        $middleName = $data['middle_name'];
        $lastName = $data['last_name'];
        $email = $data['email'];
        $contactNumber = $data['contact_number'];
        $city = $data['city'];
        $province = $data['province'];
        $zipCode = $data['zip_code'];
        $gender = $data['gender'];
        $birthDate = $data['date_of_birth'];
        $citizenship = $data['citizenship'];
        $region = $data['region'];

        $elementaryYear = $data['elementary_year'];
        $elementarySchool= $data['elementary_school'];
        $highschoolYear = $data['highschol_year'];
        $highschoolSchool = $data['highschool_school'];
        $collegeYear = $data['college_year'];
        $collegeSchool = $data['college_school'];


        $applicant = new Applicant();
        $applicant->first_name = $firstName;
        $applicant->middle_name = $middleName;
        $applicant->last_name = $lastName;
        $applicant->email = $email;
        $applicant->contact_number = $contactNumber;
        $applicant->city = $city;
        $applicant->brgy = "NA";
        $applicant->province = $province;
        $applicant->zip_code = $zipCode;
        $applicant->gender = $gender;
        $applicant->dob = $birthDate;
        $applicant->citizenship = $citizenship;
        $applicant->region = $region;
        $applicant->save();

        $application = new Application();
        $application->applicant_id = $applicant->applicant_id;
        $application->branch_id = session('application')['branch'];
        $application->job_id = session('application')['position'];
        $application->control_number = $this->generateControlNumber();
        $application->status = "Pending";
        $application->type_of_application = session('application')['applicantType'];
        $application->date_of_application = date('Y-m-d');
        $application->save();

        $education = new EducationAttainment();
        $education->applicant_id = $applicant->applicant_id;
        $education->level = "Elementary";
        $education->institution = $elementarySchool;
        $education->inclusive_date = $elementaryYear;
        $education->save();

        $education = new EducationAttainment();
        $education->applicant_id = $applicant->applicant_id;
        $education->level = "High School";
        $education->institution = $highschoolSchool;
        $education->inclusive_date = $highschoolYear;
        $education->save();

        $education = new EducationAttainment();
        $education->applicant_id = $applicant->applicant_id;
        $education->level = "College";
        $education->institution = $collegeSchool;
        $education->inclusive_date = $collegeYear;
        $education->save();

        return redirect()->route('application-success');

    }

    public function applicationSuccess()
    {
        return view('onlineApplication.application-success');
    }
    public function generateControlNumber()
    {
        $controlNumber = rand(100000, 999999);
        $controlNumber = "APL" . $controlNumber;
        return $controlNumber;
    }
}
