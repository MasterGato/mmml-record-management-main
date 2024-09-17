<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/8d62d56333.js" crossorigin="anonymous"></script>
    <title>Online Application Form</title>
</head>


@php
    $application = session('application');

@endphp

<body class="bg-gray-100">
    <header class="bg-gray-800 text-white py-4">
        <h1 class="text-2xl font-bold text-center">Online Application Form</h1>
    </header>



    <div class="flex justify-center">
        <div class="w-4/5 mt-10">
            <div class="grid grid-cols-2 mb-2">
                <div class="flex items-center gap-2">
                    <h1>Application Type:</h1>
                    <span class="font-bold">
                        @if ($application['applicantType'] == 'new')
                            New Applicant
                        @else
                            Returnee Applicant
                        @endif
                    </span>
                </div>

                <div class="flex items-center gap-2">
                    <h1>Country:</h1>
                    <span class="font-bold">
                        {{ $application['country_name'] }}
                    </span>
                </div>

                <div class="flex items-center gap-2">
                    <h1>Branch:</h1>
                    <span class="font-bold">
                        {{ $application['branch_name'] }}
                    </span>
                </div>

                <div class="flex items-center gap-2">
                    <h1>Job Position:</h1>
                    <span class="font-bold">
                        {{ $application['position_name'] }}
                    </span>
                </div>
            </div>

            @if ($application['applicantType'] != 'new')


                <div class="grid grid-cols-5 my-5">
                    <form action="{{ route('searchApplication') }}" method="POST" class="col-span-2">
                        @csrf
                        <div class=" flex justify-start gap-3 items-center w-full">
                            <input type="text" class="rounded outline-none text-slate-600 w-full"
                                name="control_number" placeholder="Enter control number"
                                value="{{ old('control_number', $controlNumber ?? '') }}"">
                            <button class="w-16 rounded shadow-lg bg-blue-600 hover:bg-blue-800 text-white py-2"
                                type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>

                        @if (session('error'))
                            <div class="text-red-500">{{ session('error') }}</div>
                        @endif

                    </form>
                </div>
            @endif

            <hr class="h-2">

            <form action="{{ route('saveApplication') }}" method="POST">
                @csrf


                <h1 class="text-2xl font-bold mb-5">Personal Information</h1>

                <div class="grid grid-cols-3 gap-2 mb-10">
                    <!-- First Name -->
                    <div>
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->first_name ?? '' }}"
                            @if (isset($applicant->applicant->first_name)) readonly @endif>
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->last_name ?? '' }}"
                            @if (isset($applicant->applicant->last_name)) readonly @endif>
                    </div>

                    <!-- Middle Name -->
                    <div>
                        <label for="middle_name">Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->middle_name ?? '' }}"
                            @if (isset($applicant->applicant->middle_name)) readonly @endif>
                    </div>

                    <!-- Gender -->
                    <div>
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" id="gender"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->gender ?? '' }}"
                            @if (isset($applicant->applicant->gender)) readonly @endif>
                    </div>

                    <!-- Contact Number -->
                    <div>
                        <label for="contact_number">Contact Number</label>
                        <input type="text" name="contact_number" id="contact_number"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->contact_number ?? '' }}"
                            @if (isset($applicant->applicant->contact_number)) readonly @endif>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->email ?? '' }}"
                            @if (isset($applicant->applicant->email)) readonly @endif>
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->date_of_birth ?? '' }}"
                            @if (isset($applicant->applicant->date_of_birth)) readonly @endif>
                    </div>

                    <!-- Citizenship -->
                    <div>
                        <label for="citizenship">Citizenship</label>
                        <input type="text" name="citizenship" id="citizenship"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->citizenship ?? '' }}"
                            @if (isset($applicant->applicant->citizenship)) readonly @endif>
                    </div>

                    <!-- Region -->
                    <div>
                        <label for="region">Region</label>
                        <input type="text" name="region" id="region"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->region ?? '' }}"
                            @if (isset($applicant->applicant->region)) readonly @endif>
                    </div>

                    <!-- Province -->
                    <div>
                        <label for="province">Province</label>
                        <input type="text" name="province" id="province"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->province ?? '' }}"
                            @if (isset($applicant->applicant->province)) readonly @endif>
                    </div>

                    <!-- City -->
                    <div>
                        <label for="city">City</label>
                        <input type="text" name="city" id="city"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->city ?? '' }}"
                            @if (isset($applicant->applicant->city)) readonly @endif>
                    </div>

                    <!-- Zip Code -->
                    <div>
                        <label for="zip_code">Zip Code</label>
                        <input type="text" name="zip_code" id="zip_code"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->zip_code ?? '' }}"
                            @if (isset($applicant->applicant->zip_code)) readonly @endif>
                    </div>
                </div>




                <hr class="h-2">
                <h1 class="text-2xl font-bold mt-5">Educational Background</h1>

                <div class="grid grid-cols-3 gap-2 mb-10">
                    <div>
                        <h2 class="font-bold">Level Tertiary</h2>
                    </div>
                    <div>
                        <h2 class="font-bold">Inclusive Date</h2>
                    </div>
                    <div>
                        <h2 class="font-bold">School/Institution</h2>
                    </div>

                    <div class="pe-2">
                        <label for="">Elementary</label>
                    </div>

                    <div class="pe-2">
                        <input type="date" name="elementary_year" id="elemtary_year"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ old('elementary_year') }}">

                        @error('elementary_year')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div>
                        <input type="text" name="elementary_school" id="elementary_school"
                            class="w-full border border-gray-300 rounded-md p-2">

                    </div>

                    <div>
                        <label for="">High School</label>
                    </div>

                    <div class="pe-2">
                        <input type="date" name="highschol_year" id="highschool_year"
                            class="w-full border border-gray-300 rounded-md p-2" value="{{ old('highschol_year') }}">

                        @error('highschool_year')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="pe-2">
                        <input type="text" name="highschool_school" id="highschool_school"
                            class="w-full border border-gray-300 rounded-md p-2">

                    </div>
                    <div class="pe-2">
                        <label for="">College</label>
                    </div>

                    <div class="pe-2">
                        <input type="date" name="college_year" id="college_year"
                            class="w-full border border-gray-300 rounded-md p-2" value="{{ old('college_year') }}">
                        @error('college_year')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="pe-2">
                        <input type="text" name="college_school" id="college_school"
                            class="w-full border border-gray-300 rounded-md p-2">
                    </div>
                </div>

                <hr class="h-2">

                <div class="flex justify-between items-center mb-1">
                    <h1 class="text-2xl font-bold mt-5">Work Experience</h1>
                    <button class="bg-green-600 rounded px-2 py-2 text-white hover:bg-green-800 hover:shadow-lg">
                        Add Work Experience
                    </button>
                </div>


                <div>

                    <table class="w-full">
                        <thead>
                            <tr class="bg-slate-50 font-bold">
                                <th>

                                </th>
                                <th class="py-2">
                                    Country
                                </th>
                                <th class="py-2">
                                    Work
                                </th>
                                <th class="py-2">
                                    Year
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center ">
                                <td class="py-2">
                                    <button
                                        class="bg-red-600 rounded-full px-2 py-1 text-white hover:bg-red-800 hover:shadow-lg">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="py-2">
                                    <p>Philippine</p>
                                </td>
                                <td class="py-2">
                                    <p>Mid Wife</p>
                                </td>
                                <td class="py-2">
                                    <p>2020-2021</p>
                                </td>
                            </tr>
                    </table>


                </div>



                <div class="flex justify-end gap-2 mt-5">
                    <a href=""
                        class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Back</a>
                    <button type="submit"
                        class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Next</button>
                </div>
        </div>
    </div>
    </form>

</body>

</html>
