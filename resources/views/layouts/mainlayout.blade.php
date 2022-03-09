<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>@yield('title')</title>
    <style>
        body {
            background-image: url('https://btsdiary.files.wordpress.com/2015/01/blog-background.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

    </style>
</head>

<body class="w3-display-topmiddle w3-margin" style="width: 60%">
    <div>
        @yield('content')
    </div>

</body>

</html>
