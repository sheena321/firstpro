<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" />
    <link rel="stylesheet" href="slider_style.css">
    <style>
        img {
            float:center;
            height: 50%;
            width: 50%;
            object-fit: cover;
        }

        ul,
        li {
            margin: 0;
            padding: 10px;
            list-style: none;
        }
    </style>

</head>

<body>
    <ul id="ul1" class="gallery">
        <li data-thumb="img/thumb/1.jpg"><a href="#"><img src="images/duckling.jpg" alt=""></a></li>

        <li data-thumb="img/thumb/3.jpg"><a href="#"><img src="images/food.jpg" alt=""></a></li>
    </ul>
    <script>

        $(document).ready(function () {
            $("#ul1").lightSlider({
                item: 1,
                slideMove: 1,
                slideMargin: 10,
                mode:" slide",
                useCSS: true,
                speed: 2000,
                auto: true,
                pause: 1000,
                loop: true,
                controll: true,
                kerPress: true,
                pager: true,
                gallery: false,
                thumbMargin: 3,
                currentPagerPosition: "middle",
                enableDrag: true,
                swipeThreshold: 40,
                responsive: [],
                onBeforeStart: function ($el) { },
                onSliderLoad: function ($el) { },
                onBeforeSlide: function ($el, scene) { },
                onAfterSlide: function ($el, scene) { },
                onBeforeNextSlide: function ($el, scene) { },
                onBeforePrevSlide: function ($el, scene) { }

            })

        })
    </script>

</body>

</html>