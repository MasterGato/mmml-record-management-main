<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/Approval.js'])
  <title>Records Module</title>
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
        </li>
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
          <a href="{{ route('reports') }}" id="reportsModuleToggle" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm hover:bg-yellow-400 cursor-pointer {{ request()->routeIs('reports') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">
            <img src="{{ Vite::asset('resources/Images/Reports.png') }}" alt="Records" class="w-6 h-6 mr-2"> Reports
            <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
                <ul id="reportsDropdown" class="list-none p-0 m-0 pl-6 hidden">
        <li class="mb-1">
          <a href="#" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('listApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">List of Applicants</a>
        </li>
        <li class="mb-1">
          <a href="{{ route('hiredApplicants') }}" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('hiredApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Hired Applicants</a>
        </li>
        <li class="mb-1">
          <a href="#" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('discontinuedApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Discontinued Applicants</a>
        </li>
        <li class="mb-1">
          <a href="#"class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('rejectedApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Rejected Applicants</a>
        </li>
        <li class="mb-1">
          <a href="#" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('returneeApplicants') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Returnee Applicants</a>
        </li>
        <li class="mb-1">
          <a href="#" class="flex items-center text-gray-800 no-underline p-2 rounded text-sm {{ request()->routeIs('branchPerformance') ? 'bg-yellow-400' : 'hover:bg-yellow-400' }}">Branch Performance</a>
        </li>
      </ul>
        </li>
        <li>
          <a href="LoginPage.html" id="logoutLink" class="flex items-center text-gray-800 no-underline hover:bg-yellow-400 p-2 rounded text-sm">
            <img src="{{ Vite::asset('resources/Images/Logout.png') }}" alt="Logout" class="w-6 h-6 mr-2"> Logout
          </a>
        </li>
      </ul>
    </div>

    <div class="ml-72 p-5 w-full">
      <!-- Records Module Content -->
      <h1 class="text-2xl mb-2">Approval Management</h1>

      <div class="flex items-center my-4">
  <!-- Tabs as Pills -->
  <div class="flex space-x-4">
    <button
      id="onlineTab"
      class="py-2 px-4 text-gray-800 bg-gray-200 rounded-full focus:outline-none"
      onclick="showTable('online-application-table', 'onlineTab')"
    >
      Online Application
    </button>
    <button
      id="encodeTab"
      class="py-2 px-4 text-gray-800 bg-gray-200 rounded-full focus:outline-none"
      onclick="showTable('encode-control-number-table', 'encodeTab')"
    >
      Encode Control Number
    </button>
  </div>
</div>


      

    <div class="flex items-center mb-5">
      <!-- Search Bar -->
      <div class="relative flex-grow max-w-lg">
        <input type="text" class="usermanage-search-bar h-10 pl-10 pr-3 border border-gray-300 rounded-md w-full" placeholder="Search Records">
        <img src="{{ Vite::asset('resources/Images/search.png') }}" alt="Search Icon" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4">
      </div>
      <button class="h-10 ml-2 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400">Search</button>

      <!-- Dropdown Buttons -->
      <div class="relative ml-2">
        <input type="checkbox" id="sortToggle1" class="peer hidden" />
        <label for="sortToggle1" class="h-10 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 flex items-center cursor-pointer">
          Select Branch
          <svg class="inline-block w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </label>
        <div class="absolute right-0 mt-1 w-full max-w-[10rem] bg-white border border-gray-300 rounded-md shadow-lg peer-checked:block hidden">
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" onclick="filterTable('')">All Branches</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" onclick="filterTable('Gensan')">Gensan</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" onclick="filterTable('Isulan')">Isulan</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" onclick="filterTable('Koronadal')">Koronadal</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" onclick="filterTable('Polomolok')">Polomolok</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" onclick="filterTable('Surallah')">Surallah</a>
          <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" onclick="filterTable('Tacurong')">Tacurong</a>
        </div>
      </div>

    <!-- Second Dropdown Button -->
    <div class="relative ml-2">
      <input type="checkbox" id="sortToggle2" class="peer hidden" />
      <label for="sortToggle2" class="h-10 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 flex items-center cursor-pointer">
        Type of Applicant Status
        <svg class="inline-block w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </label>
      <div class="absolute right-0 mt-1 w-full max-w-[10rem] bg-white border border-gray-300 rounded-md shadow-lg peer-checked:block hidden">
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Document Submission</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Waiting to be Hired</a>
      </div>
    </div>

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

      <!-- Tables -->
      <div id="online-application-table" class="hidden" >
    <table class="w-full border-collapse bg-white">
      <thead class="bg-yellow-400 text-gray-600 uppercase text-xs leading-normal">
        <tr>
          <th class="py-3 px-6 text-center">Applicant Name</th>
          <th class="py-3 px-6 text-center">Branch</th>
          <th class="py-3 px-6 text-center">Type of Application</th>
          <th class="py-3 px-6 text-center">Date of Application</th>
          <th class="py-3 px-6 text-center">Contact Number</th>
          <th class="py-3 px-6 text-center">Position</th>
          <th class="py-3 px-6 text-center">Applied Country</th>
          <th class="py-3 px-6 text-center">Action</th>
        </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light">
        <tr class="border-b border-gray-200 hover:bg-gray-100">
          <td class="py-3 px-6 text-center">John Smith</td>
          <td class="py-3 px-6 text-center">Koronadal</td>
          <td class="py-3 px-6 text-center">New Applicant</td>
          <td class="py-3 px-6 text-center">08-10-2024</td>
          <td class="py-3 px-6 text-center">09123456789</td>
          <td class="py-3 px-6 text-center">House Keeper</td>
          <td class="py-3 px-6 text-center">Kuwait</td>
          <td class="py-3 px-6 text-center">
            <div class="flex justify-center space-x-2">
              <button class="bg-gray-700 text-white text-xs px-4 py-2 rounded hover:bg-yellow-400">View</button>
              <button class="bg-green-500 text-white text-xs px-4 py-2 rounded hover:bg-green-600">Confirm</button>
              <button class="bg-red-500 text-white text-xs px-4 py-2 rounded hover:bg-red-600">Decline</button>
            </div>
          </td>
        </tr>
        <!-- Repeat similar rows as needed -->
      </tbody>
    </table>
  </div>

  <div id="encode-control-number-table" class="hidden">
    <table class="w-full border-collapse bg-white">
      <thead class="bg-yellow-400 text-gray-600 uppercase text-xs leading-normal">
        <tr>
          <th class="py-3 px-6 text-center">Applicant ID</th>
          <th class="py-3 px-6 text-center">Applicant Name</th>
          <th class="py-3 px-6 text-center">Branch</th>
          <th class="py-3 px-6 text-center">Type of Application</th>
          <th class="py-3 px-6 text-center">Date of Application</th>
          <th class="py-3 px-6 text-center">Contact Number</th>
          <th class="py-3 px-6 text-center">Position</th>
          <th class="py-3 px-6 text-center">Applied Country</th>
          <th class="py-3 px-6 text-center">Applicant Status</th>
          <th class="py-3 px-6 text-center">Control Number</th>
        </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light">
        <tr class="border-b border-gray-200 hover:bg-gray-100">
          <td class="py-3 px-6 text-center">1</td>
          <td class="py-3 px-6 text-center">John Smith</td>
          <td class="py-3 px-6 text-center">Koronadal</td>
          <td class="py-3 px-6 text-center">New Applicant</td>
          <td class="py-3 px-6 text-center">08-10-2024</td>
          <td class="py-3 px-6 text-center">09123456789</td>
          <td class="py-3 px-6 text-center">House Keeper</td>
          <td class="py-3 px-6 text-center">Kuwait</td>
          <td class="py-3 px-6 text-center">Pending</td>
          <td class="py-3 px-6 text-center">CN-123456</td>
        </tr>
        <!-- Repeat similar rows as needed -->
      </tbody>
    </table>
  </div>

<script>
// Initialize default tab
showTable('online-application-table', 'onlineTab');

function showTable(tableId, tabId) {
  // Hide all tables
  document.querySelectorAll('[id$="-table"]').forEach(table => table.classList.add('hidden'));

  // Remove active class from all tabs
  document.querySelectorAll('[id$="Tab"]').forEach(tab => tab.classList.remove('bg-yellow-400', 'text-gray-800', 'font-semibold'));

  // Show the selected table
  document.getElementById(tableId).classList.remove('hidden');

  // Add active class to the selected tab
  const activeTab = document.getElementById(tabId);
  activeTab.classList.add('bg-yellow-400', 'text-gray-800', 'font-semibold');
}

// Initialize default tab
showTable('online-application-table', 'onlineTab');
</script>
</body>
</html>
