@extends('layouts.header')
@section('title','nos articles | Youth reproductive Health')
@section('content')
    @include('layouts.nav')
    <section
        class=" w-full h-auto lg:bg-secodary mt-16 sm:mt-12 lg:mt-32 lg:flex justify-end ">
        <div style="background-image:url({{asset('images/8.JPG')}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[30rem]">
            <h1 class=" text-white text-3xl lg:text-5xl">
                Droits sexuels et reproductifs
            </h1>
            <p class="text-white text-2xl font-semibold">Nos articles de blog</p>
            <span class=" text-accent2 font-semibold">
                YRHealth / blog
            </span>
        </div>
    </section>
    <section class=" w-full flex flex-col gap-10 px-4 lg:flex-row">
        <div class="blogs w-full lg:w-[65%] flex flex-col gap-6 pt-10">
            <div class="blog w-full h-auto flex flex-col bg-white shadow-lg rounded-md px-4 py-6 gap-6">
                <h1 class=" text-bg text-3xl">
                    Création d'une alliance de plaidoyer
                </h1>
                <div class=" w-full flex justify-between">
                    <p class=" flex gap-3 text-[gray] items-center">
                        <i class="fa-solid fa-calendar text-accent1"></i>
                        30 Août 2023
                    </p>
                    <p class=" text-[gray] flex gap-3 items-center">
                        <i class="fa-solid fa-doc text-accent1"></i>
                        formation
                    </p>
                </div>
                <div class=" w-full">
                    <p class="text-[gray] text-sm">
                        Nous sommes ravis de vous partager les moments inspirants de la formation
                        passionnante sur les techniques de plaidoyer...
                    </p>
                </div>
                <button type="button" class="duration-300 ease-in-out border-2 border-accent1 px-1 py-3 rounded-lg  w-[10rem]">
                    <a href="#" class="bg-accent1 duration-300 ease-in-out text-white text-xl rounded-lg px-10 py-2">Lire plus</a>
                </button>
            </div>
            <div class="blog w-full h-auto flex flex-col bg-white shadow-lg rounded-md px-4 py-6 gap-6">
                <h1 class=" text-bg text-3xl">
                    Création d'une alliance de plaidoyer
                </h1>
                <div class=" w-full flex justify-between">
                    <p class=" flex gap-3 text-[gray] items-center">
                        <i class="fa-solid fa-calendar text-accent1"></i>
                        30 Août 2023
                    </p>
                    <p class=" text-[gray] flex gap-3 items-center">
                        <i class="fa-solid fa-doc text-accent1"></i>
                        formation
                    </p>
                </div>
                <div class=" w-full">
                    <p class="text-[gray] text-sm">
                        Nous sommes ravis de vous partager les moments inspirants de la formation
                        passionnante sur les techniques de plaidoyer...
                    </p>
                </div>
                <button type="button" class="duration-300 ease-in-out border-2 border-accent1 px-1 py-3 rounded-lg  w-[10rem]">
                    <a href="#" class="bg-accent1 duration-300 ease-in-out text-white text-xl rounded-lg px-10 py-2">Lire plus</a>
                </button>
            </div>
            <div class="blog w-full h-auto flex flex-col bg-white shadow-lg rounded-md px-4 py-6 gap-6">
                <h1 class=" text-bg text-3xl">
                    Création d'une alliance de plaidoyer
                </h1>
                <div class=" w-full flex justify-between">
                    <p class=" flex gap-3 text-[gray] items-center">
                        <i class="fa-solid fa-calendar text-accent1"></i>
                        30 Août 2023
                    </p>
                    <p class=" text-[gray] flex gap-3 items-center">
                        <i class="fa-solid fa-doc text-accent1"></i>
                        formation
                    </p>
                </div>
                <div class=" w-full">
                    <p class="text-[gray] text-sm">
                        Nous sommes ravis de vous partager les moments inspirants de la formation
                        passionnante sur les techniques de plaidoyer...
                    </p>
                </div>
                <button type="button" class="duration-300 ease-in-out border-2 border-accent1 px-1 py-3 rounded-lg  w-[10rem]">
                    <a href="#" class="bg-accent1 duration-300 ease-in-out text-white text-xl rounded-lg px-10 py-2">Lire plus</a>
                </button> 
            </div>
            <div class="pagination w-full flex gap-4 justify-center lg:justify-start">
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="#" class=" text-bg  absolute top-0 right-0 bottom-0 left-0 cursor-pointer z-20 hover:text-white flex justify-center items-center">
                        <i class="fa-solid fa-arrow-left text-lg"></i>
                    </a>
                </p>
                <div class="pages flex gap-4">
                    <p class="w-12 h-12 duration-300 ease-in-out cursor-pointer hover:border-2 hover:border-accent1 flex justify-center items-center border border-[gray] rounded-md">
                        <a href="#" class="text-bg text-lg font-semibold">
                            1
                        </a>
                    </p>
                    <p class="w-12 h-12 duration-300 ease-in-out cursor-pointer hover:border-2 hover:border-accent1 flex justify-center items-center border border-[gray] rounded-md">
                        <a href="#" class="text-bg text-lg font-semibold">
                            2
                        </a>
                    </p>
                    <p class="w-12 h-12 duration-300 ease-in-out cursor-pointer hover:border-2 hover:border-accent1 flex justify-center items-center border border-[gray] rounded-md">
                        <a href="#" class="text-bg text-lg font-semibold">
                            3
                        </a>
                    </p>
                </div>
                
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="#" class=" text-bg  absolute top-0 right-0 bottom-0 left-0 cursor-pointer z-20 hover:text-white flex justify-center items-center">
                        <i class="fa-solid fa-arrow-right text-lg"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="blogs-specifications w-full lg:w-[35%] flex flex-col gap-6 lg:pt-10 pb-16">
            <div class="search-bar relative  w-full bg-white shadow-xl rounded-md px-6 py-6">
                <input type="text" name="search" class=" w-full border border-bg rounded-lg pl-4 py-2 pr-10
                outline-none focus:border-2 text-bg" placeholder="rechercher...">
                <i class="absolute flex justify-center items-center fa-solid fa-search text-[gray] px-4 border-l border-bg py-2 right-4 top-7"></i>
            </div>
            <div class="categories w-full bg-white shadow-xl rounded-md flex flex-col gap-6 px-4 py-6">
                <p class=" w-auto text-bg text-3xl pb-2 border-b border-bg">
                    Categories
                </p>
                <div class=" w-full flex flex-col gap-4">
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <p id="categorie" class="duration-300 ease-in-out hover:text-accent1 text-xl flex justify-center items-center gap-4 cursor-pointer">
                            <span class=" text-bg font-bold duration-300 ease-in-out hover:text-accent1"> > </span>
                            Formation
                        </p>
                        <p id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <a href="#" class="text-bg text-lg font-semibold flex justify-center items-center hover:text-white absolute top-0 left-0 right-0 bottom-0 z-20">
                                3
                            </a>
                        </p>
                    </div>
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <p class="duration-300 ease-in-out hover:text-accent1 text-xl flex justify-center items-center gap-4 cursor-pointer">
                            <span class=" text-bg font-bold duration-300 ease-in-out hover:text-accent1"> > </span>
                            Networking
                        </p>
                        <p id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <a href="#" class="text-bg text-lg font-semibold flex justify-center items-center hover:text-white absolute top-0 left-0 right-0 bottom-0 z-20">
                                2
                            </a>
                        </p>
                    </div>
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <p class="duration-300 ease-in-out hover:text-accent1 text-xl flex justify-center items-center gap-4 cursor-pointer">
                            <span class="duration-300 ease-in-out hover:text-accent1 text-bg font-bold"> > </span>
                            Atelier
                        </p>
                        <p id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <a href="#" class="text-bg text-lg font-semibold flex justify-center items-center hover:text-white absolute top-0 left-0 right-0 bottom-0 z-20">
                                3
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="recents w-full bg-white shadow-xl rounded-md flex flex-col gap-6 px-4 py-6">
                <p class=" w-auto text-bg text-3xl pb-2 border-b border-bg">
                    Blogs recents
                </p>
                <div class="recents-blogs w-full flex flex-col gap-4">
                    <div class="recent-blog w-full flex gap-4 items-center pb-4 border-b border-[#80808032]">
                        <div class=" w-[6rem] h-[5.3rem] ">
                            <img src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </div>
                        <div class=" flex flex-col gap-3">
                            <h1 class=" text-bg text-xl">
                                Création d'une alliance de plaidoyer
                            </h1>
                            <p class=" flex gap-3 text-[gray] items-center">
                                <i class="fa-solid fa-calendar text-accent1"></i>
                                30 Août 2023
                            </p>
                        </div>
                    </div>
                    <div class="recent-blog w-full flex gap-4 items-center pb-4 border-b border-[#80808032]">
                        <div class=" w-[6rem] h-[5.3rem] ">
                            <img src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </div>
                        <div class=" flex flex-col gap-3">
                            <h1 class=" text-bg text-xl">
                                Création d'une alliance de plaidoyer
                            </h1>
                            <p class=" flex gap-3 text-[gray] items-center">
                                <i class="fa-solid fa-calendar text-accent1"></i>
                                30 Août 2023
                            </p>
                        </div>
                    </div>
                    <div class="recent-blog w-full flex gap-4 items-center pb-4 border-b border-[#80808032]">
                        <div class=" w-[6rem] h-[5.3rem] ">
                            <img src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </div>
                        <div class=" flex flex-col gap-3">
                            <h1 class=" text-bg text-xl">
                                Création d'une alliance de plaidoyer
                            </h1>
                            <p class=" flex gap-3 text-[gray] items-center">
                                <i class="fa-solid fa-calendar text-accent1"></i>
                                30 Août 2023
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tags w-full bg-white shadow-xl rounded-md flex flex-col gap-6 px-4 py-6">
                <p class=" w-auto text-bg text-3xl pb-2 border-b border-bg">
                    Tags
                </p>
                <div class=" w-full flex flex-row flex-wrap gap-4">
                    <button type="button" id="tag" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Etat civil</a>
                        <a href="#" class="text-bg z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            Etat civil
                        </a>
                    </button>
                    <button type="button" id="tag" class= "relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Atelier</a>
                        <a href="#" class="text-bg z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            Atelier
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Formation</a>
                        <a href="#" class="text-bg z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            Formation
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Reseautage</a>
                        <a href="#" class="text-bg z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            Reseautage
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Campagne</a>
                        <a href="#" class="text-bg z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            Campagne
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-autopx-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">
                            sensibilisation
                        </a>
                        <a href="#" class="text-bg z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            sensibilisation
                        </a>
                    </button>   
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Accompagnement</a>
                        <a href="#" class="text-bg z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            Accompagnement
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Alliance</a>
                        <a href="#" class="text-bg  z-20 absolute top-0 left-0 right-0 bottom-0 hover:text-white px-4 py-2">
                            Alliance
                        </a>
                    </button>
                </div>
            </div>
            <div class="galerie w-full bg-white shadow-xl rounded-md flex flex-col gap-6 px-4 py-6">
                <p class=" w-auto text-bg text-3xl pb-2 border-b border-bg">
                    Galerie
                </p>
                <div class="w-full flex flex-row flex-wrap gap-2">
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class=" w-full h-full">
                            <img src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class=" w-full h-full">
                            <img src="{{asset('images/8.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class=" w-full h-full">
                            <img src="{{asset('images/Capture d’écran (132).png')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class=" w-full h-full">
                            <img src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class=" w-full h-full">
                            <img src="{{asset('images/KK.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class=" w-full h-full">
                            <img src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class=" rounded-lg object-cover w-full h-full">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection