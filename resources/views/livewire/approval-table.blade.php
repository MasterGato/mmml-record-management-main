<div id="online-application-table">
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

            @foreach ($applications as $application)
                <tr class="border-b border-gray-200 hover:bg-gray-100">

                    <td class="py-2 px-4 text-center">
                        {{ $application->applicant->first_name . ' ' . $application->applicant->last_name }}</td>
                    <td class="py-2 px-4 text-center">{{ $application->branch->branch_name }}</td>
                    <td class="py-2 px-4 text-center">
                        @if ($application->type_of_application == 'new')
                            <span class="bg-green-400 text-white rounded-md px-2">New</span>
                        @endif
                        @if ($application->type_of_application == 'returnee')
                            <span class="bg-blue-400 text-white rounded-md px-2">Returnee</span>
                        @endif
                    </td>
                    <td class="py-2 px-4 text-center">{{ $application->date_of_application }}</td>
                    <td class="py-2 px-4 text-center">{{ $application->applicant->contact_number }}</td>
                    <td class="py-2 px-4 text-center">{{ $application->job->job }}</td>
                    <td class="py-2 px-4 text-center">{{ $application->job->country->country }}</td>
                    <td class="py-2 px-4 text-center flex justify-center">
                        <div class="flex justify-center space-x-2">
                            <button
                                class="bg-gray-700 text-white text-xs px-4 py-2 rounded hover:bg-yellow-400">View</button>
                            <button type="button"
                                class="bg-green-500 text-white text-xs px-4 py-2 rounded hover:bg-green-600" wire:click="confirm({{$application->application_id}})">Confirm</button>
                            <button type="button"
                                class="bg-red-500 text-white text-xs px-4 py-2 rounded hover:bg-red-600"  wire:click="reject({{$application->application_id}})">Decline</button>
                        </div>
                    </td>
                </tr>
            @endforeach

            <!-- Repeat similar rows as needed -->
        </tbody>
    </table>
</div>
