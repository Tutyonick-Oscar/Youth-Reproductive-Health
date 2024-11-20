@extends('layouts.header')
@section('title','nos articles | Youth reproductive Health')
@section('content')
    @include('layouts.nav')
    <section
        class="justify-end w-full h-auto mt-16 lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url({{asset('images/8.JPG')}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[30rem]">
            <h1 class="text-3xl text-white lg:text-5xl">
                Droits sexuels et reproductifs
            </h1>
            <p class="text-2xl font-semibold text-white">Nos articles de blog</p>
            <span class="font-semibold text-accent2">
                YRHealth / blog
            </span>
        </div>
    </section>
    <section class="flex flex-col w-full gap-10 px-8 lg:flex-row">
        <div class="blogs w-full lg:w-[65%] flex flex-col gap-6 pt-10 ">
           
           @forelse ($blogs as $blog)
                <div class="flex flex-col w-full h-auto gap-6 px-8 py-6 bg-white rounded-md shadow-lg blog">
                <h1 class="text-3xl text-bg">
                    {{$blog->title}}
                </h1>
                <div class="flex justify-between w-full ">
                    <p class=" flex gap-3 text-[gray] items-center">
                        <i class="fa-solid fa-calendar text-accent1"></i>
                         {{$blog->date}}
                    </p>
                    <p class="gap-3 font-semibold tems-center text-bg">
                        <i class="fa-solid fa-doc text-accent1"></i>
                        {{ucfirst($blog->type)}}
                    </p>
                </div>
                <div class="w-full h-[10rem] overflow-y-hidden">
                    <div id="content" class="text-[gray] text-sm">
                         {!! $editorphp::make($blog->content)->toHtml() !!}
                    </div>
                </div>
                <button type="button" class="duration-300 ease-in-out border-2 border-accent1 px-1 py-[0.7rem] rounded-lg  w-[10rem]">
                    <a href="{{route('blog.detail',['id'=>$blog->id])}}" class="px-10 py-2 text-xl text-white duration-300 ease-in-out rounded-lg bg-accent1">Lire plus</a>
                </button> 
            </div>
           @empty
               Aucun blog pour le moment, retrouvez-nous prochainement
           @endforelse
            <div class="flex justify-center w-full gap-4 pagination lg:justify-start">
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="{{$blogs->previousPageUrl()}}" class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center cursor-pointer text-bg hover:text-white">
                        <i class="text-lg fa-solid fa-arrow-left"></i>
                    </a>
                </p>
                
                <div class="flex gap-4 pages">
                    @for ($i = 1; $i<=$blogs->lastPage() ;$i++)
                    <p class="w-12 h-12 duration-300 ease-in-out cursor-pointer hover:border-2 hover:border-accent1 flex justify-center items-center border border-[gray] rounded-md">
                        <a href="{{url()->current()}}/?page={{$i}}" class="text-lg font-semibold text-bg">
                            {{$i}}
                        </a>
                    </p>
                    @endfor
                    
                </div>
                
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="{{$blogs->nextPageUrl()}}" class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center cursor-pointer text-bg hover:text-white">
                        <i class="text-lg fa-solid fa-arrow-right"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="blogs-specifications w-full lg:w-[35%] flex flex-col gap-6 lg:pt-10 pb-16">
            <div class="relative w-full px-6 py-6 bg-white rounded-md shadow-xl search-bar">
                <input type="text" name="search" class=" w-full border border-[gray] rounded-lg pl-4 py-2 pr-10
                outline-none focus:border-2 text-bg" placeholder="rechercher...">
                <i class="absolute flex justify-center items-center fa-solid fa-search text-[gray] px-4 border-l border-bg py-2 right-4 top-7"></i>
            </div>
            <div class="flex flex-col w-full gap-6 px-4 py-6 bg-white rounded-md shadow-xl categories">
                <p class="w-auto pb-2 text-3xl border-b text-bg border-bg">
                    Categories
                </p>
                <div class="flex flex-col w-full gap-4 ">
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <a href="{{route('typeOfBlog',['type'=>'formation'])}}" h id="categorie" class="flex items-center justify-center gap-4 text-xl duration-300 ease-in-out cursor-pointer hover:text-accent1">
                            <span class="font-bold duration-300 ease-in-out text-bg hover:text-accent1"> > </span>
                            Formation
                        </a>
                        <a href="{{route('typeOfBlog',['type'=>'formation'])}}" id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <p  class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center text-lg font-semibold text-bg hover:text-white">
                                {{count($allblogs->where('type','formation'))}}
                            </p>
                        </a>
                    </div>
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <a href="{{route('typeOfBlog',['type'=>'networking'])}}" class="flex items-center justify-center gap-4 text-xl duration-300 ease-in-out cursor-pointer hover:text-accent1">
                            <span class="font-bold duration-300 ease-in-out text-bg hover:text-accent1"> > </span>
                            Networking
                        </a>
                        <a href="{{route('typeOfBlog',['type'=>'networking'])}}" id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <p class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center text-lg font-semibold text-bg hover:text-white">
                                {{count($allblogs->where('type','networking'))}}
                            </p>
                        </a>
                    </div>
                    <div class=" w-full flex justify-between items-center pb-4 border-b border-[#80808032]">
                        <a href="{{route('typeOfBlog',['type'=>'atelier'])}}" class="flex items-center justify-center gap-4 text-xl duration-300 ease-in-out cursor-pointer hover:text-accent1">
                            <span class="font-bold duration-300 ease-in-out hover:text-accent1 text-bg"> > </span>
                            Atelier
                        </a>
                        <a href="{{route('typeOfBlog',['type'=>'atelier'])}}" id="tag" class="relative bg-[#80808032] w-10 h-10 flex justify-center items-center border border-[gray] rounded-md cursor-pointer">
                            <p class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center text-lg font-semibold text-bg hover:text-white">
                                {{count($allblogs->where('type','atelier'))}}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full gap-6 px-4 py-6 bg-white rounded-md shadow-xl recents">
                <p class="w-auto pb-2 text-3xl border-b text-bg border-bg">
                    Blogs recents
                </p>
                <div class="flex flex-col w-full gap-4 recents-blogs">
                   @forelse ($recentBlogs as $recent)
                      
                        <div class="recent-blog w-full flex gap-4 items-center pb-4 border-b border-[#80808032]">
                            <div class=" w-[25%] h-[5.3rem] ">
                                <img loading="lazy" decoding="async" src="/storage/{{$recent->image}}" alt="article/{{$recent->title}}" width="80" height="80"
                                class="object-cover w-full h-full rounded-lg ">
                            </div>
                            <div class="flex flex-col gap-3 w-[70%]">
                                <h1 class="text-xl cursor-pointer text-bg">
                                    <a id="recentEventTitle" href="{{route('blog.detail',['id'=>$recent->id])}}">
                                    {{$recent->title}}
                                    </a>
                                </h1>
                                <p class=" flex gap-3 text-[gray] items-center">
                                    <i class="fa-solid fa-calendar text-accent1"></i>
                                    {{isset($recent->date)? $recent->date : $recent->created_at->format('d m Y')}}
                                </p>
                            </div>
                        </div>
                     
                   @empty
                    <p>Aucun blog recement publie</p>
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
                            Reseautage
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
                <div class="flex flex-row flex-wrap w-full gap-2">
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/8.JPG')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/Capture d’écran (132).png')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/KK.JPG')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async" src="{{asset('images/3.JPG')}}" alt="article/..." width="80" height="80"
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