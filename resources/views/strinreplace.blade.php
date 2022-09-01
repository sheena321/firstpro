<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <label for="">enter a sentence</label>
    <input type="text" name="" id="txt1">
    <label for="">word</label>
    <input type="text" name="" id="txt2">
    <label for="">replace with</label>
    <input type="text" name="" id="txt3">
    <button onclick="replac1()">change</button><br>
    <label for="" id="l1">hai</label>
    <script>
        function replac1() {
            txt = document.getElementById('txt1').value
            len = txt.length
            txtt = document.getElementById('txt2').value
            len2 = txtt.length
            index1 = txt.indexOf(txtt)
            console.log(index1)
            txttt = document.getElementById('txt3').value

            var i = 0
            while (i < len) {
                index1 = txt.indexOf(txtt)
                if (i == index1) {

                    console.log(index1)
                    txt = txt.replace(txtt, txttt)
                    index1 = txt.indexOf(txtt)


                }
                i++
            }

            document.getElementById('l1').innerHTML += " " + txt.replace(txtt, txttt)
        }


    </script>
</body>

</html>