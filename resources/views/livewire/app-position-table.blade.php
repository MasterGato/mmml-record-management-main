<div class="col-span-10">{{-- header --}}
    <div class="overflow-x-auto mt-5 p-10">
        <h1 class="text-2x1">Application Position Information</h1>

        <div class="flex justify-between my-2">
            <div class="w-1/2 flex justify-normal gap-2">
                <div class="relative w-full ">
                    <input type="text" class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-2"
                        placeholder="Search" wire:model.live.debounce.300ms="search">
                    <i
                        class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>

                </div>

                <button class=" bg-gray-700 hover:bg-yellow-600 rounded-lg py-2 px-4 font-semibold text-white">
                    Search
                </button>



            </div>

            <div>
                <button x-data x-on:click="$dispatch('open-modal', {name: 'add-job-position'})"
                    class=" bg-gray-700 hover:bg-yellow-600 rounded-lg py-2 px-4 font-semibold text-white">
                    Add Job Position
                </button>
            </div>

        </div>

        <div class="overflow-y-auto max-h-96 bg-white border-gray-300">
            <table class="w-full">
                <thead class="sticky top-0 bg-yellow-400">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Position ID</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Job Position</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Country</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobPositions as $job)
                        <tr class="text-center">
                            <td class="py-2 px-4 border-b border-gray-300">{{ $job->job_id }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $job->job }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $job->country->country }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <button class="bg-blue-700 hover:bg-blue-800 text-white rounded-lg py-1 px-3"
                                    wire:click="selectJob({{ $job->job_id }})" x-data
                                    x-on:click="$dispatch('open-modal', {name: 'update-job-position'})">Update</button>
                                <button class="bg-red-700 hover:bg-red-800 text-white rounded-lg py-1 px-3"
                                    wire:click="deleteJob({{ $job->job_id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


    <x-modal.modal name="add-job-position" title="Add Job Position">
        @slot('body')
            <form wire:submit.prevent="save">

                <div class="flex justify-between gap-2">

                    <div class="w-1/2">
                        <x-text-field.text-field label="Job Position" placeholder="Job Position" model="jobPosition"
                            name="jobPosition" type="text" />
                        @error('jobPosition')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div class="w-1/2">
                        <label for="">Branch</label>
                        <select class="w-full outline-none border border-slate-200 rounded-lg px-3 py-3"
                            wire:model="country" name="country">
                            <option class="py-2 " value="">Select Branch</option>
                            @foreach ($countries as $country)
                                <option class="py-2" value="{{ $country->country_id }}">{{ $country->country }}
                                </option>
                            @endforeach
                        </select>

                        @error('country')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="col-span-2 flex justify-end mt-2">

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                </div>
            </form>
        @endslot

    </x-modal.modal>


    <x-modal.modal name="update-job-position" title="Update Job Position">
        @slot('body')
            <form wire:submit.prevent="update">

                <div class="flex justify-between gap-2">

                    <div class="w-1/2">
                        <x-text-field.text-field label="Job Position" placeholder="Job Position" model="jobPosition"
                            name="jobPosition" type="text" />
                        @error('jobPosition')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div class="w-1/2">
                        <label for="">Country</label>
                        <select class="w-full outline-none border border-slate-200 rounded-lg px-3 py-3"
                            wire:model="country" name="country">
                            <option class="py-2 " value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option class="py-2" value="{{ $country->country_id }}">{{ $country->country }}
                                </option>
                            @endforeach
                        </select>

                        @error('country')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="text-green-800 bg-green-50 px-2 py-2 my-2 rounded-lg">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="col-span-2 flex justify-end mt-2">


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                </div>
            </form>
        @endslot

    </x-modal.modal>

</div>
