<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/8d62d56333.js" crossorigin="anonymous"></script>
    <title>Online Application Form</title>
</head>

<body class="bg-gray-100">
    <header class="bg-gray-800 text-white py-4">
        <h1 class="text-2xl font-bold text-center">Online Application Form</h1>
    </header>

    <div class="flex justify-center">
        <div class="w-4/5 mt-10">

            <div>

            </div>
            <hr class="h-2">

            <h1 class="text-2xl font-bold mb-5">Personal Information</h1>

            <div class="grid grid-cols-3 gap-2">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name" id="middle_name"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="date_of_birth"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="citizenship">Citizenship</label>
                    <input type="text" name="citizenship" id="citizenship"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="region">Region</label>
                    <input type="text" name="region" id="region"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="province">Province</label>
                    <input type="text" name="province" id="province"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>

                <div>
                    <label for="city">City</label>
                    <input type="text" name="city" id="city"
                        class="w-full border border-gray-300 rounded-md p-2">
                </div>
            </div>

            <div class="flex justify-end gap-2 mt-5">
                <a href=""
                    class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Back</a>
                <button type="submit"
                    class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">Next</button>
            </div>
        </div>
    </div>

</body>

</html>
