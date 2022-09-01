<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="" id="demo"></label>
    <script>
        let str = "java,c++,Php,Pythone,Pythone";
        let str1="  hello   ww"
        let str2="hello"
// document.getElementById("demo").innerHTML = str.slice(5,8); //counting from 0 take(5 from &7th position)
// document.getElementById("demo").innerHTML = str.slice(-7);// -value for counting from right side,counting begin with -1
// document.getElementById("demo").innerHTML = str.slice(5);
// let part = str.substring(8, 3)// from  8th position 3 charecters
// document.getElementById("demo").innerHTML=part//-ve value not taken
// part=str.substr(3)// avoid starting 3 charecters 
// document.getElementById("demo").innerHTML=part
// document.getElementById("demo").innerHTML=str.replace("JAVA","javascript")//NOT WORK CASE SENSITIVE
// document.getElementById("demo").innerHTML=str.replace(/pythone/ig,"angular")
// document.getElementById("demo").innerHTML=str.toUpperCase()
// document.getElementById("demo").innerHTML=str.toLowerCase()
// document.getElementById("demo").innerHTML=str1.concat(",  ",str)
// document.getElementById("demo").innerHTML=str1.trim()//trim the whitespace
// document.getElementById("demo").innerHTML=str2.padStart(8,"@")
// document.getElementById("demo").innerHTML=str2.padEnd(8,"@")
let num=1234
// document.getElementById("demo").innerHTML=num.toString().padStart(13,0)
// let text = "HELLO WORLD";
// let char = text.charAt(22);
// char=text[22]
// document.getElementById("demo").innerHTML=char

// let text = "HELLO WORLD";
// let char = text.charCodeAt(0);
// document.getElementById("demo").innerHTML=char

let text = "HELLO WORLD sssss";
// var tex=text.split(" ")
// console.log(tex)
// document.getElementById("demo").innerHTML=tex

document.getElementById("demo").innerHTML=text.charAt(0).toLowerCase()
   </script>
</body>
</html>