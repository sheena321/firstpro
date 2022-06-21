<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ******4th****** -->
    <label for="">enter fruit</label>
    <input type="text" name="" id="it1">
    <!-- <button type="button" onclick="add()">add</button> -->
    <button onclick="rmove()">Remove</button>
    <br>
    <ul id="ul1"></ul>

    <!-- ******3rd***** -->
    <!-- 
    <label for="">enter ur password</label>
    <input type="text" name="" id="it1" onkeyup="charlen()">
    <button type="button" onclick="check()">check</button>
    <label for="" id="l1"></label>
    *******/3rd****** -->

    <!-- *****2nd Pbm****** -->

    <!-- <input type="text" name="" id="it1"><br>
<button type="button" onclick="sub()">submit</button>
<button onclick="clr()">clear</button>
<ul id="ul1">
   
</ul> -->
    <!-- ******/2nd******* -->

    <script>
        //         ****** 2nd******
        //         function sub()
        //         {
        // var cont=document.getElementById("it1").value
        //  document.getElementById("ul1").innerHTML+= "<li>"+cont+ "</li>"


        //         }
        //         function clr(){
        //         document.getElementById("ul1").innerHTML=""
        //         document.getElementById("it1").value=""
        //         }
        //         *******/2nd********

        // ********3rd********
        // function charlen()
        // {
        //     var len= document.getElementById("it1").value
        // if(len.length<5){
        //     document.getElementById("l1").innerHTML=" minimum 5 charecters required"
        // }else{
        //     document.getElementById("l1").innerHTML="" 
        // }
        //  }
        // function check(){
        //     var len= document.getElementById("it1").value

        //     ln=len.length
        //    var flag=0
        //     var arr=['@','#','$']
        //     for(var i=0;i<arr.length;i++)
        //     {
        //         for(var j=0;j<ln;j++)
        //         {
        //             if(arr[i]==len[j])
        //             {
        //             flag=1  
        //             }
        //         }
        // if(flag==1){
        //             document.getElementById("l1").innerHTML=" password is strong"
        //                document.getElementById("l1").style.color="green"
        //         }
        //         else{
        //         document.getElementById("l1").innerHTML=" password is weak"
        //                 document.getElementById("l1").style.color="red" 
        //         }
        //     }
        // }
        // ****** /3rd******
        // *******4th******

        var fruit = ['apple', 'orange', 'watermelone', 'grape']
        var i = 0
        var b = [];
        var flag = 0
        while (i < fruit.length) {
            // console.log(fruit[i])
            document.getElementById("ul1").innerHTML += "<li>" + fruit[i] + "</li>"

            i++
        }

        function rmove() {
            var rmv = document.getElementById("it1").value


            // console.log(fruit.length)
            if (flag == 0) {
                // 
                for (var i = 0; i < fruit.length; i++) {

                    if (fruit[i] == rmv) {

                        while (i < fruit.length - 1) {
                            b[i] = fruit[i + 1]
                            i++
                        }

                    }
                    else {
                        b[i] = fruit[i]
                    }

                }

                for (var i = 0; i < b.length; i++) {
                    document.getElementById("ul1").innerHTML += "<li>" + b[i] + "</li>"
                }
                flag = flag + 1
            }
            else {
                // console.log(flag)
                for (var i = 0; i < b.length; i++) {

                    if (b[i] == rmv) {

                        while (i < b.length-1) {
                            b[i] = b[i + 1]
                            i++
                        }

                    }
                }
                flag = flag + 1
                console.log(flag)
                for (var i = 0; i <=b.length-flag; i++) {
                    document.getElementById("ul1").innerHTML += "<li>" + b[i] + "</li>"
                }

            }

        }

    </script>
</body>

</html>