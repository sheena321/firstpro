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
    <button id="btn1">click</button>
    <button id="btn2">click2</button>
    <input type="text" name="" id="txt1" placeholder="username">
    <input type="text" name="" id="txt2" placeholder="email">
    <div id="div1" style="display:none; width:100px;">inside a div <p>inside a p tag</p>
    </div>
    <a href="https://tutorialdeep.com/jquery/jquery-get-content-attributes/" id="anchor1"></a>
    <input type="radio" name="" id="r1">
    <input type="radio" name="" id="r2">
    <input type="file" name="" id="">
    <input type="checkbox" name="" id="ch1">

</body>

</html>
<script>
    $(document).ready(function () {
        $("#btn1").click(function () {
            alert('hai');
            var attrdisplay = $("#anchor1").attr("href");//If you want to perform some event but access an HTML element with its attribute, you can do so with jQuery attr(). Suppose you have an anchor tag and you want to get the href attribute of it. You have to pass attribute as an argument of the attr() which you want to get.
            alert(attrdisplay);
            var attrdisplay1 = $("#div1").attr("style");
            alert(attrdisplay1);

        })

        $("#txt1").val("value from txt1");
        alert($("#txt1").val());//You can get the value of the any input type, select type and other HTML elements. This can be useful if you want to access and use the value of the HTML element.



        $("#btn2").click(function () {
            var textdiv = $("#div1").text();  //You can get the inner text content of the HTML element using the jQuery text() method. If the element again contains the HTML tags inside it, the function gets and display only the text content, not the tag name. If you want to get the inner text as well as the HTML tags, you can use html().
            var textdivWithP = $("#div1").html();
            alert(textdiv);
            alert(textdivWithP);

        })

        alert($("div  > a"));//get the element inside the div or child
        alert($("div  ~ a"));//get the siblings of div tag
        $('input[type="radio"]');//get all elemnt with property type=radio;
        $('input');//get all input type element
        $('*');//get all elements

//change the value of an element;
        $('input[type="text"]').val("welcome");
        $('input[type="checkbox"]').attr('checked','checked');// same  $('input[type="checkbox"]').prop('checked',true);
        // $('#div1').html("hai from inside html");

              // all below is how to change style of an element using  css
            $("#div1").css({'background-color':'green','color':'white'});
            $("#btn1").css({'background-color':'green','color':'white'});
            $("#txt1").css({'background-color':'green','color':'white'});
            $("#txt2").css("background-color","red");

    })
</script>