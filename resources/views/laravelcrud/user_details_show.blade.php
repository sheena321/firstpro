<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   @if (isset($key_display))

<label for="">first_name</label>
<input type="text" name="fname" id="" value="{{$key_display->fname}}">
<label for="">last_name</label>
<input type="text" name="lname" id="" value="{{$key_display->lname}}">
<label for="">email</label>
<input type="text" name="email" id="" value="{{$key_display->email}}">
<label for="">password</label>
<input type="text" name="psw" id="" value="{{$key_display->password}}">
<!-- <h1>{{$key_display->password}}</h1> -->
@endif
</body>
</html>