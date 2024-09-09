<div class="w-full flex justify-between items-center mt-4">
    <p class="text-secodary">{{auth()->user()->user_name}}</p>
    <div class="">
      <form action="{{route('admin.logout')}}" method="POST">
          @csrf
          <button type="submit" class="md:flex items-center gap-2 text-secodary">
              logout
              <i class="fa-solid fa-arrow-right"></i>
          </button>
      </form>
    </div>
  </div>