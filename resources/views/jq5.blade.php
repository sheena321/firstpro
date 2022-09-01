<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
    <style>
        /* .name {
            color: brown;
            font-size: 20px;
        }

        .name2 {
            color: blue;
            font-size: large;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        } */
        div{
            height: 200px;
            width: 250px;
            border: 1px solid;
            background-color: aquamarine;
            padding: 10px;
        }
    </style>
</head>

<body>
    <ul class="name2">
        <li>Name</li>
        <li>Place</li>
        <li>House</li>
    </ul>
    <button type="submit" id="btn">Click</button>
<br><br>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aspernatur consequatur est voluptates eveniet
        minima ex aliquid pariatur dolore, quia praesentium dolorem asperiores illum magni quasi eligendi eos quis iure.
    </div>
    <div>sddddddddddddddddddddddddddLorem ipsum dolor sit amet consectetur adipisicing elit. Odio, nobis! <div>hello</div>
<div>hai</div></div>
<div>ggggggggggggggggggggghgjdhfhsljlkjglkfg,</div>
    <script>
    // $().ready(function(){
    //     $("#btn").click(function(){
    //         $("ul").addClass("name")
    //     })
    // })

    // $().ready(function(){
    //  console.log("width="+$("div").width()) ;
    //  console.log("height="+$("div").height()) ;
    //  console.log("innerWidth="+$("div").innerWidth());
    //  console.log("innerHeight="+$("div").innerHeight());
    //  console.log("outerWidth="+$("div").outerWidth());
    //  console.log("outerHeight="+$("div").outerHeight());
    // })

    $().ready(function(){
        $("li").parent()
        console.log( $("li").parent())
    //  console( $("div").eq(1).html())
    // console.log($("div").first().html())
    // console.log($("div").last().html())
    console.log($("div").eq(3).html())
    })
    </script>
</body>

</html>
