@extends('layouts.header')
@section('title',"YRHealth |".$blog->title)
@section('content')
    @include('layouts.nav')
    <section
        class="justify-end w-full h-auto mt-16 lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url(/storage/{{$blog->image}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[30rem]">
            <h1 class="text-3xl text-center text-white lg:text-5xl">
                {{$blog->title}}
            </h1>
            <p class="text-2xl font-semibold text-white">Description du blog</p>
            <span class="font-semibold text-accent1">
                YRHealth / {{$blog->title}}
            </span>
        </div>
    </section>
    <section class="flex flex-col w-full gap-10 px-8 lg:flex-row">
        <div class="blogs w-full lg:w-[65%] flex flex-col gap-6 pt-10">
            <div class="flex flex-col w-full h-auto gap-6 px-8 py-8 bg-white rounded-md shadow-lg blog">
                <h1 class="text-3xl text-bg">
                    {{$blog->title}}
                </h1>
                <div class="flex justify-between w-full ">
                    <p class=" flex gap-3 text-[gray] items-center">
                        <i class="fa-solid fa-calendar text-accent1"></i>
                         {{$blog->date}}
                    </p>
                    <p class=" text-[gray] flex gap-3 items-center">
                        <i class="fa-solid fa-doc text-accent1"></i>
                        {{ucfirst($blog->type)}}
                    </p>
                </div>
                <div class="w-full ">
                    {!!mb_convert_encoding($blog->content->render(),"UTF-8")!!}
                     
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
                        @forelse (explode(',',$blog->tags) as $tag)
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
            </div>
            
            {{-- <div class="flex justify-between w-full gap-4 next-prev lg:justify-start">
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center cursor-pointer text-bg hover:text-white">
                        <i class="text-lg fa-solid fa-arrow-left"></i>
                    </a>
                </p>
                
                
                <p id="tag" class="relative w-12 h-12 flex justify-center items-center border border-[gray] rounded-md">
                    <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center cursor-pointer text-bg hover:text-white">
                        <i class="text-lg fa-solid fa-arrow-right"></i>
                    </a>
                </p>
            </div> --}}
            <div class="flex flex-col items-center w-full gap-3 px-4 py-5 bg-white rounded-md shadow-xl about_admin md:flex-row md:gap-10">
                <div class=" w-[6rem] h-[6rem] md:w-28 md:h-28 flex justify-center items-center">
                   <p class ='flex items-center justify-center w-full h-full border rounded-full border-secodary'>
                        <i class="text-[5rem] text-center rounded-full  fa-solid fa-user"></i>
                   </p>
                    <!-- {{--<img src="{{asset('images/KK.JPG')}}" alt="" width="230" height="300" class="object-cover w-full h-full rounded-full ">--}} -->
                </div>
                <div class="flex flex-col w-full gap-3 md:w-auto">
                    <h2 class="flex gap-3 font-semibold ">
                       {{$blog->user->user_name}} : <span>Auteur</span>
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
            <div class="flex flex-col w-full gap-4 comments ">
                <p class="text-xl font-semibold text-bg">
                    {{count($blog->comments)}} Commentaires
                </p>
                <p class="text-3xl text-bg">
                    Laisser un commentaire
                </p>
                <div class="relative flex flex-col w-full gap-4 comments ">
                     @session('success')
                        <p class=" absolute right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[#00800031]">
                            {{session('success')}}
                        </p>
                    @endsession
                    @forelse ($blog->comments as $comment)
                    <div class="flex flex-col w-auto h-auto gap-1 user_comment">
                        <div class="self-start w-auto h-auto p-2 rounded-md bg-secodary ">
                            <p class ='flex items-center justify-center w-8 h-8 rounded-full object-cover -ml-5 mt-3 border-[4px] bg-white border-white float-left'>
                                <i class="text-xl fa-solid fa-user"></i>

                            </p>
                            {{-- <img src="{{asset('images/KK.JPG')}}" alt="user photo" height="10" width="10"
                                class=" w-8 h-8 rounded-full object-cover -ml-5 mt-3 border-[4px] border-white float-left"> --}}
                            <div class="relative w-full pb-3 ml-5 ">
                                <h3 class="text-lg font-semibold text-accent1 lg:text-sm"> {{$comment->name}} </h3>
                                <p class="text-sm text-white lg:text-sm">
                                     {{$comment->comment}}
                                </p>
                                <small class=" text-[gray] text-[12px] absolute right-4 -bottom-1"> {{$comment->created_at->format('M, d-Y')}} </small>
                            </div>                 
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                </div>
            </div>
            <div class="w-full bg-white post_a_comment">
               
                <form action="" method="POST" class="flex flex-col w-full gap-6 py-6 rounded-md ">
                    @csrf
                    <div class="flex flex-col w-full gap-6 md:flex-row">
                        <div class="relative flex flex-col w-full gap-3">
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
                        <textarea name="comment" id="content" class="bg-[transparent] duration-500 ease-in-out text-left text-bg px-4 py-4 outline-none border border-bg rounded-md w-full focus:border-2" 
                        autocomplete="content" rows="3">
                        </textarea>
                        <label for="content" id="label-content" class="text-[gray] duration-500 ease-in-out bg-white w-auto absolute top-2 left-4">votre message</label>
                        @error('comment')
                            <small class=" text-red">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class=" w-full md:w-[10rem]">
                        <button type="submit" class="w-full px-4 py-2 text-lg text-white duration-500 ease-in-out rounded-md hover:bg-gradient-to-l bg-gradient-to-r from-accent1 to-accent2">
                            Commenter
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="blogs-specifications w-full lg:w-[35%] flex flex-col gap-6 lg:pt-10 pb-16">
            <div class="relative w-full px-6 py-6 bg-white rounded-md shadow-xl search-bar">
                <input type="text" name="search" class="w-full py-2 pl-4 pr-10 border rounded-lg outline-none border-bg focus:border-2 text-bg" placeholder="rechercher...">
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
                                {{count($blogs->where('type','formation'))}}
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
                                {{count($blogs->where('type','networking'))}}
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
                                {{count($blogs->where('type','atelier'))}}
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
                                <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="/storage/{{$recent->image}}" alt="article/{{$recent->title}}" width="80" height="80"
                                class="object-cover w-full h-full rounded-lg ">
                            </div>
                            <div class="flex flex-col gap-3 w-[70%] ">
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
                <div class="flex flex-row flex-wrap justify-center w-full gap-2">
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/8.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/Capture d’écran (132).png')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/KK.jpg')}}" alt="article/..." width="80" height="80"
                            class="object-cover w-full h-full rounded-lg ">
                        </a>
                    </div>
                    <div class=" w-[6rem] h-[5.3rem] ">
                        <a href="#" class="w-full h-full ">
                            <img loading="lazy" decoding="async"  src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" alt="article/..." width="80" height="80"
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
