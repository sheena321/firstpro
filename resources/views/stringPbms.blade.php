<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <label for="">Enter ur sentence</label>
    <input type="text" name="" id="txt1">
    <button  onclick="countword()">get count</button>
    <button onclick="splchar()">get spl.chars</button>
    <br>
    <label for="" id="l1">count is</label><br>
    <label for="" id="l2"> spl.charecters are </label>



    <script>
        var count=1
        var c=0
        function countword() {
            txt = document.getElementById('txt1').value
            console.log(txt)
            len = txt.length

            for (var i = 0; i < len; i++) {
                if (txt[i] ==" ") {
                    console.log(txt[i])
                    count += count 
                    console.log(count)
                }
                
            }
            document.getElementById("l1").innerHTML += " "+count
        }
        function splchar (){
            txt = document.getElementById('txt1').value
            len = txt.length
            var arr=["@","!","#","$"]
            arr_len=arr.length
            for(var i=0; i<arr_len;i++)
            {
                for(var j=0;j<len;j++){
                    if(arr[i]==txt[j]){
                        c=c+1;
                    }
                }
               
            }
            document.getElementById("l2").innerHTML +=" "+ c 

        }
    </script>
</body>

</html>