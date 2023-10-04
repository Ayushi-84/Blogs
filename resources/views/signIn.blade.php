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
    </style>
    <title>Sign In-Blogs</title>
</head>

<body style="background:white;width:98%; height:100vh;display:flex;justify-content:center;align-items:center;">
    <div style="background:white;width:30%;height:50%;border-radius:20px;box-shadow:4px 0px 8px 4px #cacaca;overflow:hidden;">
<div style="width:100%;height:15%;color:white;font-size:20px;font-weight:600;display:flex;justify-content:center;align-items:center;background-color:rgb(53, 53, 252);font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    Sign In
</div>
<form method="POST" action="/" style="width:100%;height:71%;display:flex;justify-content:center;align-items:center;flex-direction:column">
    @csrf
    <input name="email" id="email" type="email" style="width:74%;height:15%;border:1px solid rgb(169, 169, 252);border-radius:10px;padding-right:3%;padding-left:3%;" required placeholder="Enter email"/>
    <input name="password" id="password" type="password" style="width:74%;height:15%;border:1px solid rgb(169, 169, 252);margin-top:5%;border-radius:10px;padding-right:3%;padding-left:3%;" required placeholder="Enter your password"/>

    <button style="width:80%;height:18%;border:1px solid #cacaca;margin-top:5%;border-radius:10px;color:white;font-size:20px;font-weight:600;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;background-color:rgb(53, 53, 252);">Log In</button>
</form>
<div style="width:100%;height:15%;color:white;font-size:12px;font-weight:600;display:flex;justify-content:center;align-items:center;background-color:rgb(53, 53, 252);font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  Don't have account?&nbsp;<a href="/signup" style="color:white;font-size:12px;font-weight:600;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;cursor:pointer;">Register Here</a>
</div>
    </div>
</body>

</html>
