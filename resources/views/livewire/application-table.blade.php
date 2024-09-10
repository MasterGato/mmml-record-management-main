<div class="ml-72 p-5 w-full">
    <!-- Users Module Content -->
    <h1 class="text-2xl mb-2">Applicant Management</h1>
    <h2 class="font-light text-xl mb-5">Applicants Information</h2>

    <div class="flex items-center mb-5">
        <div class="relative flex-grow max-w-lg">
            <input type="text" class="usermanage-search-bar h-10 pl-10 pr-3 border border-gray-300 rounded-md w-full"
                placeholder="Search Applicants" wire:model.live.debounce.300ms = "search">
            <img src="{{ Vite::asset('resources/Images/search.png') }}" alt="Search Icon"
                class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4">
        </div>
        <button class="h-10 ml-2 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400">Search</button>

        <div class="relative ml-2">
            <input type="checkbox" id="sortToggle1" class="peer hidden" />
            <label for="sortToggle1"
                class="h-10 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 flex items-center cursor-pointer">
                Select Branch
                <svg class="inline-block w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                    </path>
                </svg>
            </label>
            <div id="branchDropdown"
                class="absolute right-0 mt-1 w-full max-w-[10rem] bg-white border border-gray-300 rounded-md shadow-lg peer-checked:block hidden">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" data-branch="">All
                    Branches</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                    data-branch="Gensan">Gensan</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                    data-branch="Isulan">Isulan</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                    data-branch="Koronadal">Koronadal</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                    data-branch="Polomolok">Polomolok</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                    data-branch="Surallah">Surallah</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                    data-branch="Tacurong">Tacurong</a>
            </div>
        </div>

        <div class="absolute right-5">
            <input type="checkbox" id="sortToggle" class="peer hidden" />
            <label for="sortToggle"
                class="h-10 px-4 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 flex items-center cursor-pointer">
                Sort By
                <svg class="inline-block w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                    </path>
                </svg>
            </label>
            <div
                class="absolute right-0 mt-1 w-full max-w-[10rem] bg-white border border-gray-300 rounded-md shadow-lg peer-checked:block hidden">
                <a href="#" id="sortAZ" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">A-Z</a>
                <a href="#" id="sortZA" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Z-A</a>
            </div>
        </div>
    </div>

    <!-- Applicants Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-yellow-400 text-gray-600 uppercase text-xs leading-normal">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">APPLICANT ID</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">APPLICANT NAME</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">BRANCH</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">TYPE OF APPLICATION</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">DATE OF APPLICATION</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">CONTACT NUMBER</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">POSITION</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">APPLIED COUNTRY</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-center">ACTION</th>
                </tr>
            </thead>
            <tbody class="text-center text-xs leading-normal">
                @foreach ($applications as $application)
                    <tr class="border-b border-gray-300">
                        <td class="py-2 px-4 text-center">{{$application->applicant_id}}</td>
                        <td class="py-2 px-4 text-center">{{$application->applicant->first_name." ". $application->applicant->last_name}}</td>
                        <td class="py-2 px-4 text-center">{{$application->branch->branch_name}}</td>
                        <td class="py-2 px-4 text-center">
                            @if ($application->type_of_application == 'new')
                                <span class="bg-green-400 text-white rounded-md px-2">New</span>
                            @endif
                            @if ($application->type_of_application == 'returnee')
                                <span class="bg-blue-400 text-white rounded-md px-2">Returnee</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 text-center">{{$application->date_of_application}}</td>
                        <td class="py-2 px-4 text-center">{{$application->applicant->contact_number}}</td>
                        <td class="py-2 px-4 text-center">{{$application->job->job}}</td>
                        <td class="py-2 px-4 text-center">{{$application->job->country->country}}</td>
                        <td class="py-2 px-4 text-center flex justify-center">
                            <button
                                class="h-8 px-2 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400">View</button>
                            <button
                                class="h-8 px-2 border-none rounded-md bg-gray-700 text-white hover:bg-yellow-400 ml-2">Update</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        </table>
    </div>

</div>
