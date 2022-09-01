<html>
<head>
    <title>Move DIV to Mouse Click Position using jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
</head>
<body>
    <p>
        Click anywhere on the page!
    </p>

    <div id="divContainer"
        style="width: 100px;
            height: 100px;
            line-height: 100px;
            border-radius: 50%;
            background-color: green;
            display: none;"><img src="{{ asset('images/duckling.jpg') }}" alt="" width="200px" height="200px">
    </div>
</body>
<script>
    $(document).ready(function () {
        $('body').click(function (e) {
            $("#divContainer")
            	.css({
            	    position: 'absolute',
            	    left: e.pageX,
            	    top: e.pageY,
            	    display: 'block'
            	})
                // .hide('explode', { pieces: 150 }, 700); 	// Explode effect using jQuery.
        });
    });
</script>
</html>