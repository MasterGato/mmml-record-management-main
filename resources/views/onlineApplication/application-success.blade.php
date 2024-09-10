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
        <div class="gap-10">
            <h1 class="text-lg mb-5">Your Application has been successfully submitted!</h1>
            <h1 class="text-lg mb-5">Please bring the folllowing documents to the office branch for further processing</h1>


            <ol type="1" class="font-bold list-decimal list-inside">
                <li>Origanal Copy of birth certificate</li>
                <li>Valid ID(e.g., Password, Driver Lincense, National Id)</li>
                <li>Three (3) copies of password-size photos</li>
                <li>Addicational Identification or Certificates</li>
            </ol>

            <ul class="list-disc text-base ps-10">
                <li>NBI Clearance</li>
                <li>Postal Id</li>
                <li>Voters Certificate Id</li>
                <li>National ID</li>
                <li>Medical Certificate</li>

            </ul>
        </div>
    </main>
</body>

</html>
