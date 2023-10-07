<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In-Blogs</title>
    <link href="/css/auth.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="head">
        <div class="heading">
            Sign In
        </div>
        <form method="POST" action="/signin">
            @csrf
            <input name="email" id="email" type="email" required placeholder="Enter email"
                value="{{ old('email') }}" />
            @error('email')
                <div class="message">{{ $message }}</div>
            @enderror

            <input name="password" id="password" type="password" required placeholder="Enter your password" />
            @error('password')
                <div class="message">{{ $message }}</div>
            @enderror
            <button>Log
                In</button>
        </form>
        <div class="footer">
            Don't have account?&nbsp;<a href="/signup"\>Register
                Here</a>
        </div>
    </div>
</body>

</html>
