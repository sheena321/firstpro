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
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    
</head>

<body>
    <!-- <div id="div1" style="border:1px solid  red; background-color:yellow; width: 100px; position: relative;">Lorem ipsum
        dolor sit, amet
        consectetur
        adipisicing elit. Nam blanditiis officiis vero tenetur vel architecto soluta facilis harum accusamus ipsa!</div> -->
        <!-- <div id="div2" style="border: 1px solid black; background-color:rgb(247, 170, 70);position: relative;" width='200px'; height= '3000px'; >
        </div><br><br><br>
     -->

     <img src="{{ asset('images/duckling.jpg') }}" alt="" style="height: 50px; width: 50px; display: none;" id="img1">
    <!-- <button id="btn1">click</button> -->
    <script>
        //             $().ready(function(){
        //                 $("#btn1").click(function(){
        // // $("#div1").fadeTo("fast",.4)
        // $("#div1").fadeOut(5000)
        // $("#div1").fadeIn(3000)
        // alert("fadeout and fade in")
        // })

        //             })

        // $().ready(function(){
        //     $("#btn1").click(function(){
        //         $("#div1").slideUp(3000).delay(2000).slideDown(4000)
        //     })
        // })


        // $().ready(function () {
        //     $("#btn1").click(function () {
        //         $("#div1")
        //             .animate({
        //                 left: '200px'
        //             })
        //             .animate({top:"300px"})
        //             .animate({left:"0px"})
        //             .animate({top:"0px"})
        //     })
        // })

        $(document).ready(function () {
            alert("ddddd")
            $('body').click(function (event) {
                $("#img1")
                .css({position:'absolute',left:event.pageX,top:event.pageY,display:'block'})
                console.log(event.pageX)
            
            })


        })

    </script>
</body>

</html>