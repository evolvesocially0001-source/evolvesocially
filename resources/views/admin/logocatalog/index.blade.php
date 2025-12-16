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
                            Logo Catalog List
                        </li>
                    </ol>
                </nav>
                <h4>Logo Catalog List</h4>
            </div>

            <div class="col-auto mb-3 mb-md-0">
                <a href="{{ route('admin.logo.catalog.product.create') }}" class="btn btn-square btn-theme">
                    <i class="bi bi-plus-circle"></i> Add New Logo Catalog
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
                            <th style="width:60px; text-align:center;">#ID</th>
                            <th style="width:80px; text-align:center;">Image</th>
                            <th style="min-width:200px;">Title</th>
                            <th style="min-width:120px; text-align:center;">Status</th>
                            <th style="width:120px; text-align:center;">Actions</th>
                        </tr>
                    </thead>


                    <tbody>
                        @forelse ($logos as $logo)
                            <tr>
                                <!-- ID -->
                                <td class="text-center">{{ $logo->id }}</td>

                                <!-- IMAGE -->
                                <td class="text-center">
                                    @if ($logo->image)
                                        <img src="{{ asset('storage/' . $logo->image) }}"
                                            style="width:50px;height:50px;object-fit:cover;border-radius:6px;">
                                    @else
                                        <img src="https://via.placeholder.com/50?text=No+Img"
                                            style="width:50px;height:50px;object-fit:cover;border-radius:6px;">
                                    @endif
                                </td>

                                <!-- TITLE -->
                                <td>{{ $logo->title }}</td>

                                <!-- STATUS -->
                                <td class="text-center">
                                    @if ($logo->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                <!-- ACTIONS -->
                                <td class="text-center">
                                    <a href="{{ route('admin.logo.catalog.product.edit', $logo->id) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $logo->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">
                                    No Logo Catalog Found
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
    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {

                let id = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This logo category will be permanently deleted!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    if (result.isConfirmed) {

                        fetch(`{{ url('admin/logo/catalog-product') }}/${id}/delete`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Accept': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status) {
                                    Swal.fire('Deleted!', data.message, 'success');
                                    setTimeout(() => location.reload(), 800);
                                }
                            });

                    }
                });
            });
        });

    });
</script>


@include('admin.layout.footer')
