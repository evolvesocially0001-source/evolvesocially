@include('admin.layout.header')

<style>
    /* File input height equal to form-floating inputs */
    .file-input-fix .form-control {
        height: calc(3.5rem + 2px);
        /* same as bootstrap floating input */
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
                        <li class="breadcrumb-item active">Create Website Catalog</li>
                    </ol>
                </nav>
                <h4>Create Website Catalog</h4>
            </div>
        </div>
    </div>

    <div class="container mt-4" id="main-content">

        <form action="{{ route('admin.website.catalog.product.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="card bg-none mb-4">
                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-12">
                            <h6 class="mb-3">Website Catalog Details</h6>
                        </div>

                        <!-- 1️⃣ CATEGORY DROPDOWN -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="category_id" required>
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>

                                <label>Category</label>
                            </div>
                        </div>

                        <!-- 2️⃣ URL INPUT -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="url" type="url"
                                    placeholder="https://example.com">
                                <label>URL</label>
                            </div>
                        </div>

                        <!-- 3️⃣ IMAGE UPLOAD (HEIGHT FIXED) -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3 file-input-fix">
                                <input class="form-control" name="image" type="file" accept="image/*">
                                <label>Image</label>
                            </div>
                        </div>

                        <!-- 4️⃣ STATUS -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="status" required>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
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
                        Submit <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

        </form>
    </div>
</main>

@include('admin.layout.footer')
