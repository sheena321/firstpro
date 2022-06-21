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
        var num1 = 50;
        var num2 = 90;
        var largest;
        var num3 = 80;
        num4 = 40;
        // if (num1 > num2) {
        //     // largest = num1;
        //     // console.log(a)
        //     // console.log("a is biggest")
        // } else {
        //     // console.log("b is biggest")
        //     // largest = num2;
        // }



        // console.log(largest)




        // *--largest among 4 numbers\
        // if (num1 > num2) {
        //     if (num1 > num3) {
        //         largest = num1
        //     }
        //     else {
        //         largest = num3
        //     }
        // }
        // else {
        //     // largest = num1
        //     if (num2 > num3) {
        //         largest = num2

        //     } else {
        //         largest = num3
        //     }
        // }
        // console.log(largest)

        // if (num1 > num2) {
        //     if (num1 > num3) {
        //         if (num1 > num4) {
        //             largest = num1;
        //         }
        //         else 
        //         {
        //             largest = num4;
        //         }
        //     }
        //     else {
        //         if (num3 > num4) {
        //             largest = num3;
        //         }
        //         else {
        //             largest = num4;
        //         }
        //     }
        // }
        // else {
        //     if (num2 > num3) {
        //         if (num2 > num4) {
        //             largest = num2;
        //         }
        //         else{
        //             largest =num4;
        //         }
        //     }else{
        //         if(num3>num4){
        //             largest=num3;
        //         }
        //         else{
        //             largest=num4;
        //         }
        //     }
        // }


// for(var i=10; i>=0; i--)
// {
//     console.log(i)
// }
// **print even numbers**
// var even;
// for(var i=1; i<=100; i++)
// {
//     // even=i%2
//     if(i%2==0){
//         console.log(i)
//     }
//     else{
//         console.log("0");
//     }
  
// }
            // ******** sum of 3 digit number*******
var num;
// var result;
var reminder;
var sum=0;
var num=parseInt(prompt("enter ur 3 digit number"))
// while(num>0){
//     // result=parseInt(num/10)
//     reminder=num%10
//     sum=sum+reminder;
//     // num=result;
//     num=parseInt(num/10)
    // }
// console.log(sum)


for (i=num;i>0;i=(i/10)){
    reminder=i%10
    sum=parseInt(sum+reminder)
    console.log(sum)
}
console.log(sum)

// }
                   // ****** while loop *******

// var i=0;
// while(i<=10){
//     console.log(i)
//     i++;
// }
                    //   ***** For-of Loop *****
// var arr=[ 1,2,3,4]
// for(var i of arr){
//     console.log(i)
// }


                            //**** ** For-in loop *********


// var person={
//     name:"Jhone",
//     age:25
// }
// for(var key in person)
// {
//     console.log(person[key])
// }

    </script>
</body>

</html>