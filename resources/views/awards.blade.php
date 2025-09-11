<x-layout.app>
    <div class="card mb-4">
        <div class="card-header w-full d-flex flex-row justify-content-between align-items-center">
            <h3 class="card-title">Award Page</h3>
            <a href="{{ route('awards.create') }}" class="btn btn-primary btn-sm">+ Add Award</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th style="width: 120px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($awards as $award)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $award->title }}</td>
                            <td>{{ $award->year }}</td>
                            <td>
                                <a href="{{ route('awards.edit', $award) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('awards.destroy', $award) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure to delete this award?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No awards found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

</x-layout.app>
