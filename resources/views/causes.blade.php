@extends('layouts.header')
@section('title','ce que nous faisons | Youth reproductive Health')
@section('content')
@include('layouts.nav')
    <section
        class=" w-full h-auto lg:bg-secodary mt-16 sm:mt-12 lg:mt-32 lg:flex justify-end ">
        <div style="background-image:url({{asset('images/8.jpg')}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[30rem]">
            <h1 class=" text-white text-3xl lg:text-5xl">
                Droits sexuels et reproductifs
            </h1>
            <p class="text-white text-2xl font-semibold">Ce que nous faisons</p>
            <span class=" text-accent2 font-semibold">
                YRHealth / services
            </span>
        </div>
    </section>
    <section class="w-full flex flex-col px-4 lg:px-8 gap-10 pb-16">
        <div class="w-full bg-secodary px-4 py-6 relative -mt-10 rounded-md flex justify-center items-center flex-col gap-5">
            <h1 class=" text-white text-xl text-center md:text-3xl font-semibold pb-5 border-b-[0.1px] border-white">
                Promouvoir le droit à la santé sexuelle et reproductive
            </h1>
            <p class=" text-white text-sm lg:text-center lg:px-10">
                Youth Reproductive Health vise à promouvoir les droits et la santé reproductive 
                des femmes – filles, et des adolescentes, en fournissant une information fiable sur
                l’éducation sexuelle saine et complète à la communauté,...
            </p>
            <p class="absolute right-4 lg:right-10 bottom-4 flex justify-center items-center
                duration-300 ease-in-out hover:scale-[1.3] cursor-pointer">
                <i class="text-white fa-solid fa-arrow-right "></i>
            </p>
        </div>
        <div class=" w-full md:flex lg:gap-12">
            <div class=" hidden md:flex flex-col gap-6 w-1/2">
                <div class=" w-full flex flex-col gap-4">
                    <h1 class=" text-bg text-3xl font-semibold">
                        Nos différents causes<br>
                        et services
                    </h1>
                    <p class="duration-500 ease-in-out hover:bg-white hover:shadow-md hover:text-bg hover:scale-[1.1] cursor-pointer px-3 py-2 bg-secodary w-[11rem] rounded-3xl text-white">
                        <a href="#">
                            En savoir plus sur nous
                        </a>
                    </p>
                </div>
                <div class=" w-full h-[27.5rem] lg:h-[22.1rem] -ml-10">
                    <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" width="300" height="432" alt="youth | image"
                    class=" w-full h-full object-cover rounded-tr-xl rounded-br-xl">
                </div>
            </div>
            <div class=" w-full md:w-1/2 flex flex-col gap-4 pl-4 md:pl-0">
                <div class="w-full bg-white duration-500 ease-in-out cursor-pointer hover:scale-[1.1] shadow-xl px-12 py-6 relative rounded-md flex justify-center items-center flex-col gap-5">
                    <h1 class=" text-bg text-xl self-start font-semibold pb-5 border-b-[0.1px] border-bg">
                        Promouvoir l'égalité entre le sexes
                    </h1>
                    <p class=" text-[gray] text-sm">
                        Dans les régions rurales de l’Est de la RD Congo, les mœurs et 
                        coutumes rétrogrades ont encore une emprise..
                    </p>
                    <p class="absolute right-12 bottom-2 ">
                        <i class="text-accent1 fa-solid fa-arrow-right"></i>
                    </p>
                    <p class="w-12 h-12 md:w-10 md:h-10 rounded-full bg-accent1 absolute -left-5 top-[40%]">

                    </p>
                </div>
                <div class="w-full bg-white duration-500 ease-in-out cursor-pointer hover:scale-[1.1] shadow-xl px-12 py-6 relative  rounded-md flex justify-center items-center flex-col gap-5">
                    <h1 class=" text-bg text-xl self-start font-semibold pb-5 border-b-[0.1px] border-bg">
                        Sante et droits sexuels et reproductifs
                    </h1>
                    <p class=" text-[gray] text-sm">
                        Informer la communauté sur ses droits, son pouvoir et ses capacités
                        constitue une importante ressource..
                    </p>
                    <p class="absolute right-12 bottom-2">
                        <i class="text-accent1 fa-solid fa-arrow-right"></i>
                    </p>
                    <p class="w-12 h-12 md:w-10 md:h-10 rounded-full bg-accent1 absolute -left-5 top-[40%]">

                    </p>
                </div>
                <div class="w-full bg-white duration-500 ease-in-out cursor-pointer hover:scale-[1.1] shadow-xl px-12 py-6 relative  rounded-md flex justify-center items-center flex-col gap-5">
                    <h1 class=" text-bg text-xl self-start font-semibold pb-5 border-b-[0.1px] border-bg">
                        Egalité entre les sexes
                    </h1>
                    <p class=" text-[gray] text-sm">
                        La place et l’estime de la femme, ne sont pas encore arrivées à leurs justes places. 
                        Des milliers des femmes, des jeunes filles
                    </p>
                    <p class="absolute right-12 bottom-2">
                        <i class="text-accent1 fa-solid fa-arrow-right"></i>
                    </p>
                    <p class=" w-12 h-12 md:w-10 md:h-10 rounded-full bg-accent1 absolute -left-5 top-[40%]">

                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
