
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>larvent</title> 
</head>
<body>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>