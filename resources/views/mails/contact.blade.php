<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail from youthreproductivehealth.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" flex  w-screen h-screen items-center pt-10">
<section class="flex flex-col items-center h-auto xl:h-[70%] justify-center py-8 mx-auto bg-white psx-6 dark:bg-gray-900">
    <header class="w-[80%] h-auto">
        <a href="{{route('home')}}">
            <img class="w-auto h-7 sm:h-8" src="{{asset('images/youth-removebg-preview.png')}}" alt="">
        </a>
    </header>

    <main class="mt-8 w-[80%] h-auto">
        <h2 class="text-accent2 dark:text-gray-200">Hello info@youthreproductivehealth.org,</h2>

        <p class="mt-2 leading-loose text-bg dark:text-gray-300">
            {{$data->contactname}} have sent you an email <b><a href="{{route('contact')}}">from your web site</a> </b>
        </p>
        
        <button class="px-6 py-2 mt-4 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-accent1  rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Mail message below
        </button>
        <p class="text-bg dark:text-[gray] mt-8">
        
        {{$data->contactmessage}}
        </p>
        
    </main>
    <footer class="mt-8 w-[80%] h-auto">
        

        <p class="mt-8 text-[#808080ae] dark:text-gray-300">
            Thanks, <br>
            <a href="https://microgels.vercel.app">Your dev team</a>
        </p>

        <p class="mt-3 text-bg dark:text-gray-400">© 2024 youthreproductivehealth. All Rights Reserved.</p>
    </footer>
</section>
</body>
</html>