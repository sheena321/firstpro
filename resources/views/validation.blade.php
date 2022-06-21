<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- <form action="" method="post">
        <label for="">enter name</label>
        <input type="text" name="" id="">
        <label for="">enter pace</label>
        <input type="text" name="" id="">
        <label for="">enter email</label>
        <input type="email" name="" id="">
        <button onsubmit="return false">submit</button>

    </form>
    <script>
        function validation(){



        }
    </script> -->

<body>
    <form action="" method="get" name="form1" onsubmit="return validate_form()">
        @csrf
        <div class="container">
            <div class="row">
                <input type="text" name="name1" id="name1" placeholder="Name">
                <label for="" name="labelname" id="lname">l</label>
            </div>
            <div class="row">
                <input type="text" name="place" id="place" placeholder="Place">
                <label for="" name="labelplace" id="lplace"></label>
            </div>
            <div class="row">
                <input type="text" name="email" id="email" placeholder="Email">
                <label for="" name="labelemail" id="lemail"></label>
            </div>
            <div class="row">
                <button type="submit">SUBMIT</button>
            </div>
        </div>
    </form>

    <script>
        function validate_form() {
            name = document.forms["form1"]["name1"].value// document.getElementById('name1').value;
            place = document.getElementById('place').value;
            email = document.getElementById('email').value;
            // name = document.forms["form1"]["name1"].value;
            // palce = name = document.forms["form1"]["place"].value;
            // email = document.forms["form1"]["email"].value;
            // document.forms["form1"]["name1"].focus()
            return_var = true;
            console.log(name)
            console.log(place)
            console.log(email)
            if (name == "") {
                // alert("Enter name");
                document.getElementById("lname").innerHTML = "enter ur name"


                document.forms["form1"]["name1"].focus()
                return_var = false;

            }
            if (place == "") {
                // alert("Enter palce");
                document.getElementById("lplace").innerHTML = "enter ur place"
                return_var = false;
            }
            if (email == "") {
             

                if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(form1.email.value))) { 
                    document.getElementById("lemail").innerHTML = "enter ur email"
                return_var = false;
            }
        }
        return return_var;

        }
    </script>
</body>

</html>


Send a message


</body>

</html>