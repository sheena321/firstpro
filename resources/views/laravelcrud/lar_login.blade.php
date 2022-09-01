<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>
<body>
<form action="" method="post" style="border:1px solid grey;background-color: grey;">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col">
                <label for=""><h1 style="margin-left:100px ;">login</h1></label><br>
                <label for="">email</label>
                <input type="text" name="email" id="" value=""><br>
                <label for="">password</label>
                <input type="text" name="psw" id="" value=""><br>
                <button type="submit">ok</button>
                <button type="submit">cancel</button>
            </div>
        </div>
    </div>
  
</form>
@if(isset($key_disp))
<p>{{$key_disp->email}}</p>

@endif
@if(isset($key_chkvalue))
<!-- <p>{{$key_chkvalue}}</p> or-->
<script>alert("{{$key_chkvalue}}");</script>
@endif

</body>
</html>