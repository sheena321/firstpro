<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            border: none;
            text-align: right;
        }
    </style>
</head>

<body>
    <table border=5 width="500px" height="500px">
        <tr>
            <td colspan="4"><input type="text" name="" id="disp" style="width:100% " readonly ></td>
        </tr>
        <tr>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="optr('+')">+</button></td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="optr('-')">-</button></td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="optr('*')">*</button></td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="optr('/')">/</button></td>
        </tr>
        <tr>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('1')">1</button>
            </td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('2')">2</button>
            </td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('3')">3</button>
            </td>
            <td rowspan="4"><button style="border:none; background-color: beige; width: 100%;" onclick="calcfn()">=</button></td>
        </tr>
        <tr>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('4')">4</button>
            </td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('5')">5</button>
            </td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('6')">6</button>
            </td>
        </tr>
        <tr>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('7')">7</button>
            </td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('8')">8</button>
            </td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('9')">9</button>
            </td>
        </tr>
        <tr>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="setnumbers('0')">0</button>
            </td>
            <td><button id="bdot" style="border:none; background-color: beige; width: 100%;" onclick="dott()">.</button></td>
            <td><button style="border:none; background-color: beige; width: 100%;" onclick="cleartext()">c</button></td>
        </tr>
    </table>
    <script>
        count=0
        function setnumbers(num) {
            document.getElementById('disp').value += num
        }

        function cleartext() {
            document.getElementById("disp").value = ""
        }
        function optr(op) {
            curop = op
            tem_val = Number(document.getElementById("disp").value)
            console.log(curop)
            document.getElementById("disp").value = ""
        }

        function calcfn() {
            if (curop == '+') {
                console.log(curop)
                cur_val = Number(document.getElementById("disp").value)
                console.log(tem_val)
                result = tem_val + cur_val
            }
            document.getElementById('disp').value = result;

        }
        function dott(){
            // val=document.getElementById("disp").value
            // len=val.length
            // if((==)
            count=count+1
            if(count>1)
            {
                document.getElementById("bdot").disable=true;
            }

}

        }

    </script>
</body>

</html>