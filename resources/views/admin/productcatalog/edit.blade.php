@include('admin.layout.header')

<style>
    .file-input-fix .form-control {
        height: calc(3.5rem + 2px);
        padding-top: 1.625rem;
    }
</style>

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <div class="container mt-3">
        <div class="row gx-1 align-items-center">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Website Catalog</li>
                    </ol>
                </nav>
                <h4>Edit Website Catalog</h4>
            </div>
        </div>
    </div>

    <div class="container mt-4" id="main-content">

        <form action="{{ route('admin.website.catalog.product.update', $product->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="card bg-none mb-4">
                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-12">
                            <h6 class="mb-3">Website Catalog Details</h6>
                        </div>

                        <!-- CATEGORY -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="category_id" required>
                                    <option disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <label>Category</label>
                            </div>
                        </div>

                        <!-- URL -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="url" type="url" value="{{ $product->url }}">
                                <label>URL</label>
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3 file-input-fix">
                                <input class="form-control" name="image" type="file" accept="image/*">
                                <label>Image</label>
                            </div>

                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}"
                                    style="width:80px;height:80px;border-radius:8px;object-fit:cover;">
                            @endif
                        </div>

                        <!-- STATUS -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="status" required>
                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                                <label>Status</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row gx-3">
                <div class="col mb-4">
                    <button type="submit" class="btn btn-theme">
                        Update <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

        </form>
    </div>
</main>

@include('admin.layout.footer')
