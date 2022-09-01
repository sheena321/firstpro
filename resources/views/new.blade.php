<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="" id="demo"></label>
    <label for="" id="demo1"></label>

    <script>
        const fruits = ["Banana", "Orange", "Apple", "Mango"];
// document.getElementById("demo").innerHTML = fruits.toString();// tostring() convert an array toa string with
console.log()
// document.getElementById("demo").innerHTML = fruits.join("-");// It behaves just like toString(), but in addition you can specify the separator:
   
//    let fruit_name=fruits.pop()// The pop() method removes the last element from an array
//    document.getElementById("demo").innerHTML =fruit_name
//    console.log(fruits)

// let len=fruits.push("grape","coconut","kiwi")//  The push() method adds a new element to an array (at the end)  ,The push() method returns the new array length
// console.log(len)
// console.log(fruits)


// let shift_element = fruits.shift() //The shift() method removes the first array element and "shifts" all other elements to a lower index.
// console.log(fruits)
// console.log(shift_element)


// let New_elment = fruits.unshift("pineapple")//The unshift() method adds a new element to an array (at the beginning), and "unshifts" older elements,The unshift() method returns the new array length.
// console.log(fruits)
// console.log(New_elment)


// delete fruits[1]
// console.log(fruits)

fruits.splice(2,2,"lemone")
console.log(fruits)//The first parameter (2) defines the position where new elements should be added (spliced in).

// The second parameter (0) defines how many elements should be removed.

// The rest of the parameters ("Lemon" , "Kiwi") define the new elements to be added.

// The splice() method returns an array with the deleted items:

// Example


   

   </script>
    
</body>
</html>