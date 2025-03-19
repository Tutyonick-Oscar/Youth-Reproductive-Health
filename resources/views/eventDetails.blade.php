@extends('layouts.header')
@section('title',"YRHealth |".$event->title)
@section('content')
    @include('layouts.nav')
    <section
        class="justify-end w-full h-auto mt-16 lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url(/store/{{$event->image}})"
            class="px-10 bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[30rem]">
            <h1 class="text-3xl text-center text-white lg:text-5xl">
                {{$event->title}}
            </h1>
            <p class="text-2xl hidden md:flex font-semibold text-white">Descriptions de l'evenement</p>
            <span class="font-semibold text-accent1 hidden md:flex">
                YRHealth / {{$event->title}}
            </span>
        </div>
    </section>
    <section class="flex flex-col w-full gap-10 px-8 lg:flex-row">
        <div class="events w-full lg:w-[65%] flex flex-col gap-6 pt-10">
            <div class="flex flex-col w-full h-auto gap-6 md:px-8 py-8 bg-white md:rounded-md md:shadow-lg event">
                <h1 class="text-3xl text-bg hidden md:flex ">
                    {{$event->title}}
                </h1>
                <div class="flex justify-between w-full ">
                    <p class=" flex gap-3 text-[gray] items-center">
                        <i class="fa-solid fa-calendar text-accent1"></i>
                        {{ $carbon::parse($event->date)->format('d-m-Y')}}
                    </p>
                    <p class=" text-[gray] flex gap-3 items-center">
                        <i class="fa-solid fa-doc text-accent1"></i>
                        {{ucfirst($event->status)}}
                    </p>
                </div>
                <div class="w-full ">
                     {!! mb_convert_encoding($event->content->render(),"UTF-8")!!}
                </div>
                <div class="share w-full border-t border-[#80808042] pt-10 flex flex-col gap-3">
                    <div class="flex w-full gap-3 ">
                        <p class="font-semibold text-bg">Share : </p>
                        <div class="flex w-auto gap-4 ">
                            <p>
                                <a href="">
                                    <i class="text-base fa-brands fa-facebook text-bg"></i>
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="text-base fa-solid fa-x text-bg"></i>
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="text-base fa-brands fa-instagram text-bg"></i>
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="text-base fa-brands fa-youtube text-red"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="flex w-full gap-1 tags">
                        @forelse (explode(',',$event->tags) as $tag)
                           <p class=" text-lg text-[gray]">
                            #{{$tag}}
                        </p> 
                        @empty
                            <p class=" text-lg text-[gray]">
                                #youth #reproductive #health
                            </p>
                        @endforelse
                    </div>
                </div>
                <div class="border-t pt-5 border-[#80808042] flex flex-col md:items-center w-full gap-3 about_admin md:flex-row md:gap-10">
                <div class=" w-[4rem] h-[4rem] md:w-24 md:h-24 flex justify-center items-center">
                   <p class ='flex items-center justify-center w-full h-full border rounded-full border-secodary'>
                        <i class="text-[2.5rem] md:text-[3.5rem] text-center rounded-full  fa-solid fa-user"></i>
                   </p>
                </div>
                <div class="flex flex-col w-full gap-3 md:w-auto">
                    <h2 class="flex gap-3 font-semibold ">
                       {{$event->user->user_name}} : <span>Auteur</span>
                    </h2>
                    <p class=" text-sm text-[gray]">
                        program manger à youth reproductive health
                    </p>
                    <div class="flex gap-4 ">
                        <p class="">
                            <a href="https://www.facebook.com/dullin.dunia" class="flex items-center justify-center w-8 h-8 border rounded-full border-accent1">
                                <i class="text-xl fa-brands fa-facebook text-bg"></i>
                            </a>
                        </p>
                        <p>
                            <a href="#" class="flex items-center justify-center w-8 h-8 border rounded-full border-accent1">
                                <i class="text-xl fa-solid fa-x text-bg"></i>
                            </a>
                        </p>
                        <p>
                            <a href="https://cd.linkedin.com/in/dullin-lulinda-072851170" class="flex items-center justify-center w-8 h-8 border rounded-full border-accent1">
                                <i class="text-xl fa-brands fa-linkedin text-red"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="events-specifications w-full lg:w-[35%] flex flex-col gap-6 lg:pt-10 pb-16">
            <div class="relative w-full px-4 py-6 bg-white rounded-md shadow-xl search-bar">
                <input type="text" name="search" class="w-full py-2 pl-4 pr-10 border rounded-lg outline-none border-bg focus:border-2 text-bg" placeholder="rechercher...">
                <i class="absolute flex justify-center items-center fa-solid fa-search text-[gray] px-4 border-l border-bg py-2 right-4 top-7"></i>
            </div>
             <div class="flex flex-col w-full gap-6 md:px-4 py-6 bg-white md:rounded-md md:shadow-xl categories">
                <p class="w-auto pb-2 text-3xl border-b text-bg border-bg">
                    Catégories
                </p>
                <div class="flex flex-col w-full gap-4 ">
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <a href="{{route('events',['status'=>'upcoming'])}}" h id="categorie" class="flex items-center justify-center gap-4 text-xl duration-300 ease-in-out cursor-pointer hover:text-accent1">
                            <span class="font-bold duration-300 ease-in-out text-bg hover:text-accent1"> > </span>
                            Evénements à venir
                        </a>
                        <a href="{{route('events',['status'=>'upcoming'])}}" id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <p  class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center text-lg font-semibold text-bg hover:text-white">
                                {{count($events->where('status','upcoming'))}}
                            </p>
                        </a>
                    </div>
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <a href="{{route('events',['status'=>'past'])}}" class="flex items-center justify-center gap-4 text-xl duration-300 ease-in-out cursor-pointer hover:text-accent1">
                            <span class="font-bold duration-300 ease-in-out text-bg hover:text-accent1"> > </span>
                            Evénements passés
                        </a>
                        <a href="{{route('events',['status'=>'past'])}}" id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <p class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center text-lg font-semibold text-bg hover:text-white">
                                {{count($events->where('status','past'))}}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full md:gap-4 md:px-4 py-6 bg-white md:rounded-md md:shadow-xl recents">
                <p class="w-auto pb-2 text-3xl border-b text-bg border-bg">
                    Evénements récents
                </p>
                <div class="flex flex-col w-full gap-4 recents-events">
                   @forelse ($recentevents as $recent)
    
                        <div class="recent-event w-full flex gap-4 items-center pb-4 border-b border-[#80808032]">
                            <div class=" w-[25%] h-[5.3rem] ">
                                <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$recent->image}}" alt="event img" width="80" height="80"
                                class="object-cover w-full h-full rounded-lg ">
                            </div>
                            <div class="flex flex-col w-[70%]gap-3 ">
                                <h1 class="text-xl cursor-pointer text-bg">
                                    <a class="text-[16px]" id="recentEventTitle" href="{{route('event.detail',['id'=>$recent->id])}}">
                                        {{$recent->title}}
                                    </a>
                                </h1>
                                <p class=" flex gap-3 text-[gray] items-center">
                                    <i class="fa-solid fa-calendar text-accent1"></i>
                                    {{isset($recent->date)? $carbon::parse($recent->date)->format('d-m-Y') : $recent->created_at->format('d m Y')}}
                                </p>
                            </div>
                        </div>
                   @empty
                    <p>Aucun Evénement récement publié</p>
                   @endforelse
                </div>
            </div>
            <div class="flex flex-col w-full gap-6 px-4 py-6 bg-white rounded-md shadow-xl tags">
                <p class="w-auto pb-2 text-3xl border-b text-bg border-bg">
                    Tags
                </p>
                <div class="flex flex-row flex-wrap w-full gap-4 ">
                    <button type="button" id="tag" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Etat civil</a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            Etat civil
                        </a>
                    </button>
                    <button type="button" id="tag" class= "relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Atelier</a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            Atelier
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Formation</a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            Formation
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Reseautage</a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            Réseautage
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Campagne</a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            Campagne
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">
                            sensibilisation
                        </a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            sensibilisation
                        </a>
                    </button>   
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Accompagnement</a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            Accompagnement
                        </a>
                    </button>
                    <button id="tag" type="button" class="relative w-auto px-4 py-2 rounded-md border border-[#80808032]">
                        <a href="#" class="opacity-0">Alliance</a>
                        <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 px-4 py-2 text-bg hover:text-white">
                            Alliance
                        </a>
                    </button>
                </div>
            </div>
            <div class="flex flex-col w-full gap-6 px-4 py-6 bg-white rounded-md shadow-xl galerie">
                <p class="w-auto pb-2 text-3xl border-b text-bg border-bg">
                    Galerie
                </p>
                <div class="flex flex-row flex-wrap justify-center w-full gap-2">
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/8.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/Capture d’écran (132).jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/KK.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script src="{{asset('js/events.js')}}"></script>
@endsection

