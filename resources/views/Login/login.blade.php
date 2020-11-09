<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form method="post">
     @csrf
        <p>
            Username:<input type="text" name="name"/>    
        </p>
        <p>
            Password:<input type="text" name="pass"/>
        </p>
        <button class="btn btn-default" id="dangnhap">Dang nhap</button>       
    </form>
        <button class="btn btn-default" id="dangky">Dang ky</button>
</div>
</body>
</html>