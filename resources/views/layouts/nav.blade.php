
    <nav id="phoneNav"  class=" z-50 w-full h-auto py-2 flex justify-between px-4 bg-secodary top-0 fixed left-0 right-0 lg:hidden">
        <div class=" flex gap-2 items-center justify-center">
            <img src="images/youth.jpg" alt="youth logo" width="50" height="50" class=" w-14 h-12 sm:w-10 sm:h-8">
            <h1 class=" text-white text-lg hidden md:flex">Youth Reproductive Health</h1>
            <h1 class=" text-white text-lg md:hidden">YRHealth</h1>
        </div>
        <div class=" flex gap-2 items-center justify-center">
            <a href="#" class="text-white text-lg px-3 py-1 rounded-md bg-gradient-to-l from-accent1 to-accent2">
                Nous contacter
            </a>
            <p id="menu">
                <i class="fa-solid fa-bars text-white text-2xl"></i>
            </p>
        </div>
        <div id="sideBar"
            class=" fixed w-0 h-screen bg-[rgba(0,0,0,0.32)]  bg-blend-darken left-0 right-0 top-0 bottom-0 ">
            <div id="side" class=" w-0 h-screen bg-white fixed top-0 left-0 overflow-y-scroll">
                <div class=" flex flex-col gap-5 pt-20 justify-center items-center w-full">
                    <p class="absolute top-10 right-5">
                        <i id="close" class=" fa-solid fa-x text-accent2 text-lg"></i>
                    </p>
                    <div class="flex gap-2 items-center justify-center">
                        <img src="images/youth-removebg-preview.png" alt="youth logo" width="50" height="50"
                            class="w-20 h-20">
                        <h1 class=" text-accent2 text-xl font-bold">Youth Reproductive Health</h1>
                    </div>
                </div>
                <div class=" flex flex-col gap-4 pt-10 w-full h-auto">
                    <ul class="flex flex-col gap-6  w-full h-auto pl-14">
                        <li class="w-full border-b border-bg">
                            <a class=" uppercase " href="#">Accueil</a>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg">
                            <div class=" flex justify-between items-center  w-full  pr-5">
                                <a href="#" class=" uppercase">A propos</a>
                                <p class="">
                                    <i id="arrow" data-show="about"
                                        class="fa-solid fa-arrow-right text-accent1 text-xl "></i>
                                </p>
                            </div>
                            <div data-show="about" id="show" class="w-full ">
                                <ul class="w-full flex flex-col gap-6 ">
                                    <li class=" w-full border-b border-bg pt-4">
                                        <a href="#" class=" pl-8">Nos services</a>
                                    </li>
                                    <li class=" w-full border-b border-bg">
                                        <a href="#" class=" pl-8">Nos volontaires</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg ">
                            <div class=" flex justify-between items-center  w-full pr-5">
                                <a href="#" class=" uppercase">Causes</a>
                                <p class="">
                                    <i id="arrow" data-show="causes"
                                        class="fa-solid fa-arrow-right text-accent1 text-xl"></i>
                                </p>
                            </div>
                            <div data-show="causes" id="show" class="w-full ">
                                <ul class="w-full flex flex-col gap-6 ">
                                    <li class=" w-full border-b border-bg pt-4 flex justify-center items-center">
                                        <a href="#" class=" pl-8">
                                            Promouvoir Le Droit À La Santé Sexuelle Et Reproductive
                                        </a>
                                    </li>
                                    <li class=" w-full border-b border-bg">
                                        <a href="#" class=" pl-8">
                                            Promouvoir L'égalité Entre Les Sexes
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg">
                            <div class=" flex justify-between items-center  w-full   pr-5">
                                <a href="#" class=" uppercase">Evénements</a>
                                <p class="">
                                    <i id="arrow" data-show="events"
                                        class="fa-solid fa-arrow-right text-accent1 text-xl"></i>
                                </p>
                            </div>
                            <div data-show="events" id="show" class="w-full ">
                                <ul class="w-full flex flex-col gap-6 ">
                                    <li class=" w-full border-b border-bg pt-4 ">
                                        <a href="#" class=" pl-8">
                                            Evénements à venir
                                        </a>
                                    </li>
                                    <li class=" w-full border-b border-bg">
                                        <a href="#" class=" pl-8">
                                            Evénements passés
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" w-full flex flex-col gap-1 h-[1.5625rem] overflow-y-hidden border-b border-bg">
                            <div class=" flex justify-between items-center  w-full  pr-5">
                                <a href="#" class=" uppercase">Blog</a>
                                <p class="">
                                    <i id="arrow" data-show="blog"
                                        class="fa-solid fa-arrow-right text-accent1 text-xl"></i>
                                </p>
                            </div>
                            <div data-show="blog" id="show" class="w-full ">
                                <ul class="w-full flex flex-col gap-6 ">
                                    <li class=" w-full border-b border-bg pt-4 flex justify-center items-center">
                                        <a href="#" class=" pl-8">
                                            Atelier de pladoyer
                                        </a>
                                    </li>
                                    <li class=" w-full border-b border-bg">
                                        <a href="#" class=" pl-8">
                                            Promouvoir L'égalité Entre Les Sexes
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full border-b border-bg ">
                            <a href="#" class=" uppercase">Gallerie</a>
                        </li>
                        <li class="w-full border-b border-bg">
                            <a href="#" class=" uppercase">Nous contacter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav id="pcNav" class="hidden bg-secodary fixed z-50 w-full top-0 left-0 right-0 h-auto py-2 px-4 lg:flex flex-col">
        <div class=" w-full h-auto py-2 flex justify-between border-b border-accent1 pb-4">
            <div class=" w-auto flex gap-4">
                <p><i class="fa-solid fa-location text-white text-lg"></i></p>
                <p class=" text-white border-r border-accent1 pr-10">Uvira/Nyamianda</p>
                <p class="ml-5"><i class="fa-solid fa-clock text-white text-lg"></i></p>
                <p class=" text-white "> Sat - Thursday (9am - 10 pm)</p>
            </div>
            <div class=" w-auto flex gap-4">
                <p class=" text-white ">Nos media sociaux : </p>
                <p>
                    <a href="">
                        <i class="fa-brands fa-facebook text-white text-base"></i>
                    </a>
                </p>
                <p>
                    <a href="">
                        <i class="fa-solid fa-x text-white text-base"></i>
                    </a>
                </p>
                <p>
                    <a href="">
                        <i class="fa-brands fa-instagram text-white text-base"></i>
                    </a>
                </p>
                <p>
                    <a href="">
                        <i class="fa-brands fa-youtube text-base text-red"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="links w-full items-center justify-between flex pt-2">
            <div class=" flex gap-2 items-center w-auto justify-center mt-5">
                <img src="images/youth.jpg" alt="youth logo" width="50" height="50" class=" w-14 h-12 ">
                <h1 class=" text-white text-lg font-semibold hidden xl:block">Youth Reproductive Health</h1>
                <h1 class=" text-white text-xl font-bold hidden lg:block xl:hidden tracking-wider">YRHealth</h1>
            </div>
            <div class=" xl:w-[65%] w-[83%] h-20 translate-y-3  flex justify-center items-center gap-4 bg-white rounded-tl-lg rounded-tr-lg">
                <ul class=" w-full flex justify-between items-center px-4 py-2">
                    <li class="link relative uppercase text-bg font-bold transition">
                        <a  href="#">Accueil</a>
                    </li>
                    <li class="link droped relative uppercase text-bg font-bold ">
                        <a id="link" href="#">A propos</a>
                        <ul id="dropdown" class="bg-white w-[15rem] h-0 flex flex-col gap-2  shadow-lg lowercase text-lg absolute top-8 pt-2">
                            <li class=" w-full text-bg border-b border-bg py-2 px-4 pt-6">
                                <a href="#">A propos de nous</a>
                            </li>
                            <li class=" w-full text-bg border-b border-bg py-2 px-4">
                                <a href="#">Nos services</a>
                            </li>
                            <li class=" w-full  py-2 px-4">
                                <a href="#">Nos volontaires</a>
                            </li>
                        </ul>
                    </li>
                    <li class="link droped relative uppercase text-bg font-bold">
                        <a id="link" href="#">Causes</a>
                        <ul id="dropdown" class=" w-[15rem] h-0 flex flex-col gap-2 bg-white shadow-lg lowercase text-lg absolute top-8 pt-2">
                            <li class=" w-full text-bg border-b border-bg py-2 px-4 pt-6">
                                <a href="#"> promouvoir le droit à la santé sexuelle et reproductive </a>
                            </li>
                            <li class=" w-full  py-2 px-4">
                                <a href="#">Promouvoir l'égalité entre les sexes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="link droped relative uppercase text-bg font-bold">
                        <a id="link" href="#">Evénements</a>
                        <ul id="dropdown" class=" w-[15rem] h-0 flex flex-col gap-2 bg-white shadow-lg lowercase text-lg absolute top-8 pt-2">
                            <li class=" w-full text-bg border-b border-bg py-2 px-4 pt-6">
                                <a href="#">Evénements passés</a>
                            </li>
                           
                            <li class=" w-full  py-2 px-4">
                                <a href="#">Evénements à venir </a>
                            </li>
                        </ul>
                    </li>
                    <li class="link droped relative uppercase text-bg font-bold">
                        <a id="link" href="#">Blog</a>
                        <ul id="dropdown" class=" w-[15rem] h-0  flex flex-col gap-2 bg-white shadow-lg lowercase text-lg absolute top-8 pt-2">
                            <li class=" w-full text-bg border-b border-bg py-2 px-4 pt-6">
                                <a href="#"> promouvoir le droit à la santé sexuelle et reproductive </a>
                            </li>
                            <li class=" w-full  py-2 px-4">
                                <a href="#">Promouvoir l'égalité entre les sexes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="link relative uppercase text-bg font-bold">
                        <a href="#">Gallerie</a>
                    </li>
                    <li class=" z-20 text-white text-lg px-4 py-2 rounded-md bg-gradient-to-l from-accent1 to-accent2">
                        <a href="#">Nous contacter</a>
                    </li>
                </ul>
            </div>
            <div class="hidden xl:flex w-[10%] flex-col justify-center items-center gap-2 self-end mb-3">
                <p class=" text-white text-sm">Pouvez-vous aider ?</p>
                <a href="#" class="text-white text-lg px-4 py-2 rounded-md bg-gradient-to-l from-accent1 to-accent2">
                    Faire un don
                </a>
            </div>
        </div>
    </nav>
