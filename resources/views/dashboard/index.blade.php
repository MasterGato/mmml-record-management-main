<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Dashboard</title>
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

  <div class="flex-grow p-5 ml-72">
    <div class="flex gap-5">
      <div class="flex justify-between items-center bg-yellow-400 border border-gray-300 rounded-md p-5 shadow-md flex-1 h-32 min-w-[200px]">
        <div class="flex flex-col text-left">
          <h2 class="m-0 mb-2 text-lg text-gray-700">Branches</h2>
          <p class="text-2xl font-bold text-gray-700 m-0" id="branches-count">10</p>
        </div>
        <img src="{{ Vite::asset('resources/Images/Branch.png') }}" alt="Branches Icon" class="w-10 h-10 ml-5">
      </div>
      <div class="flex justify-between items-center bg-yellow-400 border border-gray-300 rounded-md p-5 shadow-md flex-1 h-32 min-w-[200px]">
        <div class="flex flex-col text-left">
          <h2 class="m-0 mb-2 text-lg text-gray-700">Applicants</h2>
          <p class="text-2xl font-bold text-gray-700 m-0" id="applicants-count">200</p>
        </div>
        <img src="{{ Vite::asset('resources/Images/Applicants.png') }}" alt="Applicants Icon" class="w-10 h-10 ml-5">
      </div>
      <div class="flex justify-between items-center bg-yellow-400 border border-gray-300 rounded-md p-5 shadow-md flex-1 h-32 min-w-[200px]">
        <div class="flex flex-col text-left">
          <h2 class="m-0 mb-2 text-lg text-gray-700">Hired</h2>
          <p class="text-2xl font-bold text-gray-700 m-0" id="hired-count">50</p>
        </div>
        <img src="{{ Vite::asset('resources/Images/human-resources.png') }}" alt="Hired Icon" class="w-10 h-10 ml-5">
      </div>
      <div class="flex justify-between items-center bg-yellow-400 border border-gray-300 rounded-md p-5 shadow-md flex-1 h-32 min-w-[200px]">
        <div class="flex flex-col text-left">
          <h2 class="m-0 mb-2 text-lg text-gray-700">Waiting to be Hired</h2>
          <p class="text-2xl font-bold text-gray-700 m-0" id="waiting-count">30</p>
        </div>
        <img src="{{ Vite::asset('resources/Images/hour-glass.png') }}" alt="Waiting to be Hired Icon" class="w-10 h-10 ml-5">
      </div>
    </div>
    <div class="flex justify-center mt-2 relative left-0 w-1/2">
      <label for="year-select"></label>
      <select id="year-select" class="h-8 w-20 border border-gray-200 rounded-md">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
      </select>
    </div>
  </div>
  <script src="Function.js"></script>
</body>
</html>
