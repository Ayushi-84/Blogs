<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
    input:focus{
        outline: none !important;
        outline-width: 0px !important;
    }
    input::-webkit-inner-spin-button{
        display: none;
    }
    </style>
    <title>Sign Up-Blogs</title>
</head>

<body style="background:white;width:98%; height:100vh;display:flex;justify-content:center;align-items:center;">
    <div style="background:white;width:30%;height:70%;border-radius:20px;box-shadow:4px 0px 8px 4px #cacaca;overflow:hidden;">
<div style="width:100%;height:10%;color:white;font-size:20px;font-weight:600;display:flex;justify-content:center;align-items:center;background-color:rgb(53, 53, 252);font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    Sign Up
</div>
<form method="POST" action="/signup" style="width:100%;height:81%;display:flex;justify-content:center;align-items:center;flex-direction:column;">
<div style="width:100%;height:81%;display:flex;justify-content:center;align-items:center;flex-direction:column;">

    @csrf
    <div style="width:80%;height:10%;display:flex;justify-content:space-between;align-items:center;flex-direction:row;">
        <input name="firstName" id="firstName" type="text" style="width:42%;height:100%;border:1px solid rgb(169, 169, 252);margin-top:5%;border-radius:10px;padding-right:3%;padding-left:3%;" required placeholder="Enter First Name"/>
        <input name="lastName" id="lastName" type="text" style="width:42%;height:100%;border:1px solid rgb(169, 169, 252);margin-top:5%;border-radius:10px;padding-right:3%;padding-left:3%;" required placeholder="Enter Last Name"/>
    </div>
    <input name="email" id="email" type="email" style="width:74%;height:10%;border:1px solid rgb(169, 169, 252);margin-top:5%;border-radius:10px;padding-right:3%;padding-left:3%;" required placeholder="Enter email"/>
    <input name="mobileNumber" id="mobileNumber" type="number" style="width:74%;height:10%;border:1px solid rgb(169, 169, 252);margin-top:3%;border-radius:10px;padding-right:3%;padding-left:3%;" required placeholder="Enter mobile number"/>
    <input name="password" id="password" type="password" style="width:74%;height:10%;border:1px solid rgb(169, 169, 252);margin-top:3%;border-radius:10px;padding-right:3%;padding-left:3%;" required placeholder="Enter your password"/>
    <button type="submit" style="width:80%;height:13%;border:1px solid #cacaca;margin-top:5%;border-radius:10px;color:white;font-size:20px;font-weight:600;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;background-color:rgb(53, 53, 252);">Register</button>
</div>
</form>
<div style="width:100%;height:10%;color:white;font-size:12px;font-weight:600;display:flex;justify-content:center;align-items:center;background-color:rgb(53, 53, 252);font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  Do yo have a account?&nbsp;<a href="/" style="color:white;font-size:12px;font-weight:600;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;cursor:pointer;">Login Here</a>
</div>
    </div>
</body>

</html>
