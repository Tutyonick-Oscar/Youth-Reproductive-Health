@extends('layouts.header')
@section('title','Nous cantacter')
@section('content')
    @include('layouts.nav')
    <section
        class=" w-full h-auto lg:bg-secodary mt-16 sm:mt-12 lg:mt-32 lg:flex justify-end ">
        <div style="background-image:url({{asset('images/8.JPG')}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col 
            items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[30rem]">
            <h1 class=" text-white text-3xl lg:text-5xl text-center">
                Youth Reproductive Health
            </h1>
            <p class="text-white text-2xl font-semibold">Nous Contacter</p>
            <span class=" text-accent1 font-semibold">
                YRHealth / Contact
            </span>
        </div>
    </section>
    <section class=" w-full px-8 py-10">
        <div class=" w-full flex flex-col gap-4 lg:w-[40%]">
            <p class=" text-bg text-3xl font-semibold">
                Contact <span class="text-accent1 text-4xl">us</span>
            </p>
            <p class=" text-[gray]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ea 
                vitae fugit nulla voluptatibus hic officia odit mollitia delectus numquam!
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
    </section>
    <section class="relative w-full px-8 py-10 bg-bg gap-6 flex flex-col">
        <div class=" w-full flex flex-col gap-6 lg:w-[40%]">
            <div class=" w-full flex flex-col gap-4">
                <h1 class=" text-white text-3xl">
                    Ce qu'on peut faire <br> Ensemble !
                </h1>
                <p class=" text-white">
                    Améliorer des vies grâce à l'enseignement, à la recherche, 
                    aux soins et à la promotion des droits sexuels et reproductifs
                </p>
            </div>
            <div class=" w-full flex flex-col gap-4">
                <div id="contactInfos" class="relative w-full flex flex-col gap-2">
                    <div class=" flex gap-3 items-center">
                        <p class=" w-5 h-5 bg-accent1 rounded-full flex justify-center items-center">
                            <span class="w-[0.625rem] h-[0.625rem] bg-white rounded-full"></span>
                        </p>
                        <p class=" font-semibold text-white text-lg">
                           1.  Adresse du bureau
                        </p>
                    </div>
                    <div class=" w-full pl-10">
                        <p class=" text-white lg:text-sm">
                            Sud-Kivu/DRC <br> Uvira Nyamianda Rue n12
                        </p>
                    </div>
                </div>
                <div id="contactInfos" class="relative w-full flex flex-col gap-2">
                    <div class=" flex gap-3 items-center">
                        <p class=" w-5 h-5 bg-accent1 rounded-full flex justify-center items-center">
                            <span class="w-[0.625rem] h-[0.625rem] bg-white rounded-full"></span>
                        </p>
                        <p class=" font-semibold text-white text-lg">
                           2.  infos du contact
                        </p>
                    </div>
                    <div class=" w-full pl-10">
                        <p class=" text-white lg:text-sm">
                            info@youthreproductiveheakth.org <br> +243 993 881 612
                        </p>
                    </div>
                </div>
                <div class="relative w-full flex flex-col gap-2">
                    <div class=" flex gap-3 items-center">
                        <p class=" w-5 h-5 bg-accent1 rounded-full flex justify-center items-center">
                            <span class="w-[0.625rem] h-[0.625rem] bg-white rounded-full"></span>
                        </p>
                        <p class=" font-semibold text-white text-lg">
                           3.  programme d'ouverture
                        </p>
                    </div>
                    <div class=" w-full pl-10">
                        <p class=" text-white lg:text-sm">
                            Lundi - Vendredi / 8h - 16H <br> fermé : Samedi - dimanche
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute form w-full lg:w-[50%] right-[5%] -top-[13%] flex flex-col px-4 bg-secodary rounded-md py-5 gap-4">
            <div class=" flex gap-3 items-center">
                <p class=" w-auto p-2 rounded-md bg-accent1">
                    <i class=" fa-solid fa-envelope text-white text-xl"></i>
                </p>
                <p class=" text-white">
                    Laissez-nous un petit message et nous nous enchargerons de vous répondre dans les 24h qui suivent
                </p>
            </div>
            <div class=" w-full">
                <form action="{{route('toContact')}}" method="POST" class=" w-full flex flex-col gap-6 pt-5">
                    @csrf
                    <div class=" w-full flex flex-col gap-6 md:flex-row">
                        <div class="relative w-full flex flex-col gap-3">
                            <input required type="text" name="contactname" id="name" class="bg-[transparent] duration-500 ease-in-out text-white px-4 py-2 outline-none border border-accent1 rounded-md w-full focus:border-2"
                            autocomplete="contactname" value="{{old('contactname')}} ">
                            <label for="name" id="label-name" class="text-[gray] duration-500 ease-in-out bg-secodary w-auto absolute top-2 px-0 left-4">votre nom</label>
                            @error('contactname')
                                <small class=" text-red">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="relative w-full">
                            <input required type="email" name="contactemail" id="email" class="bg-[transparent] duration-500 ease-in-out text-white px-4 py-2 outline-none border border-accent1 rounded-md w-full focus:border-2"
                            autocomplete="contactemail" value="{{old('contactemail')}}">
                            <label for="email" id="label-email" class="text-[gray] duration-500 ease-in-out bg-secodary w-auto absolute top-2 left-4">votre E-mail</label>
                            @error('contactemail')
                                <small class=" text-red">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="relative w-full">
                        <textarea name="contactmessage" id="content" class="bg-[transparent] duration-500 ease-in-out text-left text-white px-4 py-4 outline-none border border-accent1 rounded-md w-full focus:border-2" 
                        autocomplete="contactmessage" rows="3">
                        </textarea>
                        <label for="content" id="label-content" class="text-[gray] duration-500 ease-in-out bg-secodary w-auto absolute top-2 left-4">votre message</label>
                        @error('contactmessage')
                            <small class=" text-red">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class=" w-full md:w-[10rem]">
                        <button type="submit" class="text-lg duration-500 ease-in-out hover:bg-gradient-to-l px-4 py-2 rounded-md w-full bg-gradient-to-r from-accent1 to-accent2 text-white">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
