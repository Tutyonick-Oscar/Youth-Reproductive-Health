
    <nav id="phoneNav"  class="fixed top-0 left-0 right-0 z-50 flex justify-between w-full h-auto px-4 py-2 bg-secodary lg:hidden">
        <div class="flex items-center justify-center gap-2 ">
            <img src="images/youth.jpg" alt="youth logo" width="50" height="50" class="h-12 w-14 sm:w-10 sm:h-8">
            <h1 class="hidden text-lg text-white md:flex">Youth Reproductive Health</h1>
            <h1 class="text-lg text-white md:hidden">YRHealth</h1>
        </div>
        <div class="flex items-center justify-center gap-2 ">
            <a href="{{route('contact')}}" class="px-3 py-1 text-lg text-white rounded-md bg-gradient-to-l from-accent1 to-accent2">
                Nous contacter
            </a>
            <p id="menu">
                <i class="text-2xl text-white fa-solid fa-bars"></i>
            </p>
        </div>
        <div id="sideBar"
            class=" fixed w-0 h-screen bg-[rgba(0,0,0,0.32)]  bg-blend-darken left-0 right-0 top-0 bottom-0 ">
            <div id="side" class="fixed top-0 left-0 w-0 h-screen overflow-y-scroll bg-white ">
                <div class="flex flex-col items-center justify-center w-full gap-5 pt-20 ">
                    <p class="absolute top-10 right-5">
                        <i id="close" class="text-lg fa-solid fa-x text-accent2"></i>
                    </p>
                    <div class="flex items-center justify-center gap-2">
                        <img src="images/youth-removebg-preview.png" alt="youth logo" width="50" height="50"
                            class="w-20 h-20">
                        <h1 class="text-xl font-bold text-accent2">Youth Reproductive Health</h1>
                    </div>
                </div>
                <div class="flex flex-col w-full h-auto gap-4 pt-10 ">
                    <ul class="flex flex-col w-full h-auto gap-6 pl-14">
                        <li class="w-full border-b border-bg">
                            <a class="uppercase " href="{{route('home')}}  navLink">Accueil</a>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg">
                            <div class="flex items-center justify-between w-full pr-5 ">
                                <a href="{{route('about')}}" class="uppercase navLink">A propos</a>
                                <p class="">
                                    <i id="arrow" data-show="about"
                                        class="text-xl fa-solid fa-arrow-right text-accent1 ">
                                    </i>
                                </p>
                            </div>
                            <div data-show="about" id="show" class="w-full ">
                                <ul class="flex flex-col w-full gap-6 ">
                                    <li class="w-full pt-4 border-b border-bg">
                                        <a href="{{route('about')}}/#text" class="pl-8 navLink">Qui nous sommes</a>
                                    </li>
                                    <li  class="w-full border-b border-bg ">
                                        <a href="{{route('about')}}/#volontaires" class="pl-8 navLink">Nos volontaires</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg ">
                            <div class="flex items-center justify-between w-full pr-5 ">
                                <a href="{{route('causes')}}" class="uppercase ">Causes</a>
                                <p class="">
                                    <i id="arrow" data-show="causes"
                                        class="text-xl fa-solid fa-arrow-right text-accent1"></i>
                                </p>
                            </div>
                            <div data-show="causes" id="show" class="w-full ">
                                <ul class="flex flex-col w-full gap-6 ">
                                    @foreach ($causes as $cause)
                                    <li class="flex items-center justify-center w-full pt-4 border-b border-bg">
                                        <a href="#" class="pl-8 navLink">
                                        {{$cause->title}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg">
                            <div class="flex items-center justify-between w-full pr-5 ">
                                <a href="#" class="uppercase ">Evénements</a>
                                <p class="">
                                    <i id="arrow" data-show="events"
                                        class="text-xl fa-solid fa-arrow-right text-accent1"></i>
                                </p>
                            </div>
                            <div data-show="events" id="show" class="w-full ">
                                <ul class="flex flex-col w-full gap-6 ">
                                    <li class="w-full pt-4 border-b border-bg">
                                        <a href="#" class="pl-8 navLink">
                                            Evénements à venir
                                        </a>
                                    </li>
                                    <li class="w-full border-b border-bg">
                                        <a href="#" class="pl-8 navLink">
                                            Evénements passés
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg">
                            <div class="flex items-center justify-between w-full pr-5 ">
                                <a href="{{route('blogs')}}" class="uppercase ">Blog</a>
                                <p class="">
                                    <i id="arrow" data-show="blog"
                                        class="text-xl fa-solid fa-arrow-right text-accent1"></i>
                                </p>
                            </div>
                            <div data-show="blog" id="show" class="w-full ">
                                <ul class="flex flex-col w-full gap-6 ">
                                    @foreach ($blogs as $blog)
                                    <li class="w-full border-b border-bg">
                                        <a href="{{route('blog.detail',['id'=>$blog->id])}}" class="pl-8 navLink">
                                            {{$blog->title}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="w-full border-b border-bg ">
                            <a href="#" class="uppercase navLink">Gallerie</a>
                        </li>
                        <li class="w-full border-b border-bg">
                            <a href="{{route('contact')}}" class="uppercase navLink">Nous contacter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav id="pcNav" class="fixed top-0 left-0 right-0 z-50 flex-col hidden w-full h-auto px-4 py-2 bg-secodary lg:flex">
        <div class="flex justify-between w-full h-auto py-2 pb-4 border-b border-accent1">
            <div class="flex w-auto gap-4 ">
                <p><i class="text-lg text-white fa-solid fa-location"></i></p>
                <p class="pr-10 text-white border-r border-accent1">Uvira/Nyamianda</p>
                <p class="ml-5"><i class="text-lg text-white fa-solid fa-clock"></i></p>
                <p class="text-white "> Sat - Thursday (9am - 10 pm)</p>
            </div>
            <div class="flex w-auto gap-4 ">
                <p class="text-white ">Nos media sociaux : </p>
                <p>
                    <a href="https://www.facebook.com/profile.php?id=100086390902576">
                        <i class="text-base text-white fa-brands fa-facebook"></i>
                    </a>
                </p>
                <p>
                    <a href="https://twitter.com/Y_R_Health">
                        <i class="text-base text-white fa-solid fa-x"></i>
                    </a>
                </p>
                <p>
                    <a href="https://www.instagram.com/youth_rep_health/">
                        <i class="text-base text-white fa-brands fa-instagram"></i>
                    </a>
                </p>
                <p>
                    <a href="https://www.youtube.com/channel/UC5wEzJ_duBn6y9mR7gZ2Kaw">
                        <i class="text-base fa-brands fa-youtube text-red"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="flex items-center justify-between w-full pt-2 links">
            <div class="flex items-center justify-center w-auto gap-2 mt-5 ">
                <img src="images/youth.jpg" alt="youth logo" width="50" height="50" class="h-12 w-14">
                <h1 class="hidden text-lg font-semibold text-white xl:block">Youth Reproductive Health</h1>
                <h1 class="hidden text-xl font-bold tracking-wider text-white lg:block xl:hidden">YRHealth</h1>
            </div>
            <div class=" xl:w-[65%] w-[83%] h-20 translate-y-3  flex justify-center items-center gap-4 bg-white rounded-tl-lg rounded-tr-lg">
                <ul class="flex items-center justify-between w-full px-4 py-2 ">
                    <li class="relative font-bold uppercase transition link text-bg">
                        <a  href="{{route('home')}}">Accueil</a>
                    </li>
                    <li class="relative font-bold uppercase link droped text-bg ">
                        <a id="link" href="{{route('about')}}">A propos</a>
                        <ul id="dropdown" class="bg-white w-[15rem] h-0 flex flex-col gap-2  shadow-lg lowercase text-lg absolute top-8 pt-2">
                            <li class="w-full px-4 py-2 pt-6 border-b text-bg border-bg">
                                <a href="{{route('about')}}/#text">A propos de nous</a>
                            </li>
                            {{-- <li class="w-full px-4 py-2 border-b text-bg border-bg">
                                <a href="#">Nos services</a>
                            </li> --}}
                            <li class="w-full px-4 py-2 ">
                                <a href="{{route('about')}}/#volontaires">Nos volontaires</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative font-bold uppercase link droped text-bg">
                        <a id="link" href="{{route('causes')}}">Causes</a>
                        <ul id="dropdown" class=" w-[15rem] h-0 flex flex-col gap-2 bg-white shadow-lg lowercase text-lg absolute top-8 pt-2">
                           @foreach ($causes as $cause)
                            <li class="w-full px-4 py-2 pt-6 border-b text-bg border-bg">
                                <a href="#"> {{$cause->title}} </a>
                            </li>
                           @endforeach 
                        </ul>
                    </li>
                    <li class="relative font-bold uppercase link droped text-bg">
                        <a id="link" href="#">Evénements</a>
                        <ul id="dropdown" class=" w-[15rem] h-0 flex flex-col gap-2 bg-white shadow-lg lowercase text-lg absolute top-8 pt-2">
                            <li class="w-full px-4 py-2 pt-6 border-b text-bg border-bg">
                                <a href="#">Evénements passés</a>
                            </li>
                           
                            <li class="w-full px-4 py-2 ">
                                <a href="#">Evénements à venir </a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative font-bold uppercase link droped text-bg">
                        <a id="link" href="{{route('blogs')}}">Blog</a>
                        <ul id="dropdown" class=" w-[15rem] h-0  flex flex-col gap-2 bg-white shadow-lg lowercase text-lg absolute top-8 pt-2">
                           @foreach ($blogs as $blog)
                            <li class="w-full px-4 py-2 pt-6 border-b text-bg border-bg">
                                <a href="{{route('blog.detail',['id'=>$blog->id])}}">
                                    {{$blog->title}} 
                                 </a>
                            </li>
                           @endforeach
                        </ul>
                    </li>
                    <li class="relative font-bold uppercase link text-bg">
                        <a href="#">Gallerie</a>
                    </li>
                    <li class="z-20 px-4 py-2 text-lg text-white rounded-md bg-gradient-to-l from-accent1 to-accent2">
                        <a href="{{route('contact')}}">Nous contacter</a>
                    </li>
                </ul>
            </div>
            <div class="hidden xl:flex w-[10%] flex-col justify-center items-center gap-2 self-end mb-3">
                <p class="text-sm text-white ">Pouvez-vous aider ?</p>
                <a href="#" class="px-4 py-2 text-lg text-white rounded-md bg-gradient-to-l from-accent1 to-accent2">
                    Faire un don
                </a>
            </div>
        </div>
    </nav>
