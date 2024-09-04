<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ApplicationController extends Controller
{


    public function stepOne(Request $request){
        $data = $request->all();

        $applicantType = $data['applicantType'];
        $branch = $data['branch'];
        $position = $data['position'];
        $country = $data['country'];

        session(['stepOne' => [
            'applicantType' => $applicantType,
            'branch' => $branch,
            'position' => $position,
            'country' => $country
        ]]);

        return redirect()->route('personal-information');
    }

    public function personalInformation(){
        return view('onlineApplication.personal-information');
    }
}
