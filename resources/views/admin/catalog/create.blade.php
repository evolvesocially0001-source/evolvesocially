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
                        <li class="breadcrumb-item active bi" aria-current="page">Add Category</li>
                    </ol>
                </nav>

                <h4>Add Category</h4>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <form action="{{ route('admin.website.catalog.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <!-- CATEGORY BASIC DETAILS -->
            <div class="card bg-none mb-3 mb-lg-4">
                <div class="card-body pb-0">
                    <div class="row gx-3 gx-lg-4">

                        <div class="col-12">
                            <h6 class="mb-3">Category Details</h6>
                        </div>

                        <!-- TITLE -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input name="title" class="form-control" type="text" placeholder="Enter Title">
                                <label>Title</label>
                            </div>
                        </div>

                        <!-- LINK -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input name="link" class="form-control" type="url" placeholder="Enter Link"
                                    disabled>
                                <label>Link URL</label>
                            </div>
                        </div>

                        <!-- IMAGE UPLOAD -->
                        <div class="col-12 col-md-6">
                            <label class="form-label">Category Image</label>
                            <input type="file" name="image" class="form-control mb-3">
                        </div>

                        <!-- STATUS -->
                        <div class="col-12 col-md-6">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control mb-3">
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="row gx-3 gx-lg-4">
                <div class="col mb-3 mb-md-4">
                    <button type="submit" class="btn btn-theme">Submit</button>
                </div>
            </div>

        </form>

    </div>
</main>

@include('admin.layout.footer')
