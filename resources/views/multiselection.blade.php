<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lbl {
            border: 1px solid black;
            background-color: bisque;
        }
    </style>
</head>

<body>
    <div>
        <ul style="display:inline;">
            <li style="display:inline-block;"><label for="" class="lbl" onclick="lblclk()" id="l1">label1</label></li>
            <li style="display:inline-block;"> <label for="" class="lbl" onclick="lbl1clk()" id="l2">label2</label></li>
            <li style="display:inline-block;"><label for="" class="lbl" onclick="lbl2clk()" id="l3">label3</label></li>
            <li style="display:inline-block;"><button onclick="btnclk()">select</button></li>
        </ul>
    </div>
   

    <script>

        function lblclk() {
            var current_color = document.getElementById("l1").style.backgroundColor

            if (current_color == "bisque") {

                document.getElementById("l1").style.backgroundColor = "red"
            }
            else {
                document.getElementById("l1").style.backgroundColor = "bisque"
            }
        }
        function lbl1clk() {
            var current_color = document.getElementById("l2").style.backgroundColor

            if (current_color == "bisque") {

                document.getElementById("l2").style.backgroundColor = "red"
            }
            else {
                document.getElementById("l2").style.backgroundColor = "bisque"
            }
        }
        function lbl2clk() {
            var current_color = document.getElementById("l3").style.backgroundColor

            if (current_color == "bisque") {

                document.getElementById("l3").style.backgroundColor = "red"
            }
            else {
                document.getElementById("l3").style.backgroundColor = "bisque"
            }
        }

        function btnclk() {
            if (document.getElementById("l3").style.backgroundColor == "red" && document.getElementById("l2").style.backgroundColor == "red" && document.getElementById("l3").style.backgroundColor == "red") {
                console.log("all are selected")
            } else if (document.getElementById("l3").style.backgroundColor == "red" && document.getElementById("l2").style.backgroundColor == "red") {
                console.log("l3&l2 selected")
            } else if (document.getElementById("l3").style.backgroundColor == "red" && document.getElementById("l1").style.backgroundColor == "red") {
                console.log("l3&l1 selected")
            } else if (document.getElementById("l2").style.backgroundColor == "red" && document.getElementById("l1").style.backgroundColor == "red") {
                console.log("l2&l1 selected")
            } else if (document.getElementById("l1").style.backgroundColor == "red") {
                console.log("l1 selected")
            } else if (document.getElementById("l2").style.backgroundColor == "red") {
                console.log("l2 selected")
            } else if (document.getElementById("l3").style.backgroundColor == "red") {
                console.log("l3 selected")
            }
        }


       
    </script>

</body>

</html>