@extends('layouts.header')
@section('title','à propos de nous | Youth reproductive Health')
@section('content')
    @include('layouts.nav')
    <section
        class="justify-end w-full h-auto mt-16 lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url({{asset('images/8.jpg')}})"
             class="bg-blend-darken bg-cover rounded-b-[5rem] md:rounded-b-[2rem] lg:rounded-b-none self-end flex flex-col 
             items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
             h-[20rem] lg:h-[35rem] lg:w-[92%] lg:rounded-tl-[10rem]">
            <h1 class="text-2xl text-white lg:text-5xl">
                Droits sexuels et reproductifs
            </h1>
            <p class="text-2xl font-semibold text-white">A propos de nous</p>
            <span class="font-semibold text-accent2">
                YRHealth / about us
            </span>
        </div>
    </section>
    <section id="text" class="w-full h-auto px-4 pt-16 pb-5 -mt-1 lg:px-8">
        <div class=" w-full px-4 lg:px-8 border-b border-x border-[gray] py-5">
            <div class=" text-[gray] text-justify">
                  {!!mb_convert_encoding($about->content->render(),"UTF-8")!!}
            </div>
        </div>
    </section>
    <section class=" w-full h-[20rem] lg:h-[30rem] bg-no-repeat bg-cover bg-blend-darken bg-[#141821ac] flex justify-center items-center" 
        style="background-image: url({{asset('images/bgimg.jpg')}})">
        <div class="flex flex-col items-center justify-center w-full gap-4 px-4">
            <h1 class="text-3xl font-bold text-white lg:text-6xl md:text-5xl">
                Comment pouvez-vous intervenir ?
            </h1>
            <p class="text-xl text-white ">
                votre don nous aidera à améliorer des vies grâce à la recherche, <br>
                à l'enseignement et aux soins d'urgence
            </p>
            <div class="flex gap-6 ">
                <button class="px-1 py-3 border-2 rounded-lg border-accent1">
                    <a href="#" class="px-4 py-2 text-xl text-white rounded-lg bg-accent1">Fiare un don</a>
                </button>
                <button class="px-4 py-1 text-xl font-semibold text-white border border-white rounded-lg ">
                    <a href="#">Nous rejoindre</a>
                </button>
            </div>
        </div>
    </section>
    <section id="volontaires" class="w-full h-auto px-4 pt-16 pb-5 ">
        <div class="flex flex-col w-full gap-5 ">
            <p class="text-3xl font-semibold text-center text-bg">Nos volontaires</p>
            <p class=" text-[gray] md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Facilis exercitationem earum magni, dolorum ad, corrupti dolores 
            </p>
            <div class="w-full h-auto md:flex md:gap-8">
                <div class="flex w-full gap-8 bg-white rounded-md shadow-lg md:w-1/2 lg:gap-0">
                   <div class=" w-[8rem] sm:w-[12rem] md:w-[10rem] sm:h-[14rem] h-[9rem] lg:w-1/2 lg:h-[20rem] rounded-md ">
                        <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/KK.jpg')}}" alt="managing director" width="250" height="300"
                        class= "object-cover w-full h-full "
                        >
                   </div>
                    <div class="flex flex-col items-center justify-center gap-4 lg:w-1/2">
                        <h2 class="text-xl font-semibold text-bg">Dullin Lulinda</h2>
                        <p class=" text-bg">Program manager</p>
                        <div class="flex gap-4 ">
                            <p class="">
                                <a href="#" class="flex items-center justify-center w-10 h-10 border rounded-full border-accent1">
                                    <i class="text-xl fa-brands fa-facebook text-bg"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="flex items-center justify-center w-10 h-10 border rounded-full border-accent1">
                                    <i class="text-xl fa-solid fa-x text-bg"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="flex items-center justify-center w-10 h-10 border rounded-full border-accent1">
                                    <i class="text-xl fa-brands fa-instagram text-red"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hidden w-full gap-8 bg-white rounded-md shadow-lg md:flex md:w-1/2 lg:gap-0">
                    <div class="w-[8rem] sm:w-[12rem] md:w-[10rem] sm:h-[14rem] h-[9rem] lg:w-1/2 lg:h-[20rem] rounded-md">
                        <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/KK.jpg')}}" alt="managing director" width="250" height="300"
                            class="object-cover w-full h-full "
                            >
                    </div>
                    <div class="flex flex-col items-center justify-center gap-4 lg:w-1/2">
                        <h2 class="text-xl font-semibold text-bg">Dullin Lulinda</h2>
                        <p class=" text-bg">Program manager</p>
                        <div class="flex gap-4 ">
                            <p class="">
                                <a href="#" class="flex items-center justify-center w-10 h-10 border rounded-full border-accent1">
                                    <i class="text-xl fa-brands fa-facebook text-bg"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="flex items-center justify-center w-10 h-10 border rounded-full border-accent1">
                                    <i class="text-xl fa-solid fa-x text-bg"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="flex items-center justify-center w-10 h-10 border rounded-full border-accent1">
                                    <i class="text-xl fa-brands fa-instagram text-red"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full gap-3 mt-3 ">
                <p class="w-6 h-2 bg-accent1"></p>
                <p class="w-2 h-2 bg-accent1"></p>
            </div>
        </div>
    </section>
    <section id="testimonials" class="w-full h-auto px-4 pt-16 pb-16 ">
        <div class="flex flex-col w-full gap-5 ">
            <p class="text-3xl font-semibold text-center text-bg">Ce que les gens disent de nous</p>
            <p class=" text-[gray] md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Facilis exercitationem earum magni, dolorum ad, corrupti dolores 
            </p>
            <div class="w-full h-auto md:flex md:gap-8">
                <div class="flex flex-col w-full gap-4 p-4 bg-white border-l-2 shadow-lg md:w-1/2 rounded-xl border-accent1 md:p-10">
                    <p class="text-lg">
                        <i class=" text-bg">
                            Mme Muhigirwa Sifa Ghislaine est une professionnelle en biologie médicale, avec une grande
                            expérience dans la promotion du droit des femmes et des filles à accéder aux informations, 
                            ressources et compétences en matière de santé qui leur permettent de devenir économiquement 
                            indépendantes et de jouir de leur autonomie. Elle est la coordinatrice de Youth Reproductive 
                            Health DRC.
                        </i>
                    </p>
                    <div class="flex items-center justify-between w-full ">
                        <div class="flex items-center justify-center gap-4">
                            <div class="p-2 border rounded-full cursor-pointer border-accent1">
                                <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/261669296118.jpg')}}" alt="Muhigirwa Sifa Ghislaine" width="80" height="80"
                                    class="object-cover w-20 h-20 rounded-full md:w-16 md:h-16" 
                                >
                            </div>
                            <div class="flex flex-col gap-1 ">
                                <h3 class="font-bold text-bg">Muhigirwa Sifa Ghislaine</h3>
                                <p class="text-sm text-bg">Coordinatrice</p>
                                <p class="text-sm text-bg"> Société de l'etat civil</p>
                            </div>
                        </div>
                        <div>
                            <p class="flex items-center justify-center w-10 h-10 rounded-full cursor-pointer bg-gradient-to-l from-accent1 to-accent2">
                                <i class="text-xl text-center text-white fa-solid fa-arrow-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 p-4 bg-white border-l-2 shadow-lg md:w-1/2 rounded-xl border-accent1 md:p-10">
                    <p class="text-lg">
                        <i class=" text-bg">
                            Mme Muhigirwa Sifa Ghislaine est une professionnelle en biologie médicale, avec une grande
                            expérience dans la promotion du droit des femmes et des filles à accéder aux informations, 
                            ressources et compétences en matière de santé qui leur permettent de devenir économiquement 
                            indépendantes et de jouir de leur autonomie. Elle est la coordinatrice de Youth Reproductive 
                            Health DRC.
                        </i>
                    </p>
                    <div class="flex items-center justify-between w-full ">
                        <div class="flex items-center justify-center gap-4">
                            <div class="p-2 border rounded-full cursor-pointer border-accent1">
                                <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/261669296118.jpg')}}" alt="Muhigirwa Sifa Ghislaine" width="80" height="80"
                                    class="object-cover w-20 h-20 rounded-full md:w-16 md:h-16" 
                                >
                            </div>
                            <div class="flex flex-col gap-1 ">
                                <h3 class="font-bold text-bg">Muhigirwa Sifa Ghislaine</h3>
                                <p class="text-sm text-bg">Coordinatrice</p>
                                <p class="text-sm text-bg"> Société de l'etat civil</p>
                            </div>
                        </div>
                        <div>
                            <p class="flex items-center justify-center w-10 h-10 rounded-full cursor-pointer bg-gradient-to-l from-accent1 to-accent2">
                                <i class="text-xl text-center text-white fa-solid fa-arrow-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full gap-3 mt-3 ">
                <p class="w-6 h-2 bg-accent1"></p>
                <p class="w-2 h-2 bg-accent1"></p>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection