<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first name</th>
      <th scope="col">Last name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <!-- @if(isset($key_disp)) 
<p>{{ $key_disp }} </p>
  in php 'double curly brackets' used to display data which get from controller
  @endif -->
  @forelse($key_disp as $i)
  <tr> <!--forelse once check value exist or not .it has an empty area to show msg is empty-->
<td>{{ $i->id }}</td>
<td>{{ $i->fname }}</td>
<td>{{$i->lname}}</td>
<td>{{$i->email}}</td>
<td>{{$i->password}}</td>
<td><a href="{{ url('delete') }}/{{$i->id}}">delete</a></td>
<td><a href="{{ url('update') }}/{{$i->id}}">update</a></td>
@empty
<td>no data</td>
  </tr>
 @endforelse
</table>
<a href="{{url('logout')}}">Logout</a>
</body>

</html>