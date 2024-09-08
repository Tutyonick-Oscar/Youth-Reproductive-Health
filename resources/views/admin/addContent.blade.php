
@extends('admin.layouts.header')
@section('title','Youth Reproductive Health | Vision')
@section('content')
<div class="w-full md:flex h-auto">
  {{-- side bar --}}
  @include('admin.layouts.side')
  <div class="flex-1 main">
    <!-- Main content -->
    <div class="w-full flex flex-col">
      <div class="flex flex-col px-6">
        <div class="w-full flex justify-between items-center mt-4">
          <p class="text-secodary">Admin</p>
          <div class="md:flex items-center gap-2 text-secodary hidden">
            <p>Log Out</p>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="w-full border-b-2 border-b-bg mt-8"></div>
      </div>
    </div>
    {{-- starting the main content --}}
    <section class=" flex flex-col gap-4 py-5 px-8">
        <div class=" w-full">
            <p> Accueil / causes management </p>
        </div>
        <div class=" flex flex-col gap-6 w-full">
            <h1 class=" text-2xl">
                AJOUTER UNE CAUSE
            </h1>
        </div>
       </section>
       <section class="w-full flex flex-col gap-4 pb-5 px-8">
        <form action="" class="w-full flex gap-10 items-center h-[25.75rem] justify-center" enctype="multipart/form-data">
            <div id="klk" class="flex flex-col gap-3 h-full ">
                <p class=" text-bg text-base font-bold">
                    Images
                </p>
                <div class="w-full flex flex-col gap-3">
                    <div class=" w-[13rem] h-[10rem] relative">
                        <img src="{{asset('images/youth-removebg-preview.png')}}" alt="" width="200" height="150"
                        class=" rounded-[4px] w-full h-full">
                        <p class="hidden text-sm text-white opacity-0 centered w-6 h-6 bg-red rounded-full absolute -top-2 cursor-pointer -right-2">
                            <i class=" fa-solid fa-x "></i>
                        </p>
                    </div>
                    <div class=" w-[13rem] h-[10rem] relative">
                        <img src="{{asset('images/noimage.png')}}" alt="" width="200" height="150"
                        class=" object-cover rounded-[4px] w-full h-full">
                        <p class="hidden text-sm text-white opacity-0 centered w-6 h-6 bg-red rounded-full absolute -top-2 cursor-pointer -right-2">
                            <i class=" fa-solid fa-x "></i>
                        </p>
                    </div>
                </div>
                <input id="image" type="file" name="image" class="hidden">
                <label for="image" class=" w-[8rem] rounded-[4px] bg-white text-bg shadow-lg cursor-pointer duration-300 ease-in-out hover:scale-110 text-base text-center py-1">
                   Selectionner Image
                </label>
            </div>
            <div class="w-full flex flex-col gap-3 h-[25.75rem]">
                <div class=" w-full flex gap-4 px-4 py-4 rounded-[4px] bg-[#fff] items-center">
                    <label for="title" class="text-bg text-base font-bold">Titre : </label>
                    <input type="text" class="w-[90%] outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                </div>
                <p class=" text-bg text-base font-bold">
                    Description
                </p>
                <div id="editorjs" class="rounded-[4px] min-h-[62%] h-auto dash-border bg-[#fff] px-4 py-2">

                </div>
                <div class=" flex gap-3">
                    <button type="submit" class=" cursor-pointer px-4 py-1 rounded-[4px] bg-accent1 text-white text-base font-semibold">
                        Envoyer
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
@endsection