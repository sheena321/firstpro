<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // var state = prompt("enter ur state")
        // var age = prompt("enter ur age")
        // if (age >= 18 && state == "kerala") {
        //     console.log("you are elgible")
        // } else {
        //     console.log("You are not elgible")
        // }

        // *--if-else ladder--*


        //     var day=parseInt(prompt("enter a value"))

        //     if(day==0){
        //         console.log("sunday")
        //     }
        //     else if(day==1)
        // {
        //     console.log("monday")
        // }
        // else if(day==2)
        // {
        //     console.log("tuesday")
        // }
        // else if(day==3)
        // {
        //     console.log("wednesday")
        // }
        // else if(day==4)
        // {
        //     console.log("thursday")
        // }
        // else if(day==5)
        // {
        //     console.log("friday")
        // }
        // else if(day==6)
        // {
        //     console.log("saturday")
        // }
        // else{
        //     console.log("invalid")
        // }

        // *--if-else--*

        // var num=parseInt(prompt("enter a value"))
        // if(num%2==0)
        // {
        //     console.log("even")
        // }
        // else{
        //     console.log("odd")
        // }


        // *--switch--*

        // var day = prompt("enter a day")

        // switch (day) {
        //     case "sunday": console.log("sunday")
        //                     break;

        //     case "monday": console.log("monday")
        //                     break;   
        //      case "tuesday": console.log("tuesday")
        //                      break;
        //     case "wednesday": console.log("wednesday")
        //                       break;
        //     case "thursday": console.log("thursday")
        //                       break;
        //     case "friday": console.log("friday")
        //                    break;
        //     case "saturday": console.log("saturday")
        //                     break;
        //  default: console.log("invalid")
        // }

        var num1=parseInt(prompt("enter ur first number"))
        var num2=parseInt(prompt("enter ur second number"))
        var num3=prompt("enter ur operation")
        // if(num3=="+")
        // {
        //     console.log(num1+num2)
        // }
        // else if(num3=="-")
        // {
        //     console.log(num1-num2)
        // }
        // else if(num3=="/")
        // {
        //     console.log(num1/num2)
        // }
        // else if(num3=="*")
        // {
        //     console.log(num1*num2)
        // }
               
        
        switch(num3)
        {
            case "+":console.log(num1+num2)
                     break;

            case "-":console.log(num1-num2)
                     break;
            case "*":console.log(num1*num2)
                     break;
            case "/":console.log(num1/num2)
                     break;
            default:console.log("invalid")
        }

        



    </script>
</body>

</html>