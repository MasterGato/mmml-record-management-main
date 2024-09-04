<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\JobPosition;
use App\Models\Country;

class NavigationController extends Controller
{
    public function login(){

        return view('loginpage.index');
    }

    public function userDashboard(){

        return view('dashboard.index');
    }

    public function userUsers(){

        return view('users.index');
    }

    public function userBranch(){

        return view('branch.index');
    }

    public function userApplicants(){

        return view('applicants.index');
    }

    public function userApplicantPosition(){

        return view('applicantPosition.index');
    }

    public function userRecords(){

        return view('records.index');
    }

    public function userReports(){

        return view('reports.index');
    }

    public function userArchive(){

        return view('archive.index');
    }

    public function userHiredApplicants(){

        return view('hiredApplicants.index');
    }

    public function userListOfApplicants(){

        return view('listOfApplicants.index');
    }

    public function userDiscontinuedApplicants(){

        return view('discontinuedApplicants.index');
    }

    public function userBranchPerformance(){

        return view('branchPerformance.index');
    }

    public function userRejectedApplicants(){

        return view('rejectedApplicants.index');
    }

    public function userReturneeApplicants(){

        return view('returneeApplicants.index');
    }

    public function userApproval(){

        return view('approval.index');
    }

    public function userLandingPage(){

        return view('landingPage.index');
    }

    public function userOnlineApplication(){

        $branch = Branch::all();
        $jobPositions = JobPosition::all();
        $country = Country::all();
        return view('onlineApplication.index', compact('branch', 'jobPositions', 'country'));
    }
}







