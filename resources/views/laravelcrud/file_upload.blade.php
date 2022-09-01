<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"><<!-- enctype is used to upload file db -->>
        @csrf
        <label for="">name</label>
        <input type="text" name="name" id="">
        <label for="">email</label>
        <input type="text" name="email" id="">
        <label for="">file_upload</label>
        <input type="file" name="file1" id="">
        <button type="submit">submit</button>
        

    </form>
  @if(isset($key_value))
  <p>{{$key_value }}</p>
            @endif


            <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">uname</th>
      <th scope="col">email</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  @forelse($key1_value as $i)
  <tr>

    <td>{{$i->id}}</td>
    <td>{{$i->uname}}</td>
    <td>{{$i->email}}</td>
    <td><img src="
    {{asset('storage/img_file/'.$i->image_file)}}" alt="" width="50px"; height="50px";></td>
@empty
<td>nothing</td>
  </tr>
  @endforelse
 
</table>
</body>
</html>