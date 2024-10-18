<div class="bg-bg !w-full md:!w-[9%] lg:!w-[20%] items-center text-white px-4 border-r border-blue-600 navbar relative">
    <!-- Sidebar content -->
    <div class="py-2 text-white md:py-6">
      <div class="flex items-center justify-between pr-5 mb-4">
        <h2 class="text-2xl font-bold md:hidden lg:flex lg:text-3xl tracking-widest list-name md:opacity-0 lg:opacity-[1]">
          Adminpanel
        </h2>
        <div class="flex items-center justify-center w-8 h-8 px-4 py-2 border rounded-md cursor-pointer border-secodary">
          <p class="toggle-btn tablette">
              <i class="text-lg text-white fa-solid fa-bars "></i>
          </p>
          <p class="hidden close-btn">
              <i class="text-lg fa-solid fa-x "></i>
          </p>
        </div>
      </div>
      <nav class="hidden space-y-2 element md:block">
        <a
          href="{{route('admin.welcome')}}"
          class="hover:bg-blue-600  py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Dashboard</p>
        </a>
        <a
          href="{{route('admin.slider')}}"
          class="hover:bg-blue-600 py-2 md:h-[30px]  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class=" lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Home Slider</p>
        </a>
        <a
          href="{{route('admin.setMission')}}"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class=" lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Notre mission</p>
        </a>
        <a
          href="{{route('admin.setVision')}}"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Notre vision</p>
        </a>
        <a
          href="{{route('admin.about')}}"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">A propos de nous</p>
        </a>
        <a
          href="{{route('admin.causes')}}"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Causes</p>
        </a>
        <a
          href="{{route('admin.members')}}"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class=" lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Notre Equipe</p>
        </a>
        <a id="dashlink"
          href="#"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Donation</p>
        </a>
        <div id="showEvents" class="relative h-[40px]  overflow-y-hidden   flex flex-col gap-1 cursor-pointer nav-item border-b-[0.2px] border-secodary">
              <div class="flex items-center gap-4 py-2 hover:bg-blue-600 ">
                  <p  class="cursor-pointer md:ml-4">
                      <i class="fa-solid fa-caret-right text-accent1"></i>
                  </p>
                  <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Evénements</p>
              </div>
              <p id="arrowEvents" class="md:hidden lg:flex absolute right-5 top-[20%] cursor-pointer">
                  <i class="fa-solid fa-caret-right text-accent1"></i>
              </p>
              <div class="flex flex-col pl-10 md:pl-4 lg:pl-10">
                  <a
                  href="#"
                  class="hover:bg-blue-600 py-2 md-show flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
                  >
                      <p id="list" class="cursor-pointer ">
                          <i class="fa-solid fa-caret-right text-accent1"></i>
                      </p>
                      <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Evénements passés</p>
                  </a>
                  <a
                  href="#"
                  class="hover:bg-blue-600 py-2 md-show flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
                  >
                      <p id="list" class="cursor-pointer ">
                          <i class="fa-solid fa-caret-right text-accent1"></i>
                      </p>
                      <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Evénements à venir</p>
                  </a>
              </div>
        </div>
        <a
          href="{{route('admin.blogsManager')}}"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Blog</p>
        </a>
        <a
          href="#"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Galerie</p>
        </a>
        <a
          href="{{route('admin.infocontacts')}}"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Info Contact</p>
        </a>
        <a
          href="#"
          class="hover:bg-blue-600 py-2  flex items-center gap-4 nav-item border-b-[0.2px] border-secodary"
        >
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class=" lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Commentaires Blog</p>
        </a>
        <a href="#" class="flex items-center gap-4 py-2 hover:bg-blue-600 nav-item ">
          <p class="md:ml-4 " id="list">
              <i class="fa-solid fa-caret-right text-accent1"></i>
          </p>
          <p class="lg:flex text md:hidden list-name md:opacity-0 lg:opacity-[1]">Voir les Dons</p>
        </a>
      </nav>
      
    </div>
  </div>