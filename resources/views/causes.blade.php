@extends('layouts.header')
@section('title','ce que nous faisons | Youth reproductive Health')
@section('content')
@include('layouts.nav')
    <section
        class="justify-end w-full h-auto mt-16 xl lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url({{asset('images/8.jpg')}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[38rem]">
            <h1 class="text-3xl text-white lg:text-5xl xl:text-7xl">
                Droits sexuels et reproductifs
            </h1>
            <p class="text-2xl font-semibold text-white">Ce que nous faisons</p>
            <span class="font-semibold text-accent2">
                YRHealth / services
            </span>
        </div>
    </section>
    <section class="flex flex-col w-full gap-10 px-4 pb-16 lg:px-8">
        <div class="relative flex flex-col items-center justify-center w-full gap-5 px-4 py-6 -mt-10 rounded-md bg-secodary">
            <h1 class=" text-white text-xl text-center md:text-3xl font-semibold pb-5 border-b-[0.1px] border-white">
                {{$causes[0]->title}}
            </h1>
            <p class="text-sm text-white lg:text-center lg:px-10">
            <div class ="text-white  px-20 first_cause">
                {!!mb_convert_encoding($causes[0]->content->render(),"UTF-8")!!}
            </div>
            </p>
            <p class="absolute right-4 lg:right-10 bottom-4 flex justify-center items-center
                duration-300 ease-in-out hover:scale-[1.3] cursor-pointer">
                <a href="{{route('cause.detail',['id'=>$causes[0]->id])}}">
                <i class="text-white fa-solid fa-arrow-right "></i>
                </a>
            </p>
        </div>
        <div class="w-full md:flex lg:gap-12 pt-10">
            <div class="flex-col hidden w-1/2 gap-6 md:flex">
                <div class="flex flex-col w-full gap-4 ">
                    <h1 class="text-3xl xl:text-4xl font-semibold text-bg whitespace-nowrap">
                        Nos différents causes
                        et services
                    </h1>
                   
                </div>
                <div class=" w-full h-[27.5rem]  -ml-10">
                    <img loading="lazy" decoding="async" src="{{asset('images/lazy.jpg')}}" data-src="{{asset('images/3.jpg')}}" width="300" height="432" alt="youth | image"
                    class="object-cover w-full h-full rounded-tr-xl rounded-br-xl">
                </div>
            </div>
            <div class="flex flex-col w-full gap-4 pl-4 md:w-1/2 md:pl-0">
                @forelse ($causes as $cause)
                @if ($cause != $loop->first)
                <div class="w-full bg-white duration-500 ease-in-out cursor-pointer hover:scale-[1.1] shadow-xl px-12 py-6 relative rounded-md flex justify-center items-center flex-col gap-5">
                    <h1 class=" text-bg text-xl self-start font-semibold pb-5 border-b-[0.1px] border-bg">
                        <a href="{{route('cause.detail',['id'=>$cause->id])}}">
                        {{$cause->title}}
                        </a>
                    </h1>
                   <a href="{{route('cause.detail',['id'=>$cause->id])}}">
                   <div class=" text-[gray] text-sm causes_content self-start">
                    {!!mb_convert_encoding($cause->content->render(),"UTF-8")!!}
                    </div>
                   </a>
                    <p class="absolute right-12 bottom-2 ">
                        <a href="{{route('cause.detail',['id'=>$cause->id])}}">
                        <i class="text-accent1 fa-solid fa-arrow-right"></i>
                        </a>
                    </p>
                    <p class="w-12 h-12 md:w-10 md:h-10 rounded-full bg-accent1 absolute -left-5 top-[40%]">

                    </p>
                </div>
                @endif
                
                @empty
                @endforelse
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script src="{{asset('js/causes_substring.js')}}"></script>
@endsection
