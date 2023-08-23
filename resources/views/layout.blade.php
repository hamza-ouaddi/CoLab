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
</head>
<body class="xl:mx-[216px] mx-[36px] bg-background">
    {{-- Navbar --}}
    <nav class="flex justify-between items-center mt-6 mb-8">
        <a href="index.html">
            <img src="images/colab-logo.png" alt="logo" >
        </a>
        <ul class="flex items-center">
            <li class="px-8 py-5">
                <a href="login.html" class="text-transparent bg-clip-text bg-gradient-to-br from-blue to-purple text-sm font-normal"> Login</a>
            </li>
            <li>
                <a href="register.html" class="bg-gradient-to-br from-blue to-purple px-8 py-5 rounded-2xl text-white text-sm font-normal leading-[18px]">Register</a>
            </li> 
        </ul>
    </nav>

    {{-- Hero section --}}
    <section class=" md:h-[610px] bg-gradient-to-br from-lightBlue2 to-lightBlue flex items-center justify-center rounded-[32px] md:p-10 p-6 ">

        <div class=" flex md:flex-row flex-col-reverse justify-center items-center gap-14">
            <div class="md:w-[40%]">
                <h1 class="md:text-[4rem] text-[2.1rem] md:leading-[70px] leading-[48px] font-semibold ">
                    Collaboration Sparks Ingenuity.   
                </h1>
                <p class="md:text-lg text-base text-gray font-normal mt-4">
                    Unleash Your Potential. Discover gigs, connect with top talent, and create together on our collaborative platform
                </p>
                <a href="register.html" class="inline-block bg-gradient-to-br from-blue to-purple text-white md:py-5 py-4 md:px-8 px-6 mt-6 rounded-2xl md:text-lg text-sm md:font-medium font-normal leading-6">Sign up to list an Offer</a>
            </div>
            <div class="">
                <img src="images/hero-picture.png" alt="hero-picture">
            </div>
        </div>  
    </section>

    {{-- Partner section --}}
    <section class="my-40">
        <div class="flex flex-col justify-center items-center">
            <p class="text-2xl font-normal text-gray mb-8">Trusted by</p>
            <ul class="flex md:flex-row flex-col items-center gap-16 opacity-50">
                <li><img src="images/partners-logos/orange-logo.png" alt="Orange Logo"></li>
                <li><img src="images/partners-logos/logoipsum-logo.png" alt="Logoipsum Logo"></li>
                <li><img src="images/partners-logos/apex-innovate-logo.png" alt="Apex Innovate Logo"></li>
                <li><img src="images/partners-logos/wave-logo.png" alt="Wava Logo"></li>
                <li><img src="images/partners-logos/chromatech-logo.png" alt="ChromaTech Logo"></li>
            </ul>
        </div>
    </section>

    <main>
        <form action="">
            <div class="relative rounded-2xl py-[6px] mb-16">
                <div class="absolute top-6 left-3 "><i class="fa-solid fa-magnifying-glass text-lightGray z-20"></i></div>
                <input type="text" name="search" placeholder="Search for offers..." class="h-[60px] w-full pl-10 pr-20 rounded-xl focus:shadow focus:outline-none">
                <div class="absolute top-[0.80rem] right-2">
                    <button type="submit" class="flex items-center h-[46px] py-5 px-6 bg-gradient-to-br from-blue to-purple text-white text-sm font-normal rounded-xl">Search</button>
                </div>
            </div>
        </form>

    {{-- VIEW OUTPUT --}}
    @yield('content')
    </main>
    <footer class="flex flex-col gap-8 w-full items-center justify-center mb-20">
        <hr class="w-full text-lightGray">
        <div class="flex items-center justify-between w-[92%]">
            <img src="images/colab-logo.png" alt="colab-logo" class="md:w-20 w-14">
            <p class="text-gray md:text-xs text-[8px] font-light">Copyright &copy; 2023, All rights reserved</p>
            <a href="create.html" class="bg-gradient-to-br from-blue to-purple text-white font-normal md:text-sm text-[10px] md:py-3 py-[6px] md:px-6 px-[18px] md:rounded-2xl rounded-[10px]">Post Offer</a>
        </div>
    </footer>
</body>
</html>