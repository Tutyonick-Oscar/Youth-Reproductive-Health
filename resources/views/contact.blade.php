@extends('layouts.header')
@section('title','Nous cantacter')
@section('content')
    @include('layouts.nav')
    <section
        class="relative w-full h-auto mt-16 juexstify-end lg:bg-secodary sm:mt-12 lg:mt-32 lg:flex">
        <div style="background-image:url({{asset('images/8.JPG')}})"
            class="bg-blend-darken bg-cover  self-end flex flex-col lg:pl-40
             justify-center items-center lg:items-start gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
            h-[20rem] lg:h-[37rem]">
            <h1 class="text-3xl text-left text-white lg:text-7xl">
                Youth Reproductive Health
            </h1>
            <p class="text-2xl font-semibold text-white lg:text-4xl">Nous Contacter</p>
            <span class="font-semibold text-accent1">
                YRHealth / Contact
            </span>
            <iframe class="absolute hidden lg:flex top-[15%] right-[10%] w-[30rem] h-[30rem] rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d977.5754825594831!2d29.144144869557767!3d-3.372904999787607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c18fc20ea12de1%3A0x325d8b0d873df406!2sNyamianda!5e1!3m2!1sfr!2sbi!4v1730514382993!5m2!1sfr!2sbi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="w-full px-8 py-10 ">
        <div class=" w-full flex flex-col gap-4 lg:w-[40%]">
            <p class="text-3xl font-semibold text-bg">
                Contact <span class="text-4xl text-accent1">us</span>
            </p>
            <p class=" text-[gray]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ea 
                vitae fugit nulla voluptatibus hic officia odit mollitia delectus numquam!
            </p>
            <div class="flex gap-4 ">
                <p class="">
                    <a href="#" class="flex items-center justify-center w-8 h-8 border rounded-full border-accent1">
                        <i class="text-xl fa-brands fa-facebook text-bg"></i>
                    </a>
                </p>
                <p>
                    <a href="#" class="flex items-center justify-center w-8 h-8 border rounded-full border-accent1">
                        <i class="text-xl fa-solid fa-x text-bg"></i>
                    </a>
                </p>
                <p>
                    <a href="#" class="flex items-center justify-center w-8 h-8 border rounded-full border-accent1">
                        <i class="text-xl fa-brands fa-instagram text-red"></i>
                    </a>
                </p>
            </div>
        </div>
    </section>
    <section class="relative flex flex-col w-full gap-6 px-8 py-10 bg-bg">
        <div class=" w-full flex flex-col gap-6 lg:w-[40%]">
            <div class="flex flex-col w-full gap-4 ">
                <h1 class="text-3xl text-white ">
                    Ce qu'on peut faire <br> Ensemble !
                </h1>
                <p class="text-white ">
                    Améliorer des vies grâce à l'enseignement, à la recherche, 
                    aux soins et à la promotion des droits sexuels et reproductifs
                </p>
            </div>
            <div class="flex flex-col w-full gap-4 ">
                <div id="contactInfos" class="relative flex flex-col w-full gap-2">
                    <div class="flex items-center gap-3 ">
                        <p class="flex items-center justify-center w-5 h-5 rounded-full bg-accent1">
                            <span class="w-[0.625rem] h-[0.625rem] bg-white rounded-full"></span>
                        </p>
                        <p class="text-lg font-semibold text-white ">
                           1.  Adresse du bureau
                        </p>
                    </div>
                    <div class="w-full pl-10 ">
                        <p class="text-white lg:text-sm">
                            Sud-Kivu/DRC <br> Uvira Nyamianda Rue n12
                        </p>
                    </div>
                </div>
                <!-- <div id="contactInfos" class="relative flex flex-col w-full gap-2">
                    <div class="flex items-center gap-3 ">
                        <p class="flex items-center justify-center w-5 h-5 rounded-full bg-accent1">
                            <span class="w-[0.625rem] h-[0.625rem] bg-white rounded-full"></span>
                        </p>
                        <p class="text-lg font-semibold text-white ">
                           2.  infos du contact
                        </p>
                    </div>
                    <div class="w-full pl-10 ">
                        <p class="text-white lg:text-sm">
                            info@youthreproductivehealth.org <br> +243 993 881 612
                        </p>
                    </div>
                </div> -->
                <div class="relative flex flex-col w-full gap-2">
                    <div class="flex items-center gap-3 ">
                        <p class="flex items-center justify-center w-5 h-5 rounded-full bg-accent1">
                            <span class="w-[0.625rem] h-[0.625rem] bg-white rounded-full"></span>
                        </p>
                        <p class="text-lg font-semibold text-white ">
                           2.  programme d'ouverture
                        </p>
                    </div>
                    <div class="w-full pl-10 ">
                        <p class="text-white lg:text-sm">
                            Lundi - Vendredi / 8h - 16H <br> fermé : Samedi - dimanche
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute form w-full lg:w-[50%] right-[5%] -top-[13%] flex flex-col px-4 bg-secodary rounded-md py-5 gap-4">
            <div class="flex items-center gap-3 ">
                <p class="w-auto p-2 rounded-md bg-accent1">
                    <i class="text-xl text-white fa-solid fa-envelope"></i>
                </p>
                <p class="text-white ">
                    Laissez-nous un petit message et nous nous enchargerons de vous répondre dans les 24h qui suivent
                </p>
            </div>
            <div class="w-full ">
                <form action="{{route('toContact')}}" method="POST" class="flex flex-col w-full gap-6 pt-5 ">
                    @csrf
                    <div class="flex flex-col w-full gap-6 md:flex-row">
                        <div class="relative flex flex-col w-full gap-3">
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
                        <button type="submit" class="w-full px-4 py-2 text-lg text-white duration-500 ease-in-out rounded-md hover:bg-gradient-to-l bg-gradient-to-r from-accent1 to-accent2">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
