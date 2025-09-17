<x-layout.app>
    <div class="card-custom bg-white mb-4 relative">
        <div class="card-header-custom p-[1rem] w-full flex justify-between items-center">
            <h3 class="card-title">Award Page</h3>
            <!-- Button to open modal -->
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm"
                onclick="document.getElementById('createAwardModal').classList.remove('hidden')">
                + Add Award
            </button>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Year</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($awards as $award)
                        <tr class="border-t">
                            <td class="px-4 py-2 content-center">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 content-center">{{ $award->title }}</td>
                            <td class="px-4 py-2 content-center">{{ $award->year }}</td>
                            <td class="px-4 py-2 space-x-2 flex">
                                <button
                                    onclick="openUpdateModal({{ $award->id }}, '{{ $award->title }}', '{{ $award->year }}', '{{ route('awards.update', $award->id) }}')"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>
                                </button>
                                <form action="{{ route('awards.destroy', $award) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 hover:bg-red-700 text-white px-2 py-2 rounded"
                                        onclick="return confirm('Are you sure to delete this award?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">No awards found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Backdrop -->
        <div id="createAwardModal"
            class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">

            <!-- Modal content -->
            <div
                class="relative w-full max-w-md bg-white rounded-2xl shadow-lg p-10 transform transition-all duration-300 scale-95">

                <!-- Close button -->
                <button type="button" onclick="document.getElementById('createAwardModal').classList.add('hidden')"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Header -->
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Add New Award</h2>

                <!-- Form -->
                <form action="{{ route('awards.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title"
                            class="mt-1 p-2 block w-full bg-gray-300 rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            placeholder="Enter award title" required>
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Year -->
                    <div>
                        <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                        <input type="number" name="year" id="year"
                            class="mt-1 block w-full p-2 bg-gray-300 rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            placeholder="e.g. 2025" required>
                        @error('year')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-end space-x-2 pt-2">
                        <button type="reset"
                            class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 transition">
                            Reset
                        </button>
                        <button type="submit"
                            class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white shadow transition">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div id="updateAwardModal"
            class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">

            <!-- Modal content -->
            <div
                class="relative w-full max-w-md bg-white rounded-2xl shadow-lg p-10 transform transition-all duration-300 scale-95">

                <!-- Close button -->
                <button type="button" onclick="document.getElementById('updateAwardModal').classList.add('hidden')"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Header -->
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Update Award</h2>

                <!-- Form -->
                <form id="updateAwardForm" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div>
                        <label for="update-title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="update-title"
                            class="mt-1 p-2 block w-full bg-gray-300 rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            placeholder="Enter new award title" required>
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Year -->
                    <div>
                        <label for="update-year" class="block text-sm font-medium text-gray-700">Year</label>
                        <input type="number" name="year" id="update-year"
                            class="mt-1 block w-full p-2 bg-gray-300 rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            placeholder="e.g. 2025" required>
                        @error('year')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-end space-x-2 pt-2">
                        <button type="button"
                            onclick="document.getElementById('updateAwardModal').classList.add('hidden')"
                            class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 transition">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white shadow transition">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
