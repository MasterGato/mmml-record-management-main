<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Online Application Form</title>
</head>

<body class="bg-gray-100">
    <header class="bg-gray-800 text-white py-4">
        <h1 class="text-2xl font-bold text-center">Online Application Form</h1>
    </header>

    <main class="flex min-h-screen justify-center mt-20">
        <form class="space-y-6 w-full max-w-lg" action="{{route('step-one')}}" method="POST">
            @csrf
            <!-- Applicant Type -->
            <fieldset>
                <legend class="text-lg font-semibold">1. What type of applicant are you?</legend>
                <div class="mt-2 space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="applicantType" value="new" class="mr-2">
                        New Applicant
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="applicantType" value="returnee" class="mr-2">
                        Returnee Applicant
                    </label>
                </div>
            </fieldset>

            <!-- Branch Selection -->
            <fieldset>
                <legend class="text-lg font-semibold">2. Choose your branch</legend>
                <select class="w-full py-2 px-3 border border-gray-300 rounded-md" name="branch">
                    @foreach ($branch as $b)
                        <option value="{{$b->branch_id}}">{{$b->branch_name}}</option>
                    @endforeach

                </select>
            </fieldset>

            <!-- Position Applying For and Country of Choice -->
            <fieldset class="flex justify-between space-x-6">
                <div class="flex-1">
                    <legend class="text-lg font-semibold">3. Position Applying For</legend>
                    <select class="w-full py-2 px-3 border border-gray-300 rounded-md" name="position">
                        @foreach ($jobPositions as $job)
                            <option value="{{$job->job_id}}">{{$job->job  ." - ". $job->country->country}}</option>
                        @endforeach
                    </select>
                </div>


            </fieldset>

            <div class="flex justify-end gap-2">
                <a href="" class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Back</a>
                <button type="submit" class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Next</button>
            </div>
        </form>
    </main>
</body>

</html>
