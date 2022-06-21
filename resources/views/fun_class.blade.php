<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <body>
    <p class="c1">hello</p>
    <p class="c1">ai</p>
    <h1 class="c1">heading1</h1>
    <h1 class="c1">heading2</h1> -->
    <!-- <input type="label"> -->
    <!-- <input type="text" name="" id="it1">
    <input type="text" name="" id="it2">
    <button type="button" onclick="click1()">click</button>
    <p id="p1">result is</p> -->

<!-- ****** 1St pbm******** -->

    <!-- <label for="">enter ur first no</label>

    <input type="text" id="it1">
    <label for="">enter ur second no</label>
    <input type="text" name="" id="it2">
    <label for="">select ur operation</label>
    
    <select name="" id="s1">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <button type="button" onclick="sum()">submit</button>
      <p id="p1"> result is</p> 
      ********/1st*****

    <script>
        // var c2=document.getElementsByClassName("c1")
        // console.log(c2[2])


        // function click1()
        // {
        //    var res=parseInt(document.getElementById("it1").value )+parseInt(document.getElementById("it2").value)
        //    console.log(res)
        //    document.getElementById("p1").innerHTML+=res appending
        // }


*******1st*******
        function sum(){
var op=document.getElementById("s1").value

switch(op)
{
    case "+":
    var sum=parseInt(document.getElementById("it1").value)+parseInt(document.getElementById("it2").value)
    break;
    case "-":
    var sum=parseInt(document.getElementById("it1").value)-parseInt(document.getElementById("it2").value)
    break;
    case "*":
    var sum=parseInt(document.getElementById("it1").value)*parseInt(document.getElementById("it2").value)
    break;
    case "/":
    var sum=parseInt(document.getElementById("it1").value)/parseInt(document.getElementById("it2").value)
    break;
}  
if(sum>50){
    document.getElementById("p1").style.color="green"
}
    else if(sum<0)
    {
        document.getElementById("p1").style.color="red"
    }


document.getElementById("p1").innerHTML+=sum        </script> 

</body>
</html>
    
       