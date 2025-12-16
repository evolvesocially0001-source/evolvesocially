@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <div class="container mt-3">
        <h4>Edit Logo Category</h4>
    </div>

    <div class="container mt-4">

        <form action="{{ route('admin.logo.catalog.product.update', $logo->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="card">
                <div class="card-body">

                    <div class="row g-4">

                        <!-- TITLE -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="title" class="form-control" value="{{ $logo->title }}"
                                    required>
                                <label>Title</label>
                            </div>
                        </div>

                        <!-- STATUS -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="status" class="form-select">
                                    <option value="1" {{ $logo->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $logo->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                <label>Status</label>
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <div class="col-md-6">
                            <label class="form-label">Category Image</label>
                            <input type="file" name="image" class="form-control">

                            @if ($logo->image)
                                <img src="{{ asset('storage/' . $logo->image) }}" class="mt-2"
                                    style="width:80px;border-radius:6px;">
                            @endif
                        </div>

                    </div>

                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-theme px-4">
                    Update
                </button>
            </div>

        </form>

    </div>
</main>

@include('admin.layout.footer')
