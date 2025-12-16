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
                        <li class="breadcrumb-item active bi" aria-current="page">
                            Website Product Catalog List
                        </li>
                    </ol>
                </nav>
                <h4>Website Product Catalog List</h4>
            </div>

            <!-- Add Button -->
            <div class="col-auto mb-3 mb-md-0">
                <a href="{{ route('admin.website.catalog.product.create') }}" class="btn btn-square btn-theme">
                    <i class="bi bi-plus-circle"></i> Add Website Catalog
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
                            <th style="width:60px;">#</th>
                            <th>Category</th>
                            <th>URL</th>
                            <th style="width:100px;">Image</th>
                            <th style="width:90px;">Status</th>
                            <th style="width:120px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>

                                <!-- Category Title -->
                                <td>
                                    {{ $product->category->title ?? 'N/A' }}
                                </td>

                                <!-- URL -->
                                <td>
                                    @if ($product->url)
                                        <a href="{{ $product->url }}" target="_blank">
                                            {{ Str::limit($product->url, 40) }}
                                        </a>
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>

                                <!-- Image -->
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}"
                                            style="width:50px;height:50px;object-fit:cover;border-radius:6px;">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                <!-- Status -->
                                <td>
                                    @if ($product->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                <!-- Actions -->
                                <td>
                                    <a href="{{ route('admin.website.catalog.product.edit', $product->id) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger delete-btn"
                                        data-id="{{ $product->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <form id="delete-form-{{ $product->id }}"
                                        action="{{ route('admin.website.catalog.product.destroy', $product->id) }}"
                                        method="POST" style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    No catalog products found.
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
    $('.delete-btn').on('click', function() {
        let id = $(this).data('id');
        let url = "{{ url('admin/website/catalog-product') }}/" + id;

        Swal.fire({
            title: 'Are you sure?',
            text: "This product will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        Swal.fire('Deleted!', res.message, 'success');
                        setTimeout(() => location.reload(), 800);
                    }
                });
            }
        });
    });
</script>


@include('admin.layout.footer')
