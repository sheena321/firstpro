<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       
        </head>

<body style="min-height: 700px;">
    <!-- <p>click</p> -->
    <!-- <div 
    id="div1" 
    style="background-color: rgb(238, 246, 246);
    line-height: 100px;" 
    width="100%" 

    > -->
        <img src="{{ asset('images/duckling.jpg') }}" alt="" width="200px" height="200px" id="img1" style="display: inline-block; border: 1px solid lightgreen;">
    <!-- </div> -->
</body>
    <script>

        
        $(document).ready(function () {

            $('body').click(function (e) {
                $("#img1").css({
                    position: "relative",
                    left: e.pageX,
                    top: e.pageY,
                   
                    display: 'block'

                })//.hide(2000)



                
            })
         
        })
     
    </script>


</html>