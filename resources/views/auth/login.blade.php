<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Suit Yourself</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f0e6ff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .website-name {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: #5a3c78;
            margin-bottom: 20px;
        }

        .btn-login {
            background: #5a3c78;
            color: white;
            width: 100%;
        }

        .btn-login:hover {
            background: #7b599f;
        }
    </style>
</head>
<body>

<div class="login-card">

    <div class="website-name">Suit Yourself</div>

    <h4 class="text-center mb-4">Login to your account</h4>

    {{-- Error Message --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- SUCCESS / STATUS --}}
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-login">
            Login
        </button>

        <div class="text-center mt-3">
            <a href="/register">Don't have an account? Register</a>
        </div>

    </form>

</div>

</body>
</html>