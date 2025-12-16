@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <!-- breadcrumb -->
    <div class="container mt-3">
        <div class="row gx-2 align-items-center">
            <div class="col col-sm mb-3 mb-md-0">
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active bi" aria-current="page">
                            Website Catalog List
                        </li>
                    </ol>
                </nav>
                <h4>Website Catalog List</h4>
            </div>

            <div class="col-auto mb-3 mb-md-0">
                <a href="{{ route('admin.website.catalog.create') }}" class="btn btn-square btn-theme">
                    <i class="bi bi-plus-circle"></i> Add New Website Catalog
                </a>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <div class="card bg-none mb-3 mb-lg-4">
            <div class="card-body">
                <table class="table align-middle" id="mytable">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px; text-align:center;">#ID</th>
                            <th style="width: 80px; text-align:center;">Image</th>
                            <th style="min-width: 160px;">Title</th>
                            <th style="min-width: 260px;">Short Description</th>
                            <th style="min-width: 100px; text-align:center;">Status</th>
                            <th style="width: 120px; text-align:center;">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($categories as $item)
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>

                                <!-- IMAGE -->
                                <td class="text-center">
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}"
                                            style="width:50px; height:50px; object-fit:cover; border-radius:6px;">
                                    @else
                                        <img src="https://via.placeholder.com/50x50?text=No+Img"
                                            style="width:50px; height:50px; object-fit:cover; border-radius:6px;">
                                    @endif
                                </td>

                                <!-- TITLE -->
                                <td>{{ $item->title }}</td>

                                <!-- LINK as Description -->
                                <td>{{ Str::limit($item->link ?? 'N/A', 40) }}</td>

                                <!-- STATUS -->
                                <td class="text-center">
                                    @if ($item->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                <!-- ACTIONS -->
                                <td class="text-center">

                                    <!-- EDIT BUTTON -->
                                    <a href="{{ route('admin.website.catalog.edit', $item->id) }}">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </a>

                                    <!-- DELETE BUTTON -->
                                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $item->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    No categories found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>


            </div>
        </div>

    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).on('click', '.delete-btn', function() {
        let id = $(this).data('id');

        Swal.fire({
            title: "Are you sure?",
            text: "This category will be permanently deleted!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e3342f",
            cancelButtonColor: "#6c757d",
            confirmButtonText: "Yes, Delete it!"
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: "{{ url('admin/website/catalog') }}/" + id + "/delete",
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        Swal.fire("Deleted!", response.message, "success");

                        setTimeout(() => {
                            location.reload();
                        }, 800);
                    }
                });

            }
        });
    });
</script>

@include('admin.layout.footer')
