@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <div class="container mt-3">
        <div class="row gx-1 align-items-center">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Who We Are</li>
                    </ol>
                </nav>
                <h4>Add Who We Are</h4>
            </div>
        </div>
    </div>

    <div class="container mt-4" id="main-content">

        <form action="{{ route('admin.whoweare.store') }}" method="POST">
            @csrf

            <div class="card bg-none mb-4">
                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-12">
                            <h6 class="mb-3">Who We Are Details</h6>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="pera1" type="text" placeholder="pera1">
                                <label>pera1</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="pera2" type="text" placeholder="pera2">
                                <label>pera2</label>
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
