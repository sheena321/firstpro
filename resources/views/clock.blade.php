<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</head>
<body>
  <button id="btn">
    submit
  </button>
  <p id="p1" style="border:2px,solid,red ; height:120px; width:120px;  position: relative;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus aliquid laboriosam magnam deserunt ipsa, dolorem labore eligendi quia consequuntur ullam!</p>

  
  <script >
    $().ready(function()//same as $(document).ready(function()
    {
    
        

        $("#btn").click(function(){
            // $("#p1").hide(function(){
            //     alert("hello")
            //    
        // $("#p1")
        // .slideUp(2000)
        // .delay(3000)//default 4000 millisecond
        
        // .slideDown(3000) } 2999080
        //     )
        $("#p1")
        .animate({
            // height:"200px";
            // width:"1000px"
            left:"200px",
            // top:"200px"

        })
        .delay(1000)
        .animate({
            top:"200px"
        })
        .animate(
            {
                left:"0px"
            }
        )
        .animate({
            top:"0px"
        })
        }
    
    )
    })
  </script>
</body>
</html>