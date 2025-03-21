<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found </title>
</head>
<body>
<div class="flex items-center justify-center w-full h-screen px-16 bg-[#80808057] md:px-0">
    <div class="flex flex-col items-center justify-center px-4 py-8 bg-white border border-gray-200 rounded-lg shadow-2xl md:px-8 lg:px-24">
        <p class="text-6xl font-bold tracking-wider text-[#80808057] md:text-7xl lg:text-9xl">404</p>
        <p class="mt-4 text-2xl font-bold tracking-wider text-accent1 md:text-3xl lg:text-5xl">Page Not Found</p>
        <p class="pb-4 mt-4 text-center border-b-2 text-[#8080807c]">Sorry, the page you are looking for could not be found.</p>
        <a href="{{url()->previous()}}" class="flex items-center px-4 py-2 mt-6 space-x-2 text-white transition duration-150 rounded bg-accent1 hover:bg-blue-700" title="Return Home">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
                <span>Return Back</span>
        </a>
    </div>
</div>
</body>
</html>
