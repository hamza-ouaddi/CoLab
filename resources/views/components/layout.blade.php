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
<body class="2xl:mx-[216px] mx-[36px] bg-background" x-data="{ isOpen: false }">
    
    <x-flash-message />

    {{-- Navbar --}}
    <nav class="flex justify-between items-center mt-6 mb-8">
        <a href="/">
            <img src="{{ asset('images/colab-logo.png') }}" alt="logo" >
        </a>
        <ul class="sm:flex hidden items-center gap-6">

            @auth
                <li class="  rounded-2xl" >
                    <span class="text-gray text-sm  font-normal">Welcome, {{auth()->user()->name}}!</span>
                </li>
                <li class="py-1">
                    <a href="/listings/create" class="flex items-center  rounded-2xl text-gray text-sm  font-normal leading-[18px]"><i class="fa-solid fa-plus mr-2"></i> Create Offer</a>
                </li>
                <li>
                    <a href="/listings/manage" class="flex items-center rounded-2xl text-gray text-sm font-normal leading-[18px]"><i class="fa-solid fa-gear mr-2"></i> Manage Offers</a>
                </li> 
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="flex items-center bg-gradient-to-br from-blue to-purple px-8 py-5 rounded-2xl text-white text-sm font-normal leading-[18px]"><i class="fa-solid fa-arrow-right-from-bracket mr-2"></i> Logout</button>
                    </form>
                </li> 
            @else
                <li class="px-8 py-5">
                    <a href="/login" class="text-transparent bg-clip-text bg-gradient-to-br from-blue to-purple text-sm font-normal"> Login</a>
                </li>
                <li>
                    <a href="/register" class="bg-gradient-to-br from-blue to-purple px-8 py-5 rounded-2xl text-white text-sm font-normal leading-[18px]">Register</a>
                </li> 
            @endauth
            
        </ul>

        <button id="mobile-navbar-toggle " class="sm:hidden block px-4 py-2 text-3xl text-gray" @click="isOpen = !isOpen">
            <i id="menu-icon" class="fa-solid" :class="{ 'fa-bars': !isOpen, 'fa-times': isOpen }"></i>
        </button>

        <ul id="mobile-navbar" class="sm:hidden flex flex-col gap-6 justify-center items-start bg-white px-4 py-4 mt-2 absolute top-16 right-12 rounded-2xl shadow-[rgba(0,_0,_0,_0.25)_0px_25px_50px_-12px] z-20" :class="{ 'show': isOpen }"
        x-show="isOpen"
        @click.away="isOpen = false" >

            @auth
                <li class="bg-gradient-to-br from-lightBlue to-lightBlue2 p-4 rounded-lg w-full" >
                    <span class="text-gray text-lg  font-normal">Welcome, <br>{{auth()->user()->name}}!</span>
                </li>
                <li class="py-1">
                    <a href="/listings/create" class="flex items-center rounded-2xl text-gray  font-normal leading-[18px]"><i class="fa-solid fa-plus mr-2"></i> Create Offer</a>
                </li>
                <li class="py-1">
                    <a href="/listings/manage" class="flex items-center rounded-2xl text-gray  font-normal leading-[18px]"><i class="fa-solid fa-gear mr-2"></i> Manage Offers</a>
                </li> 
                <li class="w-full">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="flex items-center bg-gradient-to-br from-blue to-purple px-8 py-5 rounded-2xl text-white text-sm font-normal leading-[18px] w-full"><i class="fa-solid fa-arrow-right-from-bracket mr-2"></i> Logout</button>
                    </form>
                </li> 
            @else
                <li class="flex items-center w-full py-1">
                    <a href="/login" class="w-full text-center text-transparent bg-clip-text bg-gradient-to-br from-blue to-purple font-normal leading-[18px]"> Login</a>
                </li>
                <li>
                    <a href="/register" class="flex items-center bg-gradient-to-br from-blue to-purple px-8 py-5 rounded-2xl text-white text-sm font-normal leading-[18px] w-full">Register</a>
                </li> 
            @endauth

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
            <a href="/listings/create" class="bg-gradient-to-br from-blue to-purple text-white font-normal md:text-sm text-[10px] md:py-3 py-[6px] md:px-6 px-[18px] md:rounded-2xl rounded-[10px]">Post Offer</a>
        </div>
    </footer>
</body>
</html>