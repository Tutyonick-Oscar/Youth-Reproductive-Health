
@extends('admin.layouts.header')
@section('title','Youth Reproductive Health | Ajouter un slide')
@section('content')
<div class="w-full md:flex h-auto">
  {{-- side bar --}}
  @include('admin.layouts.side')
  <div class="flex-1 main">
    <!-- Main content -->
    <div class="w-full flex flex-col">
      <div class="flex flex-col px-6">
        @include('admin.layouts.logout')
        <div class="w-full border-b-2 border-b-bg mt-8"></div>
      </div>
    </div>
    {{-- starting the main content --}}
    <section class=" flex flex-col gap-4 py-5 px-8">
        <div class=" w-full">
            <p> Accueil / slide management </p>
        </div>
        <div class=" flex flex-col gap-6 w-full">
            <h1 class=" text-2xl">
                {{isset($slide) ? 'METTRE A JOUR LE SLIDE': 'AJOUTER UN SLIDE'}}
            </h1>
        </div>
        @session('success')
        <p class="fixed right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[#00800031]">
            {{session('success')}}
        </p>
        @endsession
       </section>
       <section class="w-full flex flex-col gap-4 pb-5 px-8">
        <form action="{{isset($slide) ? route('admin.updatedSlide',['id'=>$slide->id]) : route('admin.storeSlide')}}" class="w-full flex gap-10 items-center h-[25.75rem] justify-center" enctype="multipart/form-data" method="POST">
            @csrf
            @if(isset($slide))
                @method('PUT') <!-- Pour indiquer que c'est une mise à jour -->
            @endif
            <div id="klk" class="flex flex-col gap-3 h-full ">
                <p class=" text-bg text-base font-bold">
                    Image
                </p>
                <div class="w-full flex flex-col gap-3">
                    <div class=" w-[13rem] h-[10rem] relative">
                        <img loading="lazy" decoding="async" src="{{asset('images/youth-removebg-preview.png')}}" alt="" width="200" height="150"
                        class=" rounded-[4px] w-full h-full">
                        <p class="hidden text-sm text-white opacity-0 centered w-6 h-6 bg-red rounded-full absolute -top-2 cursor-pointer -right-2">
                            <i class=" fa-solid fa-x "></i>
                        </p>
                    </div>
                    <div class=" w-[13rem] h-[10rem] relative">
                        <img loading="lazy" decoding="async" id="noimage" src="@if (isset($slide))
                            /storage/{{$slide->image}}
                        @else
                           {{asset('images/noimage.png')}} 
                        @endif" alt="" width="200" height="150"
                        class=" object-cover rounded-[4px] w-full h-full">
                        <p class="hidden text-sm text-white opacity-0 centered w-6 h-6 bg-red rounded-full absolute -top-2 cursor-pointer -right-2">
                            <i class=" fa-solid fa-x "></i>
                        </p>
                        @error('image')
                            <small class=" text-red">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                </div>
                <input id="image" type="file" name="image" class="hidden" onchange="previewPhoto()">
                <label for="image" class=" w-[8rem] rounded-[4px] bg-white text-bg shadow-lg cursor-pointer duration-300 ease-in-out hover:scale-110 text-base text-center py-1">
                   Selectionner Image
                </label>
            </div>
            <div class="w-full flex flex-col gap-3 h-[25.75rem]">
                <div class=" w-full flex gap-4 px-4 py-4 rounded-[4px] bg-[#fff] items-center">
                    <label for="title" class="text-bg text-base font-bold">Titre : </label>
                    <input type="text" name="title" id="title" value="{{isset($slide) ? $slide->title : old('title')}}"
                    class="w-[90%] outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                    @error('title')
                        <small class=" text-red">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                {{-- <p class=" text-bg text-base font-bold">
                    Description
                </p>
                <div id="editorjs" class="rounded-[4px] min-h-[62%] h-auto dash-border bg-[#fff] px-4 py-2">

                </div> --}}
                <div class=" flex gap-3">
                    <button type="submit" class=" cursor-pointer px-4 py-1 rounded-[4px] bg-accent1 text-white text-base font-semibold">
                        {{isset($slide) ? 'Mettre à jour' : 'Envoyer'}}
                    </button>
                    <button type="button" class="px-4 py-1 rounded-[4px] dash-border cursor-pointer">
                        Reset
                    </button>
                </div>
            </div>
        </form>
       </section>
    {{-- ending the main content --}}
  </div>
</div>
<script src="{{asset('js/imgUpload.js')}}"></script>
@endsection