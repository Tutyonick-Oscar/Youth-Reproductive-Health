@extends('layouts.header')
@section('title','YRH | '.$cause->title)
@section('content')
@include('layouts.nav')
    <section
        class="justify-end w-full h-auto mt-16 xl lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url(/storage/{{$cause->image}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[38rem]">
            <h1 class="text-3xl text-white lg:text-5xl xl:text-7xl">
                {{$cause->title}}
            </h1>
            <span class="font-semibold  text-[gray]">
                YRHealth / {{$cause->title}}
            </span>
        </div>
    </section>
    <section class="flex flex-col w-full gap-10 px-4 pb-16 lg:px-8">
        <div class="relative flex flex-col items-center justify-center w-full gap-5 px-4 py-6 -mt-10 rounded-md bg-secodary">
            <h1 class=" text-white text-xl text-center md:text-3xl font-semibold pb-5 border-b-[0.1px] border-white">
                {{$cause->title}}
            </h1>
            <p class="text-sm text-white lg:text-center lg:px-10">
            <div class ="text-white  px-20">
                {!!mb_convert_encoding($cause->content->render(),"UTF-8")!!}
            </div>
            </p>
        </div>
    </section>
    @include('layouts.footer')
    <script src="{{asset('js/causes_substring.js')}}"></script>
@endsection

