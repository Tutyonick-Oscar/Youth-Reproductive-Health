@extends('layouts.header')
@section('title', 'Youth Reproductive Health')
@section('content')
    @include('layouts.nav')

    <div class="relative w-full h-[18rem] lg:h-[27rem] flex mt-16 md:mt-12 lg:mt-40 overflow-y-hidden border-b border-red"> 
        {{-- <div class=" z-30 absolute bg-red lg:h-[25rem] h-20 w-20 md:w-52 md:m-52 md:right-[30%] right-[35%] lg:w-52 lg:right-[38%]  md:flex"
            style="clip-path: polygon(0 0, 0% 100%, 100% 100%);"
        >
        </div> --}}
        {{-- <svg class=" lg:w-[50rem] w-[30rem] absolute -right-[6.5rem] md:right-[3rem] lg:right-[10%] rotate-[65deg] top-16 lg:top-40 z-0  lg:rotate-[60deg]"
        id="wave" style="transition: 0.3s" 
        viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(20, 24, 33, 1)" offset="0%"></stop>
            <stop stop-color="rgba(20, 24, 33, 1)" offset="100%"></stop>
        </linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" 
        fill="url(#sw-gradient-0)" d="M0,343L30,326.7C60,310,120,278,180,220.5C240,163,
        300,82,360,73.5C420,65,480,131,540,187.8C600,245,660,294,720,277.7C780,261,840,180,
        900,179.7C960,180,1020,261,1080,294C1140,327,1200,310,1260,277.7C1320,245,1380,196,
        1440,171.5C1500,147,1560,147,1620,179.7C1680,212,1740,278,1800,294C1860,310,1920,278,
        1980,261.3C2040,245,2100,245,2160,228.7C2220,212,2280,180,2340,163.3C2400,147,2460,147,
        2520,122.5C2580,98,2640,49,2700,65.3C2760,82,2820,163,2880,204.2C2940,245,3000,245,3060,
        277.7C3120,310,3180,376,3240,367.5C3300,359,3360,278,3420,204.2C3480,131,3540,65,3600,
        73.5C3660,82,3720,163,3780,228.7C3840,294,3900,343,3960,375.7C4020,408,4080,425,4140,
        392C4200,359,4260,278,4290,236.8L4320,196L4320,490L4290,490C4260,490,4200,490,4140,
        490C4080,490,4020,490,3960,490C3900,490,3840,490,3780,490C3720,490,3660,490,3600,490C3540,
        490,3480,490,3420,490C3360,490,3300,490,3240,490C3180,490,3120,490,3060,490C3000,490,2940,
        490,2880,490C2820,490,2760,490,2700,490C2640,490,2580,490,2520,490C2460,490,2400,490,2340,
        490C2280,490,2220,490,2160,490C2100,490,2040,490,1980,490C1920,490,1860,490,1800,490C1740,
        490,1680,490,1620,490C1560,490,1500,490,1440,490C1380,490,1320,490,1260,490C1200,490,1140,
        490,1080,490C1020,490,960,490,900,490C840,490,780,490,720,490C660,490,600,490,540,490C480,
        490,420,490,360,490C300,490,240,490,180,490C120,490,60,490,30,490L0,490Z">
        </path>
        </svg> --}}
        <div class="relative w-[55%] lg:w-[100%] h-full  bg-opacity-0 bg-origin-padding">
            <img src="images/cover.PNG" alt="cover bg forme" width="700" height="500" class=" w-full h-full object-cover cover">
            <button class="text-accent1 hidden  hover:text-white duration-500 ease-in-out hover:bg-accent1 bg-white top-52 absolute left-5 h-10 w-10 rounded-full lg:flex justify-center items-center">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <div class="lg:ml-[4.6rem] z-10 top-0 left-0 bottom-0 w-full h-full pl-4 lg:pl-10 pr-0 flex flex-col  items-center justify-center gap-4 xl:gap-8 lg:gap-4">
                <h1 class=" text-white text-2xl xl:text-5xl lg:text-4xl lg:pt-10 xl:pt-0 font-medium tracking-wider">
                    Aider les pauvres femmes à jouir de leurs droits sexuels et reproductifs
                </h1>
                <p class=" text-white hidden lg:block">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, ipsa.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, sapiente.
                </p>
                <button class=" self-start  duration-500 ease-in-out hover:bg-accent2 hidden lg:block px-6 py-4 rounded-lg bg-accent1">
                    <a href="#" class=" text-white text-xl">Faire un Don maintenant</a>
                </button>
                <button class=" self-start  duration-500 ease-in-out hover:bg-accent2  lg:hidden px-4 py-2 rounded-lg bg-accent1">
                    <a href="#" class=" text-white text-xl">Faire un Don </a>
                </button>
            </div>
        </div>
        <div class=" lg:w-[60%] w-[45%] h-full ">
            <button class="text-accent1 hidden lg:flex hover:text-white duration-500 ease-in-out hover:bg-accent1 bg-white top-52 absolute right-5 h-10 w-10 rounded-full justify-center items-center">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
            <img src="images/8.JPG" alt="" height="400" width="300" class=" h-full w-full object-cover">
        </div>
    </div>
    <section id="about" class=" w-full h-auto">
        <div class=" w-full flex flex-col px-4 items-center gap-2 pt-16">
            <div class=" w-full flex flex-col gap-4 lg:gap-6 md:flex-row">
                <div class=" w-full md:w-1/2 flex-col flex gap-4 lg:gap-6">
                    <button class="rounded-md w-[9rem] lg:w-[10rem] bg-gradient-to-l lg:text-lg from-accent1 to-accent2 px-4 py-2 text-white">
                        A propos de nous
                    </button>
                    <h2 class=" text-bg text-3xl font-semibold lg:text-4xl">
                        Accompagner les femmes, filles et adolescentes survivantes des violences basées sur les genres
                    </h2>
                    <p class=" text-[gray] lg:text-lg">
                        YOUTH REPRODUCTIVE HEALTH, est une organisation de la société civile, 
                        qui travaille activement dans la partie Est de la République Démocratique 
                        du Congo...
                        
                    </p>
                    <span class="text-bg underline -mt-4">
                        <a href="#">lire plus...</a>
                    </span>
                </div>
                <img src="images/8.JPG" alt="a propos de nous" height="400" width="300" 
                class=" rounded-md w-full object-cover h-[10rem] md:h-full md:w-1/2 lg:h-[17rem]">
            </div>
        </div>
    </section>
    <section id="what we do first" class=" w-full h-auto mt-6">
        <div class=" w-full pt-16 px-4">
            <div class=" float-right w-full md:w-1/2 flex flex-col gap-4">
                <button class="rounded-md w-[11rem]  bg-gradient-to-l lg:text-lg from-accent1 to-accent2 px-4 py-2 text-white">
                    Ce que nous faisons
                </button>
                <h2 class="text-bg text-3xl font-semibold lg:text-4xl">
                    Promouvoir Le Droit À La Santé Sexuelle Et Reproductive
                </h2>
                <p class="text-[gray] lg:text-lg">
                    Youth Reproductive Health vise à promouvoir les droits et la santé reproductive 
                    des femmes – filles, et des adolescentes, en fournissant une information fiable sur
                    l’éducation sexuelle saine et complète à la communauté,...
                </p>
                <span class="text-bg underline -mt-4 pb-6">
                    <a href="#">lire plus...</a>
                </span>
            </div>
            <img src="images/8.JPG" alt="a propos de nous" height="400" width="300" 
            class="md:pr-6  float-left rounded-md w-full object-cover h-[10rem] md:h-full md:w-1/2 lg:h-[17rem]">
        </div>
    </section>
    <section id="what we do suite" class=" w-full flex pt-16 px-4">
        <div class="relative md:w-[33%] w-full shadow-md px-10 pb-10 flex flex-col gap-3">
            <h2 class=" text-bg text-lg font-semibold">
                Promouvoir l'égalité entre le sexes
            </h2>
            <p class=" text-accent1 text-sm">
                Dans les régions rurales de l’Est de la RD Congo, les mœurs et coutumes rétrogrades ont encore une emprise...
            </p>
            <p class="flex ease-in-out duration-500 hover:bg-bg hover:text-white cursor-pointer justify-center items-center absolute right-2 bottom-2 w-8 h-8 rounded-full bg-accent1 text-white">
                <i class="fa-solid fa-arrow-right"></i>
            </p>
        </div>
        <div class="relative w-full md:w-[33%] shadow-md px-10 pb-10 hidden md:flex flex-col gap-3">
            <h2 class=" text-bg text-lg font-semibold">
                Sante et droits sexuels et reproductifs
            </h2>
            <p class=" text-accent1 text-sm">
                Informer la communauté sur ses droits, son pouvoir et ses capacités constitue une importante ressource...
            </p>
            <p class="flex ease-in-out duration-500 hover:bg-bg hover:text-white cursor-pointer justify-center items-center absolute right-2 bottom-2 w-8 h-8 rounded-full bg-accent1 text-white">
                <i class="fa-solid fa-arrow-right"></i>
            </p>
        </div>
        <div class="relative w-full md:w-[33%] shadow-md px-10 pb-10 hidden md:flex flex-col gap-3">
            <h2 class=" text-bg text-lg font-semibold">
                Egalité entre les sexes
            </h2>
            <p class=" text-accent1 text-sm">
                La place et l’estime de la femme, ne sont pas encore arrivées à leurs justes places. Des milliers des femmes, des jeunes filles
            </p>
            <p class="flex ease-in-out duration-500 hover:bg-bg hover:text-white cursor-pointer justify-center items-center absolute right-2 bottom-2 w-8 h-8 rounded-full bg-accent1 text-white">
                <i class="fa-solid fa-arrow-right"></i>
            </p>
        </div>
    </section>
    <section id="our vision" class=" w-full h-auto flex flex-col lg:flex-row gap-4 pt-16 pb-10 px-4 ">
        <div class="w-full lg:w-1/2 relative ">
            <div class="w-[70%] lg:w-[80%] h-full "
                 style="clip-path: polygon(0 0, 93% 0, 75% 100%, 0% 100%);"
            >
                <img src="images/Capture d’écran (133).png" alt="our vision images" width="500" height="600"
                    class=" w-full h-80 xl:h-[21rem] object-cover rounded-tl-xl rounded-bl-xl"
                >
            </div>
            <div class="lg:top-0 bottom-0 right-0 lg:-right-24 xl:-right-20 absolute w-1/2 lg:w-[18rem] xl:w-[20rem] h-80 xl:h-[21rem]"  style="clip-path: polygon(29% 0, 100% 0, 100% 100%, 0% 100%);">
                <img src="images/Capture d’écran (132).png" alt="our vision images" width="500" height="600"
                    class=" w-full h-full object-cover rounded-tr-xl rounded-br-xl"
                >
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col  items-center lg:pl-28 xl:pr-16 xl:pl-32  gap-6 lg:gap-4 ">
            <h2 class=" text-bg text-3xl font-semibold">Notre Vision</h2>
            <p class=" text-accent1">
                Notre vision est de vivre dans une communauté où les femmes, filles 
                et adolescentes accèdent librement et facilement aux opportunités sociales, 
                économiques et sanitaires locales, sans restriction, stigmatisation, ni violence
                sociale.
            </p>
            <div class=" w-full flex gap-6  flex-wrap">
                <p class=" text-accent1 font-bold text-3xl flex flex-col">
                    +10 
                    <span class=" font-bold text-base text-bg ">Années d'expériences</span>
                </p>
                <p class=" text-accent1 font-bold text-3xl flex flex-col">
                    +1000 <br>
                    <span class=" font-bold text-base text-bg">Femmes accompagnées</span>
                </p>
                <p class=" text-accent1 font-bold text-3xl lg:hidden xl:block flex flex-col">
                    +10 <br>
                    <span class=" font-bold text-base text-bg">Collaborations</span>
                </p>
            </div>
            <button class=" self-start px-4 py-2 rounded-md bg-gradient-to-l from-accent2 to-accent1 text-white">
                <a href="#">En savoir plus</a>
            </button>
        </div>
    </section>
    <section class=" py-16 w-full flex flex-col bg-secodary px-4">
        <div class="relative w-full flex flex-col md:flex-row gap-4 py-10">
            <div class="w-full lg:w-[60%] md:w-1/2 flex flex-col gap-4">
                <button class="  px-4 py-2 text-bg text-lg font-semibold bg-white rounded-md w-40 absolute -top-6">
                    <a href="#">Notre Mission</a>
                </button>
                <h2 class=" text-accent1 font-semibold text-xl md:text-2xl">
                    Faciliter l’accès des femmes, filles et adolescentes aux opportunités 
                    sociales et économiques, ainsi qu’aux ressources et services complets de 
                    santé sexuelle et reproductive au sein de leurs communautés
                </h2>
            </div>
            <div class="w-full lg:w-[40%] md:w-1/2 ">
                <p class=" text-white">
                    Pour y arriver, nous privilegieons l'autonomisation jurique
                    (renforcement des capacités) afin de mettre le pouvoir et la connaissance
                    de la loi entre les mains des communautés mal desservies, nous menons des
                    campagnes de plaidoyer au niveau communautaire et national, et faisons la 
                    vulgarisation d'informations éducatives et l'offre des services...
    
                </p>
            </div>
        </div>
        <div class="w-auto overflow-x-auto md:overflow-x-hidden  md:w-full flex flex-row gap-8 lg:gap-10 md:gap-5">
            <div class="min-w-[20rem] lg:min-w-[31%] md:min-w-[32%] md:h-[17rem] h-[20rem]">
                <img src="{{asset('images/WhatsApp Image youth 2.jpg')}}" alt="" height="320" width="400"
                class="w-full md:w-full h-full object-cover rounded-md">
            </div>
            <div class="min-w-[20rem] lg:min-w-[31%] md:min-w-[32%] md:h-[17rem] h-[20rem]">
                <img src="{{asset('images/8.JPG')}}" alt="" height="320" width="400"
                class=" w-full h-full object-cover rounded-md">
            </div>
            <div class="min-w-[20rem] lg:min-w-[31%] md:min-w-[32%] md:h-[17rem] h-[20rem]">
                <img src="{{asset('images/WhatsApp Image youth 3.jpg')}}" alt="" height="320" width="400"
                class=" w-full h-full object-cover rounded-md">
            </div>
        </div>
        <div class=" w-full flex justify-center items-center pt-6  flex-col gap-4">
            <div class=" w-full flex gap-4 justify-center items-center lg:hidden">
                <p class="w-3 h-3 bg-white rounded-full">  </p>
                <p class="w-3 h-3 bg-white rounded-full">  </p>
                <p class="w-3 h-3 bg-white rounded-full">  </p>
            </div>
            <p class="text-white text-lg">
                <a href="#">
                    En savoir plus sur notre <span class=" text-accent1 font-bold">mission</span>
                </a>
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
    <section class=" w-full h-auto px-4 py-10">
        <h2 class=" text-white bg-gradient-to-l from-accent2 to-accent1 rounded-md px-4 py-2 text-xl w-40 mb-10">
            <a href="#">Notre Equipe</a>
        </h2>
        <div class=" w-full flex gap-4 hidden">
            <div class=" w-full md:w-1/2 bg-white shadow-lg rounded-xl border-l-2 border-accent1 flex flex-col gap-4 p-4 md:p-10">
                <p class="text-lg">
                    <i class=" text-bg">
                        DULLIN LULINDA, est le fondateur de Youth Reproductive Health, il a une expertise 
                        significative en gestion de cycle des projets et en techniques de plaidoyer et revendication
                        non violentes ainsi qu' en autonomisation juridiques des communautés affectées par
                        des injustices socioculturelles. Il a travaillé avec plusieurs organisations humanitaires
                        internationales avant de créer YOUTH REPRODUCTIVE HEALTH où il dirige le département de
                        program, afin d'aider l'organisation à faciliter l’accès des femmes, filles et 
                        adolescentes aux opportunités sociales et économiques ainsi qu’aux ressources et services
                        complets de santé et droits sexuels et reproductifs.
                    </i>
                </p>
                <div class=" flex w-full justify-between items-center">
                    <div class="flex gap-4 justify-center items-center">
                        <div class=" border border-accent1 rounded-full p-2 cursor-pointer">
                            <img src="{{asset('images/KK.JPG')}}" alt="Dullin Lulinda" width="80" height="80"
                                class=" w-20 h-20 md:w-16 md:h-16 object-cover rounded-full" 
                            >
                        </div>
                        <div class=" flex flex-col gap-1">
                            <h3 class=" text-bg font-bold">Dullin Lulinda</h3>
                            <p class=" text-bg text-sm">Program manager</p>
                            <div class="flex md:hidden gap-5">
                                <p>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook text-bg text-lg"></i>
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        <i class="fa-solid fa-x text-bg text-lg"></i>
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram text-red text-lg"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=" w-10 h-10 rounded-full bg-gradient-to-l from-accent1 to-accent2 flex justify-center items-center cursor-pointer">
                            <i class="fa-solid fa-arrow-right text-xl text-center text-white"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class=" hidden md:flex flex-col xl:flex-row w-1/2 gap-4 bg-white shadow-lg rounded-xl">
                <div class=" w-full xl:w-[60%] md:h-[70%] xl:h-full">
                    <img src="{{asset('images/KK.JPG')}}" alt="Dullin Lulinda" width="300" height="400"
                        class=" w-full h-full object-cover rounded-md"
                    >
                </div>
                <div class=" w-full xl:w-[40%] flex justify-center items-center flex-col gap-4 xl:gap-10">
                    <div class=" flex flex-col gap-3">
                        <h3 class=" text-bg font-bold">Dullin Lulinda</h3>
                        <p class=" text-bg text-sm">Program manager</p>
                    </div>
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
        <div class=" w-full flex gap-4">
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
                            <div class="flex md:hidden gap-5">
                                <p>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook text-bg text-lg"></i>
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        <i class="fa-solid fa-x text-bg text-lg"></i>
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram text-red text-lg"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class=" w-10 h-10 rounded-full bg-gradient-to-l from-accent1 to-accent2 flex justify-center items-center cursor-pointer">
                            <i class="fa-solid fa-arrow-right text-xl text-center text-white"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class=" hidden md:flex flex-col xl:flex-row w-1/2 gap-4 bg-white shadow-lg rounded-xl">
                <div class=" w-full xl:w-[60%] md:h-[70%] xl:h-full">
                    <img src="https://youthreproductivehealth.org/uploads/package/261669296118.jpg" alt="Muhigirwa Sifa Ghislaine" width="300" height="400"
                        class=" w-full h-[20rem] object-cover rounded-md"
                    >
                </div>
                <div class=" w-full xl:w-[40%] flex justify-center items-center flex-col gap-4 xl:gap-10">
                    <div class=" flex flex-col gap-3">
                        <h3 class=" text-bg font-bold">Muhigirwa Sifa Ghislaine</h3>
                        <p class=" text-bg text-sm">Coordinatrice</p>
                    </div>
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
        <div class=" w-full flex justify-center items-center gap-3 my-10">
            <div class=" w-[40%] lg:w-[45%] h-[1px] bg-secodary"></div>
            <div class=" w-[22%] lg:w-[10%] flex gap-2 sm:gap-4 sm:pl-1 md:gap-8 lg:gap-4 xl:gap-10 md:pl-8 lg:pl-3">
                <p class=" w-8 h-8 rounded-full border border-secodary flex justify-center items-center cursor-pointer">
                    <i class="fa-solid fa-arrow-left text-secodary text-xl"></i>
                </p>
                <p class=" w-8 h-8 rounded-full border border-secodary flex justify-center items-center cursor-pointer">
                    <i class="fa-solid fa-arrow-right text-secodary text-xl"></i>
                </p>
            </div>
            <div class=" w-[40%] lg:w-[45%] h-[1px] bg-secodary"></div>
        </div>
    </section>
    <section id="events" class=" w-full py-10 px-4">
        <div class=" w-full">
            <div class=" w-full flex flex-col gap-4">
                <h2 class=" w-40 px-4 py-2 rounded-md bg-gradient-to-l from-accent1 to-accent2 text-white text-lg md:text-xl">
                    <a href="#">Nos Evénements</a>
                </h2>
                <div class=" w-full flex flex-col md:flex-row gap-4 md:gap-10 lg:gap-24 pb-10">
                    <div class=" w-full md:w-1/2">
                        <h1 class=" text-2xl lg:text-3xl text-bg font-bold text-start">
                            Découvrez l'ensemble des événements Youth Reproductive Health
                        </h1>
                    </div>
                    <div class=" w-full md:w-1/2">
                        <p class=" text-bg text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                            quasi facere accusantium reiciendis fuga laboriosam nobis maxime 
                            sunt aspernatur rerum.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, laboriosam.
                        </p>
                    </div>
                </div>
                <div class=" w-full flex flex-col md:flex-row gap-4 md:gap-10 lg:gap-24">
                    <div class=" w-full md:w-1/2 bg-white shadow-lg rounded-lg flex flex-col gap-4 border-b border-accent1">
                        <img src="{{asset('images/Capture d’écran (134).png')}}" alt="" width="300" height="400"
                            class="w-full h-[15rem] object-cover rounded-t-lg"
                        >
                        <div class=" w-full px-4 flex flex-col gap-2 pb-4">
                            <h2 class=" text-bg font-bold text-lg md:text-xl">
                                Campagne de plaidoyer pour l'accès de femmes, filles et adolescentes
                                à l'héritage et aux contraceptifs
                            </h2>
                            <p class=" text-bg text-base md:text-lg font-medium flex gap-3 items-center">
                                <span class=" bg-accent1 rounded-md flex justify-center items-center p-1 h-6 w-6 ">
                                    <i class="fa-solid fa-arrow-up text-white text-sm border border-white rounded-md p-[3px]"></i>
                                </span>
                                statut : <span class=" text-accent1"> A venir</span>
                            </p> 
                            <p class=" text-bg text-base md:text-lg font-medium flex gap-3 items-center">
                                <span class=" bg-accent1 rounded-md flex justify-center items-center p-1 h-6 w-6 ">
                                    <i class="fa-solid fa-calendar text-white text-sm border border-white rounded-md p-[3px]"></i>
                                </span>
                                date : <span class=" text-accent1"> 12/8/2024</span>
                            </p>
                        </div>
                    </div>
                    <div class=" w-full md:w-1/2 flex flex-col gap-6">
                        <div class=" w-full flex flex-col pb-10 bg-white shadow-lg rounded-md">
                            <div class="rounded-t-md w-full bg-gradient-to-r from-accent1 to-secodary flex items-center px-4 py-3">
                                <h3 class=" text-white md:text-2xl text-lg ">
                                    Retour sur les événements passés 
                                </h3>
                            </div>
                            <div class=" w-full flex flex-col gap-3 bg-white shadow-lg">
                                <div class=" w-full flex justify-between items-center px-4 py-3 border-b border-secodary">
                                    <h2 class=" text-bg font-bold">
                                        Appui en produits contraceptifs et formation de prestataires
                                    </h2>
                                    <p>
                                        <a href="#"><i class=" fa-solid fa-arrow-right text-bg text-lg"></i></a>
                                    </p>
                                </div>
                                <div class=" w-full flex justify-between items-center px-4 py-3 border-b border-secodary">
                                    <h2 class=" text-bg font-bold">
                                        Formation des femmes leaders sur le protocole de Misoprostol
                                    </h2>
                                    <p>
                                        <a href="#"><i class=" fa-solid fa-arrow-right text-bg text-lg"></i></a>
                                    </p>
                                </div>
                                <div class=" w-full flex justify-between items-center px-4 py-3 border-b border-secodary">
                                    <h2 class=" text-bg font-bold">
                                        Atelier de briefing émotionnel et prise en charge personnel aux défenseurs de
                                         droits sexuels et reproductifs et les prestataires des services
                                    </h2>
                                    <p>
                                        <a href="#"><i class=" fa-solid fa-arrow-right text-bg text-lg"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class=" self-start border-2 border-accent1 px-1 py-2 rounded-md">
                            <a href="#" class="w-full h-full bg-accent1 text-white rounded-md px-4 py-2 text-lg ">Tous les événements</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" w-full px-4 py-10">
        <div class=" w-full flex flex-col gap-4">
            <h2 class=" w-44 md:w-52 px-4 py-2 rounded-md bg-gradient-to-l from-accent1 to-accent2 text-white text-lg md:text-xl">
                <a href="#">Nos récents articles</a>
            </h2>
            <div class=" w-full flex flex-col md:flex-row gap-4 md:gap-10 lg:gap-24 pb-10">
                <div class=" w-full md:w-1/2 flex flex-col gap-3">
                    <h1 class="text-2xl md:text-3xl text-bg font-bold ">
                        Découvrez nos articles de blog plus récents
                    </h1>
                    <p class="hidden md:block w-36 duration-500 ease-in-out hover:bg-accent1 hover:text-white shadow-lg bg-white cursor-pointer text-accent1 font-bold py-2 px-4 border-b-2 border-secodary rounded-lg">
                        <a href="#">Voir tous les blog</a>
                    </p>
                </div>
                <div class=" w-full md:w-1/2">
                    <p class=" text-bg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                        quasi facere accusantium reiciendis fuga laboriosam nobis maxime 
                        sunt aspernatur rerum.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, laboriosam.
                    </p>
                </div>
            </div>
            <div class=" w-full flex gap-6 flex-col md:flex-row">
                <div class=" w-full md:w-1/2 lg:w-[32%] h-auto flex flex-col gap-4 border-t border-secodary bg-white shadow-lg px-4 py-6 rounded-md">
                    <div class=" w-full flex items-center h-[3.5rem]">
                        <h2 class=" text-bg font-bold text-lg ">
                            Formation sur les techniques de plaidoyer...
                        </h2>
                    </div>
                    <div class=" w-full h-[10rem]">
                        <img src="{{asset('images/8.JPG')}}" alt="" width="300" height="400" class=" w-full h-full object-cover rounded-lg">
                    </div>
                    <div class=" w-full flex justify-between">
                        <p class=" flex gap-3 text-[gray] items-center">
                            <i class="fa-solid fa-calendar text-accent1"></i>
                            30 Août 2023
                        </p>
                        <p class=" text-[gray] flex gap-3 items-center">
                            <i class="fa-solid fa-doc text-accent1"></i>
                            formation
                        </p>
                    </div>
                    <div class=" w-full">
                        <p class="text-[gray] text-sm">
                            Nous sommes ravis de vous partager les moments inspirants de la formation
                            passionnante sur les techniques de plaidoyer...
                        </p>
                    </div>
                </div>
                <p class="md:hidden w-36 duration-500 ease-in-out hover:bg-accent1 hover:text-white shadow-lg bg-white cursor-pointer text-accent1 font-bold py-2 px-4 border-b-2 border-secodary rounded-lg">
                    <a href="#">Voir tous les blog</a>
                </p>
                <div class="hidden  lg:w-[32%] md:w-1/2 h-auto md:flex flex-col gap-4 border-t border-secodary bg-white shadow-lg px-4 py-6 rounded-md">
                    <div class="  w-full flex items-center h-[3.5rem]">
                        <h2 class=" text-bg font-bold text-lg">
                            Création d'une alliance de plaidoyer
                        </h2>
                    </div>
                    <div class=" w-full h-[10rem]">
                        <img src="{{asset('images/8.JPG')}}" alt="" width="300" height="400" class=" w-full h-full object-cover rounded-lg">
                    </div>
                    <div class=" w-full flex justify-between">
                        <p class=" flex gap-3 text-[gray] items-center">
                            <i class="fa-solid fa-calendar text-accent1"></i>
                            24 Août 2023
                        </p>
                        <p class=" text-[gray] flex gap-3 items-center">
                            <i class="fa-solid fa-doc text-accent1"></i>
                            Networking
                        </p>
                    </div>
                    <div class=" w-full">
                        <p class="text-[gray] text-sm">
                            Aujourd'hui, nous sommes ravis de partager avec vous une nouvelle passionnante 
                            et porteuse d'espoir. Notre organisation a récemment eu le privilège
                        </p>
                    </div>
                </div>
                <div class=" hidden lg:w-[32%] md:w-12  h-auto lg:flex flex-col gap-4 border-t border-secodary bg-white shadow-lg px-4 py-6 rounded-md">
                    <div class=" w-full h-[3.5rem] flex items-center">
                        <h2 class=" text-bg font-bold text-lg">
                            Atelier de briefing émotionnel et prise en charge...
                        </h2>
                    </div>
                    <div class=" w-full h-[10rem]">
                        <img src="{{asset('images/8.JPG')}}" alt="" width="300" height="400" class=" w-full h-full object-cover rounded-lg">
                    </div>
                    <div class=" w-full flex justify-between">
                        <p class=" flex gap-3 text-[gray] items-center">
                            <i class="fa-solid fa-calendar text-accent1"></i>
                            11 Août 2024
                        </p>
                        <p class=" text-[gray] flex gap-3 items-center">
                            <i class="fa-solid fa-doc text-accent1"></i>
                            Atelier
                        </p>
                    </div>
                    <div class=" w-full">
                        <p class="text-[gray] text-sm">
                            "Restaurer la force et la capacité des défenseurs des droits sexuels et reproductifs 
                            : un atelier de briefing émotionnel et de prise en charge personnelle
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
