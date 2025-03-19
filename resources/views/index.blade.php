@extends('layouts.header')
@section('title', 'Youth Reproductive Health')
@section('content')
    @include('layouts.nav')
    <div
        style="background-image: url({{asset('images/8.jpg')}})"
        id="Slidescontainer"  class="bg-blend-darken overflow-hidden  bg-bg bg-opacity-60 relative w-full h-[18rem] lg:h-[38rem] flex mt-16 sm:mt-12  lg:mt-[9.5rem]"> 
        <div id="rounded2" class="absolute w-0 h-0 p-2 rounded-full -right-8 -bottom-8 bg-secodary">
            <div class="w-full h-full border border-white rounded-full ">
                 
            </div>
       </div>
       <div id="rounded1" class="absolute w-0 h-0 p-2 rounded-full -left-8 -top-5 bg-secodary">
            <div class="w-full h-full border border-white rounded-full ">   
            </div>
        </div>
        <div style="" class="relative  w-[100%] h-full ">
            <button
                id="arrowL" class="absolute items-center justify-center hidden w-10 h-10 duration-500 ease-in-out bg-white rounded-full text-accent1 hover:text-white hover:bg-accent1 top-52 left-5 lg:flex">
                <i class="fa-solid fa-arrow-left "></i>
            </button>
            <div class="lg:ml-[4.6rem] absolute overflow-hidden z-10 top-0 left-0 bottom-0 right-0 w-full h-full pl-4 lg:pl-10 pr-0 flex flex-col  items-center justify-center gap-4 xl:gap-8 lg:gap-4">
                <h1 
                    id="title" class="text-3xl font-semibold tracking-wider text-white opacity-0 sm:-translate-x-80 xl:text-7xl lg:text-6xl">
                    Aider les pauvres femmes à jouir pleinement de leurs droits sexuels et reproductifs
                </h1>
                <p id="text" class=" self-start hidden text-white translate-y-20 opacity-0 md:block">
                Aider nous à agir avec plus des forces, Leurs besoins augmentent, nos ressources diminuent.
                </p>
                <button class="self-start hidden px-6 py-4 duration-500 ease-in-out rounded-lg hover:bg-accent2 lg:block bg-accent1">
                    <a href="#" class="text-xl text-white ">Faire un Don maintenant</a>
                </button>
                <button class="self-start px-4 py-2 duration-500 ease-in-out rounded-lg hover:bg-accent2 lg:hidden bg-accent1">
                    <a href="#" class="text-xl text-white ">Faire un Don </a>
                </button>
            </div>
            
        </div>
        <div class=" lg:w-[60%] md:w-[45%] h-full w-0 ">
        </div>
        <button 
            id="arrowR" class="absolute items-center justify-center hidden w-10 h-10 duration-500 ease-in-out bg-white rounded-full text-accent1 lg:flex hover:text-white hover:bg-accent1 top-52 right-5">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
    <section id="about" class="w-full h-auto px-8">
        <div class="flex flex-col items-center w-full gap-2 pt-16 ">
            <div class="flex flex-col w-full gap-4 lg:gap-6 md:flex-row">
                <div class="flex flex-col w-full gap-4 md:w-1/2 lg:gap-6">
                    <button class="rounded-md w-[9rem] lg:w-[10rem] bg-gradient-to-l lg:text-lg from-accent1 to-accent2 px-4 py-2 text-white">
                        A propos de nous
                    </button>
                    <h2 id='aboutTitle' class="text-3xl font-semibold unobserve text-bg lg:text-4xl">
                        {{$about->title}}
                        
                    </h2>
                    <div id='aboutContent' class="unobserve text-[gray] lg:text-lg">
                         {!!mb_convert_encoding($about->content->render(),"UTF-8")!!}
                    </div>
                    <span class="-mt-4 underline text-bg">
                        <a href="{{route('about')}}">lire plus...</a>
                    </span>
                </div>
                <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$about->image}}" alt="a propos de nous" height="400" width="300" 
                class="rounded-md w-full object-cover h-[10rem] md:h-full md:w-1/2 lg:h-[25rem]">
            </div>
        </div>
    </section>
    <section id="what we do first" class="w-full h-auto px-8 mt-6">
        <div class="w-full pt-16 ">
            <div class="flex flex-col float-right w-full gap-6 md:w-1/2">
                <button class="rounded-md w-[11rem]  bg-gradient-to-l lg:text-lg from-accent1 to-accent2 px-4 py-2 text-white">
                    Ce que nous faisons
                </button>
                <h2 id='causesFirstTitle' class="text-3xl font-semibold unobserve text-bg lg:text-4xl lg:mt-4">
                    {{$causes->first()->title}}
                </h2>
                <div id = 'causesFirstContent' class="unobserve text-[gray] lg:text-lg">
                   {!! mb_convert_encoding($causes->first()->content->render(),"UTF-8")!!}
                </div>
                <span class="pb-6 -mt-4 underline text-bg">
                    <a href="{{route('causes')}}">lire plus...</a>
                </span>
            </div>
            <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$causes->first()->image}}" alt="a propos de nous" height="400" width="300" 
            class="unobserve md:pr-6  float-left rounded-md w-full object-cover h-[10rem] md:h-full md:w-1/2 lg:h-[25rem]">
        </div>
    </section>
    <section id="what we do suite" class="flex w-full gap-4 px-8 pt-16 ">
        @foreach ($causes as $cause)
            @if ($cause != $causes->first())
                <div class="lefthidden boxs relative w-full md:w-[33%] shadow-md px-10 pb-10 hidden md:flex flex-col gap-3">
                    <h2 class="text-lg font-semibold text-bg">
                        {{$cause->title}}
                    </h2>
                    <div id = 'causeSmallDescript' class="text-sm text-accent1">
                       {!!mb_convert_encoding($cause->content->render(),"UTF-8")!!}
                    </div>
                    <p class="absolute flex items-center justify-center w-8 h-8 text-white duration-500 ease-in-out rounded-full cursor-pointer hover:bg-bg hover:text-white right-2 bottom-2 bg-accent1">
                        <a href=" {{route('cause.detail',['id'=>$cause->id])}} ">
                        <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </p>
                </div>
            @endif
        @endforeach
        
    </section>
    <section id="our vision" class="flex flex-col w-full h-auto gap-4 px-8 pt-16 pb-10 lg:flex-row">
        <div class="relative w-full lg:w-1/2 ">
            <div class="w-[70%] lg:w-[80%] h-full"
                 style="clip-path: polygon(0 0, 93% 0, 75% 100%, 0% 100%);"
            >
                <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$vision->image1}}" alt="our vision images" width="500" height="600"
                    class=" w-full h-80 xl:h-[25rem] object-cover rounded-tl-xl rounded-bl-xl"
                >
            </div>
            <div class="lg:top-0 bottom-0 right-0 lg:-right-24 xl:-right-20 absolute w-1/2 lg:w-[18rem] xl:w-[20rem] h-80 xl:h-[25rem]"  style="clip-path: polygon(29% 0, 100% 0, 100% 100%, 0% 100%);">
                <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$vision->image2}}" alt="our vision images" width="500" height="600"
                    class="object-cover w-full h-full rounded-tr-xl rounded-br-xl"
                >
            </div>
        </div>
        <div class="flex flex-col justify-center items-center w-full gap-6 lg:w-1/2 lg:pl-28 xl:pr-16 xl:pl-32 lg:gap-4 ">
            <h2 class="text-3xl font-semibold text-bg">Notre Vision</h2>
            <div id='visionContent' class=" text-accent1 unobserve">
                 {!!mb_convert_encoding($vision->content->render(),"UTF-8")!!}
            </div>
            <div class="flex flex-wrap w-full gap-6 unobserve">
                <p class="flex flex-col text-3xl font-bold text-accent1">
                    +10 
                    <span class="text-base font-bold text-bg">Années d'expériences</span>
                </p>
                <p class="flex flex-col text-3xl font-bold text-accent1">
                    +1000 <br>
                    <span class="text-base font-bold text-bg">Femmes accompagnées</span>
                </p>
                <p class="flex flex-col text-3xl font-bold text-accent1 ">
                    +10 <br>
                    <span class="text-base font-bold text-bg">Collaborations</span>
                </p>
            </div>          
        </div>
    </section>
    <section class="flex flex-col w-full px-8 py-16 bg-secodary">
        <div class="relative flex flex-col w-full gap-4 py-10 md:flex-row">
            <div class="w-full lg:w-[60%] md:w-1/2 flex flex-col gap-4">
                <button class="absolute w-40 px-4 py-2 text-lg font-semibold bg-white rounded-md text-bg -top-6">
                    <a href="#">Notre Mission</a>
                </button>
                <h2 id="missionTitle" class="text-xl font-semibold unobserve text-accent1 md:text-2xl">
                   {{$mission->title}}
                </h2>
            </div>
            <div id="missionContent" class="w-full lg:w-[40%] md:w-1/2 text-white unobserve">
            
                    {!!mb_convert_encoding($mission->content->render(),"UTF-8")!!}
            </div>
        </div>
        <div class="flex flex-row w-full gap-8 lg:gap-10 md:gap-5 ">
            <div id="visionImg" class="lefthidden boxs2 w-full  lg:min-w-[31%] md:min-w-[32%] md:h-[17rem] h-[20rem]">
                <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$mission->image1}}" alt="" height="320" width="400"
                class="object-cover w-full h-full rounded-md md:w-full">
            </div>
            <div id="visionImg" class="lefthidden boxs2 w-full hidden md:block lg:min-w-[31%] md:min-w-[32%] md:h-[17rem] h-[20rem]">
                <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$mission->image2}}" alt="" height="320" width="400"
                class="object-cover w-full h-full rounded-md ">
            </div>
            <div id="visionImg" class="lefthidden boxs2 w-full hidden md:block lg:min-w-[31%] md:min-w-[32%] md:h-[17rem] h-[20rem]">
                <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/WhatsApp_Image_youth_2.jpg')}}" alt="" height="320" width="400"
                class="object-cover w-full h-full rounded-md ">
            </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full gap-4 pt-6 ">
            <div class="flex items-center justify-center w-full gap-4 lg:hidden">
                <p id="visionBtn" class="w-3 h-3 rounded-full bg-accent1">  </p>
                <p id="visionBtn" class="w-3 h-3 bg-white rounded-full">  </p>
                <p id="visionBtn" class="w-3 h-3 bg-white rounded-full">  </p>
            </div>
            <p class="text-lg text-white">
                <a href="{{route('about')}}">
                    En savoir plus sur <span class="font-bold text-accent1">youth reproductive health</span>
                </a>
            </p>
        </div>
    </section>
    <section class=" w-full h-[30rem] bg-no-repeat bg-cover bg-blend-darken bg-[#141821ac] flex justify-center items-center" 
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
                    <a href="{{route('contact')}}">Nous rejoindre</a>
                </button>
            </div>
        </div>
    </section>
    <section id="team" class="relative w-full h-auto px-8 py-10">
        <h2 class="w-40 px-4 py-2 mb-10 text-xl text-white rounded-md bg-gradient-to-l from-accent2 to-accent1">
            <a href="#">Notre Equipe</a>
        </h2>
       <div id="member_scrollable" class =" flex w-full overflow-x-auto flex-row flex-nowrap gap-4">
       @forelse ($members as $member)
        <div id="member" class="min-w-full gap-4 flex ">
            <div class="flex flex-col w-full gap-4 p-4 bg-white border-l-2 shadow-lg md:w-1/2 rounded-xl border-accent1 md:p-10">
                <div class="text-lg text-bg">
                    {!!mb_convert_encoding($member->content->render(),"UTF-8")!!}
                </div>
                <div class="flex items-center justify-between w-full ">
                    <div class="flex items-center justify-center gap-4">
                        <div class="p-2 border rounded-full cursor-pointer border-accent1">
                            <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$member->image}}" alt="{{$member->name}}" width="80" height="80"
                                class="object-cover w-20 h-20 rounded-full md:w-16 md:h-16" 
                            >
                        </div>
                        <div class="flex flex-col gap-1 ">
                            <h3 class="font-bold text-bg">{{$member->name}}</h3>
                            <p class="text-sm text-bg">{{$member->function}}</p>
                            <div class="flex gap-5 md:hidden">
                                <p>
                                    <a href="#">
                                        <i class="text-lg fa-brands fa-facebook text-bg"></i>
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        <i class="text-lg fa-solid fa-x text-bg"></i>
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        <i class="text-lg fa-brands fa-instagram text-red"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="flex items-center justify-center w-10 h-10 rounded-full cursor-pointer bg-gradient-to-l from-accent1 to-accent2">
                            <i class="text-xl text-center text-white fa-solid fa-arrow-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex-col hidden w-1/2 gap-4 bg-white shadow-lg md:flex xl:flex-row rounded-xl">
                <div class=" w-full xl:w-[60%] md:h-[70%] xl:h-full">
                    <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$member->image}}" alt="{{$member->name}}" width="300" height="400"
                        class="object-cover w-full h-full rounded-md "
                    >
                </div>
                <div class="w-full xl:w-[40%] flex justify-center items-center flex-col gap-4 xl:gap-10">
                    <div class="flex flex-col gap-3 ">
                        <h3 class="font-bold text-bg">{{$member->name}}</h3>
                        <p class="text-sm text-bg">{{$member->function}}</p>
                    </div>
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
        @empty  
        @endforelse
       </div>
        <div class="flex items-center justify-center w-full gap-3 my-10 ">
            <div class=" w-[40%] lg:w-[45%] h-[1px] bg-secodary"></div>
            <div class=" w-[22%] lg:w-[10%] flex gap-2 sm:gap-4 sm:pl-1 md:gap-8 lg:gap-4 xl:gap-10 md:pl-8 lg:pl-3">
                <p id="backward" class="flex items-center justify-center w-8 h-8 border rounded-full cursor-pointer border-secodary">
                    <i class="text-xl fa-solid fa-arrow-left text-secodary"></i>
                </p>
                <p id="forward" class="flex items-center justify-center w-8 h-8 border rounded-full cursor-pointer border-secodary">
                    <i class="text-xl fa-solid fa-arrow-right text-secodary"></i>
                </p>
            </div>
            <div class=" w-[40%] lg:w-[45%] h-[1px] bg-secodary"></div>
        </div>
    </section>
    <section id="events" class="w-full px-8 py-10 ">
        <div class="w-full ">
            <div class="flex flex-col w-full gap-4 ">
                <h2 class="w-40 px-4 py-2 text-lg text-white rounded-md bg-gradient-to-l from-accent1 to-accent2 md:text-xl">
                    <a href="{{route('events',['status'=>'upcoming'])}}">Nos Evénements</a>
                </h2>
                <div class="flex flex-col w-full gap-4 pb-10 md:flex-row md:gap-10 lg:gap-24">
                    <div class="w-full md:w-1/2">
                        <h1 class="text-2xl font-bold lg:text-3xl text-bg text-start unobserve">
                            Découvrez Les Initiatives Youth Reproductive Health
                        </h1>
                    </div>
                    <div class="w-full md:w-1/2">
                        <p class="text-justify text-bg unobserve">
                            Restez informé des ateliers, conférences et campagnes que nous organisons pour promouvoir la santé sexuelle et reproductive et l’égalité des sexes. 
                            Nos événements offrent des espaces d’échange, d’apprentissage et de mobilisation pour les jeunes et les communautés.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 md:flex-row md:gap-10 lg:gap-24">
                    <div class="flex flex-col w-full gap-4 bg-white border-b rounded-lg shadow-lg md:w-1/2 border-accent1">
                        <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$event->image}}" alt="" width="300" height="400"
                            class="w-full h-[20rem] object-cover rounded-t-lg"
                        >
                        <div class="flex flex-col w-full gap-2 px-4 pb-4 ">
                            <h2 class="text-lg font-bold text-bg md:text-xl">
                                <a href="{{route('event.detail',['id'=>$event->id])}}">
                                    {{$event->title}}
                                </a>
                            </h2>
                            <p class="flex items-center gap-3 text-base font-medium text-bg md:text-lg">
                                <span class="flex items-center justify-center w-6 h-6 p-1 rounded-md bg-accent1">
                                    <i class="fa-solid fa-arrow-up text-white text-sm border border-white rounded-md p-[3px]"></i>
                                </span>
                                statut : <span class=" text-accent1"> 
                                {{$event->status=='upcoming'? "A venir" : "Passe"}}
                                </span>
                            </p> 
                            <p class="flex items-center gap-3 text-base font-medium text-bg md:text-lg">
                                <span class="flex items-center justify-center w-6 h-6 p-1 rounded-md bg-accent1">
                                    <i class="fa-solid fa-calendar text-white text-sm border border-white rounded-md p-[3px]"></i>
                                </span>
                                date : <span class=" text-accent1"> {{$carbon::parse($event->date)->format('d/m/Y')}} </span>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-6 md:w-1/2">
                        <div class="flex flex-col w-full pb-10 bg-white rounded-md shadow-lg ">
                            <div class="flex items-center w-full px-4 py-3 rounded-t-md bg-gradient-to-r from-accent1 to-secodary">
                                <h3 class="text-lg text-white md:text-2xl">
                                    <a href="{{route('events',['status'=>'past'])}}">
                                         Retour sur les événements passés 
                                    </a>
                                </h3>
                            </div>
                            <div class="flex flex-col w-full gap-3 bg-white">
                               @forelse ($pastEvents as $pastevent)
                                <div class="flex items-center justify-between w-full px-4 py-3 @if ($pastevent!=$pastEvents[count($pastEvents)-1]) border-b border-secodary @endif">
                                    <h2 class="font-bold text-bg">
                                        <a href="{{route('event.detail',['id'=>$pastevent->id])}}">
                                            {{$pastevent->title}}
                                        </a>
                                    </h2>
                                    <p>
                                        <a href="{{route('event.detail',['id'=>$pastevent->id])}}"><i class="text-lg fa-solid fa-arrow-right text-bg"></i></a>
                                    </p>
                                </div>
                               @empty
                                   Pas d'evenements passes
                               @endforelse
                            </div>
                        </div>
                        <button class="self-start px-1 py-2 border-2 rounded-md border-accent1">
                            <a href="{{route('events',['status'=> 'past'] )}}" class="w-full h-full px-4 py-2 text-lg text-white rounded-md bg-accent1 ">Tous les événements</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full px-8 py-10 ">
        <div class="flex flex-col w-full gap-4 ">
            <h2 class="px-4 py-2 text-lg text-white rounded-md w-44 md:w-52 bg-gradient-to-l from-accent1 to-accent2 md:text-xl">
                <a href="{{route('blogs')}}">Nos récents articles</a>
            </h2>
            <div class="flex flex-col w-full gap-4 pb-10 md:flex-row md:gap-10 lg:gap-24">
                <div class="flex flex-col w-full gap-3 md:w-1/2">
                    <h1 class="text-2xl font-bold md:text-3xl text-bg unobserve">
                        Découvrez nos articles de blog
                    </h1>
                    <p class="hidden px-4 py-2 font-bold duration-500 ease-in-out bg-white border-b-2 rounded-lg shadow-lg cursor-pointer md:block w-36 hover:bg-accent1 hover:text-white text-accent1 border-secodary">
                        <a href="{{route('blogs')}}">Voir tous les blog</a>
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <p class=" text-bg unobserve">
                    Plongez dans notre blog pour en apprendre davantage sur la santé sexuelle et reproductive, les initiatives en faveur de l’égalité des sexes et les actions de plaidoyer menées par nos équipes et partenaires. 
                    Retrouvez des analyses, des témoignages et des conseils pratiques pour mieux comprendre les enjeux actuels.
                    </p>
                </div>
            </div>
            <div class="flex flex-col w-full gap-6 md:flex-row">
               @forelse ($blogs as $blog)
                    <div class="lefthidden boxs3 w-full md:w-1/2 lg:w-[32%] h-auto flex flex-col gap-4 border-t border-secodary bg-white shadow-lg px-4 py-6 rounded-md">
                    <div class=" w-full flex items-center h-[3.5rem]">
                        <a href="{{route('blog.detail',['id'=>$blog->id])}}">
                            <h2 id="blogTitle" class="text-lg font-bold duration-300 ease-in-out text-bg hover:text-accent1">
                                {{$blog->title}}
                            </h2>      
                        </a>
                        
                    </div>
                    <div class=" w-full h-[15rem]">
                        <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="/store/{{$blog->image}}" alt="{{$blog->title}}" width="300" height="400" class="object-cover w-full h-full rounded-lg ">
                    </div>
                    <div class="flex justify-between w-full ">
                        <p class=" flex gap-3 text-[gray] items-center">
                            <i class="fa-solid fa-calendar text-accent1"></i>
                            {{isset($blog->date)? $blog->date : $blog->created_at->format('M, d-Y')}}
                        </p>
                        <p class=" text-[gray] flex gap-3 items-center">
                            <i class="fa-solid fa-doc text-accent1"></i>
                            {{ucfirst($blog->type)}}
                        </p>
                    </div>
                    <div class="w-full ">
                        <div id="blogContent" class="text-[gray] text-sm">
                           {!!mb_convert_encoding($blog->content->render(),"UTF-8")!!}
                        </div>
                    </div>
                </div>
               @empty
                   
               @endforelse
                <p class="px-4 py-2 font-bold duration-500 ease-in-out bg-white border-b-2 rounded-lg shadow-lg cursor-pointer md:hidden w-36 hover:bg-accent1 hover:text-white text-accent1 border-secodary">
                    <a href="{{route('blogs')}}">Voir tous les blog</a>
                </p>
               
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/home_substringer.js')}}"></script>
@endsection
