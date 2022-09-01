<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="margin-left:200px;" >
    @csrf
        <label for="" name="l1">enter first number</label>
        <input type="text" name="fnum" id=""><br><br>
       
        <label for="" name="l1">enter second number</label>
        <input type="text" name="snum" id=""><br><br>
        <button type="submit">Sum</button>
    </form>

    @if(isset($key_sum)) 
    <p>{{ $key_sum }} </p>
    @endif
</body>
</html>