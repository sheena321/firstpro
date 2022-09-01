<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <p id="p1" style="display: none;">hello</p>
    <button id="btn1">click</button>
    <div id="div1" style="height: 200px;width: 300px;background-color: red;">Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Doloribus ratione aperiam mollitia.</div>
        <img src="{{ asset('images/duckling.jpg') }}" alt="" width="200px" height="200px" id="img1">
    <script>

        // $(document).ready(function () {
            // var a = $("#p1").html()
            // $("#p1").html(a +" aiswerya")
            // console.log(a)

            // $("#p1").click(function(){
            //     var a = $(this).html()
            //     alert(a)
            // })

            // $("#p1").click(function(){

            // $(this).hide()
            // })


            // $("#btn1").click(function(){
            // // $("#div1").hide()
            // // $("#p1").show()
            // $("#p1").toggle()

            // })
        //     $("#btn1").click(function () {
        //         // $("#div1").fadeIn(4000)
        //         $("#div1").fadeTo(4000, .2)


        //     })
        // })

        $(document).ready(function(){
$("body").keydown(function(e){
    a=0
        a+=e.pageX
        console.log(a)
    $("#img1").css({ position:'relative',
    diplay:'block'

})
    .animate({
       
        left:a
    })
})
        })
    </script>

</body>

</html>