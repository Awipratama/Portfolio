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
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ $award->title }}</td>
                            <td class="px-4 py-2">{{ $award->year }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('awards.edit', $award) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('awards.destroy', $award) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded text-sm"
                                        onclick="return confirm('Are you sure to delete this award?')">
                                        Delete
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
    </div>
</x-layout.app>
