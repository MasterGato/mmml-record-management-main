<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Approval</title>
</head>
<body>
  <div class="bg-gray-200 px-2 py-2 shadow-md flex justify-between items-center">
    <div class="flex items-center">
      <span class="ml-2 text-xl font-bold">Koronadal Branch</span>
    </div>
    <h1 class="text-2xl text-gray-800">MMML RECRUITMENT SERVICES INC.</h1>
    <div class="flex items-center">
      <a href="#" class="inline-block rounded-full p-1 transition-shadow duration-300 hover:shadow-lg hover:bg-yellow-400">
        <img src="{{ Vite::asset('resources/Images/bell.png') }}" alt="Notification Icon" class="w-6 h-6">
      </a>
      <div class="text-left ml-5">
        <div class="font-bold">John Doe</div>
        <div class="text-gray-600" id="datetime">May 27, 2024 | 8:00 AM</div>
      </div>
      <div class="bg-yellow-400 text-white px-4 py-2 rounded ml-5 font-bold inline-block">Admin</div>
    </div>
  </div>

  <div class="flex">
    <div class="bg-gray-200 p-5 w-64 h-screen fixed overflow-y-auto">
      <div class="text-center mb-5">
        <img src="{{ Vite::asset('resources/Images/MMML-LOGO.jpg') }}" alt="MMML Logo" class="w-24 h-24 rounded-full border-4 border-yellow-400 mx-auto">
      </div>
      <ul class="list-none p-0 m-0">
        <li class="mb-1">
        <a href="{{ route('dashboard') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('dashboard') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
            <img src="{{ Vite::asset('resources/Images/Dashboard.png') }}" alt="Dashboard" class="w-6 h-6 mr-2"> Dashboard
                  </a>
                </li>
                <li class="mb-1">
                <li class="mb-1">
            <a href="{{ route('branch') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('branch') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
                <img src="{{ Vite::asset('resources/Images/Branch.png') }}" alt="Branch" class="w-6 h-6 mr-2"> Branch
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('users') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('users') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
                <img src="{{ Vite::asset('resources/Images/Users.png') }}" alt="Users" class="w-6 h-6 mr-2"> Users
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('applicantPosition') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('applicantPosition') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
                <img src="{{ Vite::asset('resources/Images/briefcase.png') }}" alt="Applicants Position" class="w-6 h-6 mr-2"> Applicants Position
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('applicants') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('applicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
                <img src="{{ Vite::asset('resources/Images/Applicants.png') }}" alt="Applicants" class="w-6 h-6 mr-2"> Applicants
            </a>
        </li>
        <li class="mb-1">
            <a href="{{ route('records') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('records') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
                <img src="{{ Vite::asset('resources/Images/Records.png') }}" alt="Records" class="w-6 h-6 mr-2"> Records
            </a>
        <li class="mb-1">
            <a href="{{ route('archive') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('archive') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
                <img src="{{ Vite::asset('resources/Images/Archives.png') }}" alt="Archives" class="w-6 h-6 mr-2"> Archives
            </a>
        </li>
        <li class="mb-1">
          <a href="{{ route('approval') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('approval') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
            <img src="{{ Vite::asset('resources/Images/approval.png') }}" alt="approval" class="w-6 h-6 mr-2"> Approval
          </a>
        </li>
        <li class="mb-1">
          <a href="#" id="reportsModuleToggle" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm hover:bg-yellow-400 cursor-pointer {{ request()->routeIs('reports') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
            <img src="{{ Vite::asset('resources/Images/Reports.png') }}" alt="Records" class="w-6 h-6 mr-2"> Reports
            <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <ul id="reportsDropdown" class="list-none p-0 m-0 pl-6 hidden">
        <li class="mb-1">
        <a href="{{ route('listOfApplicants') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('listOfApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">List of Applicants</a>
        </li>
        <li class="mb-1">
          <a href="{{ route('hiredApplicants') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('hiredApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Hired Applicants</a>
        </li>
        <li class="mb-1">
          <a href="{{ route('discontinuedApplicants') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('discontinuedApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Discontinued Applicants</a>
        </li>
        <li class="mb-1">
          <a href="{{ route('rejectedApplicants') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('rejectedApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Rejected Applicants</a>
        </li>
        <li class="mb-1">
          <a href="{{ route('returneeApplicants') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('returneeApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Returnee Applicants</a>
        </li>
        <li class="mb-1">
          <a href="{{ route('branchPerformance') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('branchPerformance') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Branch Performance</a>
        </li>
      </ul>
        <li>
          <a href="LoginPage.html" id="logoutLink" class="flex items-center text-gray-800 no-underline hover:bg-yellow-400 p-2 rounded text-sm">
            <img src="{{ Vite::asset('resources/Images/Logout.png') }}" alt="Logout" class="w-6 h-6 mr-2"> Logout
          </a>
        </li>
      </ul>
    </div>


    <div class="ml-72 p-5 w-full">
      <!-- Records Module Content -->
      <h1 class="text-2xl mb-2">Reports Management</h1>
      <h2 class="font-light text-xl mb-5">Reports Information</h2>

      <div class="flex items-center mb-5">
        <div class="relative flex-grow max-w-lg">
          <input type="text" class="usermanage-search-bar h-10 pl-10 pr-3 border border-gray-300 rounded-md w-full" placeholder="Search Records">
          <img src="{{ Vite::asset('resources/Images/search.png') }}" alt="Search Icon" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4">
        </div>
        <button class="h-10 ml-2 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400">Search</button>
        <div class="relative ml-2">
          <input type="checkbox" id="sortToggle1" class="peer hidden" />
          <label for="sortToggle1" class="h-10 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 flex items-center cursor-pointer">
            Select Branch
            <svg class="inline-block w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </label>
          <div class="absolute right-0 mt-1 w-full max-w-[10rem] bg-white border border-gray-300 rounded-md shadow-lg peer-checked:block hidden">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">All Branches</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Gensan</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Isulan</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Koronadal</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Polomolok</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Surallah</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tacurong</a>
          </div>
        </div>
        <button class="h-10 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 ml-2">New</button>
        <div class="absolute right-5">
        <input type="checkbox" id="sortToggle" class="peer hidden" />
        <label for="sortToggle" class="h-10 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 flex items-center cursor-pointer">
          Sort By
          <svg class="inline-block w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </label>
        <div class="absolute right-0 mt-1 w-full max-w-[10rem] bg-white border border-gray-300 rounded-md shadow-lg peer-checked:block hidden">
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">A-Z</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Z-A</a>
        </div>
        
      </div>
      </div>

      <div class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center z-50" id="addUserFormContainer">
        <div class="bg-white p-10 rounded-md shadow-md relative w-2/3 max-w-3xl grid grid-cols-2 gap-4">
          <img src="{{ Vite::asset('resources/Images/close.png') }}" alt="Close Icon" class="absolute top-2 right-2 cursor-pointer w-6 h-6" onclick="toggleAddUserForm()">
          <h3 class="col-span-2 text-lg font-bold mb-4">Add User</h3>
          <div class="col-span-1">
            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="firstName" class="w-full border border-gray-300 rounded-md p-2" placeholder="First Name">
          </div>
          <div class="col-span-1">
            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="lastName" class="w-full border border-gray-300 rounded-md p-2" placeholder="Last Name">
          </div>
          <div class="col-span-2">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" class="w-full border border-gray-300 rounded-md p-2" placeholder="Email">
          </div>
          <div class="col-span-2">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="tel" id="phone" class="w-full border border-gray-300 rounded-md p-2" placeholder="Phone">
          </div>
          <div class="col-span-2">
            <button class="bg-yellow-400 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Submit</button>
          </div>
        </div>
      </div>


          <!-- Add more rows as needed -->

    </div>
  </div>

  <script>
    function toggleAddUserForm() {
      const formContainer = document.getElementById('addUserFormContainer');
      formContainer.classList.toggle('hidden');
    }

    document.getElementById('reportsModuleToggle').addEventListener('click', function() {
      const dropdown = document.getElementById('reportsDropdown');
      dropdown.classList.toggle('hidden');

      if (routeName === "listOfApplicants") {
        reportsDropdown.classList.remove("hidden");
      }
    });
  </script>
</body>
</html>
