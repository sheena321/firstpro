<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" style="margin-left:200px; border:1px solid black;background-color:grey;width:200px;heigtht:200px;">
    @csrf
    <h3>registration</h3>
    &nbsp;&nbsp;<label for="">first name</label>    
    &nbsp;&nbsp;<input type="text" name="fname" id="">
    &nbsp;&nbsp;<label for="">lastname</label>
    &nbsp;&nbsp;<input type="text" name="lname" id="">
    &nbsp;&nbsp;<label for="">email</label>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="">
    &nbsp;&nbsp;<label for="">password</label>
    &nbsp;&nbsp;<input type="text" name="password" id=""><br>
    &nbsp;&nbsp;<button type="submit">submit</button><br>
    &nbsp;&nbsp;<button type="submit">Cancel</button><br>
    </form>
</body>
</html>