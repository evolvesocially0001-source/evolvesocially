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
        <form action="{{ route('admin.landing.store') }}" method="POST">
            @csrf

            <!-- TEXT FIELDS -->
            <div class="card bg-none mb-3 mb-lg-4">
                <div class="card-body pb-0">
                    <div class="row gx-3 gx-lg-4">
                        <div class="col-12">
                            <h6 class="mb-3">Text Fields</h6>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input name="text1" class="form-control" placeholder="Enter Text 1" type="text">
                                <label>Text 1</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input name="text2" class="form-control" placeholder="Enter Text 2" type="text">
                                <label>Text 2</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input name="text3" class="form-control" placeholder="Enter Text 3" type="text">
                                <label>Text 3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PERA FIELDS -->
            <div class="card bg-none mb-3 mb-lg-4">
                <div class="card-body pb-0">
                    <div class="row gx-3 gx-lg-4">
                        <div class="col-12">
                            <h6 class="mb-3">Pera Sections</h6>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <textarea name="pera1" class="form-control" style="height: 120px;"></textarea>
                                <label>Pera 1</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <textarea name="pera2" class="form-control" style="height: 120px;"></textarea>
                                <label>Pera 2</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <textarea name="pera3" class="form-control" style="height: 120px;"></textarea>
                                <label>Pera 3</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row gx-3 gx-lg-4">
                <div class="col mb-3 mb-md-4">
                    <button type="submit" class="btn btn-theme">Submit</button>
                </div>
            </div>
        </form>



    </div>
</main>

@include('admin.layout.footer')
