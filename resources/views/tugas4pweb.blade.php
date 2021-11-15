<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#btn1").click(function(){
            alert("Text: " + $("#test2").text());
        });
        $("#btn2").click(function(){
            alert("HTML: " + $("#test2").html());
        });
        });
        </script>
</head>
<body>
    <div class = "container">
        <div style = "padding-top: 20%;">
    <h2>Hello Guyss</h2>
    <p>My name is Hajdah Aleyda</p>

    <p id="test2"><b>HIP HIP HOORAY</b></p>


    <button id="btn1" type="button" class="btn btn-outline-primary"> "HIP HIP HOORAY" in text</button>
    <button id="btn2" type="button" class="btn btn-outline-warning">"HIP HIP HOORAY" in HTML</button>
        </div>
    </div>
</body>
</html>
