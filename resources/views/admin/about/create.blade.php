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
                        <li class="breadcrumb-item active">About Me</li>
                    </ol>
                </nav>
                <h4>Add About Me</h4>
            </div>
        </div>
    </div>

    <div class="container mt-4" id="main-content">

        <form action="{{ route('admin.aboutpage.store') }}" method="POST">
            @csrf

            <div class="card bg-none mb-4">
                <div class="card-body">
                    <div class="row gx-3">

                        <div class="col-12">
                            <h6 class="mb-3">About Me Details</h6>
                        </div>

                        <!-- Heading -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="heading" type="text" placeholder="Enter Heading">
                                <label>Heading</label>
                            </div>
                        </div>

                        <!-- Paragraph -->
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="paragraph" placeholder="Enter Paragraph">
                                <label>Paragraph</label>
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
