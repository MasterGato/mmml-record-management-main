<div class="col-span-10">
    <div class="  overflow-x-auto mt-5 p-10">
        <h1 class="text-2xl ">Branch Management</h1>

        <div class="flex justify-between my-2">
            <div class="w-1/2 flex justify-normal gap-2">
                <div class="relative w-full ">
                    <input type="text" class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-2"
                        placeholder="Search" wire:model.live.debounce.300ms = "search">
                    <i
                        class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>

                </div>

                <button class=" bg-gray-700 hover:bg-yellow-600 rounded-lg py-2 px-4 font-semibold text-white">
                    Search
                </button>
            </div>

            <div>
                <button data-modal-target="medium-modal" data-modal-toggle="medium-modal"
                    class=" bg-gray-700 hover:bg-yellow-600 rounded-lg py-2 px-4 font-semibold text-white">
                    Add
                </button>
            </div>

        </div>

        <div class="overflow-y-auto max-h-96 bg-white border border-gray-300">
            <table class="w-full">
                <thead class="sticky top-0 bg-yellow-400">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Branch ID</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Branch Name</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Address</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($branches as $branch)
                        <tr class="text-center">
                            <td class="py-2 px-4 border-b border-gray-300">{{ $branch->branch_id }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $branch->branch_name }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $branch->city . ' ' . $branch->province . ' ' . $branch->region }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">


                                <button data-modal-target="update" data-modal-toggle="update"
                                    class="bg-gray-700 text-white rounded-md py-1 px-2 hover:bg-yellow-400"
                                    type="button">
                                    update
                                </button>


                                <button data-modal-target="delete" data-modal-toggle="delete"
                                    class="bg-gray-700 text-white rounded-md py-1 px-2 hover:bg-yellow-400"
                                    type="button">
                                    delete
                                </button>
                                <div id="delete" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    Are you sure you want to delete this product?</h3>
                                                <button wire:click="delete({{ $branch->branch_id }})"
                                                    data-modal-hide="delete" type="button"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center ">
                                                    Yes, I'm sure
                                                </button>
                                                <button data-modal-hide="delete" type="button"
                                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                    cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div id="medium-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-lg max-h-full" wire:ignore.self>


            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Add Branch
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="medium-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form wire:submit.prevent="addBranch">
                    @csrf
                    <div class="p-4 md:p-5 space-y-4">
                        <div class="grid grid-cols-2 gap-2">
                            <div class="col-span-2">

                                <label class="text-slate-600 text-base">Branch Name</label>

                                <div class="relative ">
                                    <input type="text"
                                        class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                                        placeholder="branch_name" wire:model="branch_name" name="branch_name">

                                    <i
                                        class="fas fa-code-branch absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>

                                </div>
                                @error('branch_name')
                                    <p class="text-red-500 text-xs italic mt-1"><i
                                            class="fas fa-exclamation-circle"></i></i>{{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="col-span-2">
                                <label class="text-slate-600 text-base">Region</label>

                                <div class="relative ">
                                    <select
                                        class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                                        wire:model="region" name="region">
                                        <option class="py-2 " value="">Select Province</option>
                                        <option class="py-2 " value="1">Region 1</option>
                                        <option class="py-2 " value="2">Region 2</option>
                                        <option class="py-2 " value="3">Region 3</option>
                                        <option class="py-2 " value="4">Region 4</option>
                                        <option class="py-2 " value="5">Region 5</option>
                                        <option class="py-2 " value="6">Region 6</option>
                                        <option class="py-2 " value="7">Region 7</option>
                                        <option class="py-2 " value="8">Region 8</option>
                                        <option class="py-2 " value="9">Region 9</option>
                                        <option class="py-2 " value="10">Region 10</option>
                                        <option class="py-2 " value="11">Region 11</option>
                                        <option class="py-2 " value="12">Region 12</option>
                                        <option class="py-2 " value="13">Region 13</option>
                                        <option class="py-2 " value="MIMAROPA">MIMAROPA</option>
                                        <option class="py-2 " value="NCR">NCR</option>
                                        <option class="py-2 " value="CAR">CAR</option>
                                        <option class="py-2 " value="BARMM">BARMM</option>
                                    </select>

                                    <i
                                        class="fas fa-code-branch absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>

                                </div>

                                @error('region')
                                    <p class="text-red-500 text-xs italic mt-1"><i
                                            class="fas fa-exclamation-circle"></i></i>{{ $message }}
                                    </p>
                                @enderror

                            </div>


                            <div class="col-span-2">
                                <label class="text-slate-600 text-base">Province</label>

                                <div class="relative ">
                                    <input type="text"
                                        class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                                        placeholder="Province" name="province" wire:model="province">

                                    <i
                                        class="fas fa-code-branch absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>

                                </div>
                                @error('province')
                                    <p class="text-red-500 text-xs italic mt-1"><i
                                            class="fas fa-exclamation-circle"></i></i>{{ $message }}
                                    </p>
                                @enderror
                            </div>




                            <div class="col-span-2">
                                <label class="text-slate-600 text-base">City</label>

                                <div class="relative ">
                                    <input type="text"
                                        class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                                        placeholder="City" wire:model="city" name="city">

                                    <i
                                        class="fas fa-code-branch absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>

                                </div>
                                @error('city')
                                    <p class="text-red-500 text-xs italic mt-1"><i
                                            class="fas fa-exclamation-circle"></i></i>{{ $message }}
                                    </p>
                                @enderror

                            </div>



                            <button type="submit" data-modal-hide="medium-modal"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                            <button data-modal-hide="medium-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
