@extends('layouts.header')
@section('title','titre du blog')
@section('content')
    @include('layouts.nav')
    <section
        class=" w-full h-auto lg:bg-secodary mt-16 sm:mt-12 lg:mt-32 lg:flex justify-end ">
        <div style="background-image:url({{asset('images/8.JPG')}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[30rem]">
            <h1 class=" text-white text-3xl lg:text-5xl text-center">
                Création d'une alliance de plaidoyer
            </h1>
            <p class="text-white text-2xl font-semibold">Description du blog</p>
            <span class=" text-accent1 font-semibold">
                YRHealth / Création d'une alliance de plaidoyer
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
                    <p class="text-[gray] md:text-sm">
                        Nous sommes ravis de vous partager les moments inspirants de la formation
                        passionnante sur les techniques de plaidoyer...
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio exercitationem 
                        nam eius quae veritatis quas consequuntur! Vitae nobis eligendi eius corrupti, 
                        quidem unde ipsa impedit doloremque in porro dolor dolores commodi atque voluptate, 
                        a cupiditate? Reiciendis corporis tenetur architecto. Consequatur iusto numquam 
                        accusamus neque ipsum sed harum hic commodi, et excepturi, incidunt porro fugiat 
                        enim vel? Sunt doloribus optio totam unde veritatis, dolor magni, possimus inventore 
                        reprehenderit eligendi est, voluptate suscipit obcaecati itaque earum saepe laudantiu
                    </p>
                </div>
                <div class=" w-full">
                    <p class=" pl-5 border-l border-accent1">
                        <i class="text-[gray] md:text-sm">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Voluptate delectus cupiditate laborum! Corrupti molestiae nesciunt 
                            earum voluptatem placeat voluptas tenetur.
                        </i>
                    </p>
                </div>
                <div class=" w-full ">
                    <h2 class="text-bg text-3xl">
                        D'autres titres peuvent également être mentionnés
                    </h2>
                </div>
                <div class=" w-full ">
                    <img src="{{asset('images/8.JPG')}}" alt="" width="360" height="400" class=" w-full h-40 sm:h-48 md:h-80 object-cover rounded-md">
                </div>
                <div class=" w-full">
                    <p class="text-[gray] md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Corporis aliquid, sunt, a soluta accusantium, repudiandae 
                        pariatur quidem neque optio obcaecati labore iste sed esse 
                        ut quaerat rerum necessitatibus quod vel ad. Est quas totam 
                        officiis quidem enim laboriosam itaque impedit!
                    </p>
                </div>
                <div class="share w-full border-t border-[#80808042] pt-10 flex flex-col gap-3">
                    <div class=" flex gap-3 w-full">
                        <p class="text-bg font-semibold">Share : </p>
                        <div class=" w-auto flex gap-4">
                            <p>
                                <a href="">
                                    <i class="fa-brands fa-facebook text-bg text-base"></i>
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="fa-solid fa-x text-bg text-base"></i>
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="fa-brands fa-instagram text-bg text-base"></i>
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="fa-brands fa-youtube text-base text-red"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="tags w-full flex gap-2">
                        <p class=" text-lg text-[gray]">
                            #youth
                        </p>
                        <p class=" text-lg text-[gray]">
                            #santesexuel
                        </p>
                        <p class=" text-lg text-[gray]">
                            #youthdrc
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="next-prev w-full flex gap-4 justify-between lg:justify-start">
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="#" class=" text-bg  absolute top-0 right-0 bottom-0 left-0 cursor-pointer z-20 hover:text-white flex justify-center items-center">
                        <i class="fa-solid fa-arrow-left text-lg"></i>
                    </a>
                </p>
                
                
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="#" class=" text-bg  absolute top-0 right-0 bottom-0 left-0 cursor-pointer z-20 hover:text-white flex justify-center items-center">
                        <i class="fa-solid fa-arrow-right text-lg"></i>
                    </a>
                </p>
            </div>
            <div class="about_admin w-full flex px-4 items-center flex-col md:flex-row gap-3 md:gap-10 bg-white shadow-xl py-5 rounded-md">
                <div class=" w-[6rem] h-[6rem] md:w-28 md:h-28">
                    <img src="{{asset('images/KK.JPG')}}" alt="" width="230" height="300" class=" object-cover rounded-full w-full h-full">
                </div>
                <div class=" w-full flex flex-col gap-3 md:w-auto">
                    <h2 class=" font-semibold flex gap-3">
                        Dullin Lulinda : <span>Auteur</span>
                    </h2>
                    <p class=" text-sm text-[gray]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, totam!
                    </p>
                    <div class=" flex gap-4">
                        <p class="">
                            <a href="#" class="w-8 h-8 rounded-full border border-accent1 flex justify-center items-center">
                                <i class="fa-brands fa-facebook text-bg text-xl"></i>
                            </a>
                        </p>
                        <p>
                            <a href="#" class="w-8 h-8 rounded-full border border-accent1 flex justify-center items-center">
                                <i class="fa-solid fa-x text-bg text-xl"></i>
                            </a>
                        </p>
                        <p>
                            <a href="#" class="w-8 h-8 rounded-full border border-accent1 flex justify-center items-center">
                                <i class="fa-brands fa-instagram text-red text-xl"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="comments w-full flex flex-col gap-4 ">
                <p class=" text-bg text-xl font-semibold">
                    2 Commentaires
                </p>
                <div class="comments w-full flex flex-col gap-4">
                    <div class="user_comment w-auto h-auto flex flex-col gap-1">
                        <div class="w-auto min-w-[15.48rem] h-auto p-2 bg-secodary rounded-md  self-end ">
                            <img src="{{asset('images/KK.JPG')}}" alt="user photo" height="10" width="10"
                                class=" w-8 h-8 rounded-full object-cover -mr-5 mt-3 border-[4px] border-white float-right">
                            <div class=" w-full mr-5 relative pb-3">
                                <h3 class=" text-accent1 text-lg font-semibold lg:text-sm">Vous</h3>
                                <p class=" text-white text-sm lg:text-xs ">
                                     bonjour 
                                </p>
                                <small class=" text-[gray] text-[10px] absolute right-4 -bottom-1">12 Août 2024 10:12</small>
                            </div>                                   
                        </div>
                        <div class="replies  w-full h-auto flex flex-col gap-3 ">
                            <div class=" w-auto flex gap-3 self-end">
                                <button class=" flex items-center gap-1 text-bg text-sm">
                                    <!-- done fa-solid -->
                                    58
                                    <i class="fa-regular fa-thumbs-up text-bg text-lg"></i> 
                                </button>
                                <div class=" flex items-center gap-3 text-bg text-sm border-l border-redCrim pl-3">
                                    <!-- done fa-solid -->
                                    5 réponses
                                    <button class="border-l border-redCrim pl-3 pr-0"> répondre </button>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="user_comment w-auto h-auto flex flex-col gap-1">
                        <div class="w-auto h-auto p-2 bg-secodary rounded-md  self-start ">
                            <img src="{{asset('images/KK.JPG')}}" alt="user photo" height="10" width="10"
                                class=" w-8 h-8 rounded-full object-cover -ml-5 mt-3 border-[4px] border-white float-left">
                            <div class=" w-full ml-5 relative pb-3">
                                <h3 class=" text-accent1 text-lg font-semibold lg:text-sm">Karena joe</h3>
                                <p class=" text-white text-sm lg:text-xs">
                                     bonjour ç dit kw le  chap 4 là-bas !! 
                                     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, voluptas!
                                </p>
                                <small class=" text-[gray] text-[10px] absolute right-4 -bottom-1">10:12</small>
                            </div>                 
                        </div>
                        <!-- reponses du commentaire & les statistiques -->
                        <div class="replies_and_statistics  w-full h-auto flex flex-col gap-4">
                            <div class=" w-auto flex gap-3 self-start">
                                <button class=" flex items-center gap-1 text-bg text-sm">
                                    <!-- done fa-solid -->
                                    58
                                    <i class="fa-regular fa-thumbs-up text-bg text-lg"></i> 
                                </button>
                                <div class=" flex items-center gap-3 text-bg text-sm border-l border-redCrim pl-3">
                                    <!-- done fa-solid -->
                                    5 réponses
                                    <button class="border-l border-redCrim pl-3"> répondre </button>
                                </div>
                            </div>  
                            <!-- toutes les reponses -->
                            <div class=" replies w-full flex flex-col gap-3">
                                <div class="user_reply w-auto h-auto flex flex-col gap-1 ml-5">
                                    <div class="w-auto h-auto p-2 bg-secodary rounded-md  self-start">
                                        <img src="{{asset('images/KK.JPG')}}" alt="user photo" height="10" width="10"
                                            class=" w-8 h-8 rounded-full object-cover -ml-5 mt-3 border-[4px] border-white float-left">
                                        <div class=" w-full ml-5 relative pb-3">
                                            <h3 class=" text-accent1 text-lg font-semibold lg:text-sm">Karena joe</h3>
                                            <p class=" text-white text-sm lg:text-xs pr-5">
                                                 bonjour ç dit kw le  chap 4 là-bas !! 
                                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, minima!
                                                 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, quae.
                                            </p>
                                            <small class=" text-[gray] text-[10px] absolute right-4 -bottom-1">10:12</small>
                                        </div>                 
                                    </div>
                                    <!-- reponses de la reponse & ses statistiques -->
                                    <div class="replies_and_statistics  w-full h-auto flex flex-col gap-4">
                                        <div class=" w-auto flex gap-3 self-start">
                                            <button class=" flex items-center gap-1 text-bg text-sm">
                                                <!-- done fa-solid -->
                                                58
                                                <i class="fa-regular fa-thumbs-up text-bg text-lg"></i> 
                                            </button>
                                            <div class=" flex items-center gap-3 text-bg text-sm border-l border-redCrim pl-3">
                                                <!-- done fa-solid -->
                                                5 réponses
                                                <button class="border-l border-redCrim pl-3"> répondre </button>
                                            </div>
                                        </div>  
                                        <!-- toutes les reponses de la reponse -->
                                        <div class=" replies w-full flex flex-col gap-4">
                
                                        </div>
                                    </div>
                                </div>
                                <div class="user_reply w-auto h-auto flex flex-col gap-1 ml-5">
                                    <div class="w-auto h-auto p-2 bg-secodary rounded-md  self-start ">
                                        <img src="{{asset('images/KK.JPG')}}" alt="user photo" height="10" width="10"
                                            class=" w-8 h-8 rounded-full object-cover -ml-5 mt-3 border-[4px] border-white float-left">
                                        <div class=" w-full ml-5 relative pb-3">
                                            <h3 class=" text-accent1 text-lg font-semibold lg:text-sm">Karena joe</h3>
                                            <p class=" text-white text-sm lg:text-xs pr-5">
                                                 bonjour ç dit kw le  chap 4 là-bas !! 
                                            </p>
                                            <small class=" text-[gray] text-[10px] absolute right-4 -bottom-1">10:12</small>
                                        </div>                 
                                    </div>
                                    <!-- reponses de la reponse & ses statistiques -->
                                    <div class="replies_and_statistics  w-full h-auto flex flex-col gap-4">
                                        <div class=" w-auto flex gap-3 self-start">
                                            <button class=" flex items-center gap-1 text-bg text-sm">
                                                <!-- done fa-solid -->
                                                58
                                                <i class="fa-regular fa-thumbs-up text-bg text-lg"></i> 
                                            </button>
                                            <div class=" flex items-center gap-3 text-bg text-sm border-l border-redCrim pl-3">
                                                <!-- done fa-solid -->
                                                5 réponses
                                                <button class="border-l border-redCrim pl-3"> répondre </button>
                                            </div>
                                        </div>  
                                        <!-- toutes les reponses de la reponse -->
                                        <div class=" replies w-full flex flex-col gap-4">
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post_a_comment w-full bg-white">
                <form action="" method="POST" class=" w-full flex flex-col gap-6 rounded-md px-6 py-6">
                    @csrf
                    <div class=" w-full flex flex-col gap-6 md:flex-row">
                        <div class="relative w-full flex flex-col gap-3">
                            <input required type="text" name="name" id="name" class="bg-[transparent] duration-500 ease-in-out text-bg px-4 py-2 outline-none border border-bg rounded-md w-full focus:border-2"
                            autocomplete="name" value="{{old('name')}} ">
                            <label for="name" id="label-name" class="text-[gray] duration-500 ease-in-out bg-white w-auto absolute top-2 px-0 left-4">votre nom</label>
                            @error('name')
                                <small class=" text-red">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="relative w-full">
                            <input required type="email" name="email" id="email" class="bg-[transparent] duration-500 ease-in-out text-bg px-4 py-2 outline-none border border-bg rounded-md w-full focus:border-2"
                            autocomplete="email" value="{{old('email')}}">
                            <label for="email" id="label-email" class="text-[gray] duration-500 ease-in-out bg-white w-auto absolute top-2 left-4">votre E-mail</label>
                            @error('email')
                                <small class=" text-red">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="relative w-full">
                        <textarea name="content" id="content" class="bg-[transparent] duration-500 ease-in-out text-left text-bg px-4 py-4 outline-none border border-bg rounded-md w-full focus:border-2" 
                        autocomplete="content" rows="3">
                        </textarea>
                        <label for="content" id="label-content" class="text-[gray] duration-500 ease-in-out bg-white w-auto absolute top-2 left-4">votre message</label>
                        @error('content')
                            <small class=" text-red">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class=" w-full md:w-[10rem]">
                        <button type="submit" class="text-lg duration-500 ease-in-out hover:bg-gradient-to-l px-4 py-2 rounded-md w-full bg-gradient-to-r from-accent1 to-accent2 text-white">
                            Commenter
                        </button>
                    </div>
                </form>
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
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
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
                <div class="w-full flex flex-row flex-wrap gap-2 justify-center">
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
