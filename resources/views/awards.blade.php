<x-layout.app>
    <div class="card-custom bg-white mb-4">
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

        <div class="createAwardModal">
            <form action="">
                
            </form>     
        </div>
    </div>
</x-layout.app>
