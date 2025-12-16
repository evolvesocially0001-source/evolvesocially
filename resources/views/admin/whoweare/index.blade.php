@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <!-- Breadcrumb -->
    <div class="container mt-3">
        <div class="row gx-2 align-items-center">

            <div class="col col-sm mb-3 mb-md-0">
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active bi" aria-current="page">Who We Are</li>
                    </ol>
                </nav>
                <h4>Who We Are</h4>
            </div>

            <!-- Add Button -->
            <div class="col-auto mb-3 mb-md-0">
                <a href="{{ route('admin.whoweare.create') }}" class="btn btn-square btn-theme">
                    <i class="bi bi-plus-circle"></i> Add Entry
                </a>
            </div>

        </div>
    </div>

    <!-- Content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <!-- Table Card -->
        <div class="card bg-none mb-3 mb-lg-4">
            <div class="card-body">

                <!-- Show session messages -->
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <table class="table align-middle" id="mytable">
                    <thead class="table-light">
                        <tr>
                            <th>Sr. No</th>
                            <th>Pera 1</th>
                            <th>Pera 2</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($data->count() > 0)
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>

                                    <td>{{ Str::limit($item->pera1, 40) }}</td>
                                    <td>{{ Str::limit($item->pera2, 40) }}</td>

                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.whoweare.edit', $item->id) }}">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </a>

                                        <form action="{{ route('admin.whoweare.delete', $item->id) }}" method="POST"
                                            class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center text-muted">
                                    No entries found.
                                </td>
                            </tr>
                        @endif
                    </tbody>

                </table>

            </div>
        </div>
    </div>

</main>
<script>
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "This entry will be permanently deleted!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

@include('admin.layout.footer')
