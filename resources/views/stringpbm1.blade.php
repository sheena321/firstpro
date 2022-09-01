<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" name="" id="txt1">
    <button onclick="change()">change</button>
    <label for="" id="l1"></label>

    <script>
        var c = 0
        function change() {
            txt = document.getElementById('txt1').value
            len = txt.length
            var new_text = ""
            for (var i = 0; i < len; i++) {
                if (i == 0) {

                    new_text += txt[i].toUpperCase()
                    console.log(new_text)

                }
                else {

                    if (txt[i] == " ") {
                        c = c + 1

                        new_text += " "

                        console.log(c)

                    }
                    else {
                        if (c == 1) {
                            new_text += txt[i].toUpperCase()
                            console.log(txt[i].toUpperCase())

                            c = 0;
                        }
                        else {
                            new_text += txt[i]
                        }
                    }

                }
            }

            document.getElementById('l1').innerHTML = new_text
            // console.log(arr)

        }  
    </script>
</body>

</html>