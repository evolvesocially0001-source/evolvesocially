<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>MY DASHBOARD – Login</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f2f9f5, #e6f2ea);
        }

        .container {
            display: flex;
            flex-direction: row;
            /* ✅ Now correct side */
            width: 90%;
            max-width: 1000px;
            height: 600px;
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
            animation: fadeIn 0.8s ease;
        }

        /* LEFT SIDE - IMAGE */
        .image-section {
            flex: 1;
            background: linear-gradient(145deg, #dff3ea, #cde7dc);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .image-section img {
            width: 75%;
            max-width: 420px;
            animation: float 4s ease-in-out infinite;
            filter: drop-shadow(0 8px 20px rgba(0, 0, 0, 0.1));
        }

        /* RIGHT SIDE - LOGIN FORM */
        .login-section {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-section h3 {
            color: #6e9e7a;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .login-section h1 {
            color: #c15772;
            font-weight: 700;
            font-size: 26px;
            margin-bottom: 30px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 45px 14px 15px;
            border-radius: 50px;
            border: 1px solid #d3dad7;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .form-group input:focus {
            border-color: #81b693;
            box-shadow: 0 0 0 3px rgba(129, 182, 147, 0.25);
        }

        .form-group i {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ba9a1;
            cursor: pointer;
            font-size: 18px;
        }

        .btn {
            width: 100%;
            padding: 14px 0;
            background: #7fa77d;
            border: none;
            border-radius: 50px;
            font-size: 15px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #6e9d6b;
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(112, 153, 108, 0.25);
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        footer {
            position: absolute;
            bottom: 14px;
            width: 100%;
            text-align: center;
            font-size: 13px;
            color: #7d8a85;
        }

        footer a {
            color: #6c9f79;
            text-decoration: none;
            font-weight: 500;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media(max-width: 850px) {
            .container {
                flex-direction: column;
                height: auto;
            }

            .image-section {
                display: none;
            }

            .login-section {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- ✅ IMAGE ON LEFT -->
        <div class="image-section">
            <img src="assets/admin/img/logo-light.svg" alt="Dashboard Illustration">
        </div>

        <!-- ✅ LOGIN ON RIGHT -->
        <div class="login-section">
            <h3>Welcome to,</h3>
            <h1>Admin <b>MY DASHBOARD</b></h1>

            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="bi bi-eye" id="toggleIcon"></i>
                </div>

                <button class="btn">Login</button>

                @if (session('error'))
                    <p style="color:red; margin-top:10px;">{{ session('error') }}</p>
                @endif
            </form>

        </div>
    </div>

    <footer>
        Copyright © 2025, Developed by
        <a href="https://evolvesocially.com/" target="_blank">EvolveSocially</a>
    </footer>

    <script>
        const toggleIcon = document.querySelector('#toggleIcon');
        const passwordField = document.querySelector('#password');

        toggleIcon.addEventListener('click', () => {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            toggleIcon.classList.toggle('bi-eye');
            toggleIcon.classList.toggle('bi-eye-slash');
        });
    </script>

</body>

</html>
