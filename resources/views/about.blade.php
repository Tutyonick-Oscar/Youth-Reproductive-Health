@extends('layouts.header')
@section('title','à propos de nous | Youth reproductive Health')
@section('content')
    @include('layouts.nav')
    <section
        class=" w-full h-auto lg:bg-secodary mt-16 sm:mt-12 lg:mt-32 lg:flex justify-end">
        <div style="background-image:url({{asset('images/8.JPG')}})"
             class="bg-blend-darken bg-cover rounded-b-[5rem] md:rounded-b-[2rem] lg:rounded-b-none self-end flex flex-col 
             items-center justify-center gap-5 overflow-hidden bg-bg bg-opacity-60 w-full 
             h-[20rem] lg:h-[30rem] lg:w-[92%] lg:rounded-tl-[10rem]">
            <h1 class=" text-white text-2xl lg:text-5xl">
                Droits sexuels et reproductifs
            </h1>
            <p class="text-white text-2xl font-semibold">A propos de nous</p>
            <span class=" text-accent2 font-semibold">
                YRHealth / about us
            </span>
        </div>
    </section>
    <section class=" w-full h-auto pt-16 px-4 lg:px-8 -mt-1 pb-5">
        <div class=" w-full px-4 lg:px-8 border-b border-x border-[gray] py-5">
            <p class=" text-[gray] text-justify">
                YOUTH REPRODUCTIVE HEALTH, est une organisation de la société civile, qui travaille activement dans la partie Est de la République Démocratique du Congo dont l'objectif est de transformer le contexte socioculturel pour contribuer à la promotion de l’égalité entre les sexes et au respect des droits sexuels et reproductifs des femmes, filles et adolescentes opprimés par des normes sociétales rétrogrades. <br>

                <span class=" text-bg font-semibold">1° Notre travail de promouvoir l'égalité entre les sexes, consiste à </span> : <br> 
                1) Faciliter l'accès des leaders et activistes des communautés y compris les femmes - filles, aux instruments juridiques nationaux et internationaux qui protègent les droits des femmes; <br> 
                2) Accompagner les femmes, filles et adolescentes survivantes des violences basées sur les genres aux instances judiciaires pour dénoncer les auteurs et plaider pour l'obtention de leurs droits perpétuellement violés; <br>
                3) Assurer une prise en charge psychologique en faveurs de survivantes afin de recouvrir leurs équilibre psychologiques; <br> 
                4)  Faire de référencement médicales de survivantes en cas de besoin, et la réinsertion économique pour s'auto dépendre financièrement. <br>
                
               <span class=" text-bg font-semibold"> 2° La promotion de la santé et droits sexuels et reproductifs</span>,  inclut l’accès à l’information fiable et aux services sûrs de planning familial et de l’avortement sécurisé, et une éducation sexuelle complète qui permet d'avoir les connaissances suffisantes, et des aptitudes requises pour prendre des décisions éclairées, vivre positivement leur sexualité, atténuer les risques de vulnérabilités, protéger la santé, le bien-être et leurs droits.
                
                L'approche principale de Youth Reproductive Health, c'est la description du contexte socioculturel et son influence sur le processus de l’égalité entre les sexes, et sur la santé et droits sexuels et reproductifs  afin que les femmes - filles et adolescent (es), soient capables de mener des actions de plaidoyer visant la mise en exécution de politiques et lois qui permettent de jouir pleinement leurs dignité et droits sexuels et reproductifs, sans aucune forme de discrimination ni de violence.
            </p>
        </div>
    </section>
    <section class=" w-full h-[20rem] bg-no-repeat bg-cover bg-blend-darken bg-[#141821ac] flex justify-center items-center" 
        style="background-image: url({{asset('images/bgimg.jpg')}})">
        <div class="w-full flex justify-center items-center flex-col gap-4 px-4">
            <h1 class=" text-white text-3xl lg:text-6xl md:text-5xl font-bold">
                Comment pouvez-vous intervenir ?
            </h1>
            <p class=" text-white text-xl">
                votre don nous aidera à améliorer des vies grâce à la recherche, <br>
                à l'enseignement et aux soins d'urgence
            </p>
            <div class=" flex gap-6">
                <button class=" border-2 border-accent1 px-1 py-3 rounded-lg ">
                    <a href="#" class="bg-accent1 text-white text-xl rounded-lg px-4 py-2">Fiare un don</a>
                </button>
                <button class=" px-4 py-1 rounded-lg border border-white text-white text-xl font-semibold">
                    <a href="#">Nous rejoindre</a>
                </button>
            </div>
        </div>
    </section>
    <section id="volontaires" class=" w-full pt-16 h-auto px-4 pb-5">
        <div class=" w-full flex flex-col gap-5">
            <p class=" text-bg font-semibold text-3xl text-center">Nos volontaires</p>
            <p class=" text-[gray] md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Facilis exercitationem earum magni, dolorum ad, corrupti dolores 
            </p>
            <div class=" w-full h-auto md:flex md:gap-8">
                <div class=" w-full md:w-1/2 flex gap-8 lg:gap-0  bg-white shadow-lg rounded-md">
                   <div class=" w-[8rem] sm:w-[12rem] md:w-[10rem] sm:h-[14rem] h-[9rem] lg:w-1/2 lg:h-[20rem] rounded-md ">
                        <img src="{{asset('images/KK.JPG')}}" alt="managing director" width="250" height="300"
                        class= " w-full h-full object-cover"
                        >
                   </div>
                    <div class="lg:w-1/2 flex flex-col gap-4 items-center justify-center">
                        <h2 class=" text-bg font-semibold text-xl">Dullin Lulinda</h2>
                        <p class=" text-bg">Program manager</p>
                        <div class=" flex gap-4">
                            <p class="">
                                <a href="#" class="w-10 h-10 rounded-full border border-accent1 flex justify-center items-center">
                                    <i class="fa-brands fa-facebook text-bg text-xl"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="w-10 h-10 rounded-full border border-accent1 flex justify-center items-center">
                                    <i class="fa-solid fa-x text-bg text-xl"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="w-10 h-10 rounded-full border border-accent1 flex justify-center items-center">
                                    <i class="fa-brands fa-instagram text-red text-xl"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex w-full md:w-1/2 gap-8 lg:gap-0  bg-white shadow-lg rounded-md">
                    <div class="w-[8rem] sm:w-[12rem] md:w-[10rem] sm:h-[14rem] h-[9rem] lg:w-1/2 lg:h-[20rem] rounded-md">
                        <img src="{{asset('images/KK.JPG')}}" alt="managing director" width="250" height="300"
                            class=" w-full h-full object-cover"
                            >
                    </div>
                    <div class="lg:w-1/2 flex flex-col gap-4 items-center justify-center">
                        <h2 class=" text-bg font-semibold text-xl">Dullin Lulinda</h2>
                        <p class=" text-bg">Program manager</p>
                        <div class=" flex gap-4">
                            <p class="">
                                <a href="#" class="w-10 h-10 rounded-full border border-accent1 flex justify-center items-center">
                                    <i class="fa-brands fa-facebook text-bg text-xl"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="w-10 h-10 rounded-full border border-accent1 flex justify-center items-center">
                                    <i class="fa-solid fa-x text-bg text-xl"></i>
                                </a>
                            </p>
                            <p>
                                <a href="#" class="w-10 h-10 rounded-full border border-accent1 flex justify-center items-center">
                                    <i class="fa-brands fa-instagram text-red text-xl"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" w-full flex gap-3 justify-center mt-3 ">
                <p class="w-6 h-2 bg-accent1"></p>
                <p class="w-2 h-2 bg-accent1"></p>
            </div>
        </div>
    </section>
    <section id="testimonials" class=" w-full pt-16 h-auto px-4 pb-16">
        <div class=" w-full flex flex-col gap-5">
            <p class=" text-bg font-semibold text-3xl text-center">Ce que les gens disent de nous</p>
            <p class=" text-[gray] md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Facilis exercitationem earum magni, dolorum ad, corrupti dolores 
            </p>
            <div class=" w-full h-auto md:flex md:gap-8">
                <div class=" w-full md:w-1/2 bg-white shadow-lg rounded-xl border-l-2 border-accent1 flex flex-col gap-4 p-4 md:p-10">
                    <p class="text-lg">
                        <i class=" text-bg">
                            Mme Muhigirwa Sifa Ghislaine est une professionnelle en biologie médicale, avec une grande
                            expérience dans la promotion du droit des femmes et des filles à accéder aux informations, 
                            ressources et compétences en matière de santé qui leur permettent de devenir économiquement 
                            indépendantes et de jouir de leur autonomie. Elle est la coordinatrice de Youth Reproductive 
                            Health DRC.
                        </i>
                    </p>
                    <div class=" flex w-full justify-between items-center">
                        <div class="flex gap-4 justify-center items-center">
                            <div class=" border border-accent1 rounded-full p-2 cursor-pointer">
                                <img src="https://youthreproductivehealth.org/uploads/package/261669296118.jpg" alt="Muhigirwa Sifa Ghislaine" width="80" height="80"
                                    class=" w-20 h-20 md:w-16 md:h-16 object-cover rounded-full" 
                                >
                            </div>
                            <div class=" flex flex-col gap-1">
                                <h3 class=" text-bg font-bold">Muhigirwa Sifa Ghislaine</h3>
                                <p class=" text-bg text-sm">Coordinatrice</p>
                                <p class="text-bg text-sm"> Société de l'etat civil</p>
                            </div>
                        </div>
                        <div>
                            <p class=" w-10 h-10 rounded-full bg-gradient-to-l from-accent1 to-accent2 flex justify-center items-center cursor-pointer">
                                <i class="fa-solid fa-arrow-right text-xl text-center text-white"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" w-full md:w-1/2 bg-white shadow-lg rounded-xl border-l-2 border-accent1 flex flex-col gap-4 p-4 md:p-10">
                    <p class="text-lg">
                        <i class=" text-bg">
                            Mme Muhigirwa Sifa Ghislaine est une professionnelle en biologie médicale, avec une grande
                            expérience dans la promotion du droit des femmes et des filles à accéder aux informations, 
                            ressources et compétences en matière de santé qui leur permettent de devenir économiquement 
                            indépendantes et de jouir de leur autonomie. Elle est la coordinatrice de Youth Reproductive 
                            Health DRC.
                        </i>
                    </p>
                    <div class=" flex w-full justify-between items-center">
                        <div class="flex gap-4 justify-center items-center">
                            <div class=" border border-accent1 rounded-full p-2 cursor-pointer">
                                <img src="https://youthreproductivehealth.org/uploads/package/261669296118.jpg" alt="Muhigirwa Sifa Ghislaine" width="80" height="80"
                                    class=" w-20 h-20 md:w-16 md:h-16 object-cover rounded-full" 
                                >
                            </div>
                            <div class=" flex flex-col gap-1">
                                <h3 class=" text-bg font-bold">Muhigirwa Sifa Ghislaine</h3>
                                <p class=" text-bg text-sm">Coordinatrice</p>
                                <p class="text-bg text-sm"> Société de l'etat civil</p>
                            </div>
                        </div>
                        <div>
                            <p class=" w-10 h-10 rounded-full bg-gradient-to-l from-accent1 to-accent2 flex justify-center items-center cursor-pointer">
                                <i class="fa-solid fa-arrow-right text-xl text-center text-white"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" w-full flex gap-3 justify-center mt-3 ">
                <p class="w-6 h-2 bg-accent1"></p>
                <p class="w-2 h-2 bg-accent1"></p>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection