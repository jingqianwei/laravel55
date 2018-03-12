<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <!-- 在页面中引入编译之后的css文件 --->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
<div id="example">

</div>
</body>
<!-- 在页面中引入编译之后的js文件 --->
<script src="{{ mix('js/app.js') }}"></script>
</html>
