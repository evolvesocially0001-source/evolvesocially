@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">

    <!-- breadcrumb -->
    <div class="container mt-3">
        <div class="row gx-2 align-items-center">
            <div class="col col-sm mb-3 mb-md-0">
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active bi" aria-current="page">
                            Landing Banner List
                        </li>
                    </ol>
                </nav>
                <h4>Landing Banner List</h4>
            </div>

            <div class="col-auto mb-3 mb-md-0">
                <a href="{{ route('admin.landing.create') }}" class="btn btn-square btn-theme">
                    <i class="bi bi-plus-circle"></i> Add New
                </a>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container mt-3 mt-lg-4 mt-xl-5" id="main-content">

        <div class="card bg-none mb-3 mb-lg-4">
            <div class="card-body">

                <table class="table align-middle" id="mytable">
                    <thead class="table-light">
                        <tr>
                            <th>#ID</th>
                            <th>Text 1</th>
                            <th>Text 2</th>
                            <th>Text 3</th>
                            <th>Pera 1</th>
                            <th>Pera 2</th>
                            <th>Pera 3</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->text1 }}</td>
                                <td>{{ $item->text2 }}</td>
                                <td>{{ $item->text3 }}</td>

                                <td>{{ Str::limit($item->pera1, 30) }}</td>
                                <td>{{ Str::limit($item->pera2, 30) }}</td>
                                <td>{{ Str::limit($item->pera3, 30) }}</td>
                                <td>
                                    <a href="{{ route('admin.landing.edit', $item->id) }}">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </a>

                                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $item->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('admin.landing.delete', $item->id) }}" method="POST"
                                        style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted">
                                    No Data Found
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</main>

@include('admin.layout.footer')
