<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><style>
        .parent{
            border:2px solid blue;
            background-color: burlywood;
            /* gap: 20px; */
            /* justify-content: space-evenly; */
            grid-template-columns: auto auto auto;
            display:grid;
            width:1500px;
            /* height: 300px; */
        }
        .child1{
grid-column-start: 1;
grid-column-end: 4;
        }
        .child2{
            grid-row-start: 2;
            grid-row-end:4;
        }  .child3{}
        .child4{}
        .child5{
            grid-column-start: 2;
            grid-column-end: 4;
        }
        div{
            border:2px solid blue;
        
        }

    </style>
</head>
<body>
    <div class="parent">
    <div class="child1" style="text-align: center;"><p>abc </p></div>
    <div class="child2"style="text-align: center;" ><p>def</p></div>
    <div class="child3" style="text-align: center;"><p>ghi</p></div>
    <div class="child4"style="text-align: center;"><p>jkl</p></div>
    <div class="child5"style="text-align: center;"><p>mno</p></div></div>
    
</body>
</html>