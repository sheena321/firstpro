<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script>
<style>
    .cl{
        border: 1px solid black;
    }
</style>
</head>
<body>
    <div class="container-fluid">
   <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, maiores?
    <!-- <button type="button" class="btn btn-primary">Primary</button> -->
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero minima, explicabo sit quaerat illum suscipit cupiditate sapiente voluptates quibusdam asperiores ipsum, dolore magnam ad nam, amet assumenda consequatur eum. Dolores!</p>

   </p> 
   <div class="row cl">
    <div class="col-1"><img src="{{ asset ('images/Food.jpg')}}" alt="" class="img-fluid" alt="..."></div>
       <div class="col-md-2 col-sm-4 col-6 cl"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis in magnam vel ipsam odit quaerat accusantium at pariatur autem quisquam.</p></div>
       <div class="col-md-2 col-sm-4 col-6 cl">ggg Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, asperiores. dddddd</div>
       <div class="col-md-2 col-sm-4 col-6 cl"> ffffffff Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, sed.</div>
       
   </div>
   
   <img src="{{ asset ('images/Food.jpg')}}" alt="" class="img-fluid rounded mx-auto rounded" alt="..." >

</div>

</body>
</html>