<div class="col-span-10">{{--header--}}
    <div class="overflow-x-auto mt-5 p-10">
        <h1 class="text-2x1">User Management</h1>

        {{--search bar and add button--}}
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
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Status</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-center">Action</th>
                    </tr>
                </thead>
                {{--<tbody>
                    @foreach($users as $user)
                    <tr class="text-center">
                        <td class="py-2 px-4 border-b border-gray-300">{{ $users->user_id }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $users->first }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $users->city }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $users->province }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $users->region }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                    @endforeach
                    --}}
        </div>