<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .parent{
        display:grid;
        grid-template-columns:auto auto auto;
        border:2px solid blue;
        background-color: darkcyan;
        height: 330px;
        width: 600px;
        
        /* column-gap: 20px;    
        row-gap: 40px; */
        gap:10px; /*column gap & raw gap =40px */
        /* justify-content: space-around; */
        /* justify-content: space-between; */
        justify-content: space-evenly; /* set margin evnly on both side*/
        
    }
    div{
        border:2px solid green;
    }
    .child1{
        grid-column-start: 1;
        grid-column-end: 3;

    }
    .child2{
        /* background-image: url('images/food.jpg'); */
b
    }
    .child3{
grid-row-start: 2;
grid-row-end:4;
    }
    </style>
</head>
<body>
    <img src="{{ asset ('images/food.jpg') }}">
    <div class="parent" >
<div class="child1">
    123
</div>
<div class="child2">456
    <img src="{{ asset ('images/food.jpg') }}">
</div>
<div class="child3">789</div>
<div>2323</div>
<div>4535</div>
<div>6765</div>
    </div>

</body>
</html>