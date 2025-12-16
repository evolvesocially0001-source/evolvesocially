@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <!-- breadcrumb -->
    <div class="container mt-3">
        <div class="row gx-1 align-items-center">
            <div class="col col-sm mb-3 mb-md-0">
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item bi">
                            <a href="#">Category</a>
                        </li>
                        <li class="breadcrumb-item active bi" aria-current="page">
                            Add Category
                        </li>
                    </ol>
                </nav>

                <h4>Add Category</h4>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <!-- FORM START -->
        <form action="{{ route('admin.logo.catalog.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card bg-none mb-3 mb-lg-4">
                <div class="card-body">

                    <h6 class="mb-4">Category Details</h6>

                    <div class="row g-4">

                        <!-- TITLE -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="title" class="form-control" placeholder="Title" required>
                                <label>Title</label>
                            </div>
                        </div>

                        <!-- STATUS -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="status" class="form-select">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <label>Status</label>
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <div class="col-md-6">
                            <label class="form-label">Category Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>

                    </div>
                </div>
            </div>

            <!-- BUTTON -->
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-theme px-4">
                        Submit
                    </button>
                </div>
            </div>

        </form>
        <!-- FORM END -->

    </div>
</main>

@include('admin.layout.footer')
