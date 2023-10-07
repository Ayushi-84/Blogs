<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up-Blogs</title>
    <link href="/css/auth.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="head">
        <div class="heading">
            Sign Up
        </div>
        <form method="POST" action="/signup">
            @csrf
            <div class="col">
                <input name="firstName" id="firstName" type="text" class="sub-col" required
                    placeholder="Enter First Name" value="{{ old('firstName') }}" />
                <input name="lastName" id="lastName" type="text" class="sub-col" required
                    placeholder="Enter Last Name" value="{{ old('lastName') }}" />
            </div>
            <div class="message-col">
                @error('firstName')
                    <div class="sub-message">{{ $message }}</div>
                @enderror
                @error('lastName')
                    <div class="sub-message">{{ $message }}</div>
                @enderror
            </div>
            <input name="username" id="username" type="text" required placeholder="Enter username"
                value="{{ old('username') }}" />
            @error('username')
                <div class="message">{{ $message }}</div>
            @enderror
            <input name="email" id="email" type="email" required placeholder="Enter email"
                value="{{ old('email') }}" />
            @error('email')
                <div class="message">{{ $message }}</div>
            @enderror
            <input name="mobileNumber" id="mobileNumber" type="number" placeholder="Enter you mobile" value="{{ old('mobileNumber') }}" />
            @error('mobileNumber')
                <div class="message">{{ $message }}</div>
            @enderror
            <input name="password" id="password" type="password" required placeholder="Enter your password" />
            @error('password')
                <div class="message">{{ $message }} must include special characters and numbers</div>
            @enderror
            <button type="submit">Register</button>
        </form>
        <div class="footer">
            Do yo have a account?&nbsp;<a href="/signin">Login Here</a>
        </div>
    </div>
</body>

</html>
