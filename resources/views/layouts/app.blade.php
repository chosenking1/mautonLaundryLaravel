<?php //include('header.blade.php') ?>
    <!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MautonCleans</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script></script>
    
</head>

<body class="bg-gray-200">
<div class="bg-gradient-to-r from-blue-800 via-purple-500 to-pink-500  flex-col h-44">
    <div class=" flex justify-evenly">
        <div class= "flex-col">

            <div class="flex justify-evenly p-2">
                <div class="mr-52">
                <h1 class="font-['Monoton'] text-pink-500 text-2xl">Mauton Cleans</h1>
                </div>
                <ul class="flex i justify-between justify-center ml-36  font-bold">
                 <li>
                    <a href="" class="p-3"> Home </a>
                </li>
                    <li>
                        <a href="{{route('service')}}" class="p-3"> Our Services</a>
                    </li>
                    <li>
                        <a href="contactus.php" class="p-3"> Contact Us </a>
                    </li>
                    @auth
                <li>
                    <a href="" class="p-3"> Logout </a>
                </li>
                    @endauth
                    @guest
                    <li>
                        <a href="{{route('register')}}" class="p-3"> Register </a>
                    </li>
                    @endguest
                    <li >
                        <a href="#aboutus" class="p-3"> About </a>
                    </li>
                </ul>
            </div>
            <p class=" justify-center flex p-2">experiencing redefined cleaning</p>

        </div>

    </div>
    <h6 class="flex justify-center ">🌮 We care for your cloth with 💕.</h6>
</div>

@yield('content')

</body>

</html>
