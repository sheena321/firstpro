<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // **********second largest********
        //         var num;
        //         var a = [40, 10, 22, 59, 11]
        //         var b=[0,0,0,0,0]

        //         for (var i = 0; i <=4; i++) {
        //             for (var j = 1; j <= 4; j++) {

        //                 if (a[i] >= a[j]) {
        //                     // b[i] = a[i];

        //                 } else {
        //                     var num = a[i]
        //                     a[i] = a[j];
        //                     a[j] = num

        //                 }

        //             }
        //             // b[i] = a[i];
        //         }
        //         // for(var i=0;i<=4;i++)
        //         // {
        //         //     console.log( a[i])
        //         // }
        //  console.log("second largest is",a[4])





        //  *******triangle shape********


        // var row=prompt("enter the no.of rows")
        // var a=[];
        // // var b=['null']

        // for( var i=1;i<=row;i++){

        //     for( var j=1;j<=i;j++)
        //     {
        //     if(i==1&&j==1){
        //         a[i]="*";
        //     }
        //     else{

        //          a[i]=a[i-1]+"*"
        //     }

        //  }
        // }
        //  for (var i=1;i<=row;i++){

        //     console.log(a[i])    
        //  }







        // ******** position of an element******

        // ******position of 5******

        // var a=[2,4,3,5,7];
        // for(var i=0;i<=4;i++){
        //     if(a[i]==5)
        //     {
        //         console.log("position of 5 is", i)
        //         break;
        //     }
        // }


//         // ********** duplicate********
        var count = 0;
        var a = [2, 4, 3, 5, 7, 5, 8, 3, 9];
        for (var i = 0; i <=8; i++) {
            for (j = 1; j <8; j++) {
                if (a[i] == a[j]) {
                    count = count + 1
                    // console.log(a[i],"ggg")
                    console.log(a[i+1], "repeated", count, "times")
                }
//                 else{
//                     count=0
//                     // console.log(a[i], "repeated", count, "times")
//                 }
//                 count=0
               
            }
    
//             count=0;


        }
        
// // }


// for(i=0;i<)




    </script>

</body>

</html>