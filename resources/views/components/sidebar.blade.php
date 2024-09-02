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
</div>
