@include('admin.layout.header')

<main class="adminuiux-content has-sidebar" onclick="contentClick()">
    <div class="container mt-3">
        <div class="row gx-2 align-items-center">
            <div class="col col-sm mb-3 mb-md-0">
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi">
                            <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                        </li>
                    </ol>
                </nav>

                <h4 class="mt-2">Admin Settings</h4>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="main-content">
        <div class="row g-4">

            <!-- CHANGE PASSWORD -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Change Password</h5>

                        <form id="passwordForm">
                            @csrf

                            <div class="mb-3">
                                <label for="old_password" class="form-label">Old Password</label>
                                <input type="password" class="form-control" name="old_password" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" name="new_password" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" name="new_password_confirmation" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">
                                Update Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- CHANGE EMAIL -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Change Email</h5>

                        <form id="emailForm">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Old Email</label>
                                <input type="email" class="form-control" name="old_email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">New Email</label>
                                <input type="email" class="form-control" name="new_email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm New Email</label>
                                <input type="email" class="form-control" name="new_email_confirmation" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">
                                Update Email
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@include('admin.layout.footer')

<!-- AJAX + SWEETALERT SCRIPT -->
<script>
    $(document).ready(function() {

        // -----------------------------
        // GLOBAL CSRF SETUP
        // -----------------------------
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        // -----------------------------
        // FUNCTION TO SHOW VALIDATION ERRORS
        // -----------------------------
        function showValidationErrors(xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                let message = "";

                Object.values(errors).forEach(err => {
                    message += err[0] + "<br>";
                });

                Swal.fire({
                    icon: "error",
                    title: "Validation Error",
                    html: message,
                    timer: 3000
                });
            }
        }

        // -----------------------------
        // CHANGE PASSWORD AJAX
        // -----------------------------
        $('#passwordForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('admin.setting.updatePassword') }}",
                method: "POST",
                data: $(this).serialize(),

                success: function(res) {
                    Swal.fire({
                        toast: true,
                        position: "top-end",
                        icon: res.status,
                        title: res.message,
                        timer: 2500,
                        showConfirmButton: false
                    });

                    if (res.status === "success") {
                        $('#passwordForm')[0].reset();
                    }
                },

                error: function(xhr) {
                    showValidationErrors(xhr);
                }
            });
        });

        // -----------------------------
        // CHANGE EMAIL AJAX
        // -----------------------------
        $('#emailForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('admin.setting.updateEmail') }}",
                method: "POST",
                data: $(this).serialize(),

                success: function(res) {
                    Swal.fire({
                        toast: true,
                        position: "top-end",
                        icon: res.status,
                        title: res.message,
                        timer: 2500,
                        showConfirmButton: false
                    });

                    if (res.status === "success") {
                        $('#emailForm')[0].reset();
                    }
                },

                error: function(xhr) {
                    showValidationErrors(xhr);
                }
            });
        });

    });
</script>
