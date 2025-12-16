@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <!-- Breadcrumb -->
    <div class="container mt-3">
        <div class="row gx-2 align-items-center">

            <div class="col col-sm mb-3 mb-md-0">
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Me List</li>
                    </ol>
                </nav>
                <h4>About Me</h4>
            </div>

            <div class="col-auto mb-3 mb-md-0">
                <a href="{{ route('admin.aboutpage.create') }}" class="btn btn-square btn-theme">
                    <i class="bi bi-plus-circle"></i> Add New
                </a>
            </div>

        </div>
    </div>

    <!-- Content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <div class="card bg-none mb-3 mb-lg-4">
            <div class="card-body">
                <table class="table align-middle" id="mytable">
                    <thead class="table-light">
                        <tr>
                            <th>#ID</th>
                            <th>Heading</th>
                            <th>Paragraph</th>
                            <th>Created At</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @if ($data->count() > 0)

                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ Str::limit($item->heading, 40) }}</td>
                                    <td>{{ Str::limit($item->paragraph, 60) }}</td>
                                    <td>{{ $item->created_at->format('d M, Y') }}</td>

                                    <td>
                                        <!-- EDIT BUTTON -->
                                        <a href="{{ route('admin.aboutpage.edit', $item->id) }}"
                                            class="btn btn-sm btn-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <!-- DELETE BUTTON -->
                                        <form action="{{ route('admin.aboutpage.delete', $item->id) }}" method="POST"
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
                                <td colspan="5" class="text-center text-muted">No About Me entry found.</td>
                            </tr>
                        @endif

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</main>

@include('admin.layout.footer')

<!-- SweetAlert Delete Script -->
<script>
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "This item will be deleted permanently.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then(result => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
