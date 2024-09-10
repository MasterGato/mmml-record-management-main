<div class="col-span-10">{{-- header --}}
    <div class="overflow-x-auto mt-5 p-10">
        <h1 class="text-2x1">User Management</h1>


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
                <button x-data x-on:click="$dispatch('open-modal', {name: 'add-user'})"
                    class=" bg-gray-700 hover:bg-yellow-600 rounded-lg py-2 px-4 font-semibold text-white">
                    Add
                </button>
            </div>

        </div>

        <div class="overflow-y-auto max-h-96 bg-white border-gray-300">
            <table class="w-full">
                <thead class="sticky top-0 bg-yellow-400">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Employee ID</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Full Name</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Branch</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Role</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Email</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Contact</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Action</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Status</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($employees->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center py-4">No records found</td>
                        </tr>
                    @endif
                    @foreach ($employees as $e)
                        <tr class="text-center">
                            <td class="py-2 px-4 border-b border-gray-300">{{ $e->employee_id }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $e->first_name . ' ' . $e->last_name }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $e->branch->branch_name }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $e->role }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $e->email }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $e->contact }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <button x-data x-on:click="$dispatch('open-modal', {name: 'view-user'})"
                                    class="bg-blue-700 hover:bg-blue-800 rounded-lg py-2 px-4 font-semibold text-white">
                                    View
                                </button>
                                <button x-data x-on:click="$dispatch('open-modal', {name: 'edit-user'})"
                                    wire:click="selectUser({{ $e->employee_id }})"
                                    class="bg-green-700 hover:bg-green-800 rounded-lg py-2 px-4 font-semibold text-white">
                                    Update
                                </button>
                            </td>

                            <td class="py-2 px-4 border-b border-gray-300">

                                @if ($e->status == 'Active')
                                    <button wire:click="deactivateUser({{ $e->employee_id }})"
                                        class="px-2 py-1 bg-green-600 hover:bg-green-800 rounded-full text-white">{{ $e->status }}</span>
                                @endif
                                @if ($e->status == 'Inactive')
                                    <button wire:click="activateUser({{ $e->employee_id }})"
                                        class="px-2 py-1 bg-red-600 hover:bg-red-800 rounded-full text-white">{{ $e->status }}</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>





    <x-modal.modal name="add-user" title="Add User">
        @slot('body')
            <form wire:submit.prevent="save">
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <x-text-field.text-field label="First Name" placeholder="First Name" model="firstName"
                            name="firstName" type="text" />
                        @error('firstName')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Middle Name" placeholder="Midlle Name" model="middleName"
                            name="middleName" type="text" />
                        @error('middleName')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Last Name" placeholder="Last Name" model="lastName" name="lastName"
                            type="text" />
                        @error('lastName')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Contact Number" placeholder="Contact Number" model="contactNumber"
                            name="contactNumber" type="text" />
                        @error('contactNumber')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="">Branch</label>
                        <select class="w-full outline-none border border-slate-200 rounded-lg px-3 py-3" wire:model="branch"
                            name="branch">
                            <option class="py-2 " value="">Select Branch</option>
                            @foreach ($branches as $branch)
                                <option class="py-2" value="{{ $branch->branch_id }}">{{ $branch->branch_name }}
                                </option>
                            @endforeach
                        </select>

                        @error('branch')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="">Role</label>
                        <select class="w-full outline-none border border-slate-200 rounded-lg px-3 py-3" wire:model="role"
                            name="role">
                            <option class="py-2" value="">Select Role</option>
                            <option class="py-2" value="Manager">Manager</option>
                            <option class="py-2" value="Clerk">Clerk</option>
                            <option class="py-2" value="Admin">Admin</option>
                        </select>

                        @error('role')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Username" placeholder="Username" model="username"
                            name="username" type="text" />
                        @error('username')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div>
                        <x-text-field.text-field label="Email" placeholder="Email" model="email" name="email"
                            type="text" />
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Password" placeholder="Password" model="password"
                            name="password" type="password" />
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="col-span-2 flex justify-end">

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    </div>
                </div>
            </form>



        @endslot
    </x-modal.modal>

    <x-modal.modal name="edit-user" title="Update User">
        @slot('body')
            <form wire:submit.prevent="save">
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <x-text-field.text-field label="First Name" placeholder="First Name" model="firstName"
                            name="firstName" type="text" />
                        @error('firstName')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Middle Name" placeholder="Midlle Name" model="middleName"
                            name="middleName" type="text" />
                        @error('middleName')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Last Name" placeholder="Last Name" model="lastName"
                            name="lastName" type="text" />
                        @error('lastName')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Contact Number" placeholder="Contact Number"
                            model="contactNumber" name="contactNumber" type="text" />
                        @error('contactNumber')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="">Branch</label>
                        <select class="w-full outline-none border border-slate-200 rounded-lg px-3 py-3"
                            wire:model="branch" name="branch">
                            <option class="py-2 " value="">Select Branch</option>
                            @foreach ($branches as $branch)
                                <option class="py-2" value="{{ $branch->branch_id }}">{{ $branch->branch_name }}
                                </option>
                            @endforeach
                        </select>

                        @error('branch')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="">Role</label>
                        <select class="w-full outline-none border border-slate-200 rounded-lg px-3 py-3" wire:model="role"
                            name="role">
                            <option class="py-2" value="">Select Role</option>
                            <option class="py-2" value="Manager">Manager</option>
                            <option class="py-2" value="Clerk">Clerk</option>
                            <option class="py-2" value="Admin">Admin</option>
                        </select>

                        @error('role')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Username" placeholder="Username" model="username"
                            name="username" type="text" />
                        @error('username')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>


                    <div>
                        <x-text-field.text-field label="Email" placeholder="Email" model="email" name="email"
                            type="text" />
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <x-text-field.text-field label="Password" placeholder="Password" model="password"
                            name="password" type="password" />
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-1"><i
                                    class="fas fa-exclamation-circle"></i></i>{{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="col-span-2 flex justify-end">

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    </div>
                </div>
            </form>



        @endslot
    </x-modal.modal>


</div>
