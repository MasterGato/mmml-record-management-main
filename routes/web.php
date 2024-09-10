<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\NavigationController;

use Illuminate\Support\Facades\Route;

Route::get('', [NavigationController::class,'login']);

Route::get('login', [NavigationController::class,'login']);

Route::get('dashboard', [NavigationController::class,'userDashboard'])->name('dashboard');

Route::get('users', [NavigationController::class,'userUsers'])->name('users');

Route::get('branch', [NavigationController::class,'userBranch'])->name('branch');

Route::get('applicants', [NavigationController::class,'userApplicants'])->name('applicants');

Route::get('applicantPosition', [NavigationController::class,'userApplicantPosition'])->name('applicantPosition');

Route::get('records', [NavigationController::class,'userRecords'])->name('records');

Route::get('reports', [NavigationController::class,'userReports'])->name('reports');

Route::get('archive', [NavigationController::class,'userArchive'])->name('archive');

Route::get('hiredApplicants', [NavigationController::class,'userHiredApplicants'])->name('hiredApplicants');

Route::get('listOfApplicants', [NavigationController::class,'userListOfApplicants'])->name('listOfApplicants');

Route::get('discontinuedApplicants', [NavigationController::class,'userdiscontinuedApplicants'])->name('discontinuedApplicants');

Route::get('branchPerformance', [NavigationController::class,'userBranchPerformance'])->name('branchPerformance');

Route::get('rejectedApplicants', [NavigationController::class,'userRejectedApplicants'])->name('rejectedApplicants');

Route::get('returneeApplicants', [NavigationController::class,'userReturneeApplicants'])->name('returneeApplicants');

Route::get('approval', [NavigationController::class,'userApproval'])->name('approval');

Route::get('landingPage', [NavigationController::class,'userLandingPage'])->name('landingPage');

Route::get('onlineApplication', [NavigationController::class,'userOnlineApplication'])->name('onlineApplication');


Route::get('personal-information', [ApplicationController::class,'personalInformation'])->name('personal-information');

Route::post('step-one', [ApplicationController::class,'stepOne'])->name('step-one');

Route::post('step-two', [ApplicationController::class,'stepTwo'])->name('step-two');
Route::post('saveApplication', [ApplicationController::class,'saveApplication'])->name('saveApplication');
Route::get('application-success', [ApplicationController::class,'applicationSuccess'])->name('application-success');



