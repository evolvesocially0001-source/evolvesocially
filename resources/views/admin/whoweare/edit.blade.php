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
                        <li class="breadcrumb-item bi"><a href="#">Who We Are</a></li>
                        <li class="breadcrumb-item active bi" aria-current="page">Edit Entry</li>
                    </ol>
                </nav>
                <h4>Edit Who We Are</h4>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <div class="card bg-none mb-3 mb-lg-4">
            <div class="card-body pb-0">

                <!-- Update Form -->
                <form action="{{ route('admin.whoweare.update', $item->id) }}" method="POST">
                    @csrf

                    <div class="row gx-3 gx-lg-4">
                        <div class="col-12">
                            <h6 class="mb-3">Edit Who We Are</h6>
                        </div>

                        <!-- pera1 -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="pera1" type="text" value="{{ $item->pera1 }}"
                                    placeholder="pera1">
                                <label>Pera 1</label>
                            </div>
                        </div>

                        <!-- pera2 -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="pera2" type="text" value="{{ $item->pera2 }}"
                                    placeholder="pera2">
                                <label>Pera 2</label>
                            </div>
                        </div>

                    </div>

                    <!-- Buttons -->
                    <div class="row gx-3 gx-lg-4">
                        <div class="col mb-3 mb-md-4">
                            <button type="submit" class="btn btn-theme">
                                Update <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>

                        <div class="col-auto mb-3 mb-md-4">
                            <a href="{{ route('admin.whoweare.index') }}" class="btn btn-square btn-link theme-red">
                                Cancel
                            </a>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
</main>

@include('admin.layout.footer')
