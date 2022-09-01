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
    <p id="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil obcaecati vitae inventore quaerat, maxime
        nam omnis veniam praesentium. Architecto, recusandae.</p>
    <p id="p2">hello</p>
    <button id="btn1">click</button>
    <div id="div1" style="border:1px solid  red; background-color:yellow; width: 100px;">Lorem ipsum dolor sit, amet consectetur
        adipisicing elit. Nam blanditiis officiis vero tenetur vel architecto soluta facilis harum accusamus ipsa!</div>
    <script>
        // $(document).ready(function () {
        //     $("#btn").click(function () {
        //         $("#p1").hide();
        //     })

        // }

        // )







        $(document).ready(funtion(){
            $("btn1").click(function(){
                $("#div1").fadeTo()
            })
        }
       
              
            })
    



    </script>
</body>

</html>