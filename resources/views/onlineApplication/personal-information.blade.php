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

                        <select type="text" name="gender" id="gender"
                            class="w-full border border-gray-300 rounded-md p-2"
                            value="{{ $applicant->applicant->gender ?? '' }}"
                            @if (isset($applicant->applicant->gender)) readonly @endif>

                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
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
                    <button type="button"
                        class="bg-green-600 rounded px-2 py-2 text-white hover:bg-green-800 hover:shadow-lg"
                        data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                        Add Work Experience
                    </button>
                </div>


                <div>

                    <table class="w-full" id="work-experience-list">
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
                        </tbody>
                    </table>


                </div>
                <div class="flex justify-end gap-2 mt-5">
                    <a href=""
                        class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Back</a>
                    <button type="submit"
                        class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Next</button>
                </div>
            </form>
        </div>
    </div>

    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add Work Experience
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">

                    <div>
                        <label for="country"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                        <input type="country" name="country" id="country"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter Country" required />
                    </div>
                    <div>
                        <label for="work"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Work</label>
                        <input type="work" name="work" id="work"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Enter Work" required />
                    </div>
                    <div>
                        <label for="year"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                        <input type="date" name="year" id="year" placeholder="Enter Date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>

                    <button type="button" id="add-work-experience"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                        Work Experience</button>


                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('add-work-experience').addEventListener('click', function() {
            // Get the form values
            var country = document.getElementById('country').value;
            var work = document.getElementById('work').value;
            var year = document.getElementById('year').value;

            // Validate the inputs
            if (country === '' || work === '' || year === '') {
                alert('Please fill in all fields.');
                return;
            }

            // Create a new row and cells
            var table = document.getElementById('work-experience-list').getElementsByTagName('tbody')[0];
            var newRow = table.insertRow();

            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);

            cell1.className = 'text-center'; // Center the cell content
            cell2.className = 'text-center'; // Center the cell content
            cell3.className = 'text-center'; // Center the cell content
            cell4.className = 'text-center';

            cell1.innerHTML =
                '<button class="bg-red-600 rounded-full px-2 py-1 text-white hover:bg-red-800 hover:shadow-lg"><i class="fa fa-trash" aria-hidden="true"></i></button>';
            cell2.innerHTML =
                '<input type="text" name="country[]" class="bg-inherit outline-none border-0 rounded-lg px-3 py-3 focus:outline-none text-center" readonly value="' +
                country + '">';
            cell3.innerHTML =
                '<input type="text" name="work[]" class="bg-inherit outline-none border-0 rounded-lg px-3 py-3 focus:outline-none text-center" readonly value="' +
                work + '">';
            cell4.innerHTML =
                '<input type="text" name="year[]" class="bg-inherit outline-none border-0 rounded-lg px-3 py-3 focus:outline-none text-center" readonly value="' +
                year + '">';


        });
    </script>



</body>

</html>
