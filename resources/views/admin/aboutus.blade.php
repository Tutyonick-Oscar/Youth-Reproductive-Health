
@extends('admin.layouts.header')
@section('title','Youth Reproductive Health | About us')
@section('content')
<div class="w-full h-auto md:flex">
  {{-- side bar --}}
  @include('admin.layouts.side')
  <div class="flex-1 main">
    <!-- Main content -->
    <div class="flex flex-col w-full">
      <div class="flex flex-col px-6">
        @include('admin.layouts.logout')
        <div class="w-full mt-8 border-b-2 border-b-bg"></div>
      </div>
    </div>
    {{-- starting the main content --}}
    <section class="flex flex-col gap-4 px-8 py-5 ">
        <div class="w-full ">
            <p> Accueil / about us management </p>
        </div>
        <div class="flex flex-col w-full gap-6 ">
            <h1 class="text-2xl ">
                APROPOS DE NOUS
            </h1>
        </div>
        @session('success')
        <p class="fixed right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[#00800031]">
            {{session('success')}}
        </p>
        @endsession
       </section>
       <section class="flex flex-col w-full gap-4 px-8 pb-5">
        <form id="form" method="POST" action="{{isset($about) ? route('admin.storeAbout') : route('admin.updateAbout')}}" class="w-full flex gap-10 items-center h-[25.75rem] justify-center" enctype="multipart/form-data">
            @csrf
            @if (isset($about))
                @method('PUT')
            @endif
            <div id="klk" class="flex flex-col h-full gap-3 ">
                <p class="text-base font-bold text-bg">
                    Images
                </p>
                <div class="flex flex-col w-full gap-3">
                    <div class=" w-[13rem] h-[10rem] relative">
                        <img loading="lazy" decoding="async" src="{{asset('images/youth-removebg-preview.png')}}" alt="" width="200" height="150"
                        class=" rounded-[4px] w-full h-full">
                        <p class="absolute hidden w-6 h-6 text-sm text-white rounded-full opacity-0 cursor-pointer centered bg-red -top-2 -right-2">
                            <i class=" fa-solid fa-x"></i>
                        </p>
                    </div>
                    <div class=" w-[13rem] h-[10rem] relative">
                        <img loading="lazy" decoding="async" id="noimage" src="
                        @if (isset($about))
                            /store/{{$about->image}}
                        @else
                            {{asset('images/noimage.png')}}
                        @endif
                        "alt="about youth" width="200" height="150"
                        class=" object-cover rounded-[4px] w-full h-full">
                        <p class="absolute hidden w-6 h-6 text-sm text-white rounded-full opacity-0 cursor-pointer centered bg-red -top-2 -right-2">
                            <i class=" fa-solid fa-x"></i>
                        </p>
                        @error('image')
                            <small class="text-red">
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
                    <label for="title" class="text-base font-bold text-bg">Titre : </label>
                    <input type="text" name="title" id="title"  value="{{isset($about) ? $about->title : old('title')}}"
                    class="w-[90%] outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                    @error('title')
                        <small class="text-red">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <p class="text-base font-bold text-bg">
                    Description
                </p>
                <div id="editorjs" class="rounded-[4px] min-h-[62%] h-auto overflow-y-scroll dash-border bg-[#fff] px-4 py-2">

                </div>
                <small id="error" class="hidden text-red">la description ne doit pas être vide !</small>
                <input type="text" name="content" id="content"  class="hidden">
                <div id="json" class="hidden json">
                    {{isset($about) ? $about->content->toJson() : ''}}
                </div>
                <div class="flex gap-3 ">
                    <button type="submit" class=" cursor-pointer px-4 py-1 rounded-[4px] bg-accent1 text-white text-base font-semibold">
                        {{isset($about) ? 'Mettre à jour' : 'Envoyer'}}
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

{{-- EditorJs  --}}
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@2.30.5/dist/editorjs.umd.min.js"></script>
 {{-- EditorJs header --}}
 <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@2.8.7/dist/header.umd.min.js"></script>
 {{-- EditorJs list --}}
 <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@1.10.0/dist/list.umd.min.js"></script>
  {{-- EditorJs simple image --}}
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@1.6.0/dist/simple-image.umd.min.js"></script>

  <script src="{{asset('js/setter.js')}}"></script>
  <script src="{{asset('js/imgUpload.js')}}"></script>
@endsection