@include('admin.layout.header')

<main class="adminuiux-content has-sidebar">

    <div class="container mt-4">
        <h4>Edit Category</h4>

        <form action="{{ route('admin.website.catalog.update', $category->id) }}" method="POST"
            enctype="multipart/form-data" class="mt-4">
            @csrf
            @method('PUT')

            <div class="card mb-3">
                <div class="card-body">

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $category->title }}"
                            required>
                    </div>

                    <!-- Short Description -->
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="link" class="form-control" value="{{ $category->link }}">
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3">
                        <label class="form-label">Category Image</label>
                        <input type="file" name="image" class="form-control">

                        @if ($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" class="mt-2" width="100"
                                height="100" style="object-fit:cover; border-radius:6px;">
                        @endif
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-theme">Update</button>
            <a href="{{ route('admin.website.catalog') }}" class="btn btn-link">Cancel</a>

        </form>
    </div>

</main>

@include('admin.layout.footer')
