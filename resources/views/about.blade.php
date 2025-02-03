@extends('layouts.header')
@section('title','à propos de nous | Youth reproductive Health')
@section('content')
    @include('layouts.nav')
    <section
        class="justify-end w-full h-auto mt-16 lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url({{asset('images/8.jpg')}})"
             class="bg-blend-darken bg-cover flex flex-col 
             items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
             h-[20rem] lg:h-[35rem]">
            <h1 class="text-3xl text-white lg:text-6xl">
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
    <section class=" w-full h-[20rem] lg:h-[30rem] xl:h-[35rem] bg-no-repeat bg-cover bg-blend-darken bg-[#141821ac] flex justify-center items-center" 
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
    <section id="volontaires" class="w-full h-auto px-4 pt-16 pb-5 ">
        <div class="flex flex-col w-full gap-5 ">
            <p class="text-3xl font-semibold text-center text-bg">Nos volontaires</p>
            <p class=" text-[gray] md:text-center">
                Découvrez l'équipe passionnée et engagée qui œuvre chaque jour pour promouvoir la santé sexuelle et reproductive et l'égalité des sexes. 
            </p>
            <div id="scrollable" class="w-full h-auto flex gap-4 md:gap-8 flex-row flex-nowrap overflow-x-auto">
                @foreach ($members as $member)
                <div id="about_member" data-iteration="{{$loop->iteration}}" class="min-w-[25rem] gap-4 md:gap-8 bg-white rounded-md shadow-lg md:w-1/2 lg:gap-0 flex">
                   <div class="w-1/2 sm:h-[14rem] h-[12rem] lg:w-1/2 lg:h-[20rem] rounded-md ">
                        <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="/storage/{{$member->image}}" alt="managing director" width="250" height="300"
                        class= "object-cover w-full h-full "
                        >
                   </div>
                    <div class="w-1/2 flex flex-col items-center justify-center gap-4 lg:w-1/2">
                        <h2 class="text-xl font-semibold text-bg">{{$member->name}}</h2>
                        <p class=" text-bg">{{$member->function}}</p>
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
                @endforeach  
            </div>
            <div class="flex justify-center w-full gap-3 mt-3 ">
                @foreach ( $members as $member )
                <p id="count_member" data-iteration="{{$loop->iteration}}" class="{{$loop->first ? 'w-6':'w-2'}} h-2 bg-accent1 cursor-pointer"></p>
                @endforeach               
            </div>
        </div>
    </section>
    <section id="testimonials" class="w-full h-auto px-4 pt-16 pb-16 ">
        <div class="flex flex-col w-full gap-5 ">
            <p class="text-3xl font-semibold text-center text-bg">Ce que les gens disent de nous</p>
            <p class=" text-[gray] md:text-center">
                Lisez les témoignages sincères de ceux qui ont vécu l'impact positif de nos actions et initiatives. 
            </p>
            <div id="notice_scrollable" class="w-full h-auto flex md:gap-8 overflow-x-auto flex-row flex-nowrap">
                <div id="notice" data-number="1" class="flex flex-col min-w-[23rem] gap-4 p-4 bg-white border-l-2 shadow-lg md:w-1/2 rounded-xl border-accent1 md:p-10">
                    <p class="text-lg">
                        <i class=" text-bg">
                        "Grâce aux ateliers et aux ressources de Youth Reproductive Health, j'ai enfin pu comprendre mes droits et mieux appréhender ma santé reproductive. 
                        Les informations étaient claires, accessibles et adaptées à mes questions. 
                        Je me sens désormais plus autonome et en confiance pour prendre mes décisions."
                        </i>
                    </p>
                    <div class="flex items-center justify-between w-full ">
                        <div class="flex items-center justify-center gap-4">
                            <div class="w-16 h-16 flex items-center justify-center p-2 border rounded-full cursor-pointer border-accent1">
                                <i class="text-[2.5rem] text-center fa-solid fa-user"></i>
                            </div>
                            <div class="flex flex-col gap-1 ">
                                <h3 class="font-bold text-bg">Amina 19 ans</h3>
                               
                            </div>
                        </div>
                        <div>
                            <p class="flex items-center justify-center w-10 h-10 rounded-full cursor-pointer bg-gradient-to-l from-accent1 to-accent2">
                                <i class="text-xl text-center text-white fa-solid fa-arrow-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="notice" data-number="2" class="flex flex-col min-w-[23rem] gap-4 p-4 bg-white border-l-2 shadow-lg md:w-1/2 rounded-xl border-accent1 md:p-10">
                    <p class="text-lg">
                        <i class=" text-bg">
                            "Les sessions de discussion et de sensibilisation proposées par Youth Reproductive Health ont véritablement changé ma vision de la santé sexuelle. 
                            J'ai appris à surmonter les tabous et à parler ouvertement des sujets qui me concernaient. 
                            Leur approche respectueuse et pédagogique m'a permis de me sentir soutenu et compris."
                        </i>
                    </p>
                    <div class="flex items-center justify-between w-full ">
                        <div class="flex items-center justify-center gap-4">
                            <div class="w-16 h-16 flex items-center justify-center p-2 border rounded-full cursor-pointer border-accent1">
                            <i class="text-[2.5rem] text-center fa-solid fa-user"></i>
                            </div>
                            <div class="flex flex-col gap-1 ">
                                <h3 class="font-bold text-bg">Marline, 21 ans</h3>
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
                <p id ="count_notice" data-number="1" class="w-6 h-2 bg-accent1"></p>
                <p id="count_notice" data-number="2" class="w-2 h-2 bg-accent1"></p>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script src="{{asset('js/about.js')}}"></script>
@endsection