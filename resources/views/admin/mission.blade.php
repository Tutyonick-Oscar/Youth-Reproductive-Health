
@extends('admin.layouts.header')
@section('title','Youth Reproductive Health | Mission')
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
            <p> Accueil / notre mission </p>
        </div>
        <div class=" flex flex-col gap-6 w-full">
            <h1 class=" text-2xl">
                NOTRE MISSION
            </h1>
        </div>
        @session('success')
        <p class="fixed right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[#00800031]">
            {{session('success')}}
        </p>
        @endsession
       </section>
       <section class="w-full flex flex-col gap-4 pb-5 px-8">
        <form id="form" action="{{isset($mission) ? route('admin.updateMission') : route('admin.storeMission')}}" class="w-full flex gap-10 items-center h-auto justify-center" enctype="multipart/form-data" method="POST">
            @if (isset($mission))
                @method('PUT')
            @endif
            @csrf
            <div id="klk" class="flex flex-col gap-5 h-[28.8rem]">
                <p class=" text-bg text-base font-bold">
                    Images
                </p>
                <div class="w-full flex flex-col gap-6">
                    <div class=" w-[13rem] h-[10rem] relative">
                        <img loading="lazy" decoding="async" id="noimage1" src="
                        @if (isset($mission))/storage/{{$mission->image1}}
                        @else
                          {{asset('images/noimage.png')}}  
                        @endif" alt="" width="200" height="150"
                        class=" object-cover rounded-[4px] w-full h-full">
                        <label for="image1" class=" text-sm text-white centered w-7 h-7 bg-accent1 rounded-full absolute -top-2 cursor-pointer -right-2">
                            <i class=" fa-solid fa-camera "></i>
                        </label>
                        <input type="file" name="image1" id="image1" class="hidden img_store" onchange="previewPhoto(1)">
                        @error('image1')
                            <small class="text-red">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class=" w-[13rem] h-[10rem] relative ">
                        <img id="noimage2" src="
                        @if (isset($mission))/storage/{{$mission->image2}}
                        @else
                          {{asset('images/noimage.png')}}  
                        @endif"
                        alt="" width="200" height="150"
                        class=" object-cover rounded-[4px] w-full h-full">
                        <label for="image2" class=" text-sm text-white centered w-7 h-7 bg-accent1 rounded-full absolute -top-2 cursor-pointer -right-2">
                            <i class=" fa-solid fa-camera "></i>
                        </label>
                        <input type="file" name="image2" id="image2" class="hidden img_store" onchange="previewPhoto(2)">
                        @error('image2')
                            <small class="text-red">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                </div>
                {{-- <input id="image" type="file" name="image" class="hidden">
                <label for="image" class=" w-[8rem] rounded-[4px] bg-white text-bg shadow-lg cursor-pointer duration-300 ease-in-out hover:scale-110 text-base text-center py-1">
                   Selectionner Image
                </label> --}}
            </div>
            <div class="w-full flex flex-col gap-3 h-[28.8rem] md:pb-10 lg:pb-6">
                <div class=" w-full flex gap-4 px-4 py-4 rounded-[4px] bg-[#fff] items-center">
                    <label for="title" class="text-bg text-base font-bold">Titre : </label>
                    <input type="text" name="title" value="{{isset($mission) ? $mission->title : old('title')}}" required class="w-[90%] outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                    @error('title')
                        <small class="text-red">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <p class=" text-bg text-base font-bold">
                    Contenu
                </p>
                <div id="editorjs" class="rounded-[4px] min-h-[62%] overflow-y-scroll h-auto dash-border bg-[#fff] px-8 py-4">

                </div>
                <small id="error" class="text-red hidden">le contenu ne doit pas être vide !</small>
                <input type="text" name="content" id="content"  class="hidden">
                <div id="json" class="json hidden">
                    {{isset($mission) ? $mission->content : ''}}
                </div>
                <div class=" flex gap-4 w-full">
                    <button type="submit" class="w-auto cursor-pointer px-4 py-1 rounded-[4px] bg-accent1 text-white text-base font-semibold">
                        {{isset($mission) ? 'Mettre à jour' : 'Envoyer'}}
                    </button>
                    <button type="button" class="w-auto px-4 py-1 rounded-[4px] dash-border cursor-pointer">
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

 <script src="{{asset('js/setter.js')}}" type="module"></script>

 <script src="{{asset('js/imgUpload.js')}}"></script>
@endsection