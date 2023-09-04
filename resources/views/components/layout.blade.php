<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoLab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="2xl:mx-[216px] mx-[36px] bg-background">
    
    <x-flash-message />

    {{-- Navbar --}}
    <nav class="flex justify-between items-center mt-6 mb-8">
        <a href="/">
            <img src="{{ asset('images/colab-logo.png') }}" alt="logo" >
        </a>
        <ul class="flex items-center">
            <li class="px-8 py-5">
                <a href="login.html" class="text-transparent bg-clip-text bg-gradient-to-br from-blue to-purple text-sm font-normal"> Login</a>
            </li>
            <li>
                <a href="/register" class="bg-gradient-to-br from-blue to-purple px-8 py-5 rounded-2xl text-white text-sm font-normal leading-[18px]">Register</a>
            </li> 
        </ul>
    </nav>

    <main>

    {{-- VIEW OUTPUT --}}
    {{$slot}}

    </main>
    <footer class="flex flex-col gap-8 w-full items-center justify-center mb-20">
        <hr class="w-full text-lightGray">
        <div class="flex items-center justify-between w-[92%]">
            <img src="{{ asset('images/colab-logo.png') }}" alt="colab-logo" class="md:w-20 w-14">
            <p class="text-gray md:text-xs text-[8px] font-light">Copyright &copy; 2023, All rights reserved</p>
            <a href="create.html" class="bg-gradient-to-br from-blue to-purple text-white font-normal md:text-sm text-[10px] md:py-3 py-[6px] md:px-6 px-[18px] md:rounded-2xl rounded-[10px]">Post Offer</a>
        </div>
    </footer>
</body>
</html>