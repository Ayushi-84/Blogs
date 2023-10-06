<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        input:focus {
            outline: none !important;
            outline-width: 0px !important;
        }

        input::-webkit-inner-spin-button {
            display: none;
        }
    </style>
    <title>Sign Up-Blogs</title>
</head>

<body style="background:white;width:98%; height:100vh;display:flex;justify-content:center;align-items:center;">
    <div
        style="background:white;width:30%;height:70%;border-radius:20px;box-shadow:4px 0px 8px 4px #cacaca;overflow:hidden;">
        <div
            style="width:100%;height:10%;color:white;font-size:20px;font-weight:600;display:flex;justify-content:center;align-items:center;background-color:rgb(53, 53, 252);font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            Sign Up
        </div>
        <form method="POST" action="/signup"
            style="width:100%;height:81%;display:flex;justify-content:center;align-items:center;flex-direction:column;">
            <div
                style="width:100%;height:81%;display:flex;justify-content:center;align-items:center;flex-direction:column;">

                @csrf
                <div
                    style="width:80%;height:25px;display:flex;justify-content:space-between;align-items:center;flex-direction:row;">
                    <input name="firstName" id="firstName" type="text"
                        style="width:42%;height:100%;border:1px solid rgb(169, 169, 252);margin-top:5%;border-radius:10px;padding-right:3%;padding-left:3%;"
                        required placeholder="Enter First Name"
                        value="{{old('firstName')}}" />
                    <input name="lastName" id="lastName" type="text"
                        style="width:42%;height:100%;border:1px solid rgb(169, 169, 252);margin-top:5%;border-radius:10px;padding-right:3%;padding-left:3%;"
                        required placeholder="Enter Last Name"
                        value="{{old('lastName')}}"/>
                </div>
                <div
                    style="width:80%;display:flex;justify-content:space-between;align-items:center;flex-direction:row;margin-top:3%;">
                    @error('firstName')
                        <div style="width:49%;color:red;font-size:12px">{{ $message }}</div>
                    @enderror
                    @error('lastName')
                        <div style="width:49%;color:red;font-size:12px">{{ $message }}</div>
                    @enderror
                </div>
                <input name="username" id="username" type="text"
                    style="width:74%;height:25px;border:1px solid rgb(169, 169, 252);margin-top:2%;border-radius:10px;padding-right:3%;padding-left:3%;"
                    required placeholder="Enter username"
                    value="{{old('username')}}"/>
                @error('username')
                    <div style="width:80%;color:red;font-size:12px">{{ $message }}</div>
                @enderror
                <input name="email" id="email" type="email"
                    style="width:74%;height:25px;border:1px solid rgb(169, 169, 252);margin-top:3%;border-radius:10px;padding-right:3%;padding-left:3%;"
                    required placeholder="Enter email"
                    value="{{old('email')}}"/>
                @error('email')
                    <div style="width:80%;color:red;font-size:12px">{{ $message }}</div>
                @enderror
                <input name="mobileNumber" id="mobileNumber" type="number"
                    style="width:74%;height:25px;border:1px solid rgb(169, 169, 252);margin-top:3%;border-radius:10px;padding-right:3%;padding-left:3%;"
                    required placeholder="Enter mobile number"
                    value="{{old('mobileNumber')}}"/>
                @error('mobileNumber')
                    <div style="width:80%;color:red;font-size:12px">{{ $message }}</div>
                @enderror
                <input name="password" id="password" type="password"
                    style="width:74%;height:25px;border:1px solid rgb(169, 169, 252);margin-top:3%;border-radius:10px;padding-right:3%;padding-left:3%;"
                    required placeholder="Enter your password" />
                @error('password')
                    <div style="width:80%;color:red;font-size:12px">{{ $message }} must include special characters and numbers</div>
                @enderror
                <button type="submit"
                    style="width:80%;height:35px;border:1px solid #cacaca;margin-top:5%;border-radius:10px;color:white;font-size:20px;font-weight:600;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;background-color:rgb(53, 53, 252);">Register</button>
            </div>
        </form>
        <div
            style="width:100%;height:10%;color:white;font-size:12px;font-weight:600;display:flex;justify-content:center;align-items:center;background-color:rgb(53, 53, 252);font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Do yo have a account?&nbsp;<a href="/signin"
                style="color:white;font-size:12px;font-weight:600;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;cursor:pointer;">Login
                Here</a>
        </div>
    </div>
</body>

</html>
