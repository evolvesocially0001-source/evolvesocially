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
                            <a href="#">Landing Banner</a>
                        </li>
                        <li class="breadcrumb-item active bi" aria-current="page">Edit Banner</li>
                    </ol>
                </nav>
                <h4>Edit Landing Banner</h4>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <form action="{{ route('admin.landing.update', $item->id) }}" method="POST">
            @csrf

            <!-- TEXT FIELDS -->
            <div class="card bg-none mb-3 mb-lg-4">
                <div class="card-body pb-0">
                    <div class="row gx-3 gx-lg-4">

                        <div class="col-12">
                            <h6 class="mb-3">Text Fields</h6>
                        </div>

                        <!-- Text 1 -->
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input name="text1" class="form-control" type="text" placeholder="Enter Text 1"
                                    value="{{ $item->text1 }}">
                                <label>Text 1</label>
                            </div>
                        </div>

                        <!-- Text 2 -->
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input name="text2" class="form-control" type="text" placeholder="Enter Text 2"
                                    value="{{ $item->text2 }}">
                                <label>Text 2</label>
                            </div>
                        </div>

                        <!-- Text 3 -->
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <input name="text3" class="form-control" type="text" placeholder="Enter Text 3"
                                    value="{{ $item->text3 }}">
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

                        <!-- Pera 1 -->
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <textarea name="pera1" class="form-control" style="height: 120px;" placeholder="Enter Pera 1">{{ $item->pera1 }}</textarea>
                                <label>Pera 1</label>
                            </div>
                        </div>

                        <!-- Pera 2 -->
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <textarea name="pera2" class="form-control" style="height: 120px;" placeholder="Enter Pera 2">{{ $item->pera2 }}</textarea>
                                <label>Pera 2</label>
                            </div>
                        </div>

                        <!-- Pera 3 -->
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-3">
                                <textarea name="pera3" class="form-control" style="height: 120px;" placeholder="Enter Pera 3">{{ $item->pera3 }}</textarea>
                                <label>Pera 3</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="row gx-3 gx-lg-4">
                <div class="col mb-3 mb-md-4">
                    <button type="submit" class="btn btn-theme">Update</button>
                </div>

                <div class="col-auto mb-3 mb-md-4">
                    <a href="{{ route('admin.landing.index') }}" class="btn btn-square btn-link theme-red">
                        Cancel
                    </a>
                </div>
            </div>

        </form>

    </div>

</main>

@include('admin.layout.footer')
