<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Suit Yourself</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f0e6ff;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial,sans-serif;
        }

        .register-card{
            background:white;
            padding:40px;
            border-radius:15px;
            width:100%;
            max-width:500px;
            box-shadow:0 0 20px rgba(0,0,0,.1);
        }

        .title{
            text-align:center;
            color:#5a3c78;
            margin-bottom:25px;
            font-weight:bold;
        }

        .btn-register{
            background:#5a3c78;
            color:white;
            width:100%;
        }

        .btn-register:hover{
            background:#7b599f;
            color:white;
        }
    </style>
</head>
<body>

<div class="register-card">

    <h2 class="title">Suit Yourself</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ old('name') }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ old('email') }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text"
                   name="phone"
                   class="form-control"
                   value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password"
                   name="password"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   required>
        </div>

        <button type="submit" class="btn btn-register">
            Register
        </button>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}">
                Already have an account? Login
            </a>
        </div>

    </form>

</div>

</body>
</html>