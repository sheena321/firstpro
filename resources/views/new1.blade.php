<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><img src="{{ asset('images/star.jpg') }}" alt="" onclick="disp('i1')"
            style="opacity: .3; height: 40px;width:40px;" id="i1"><img src="{{ asset('images/star.jpg') }}" alt=""
            onclick="disp('i2')" style="opacity: .3; height: 40px;width:40px;" id="i2"><img
            src="{{ asset('images/star.jpg') }}" alt="" onclick="disp('i3')"
            style="opacity: .3; height: 40px;width:40px;" id="i3"></td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><img src="{{ asset('images/star.jpg') }}" alt="" onmouseover="disp('i4')"
            style="opacity: .3; height: 40px;width:40px;" id="i4"><img src="{{ asset('images/star.jpg') }}" alt=""
            onmouseover="disp('i5')" style="opacity: .3; height: 40px;width:40px;" id="i5"><img
            src="{{ asset('images/star.jpg') }}" alt="" onmouseover="disp('i6')"
            style="opacity: .3; height: 40px;width:40px;" id="i6"></td>
        </td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</body>
<script>
  
  var i;
  var c = 0
  function disp(num) {

    if (num == 'i3') {
  
        for (var j = 3; j >= 1; j--) {

          document.getElementById('i' + j).style.opacity = 1;

        }
   
    }

    else if (num == 'i2') {
      
      for (k=1;k<=3;k++){
        document.getElementById('i' + k).style.opacity = .3;
      }
      for (j = 2; j >= 1; j--) {
        document.getElementById('i' + j).style.opacity = 1;
      }
    }
    else if (num == 'i1') {
      
      for (k=1;k<=5;k++){
        document.getElementById('i' + k).style.opacity = .3;
      }
      document.getElementById(num).style.opacity = 1;
    }
     
      
    

    
      document.getElementById(num).style.opacity = 1;
    
    }
  


    // document.getElementById(num).style.opacity=1;


</script>

</html>