
@extends('admin.layouts.header')
@section('title','Rédiger un blog')
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
            <p> Accueil / Blog management </p>
        </div>
        <div class="flex flex-col w-full gap-6 ">
            <h1 class="text-2xl ">
                {{isset($blog) ? 'METTRE A JOUR LE BLOG' : 'AJOUTER UN BLOG'}}
            </h1>
        </div>
       </section>
       <section class="flex flex-col w-full gap-4 px-8 pb-5">
        <form id="form" method="POST" action="{{isset($blog) ? route('admin.updateBlog',['id'=>$blog->id]) : route('admin.createBlog')}}" method="POST" class="w-full flex gap-10 items-center h-[25.75rem] justify-center" enctype="multipart/form-data">
            @csrf
            @if (isset($blog))
                @method('PUT')
            @endif
            <div id="klk" class="flex flex-col h-full gap-4 ">
                <p class="text-base font-bold text-bg">
                    Image
                </p>
                <div class="flex flex-col w-full gap-4">
                    <div class=" w-[13rem] h-[10rem] relative ">
                        <img loading="lazy" decoding="async" id="noimage" src="
                        @if (isset($blog))
                            /store/{{$blog->image}}
                        @else
                            {{asset('images/noimage.png')}}
                        @endif
                        " alt="" width="200" height="150"
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
                <div class="relative w-full flex gap-2 px-4 py-4 rounded-[4px] bg-[#fff] items-center">
                    <label for="date" class="text-base font-bold text-bg">date : </label>
                    
                    <input id="datepicker" value="{{isset($blog) ? $blog->date : old('date')}}"
                    type="text" name="date"  class=" outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                    @error('date')
                        <small class="text-red">
                            {{$message}}
                        </small> 
                    @enderror
                </div>
                <div class=" w-full flex gap-2 px-4 py-4 rounded-[4px] bg-[#fff] items-center">
                    <label for="type" class="text-base font-bold text-bg">Type : </label>
                    <input  type="text" name="type" value="{{isset($blog) ? $blog->type : old('type')}}" class=" outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                    @error('type')
                        <small class="text-red">
                            {{$message}}
                        </small> 
                    @enderror
                </div>
            </div>
            <div class="w-[70%] flex flex-col gap-3 h-[25.75rem]">
                <div class=" w-full flex gap-4 px-4 py-4 rounded-[4px] bg-[#fff] items-center">
                    <label for="title" class="text-base font-bold text-bg">Titre : </label>
                    <input  type="text" name="title" value="{{isset($blog) ? $blog->title : old('title')}}" class="w-[90%] outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                    @error('title')
                        <small class="text-red">
                            {{$message}}
                        </small> 
                @enderror
                </div>
                {{-- <p class="text-base font-bold text-bg">
                    Description
                </p> --}}
                <div id="editorjs" class="rounded-[4px] h-[57%]  dash-border bg-[#fff] px-4 py-2 overflow-y-scroll">

                </div>
                <small id="error" class="hidden text-red">la description ne doit pas être vide !</small>
                <input type="text" name="content" id="content" class="hidden">
                <div id="json" class="hidden json">
                    {{isset($blog) ? $blog->content->toJson() : ''}}
                </div>
                <div class=" w-full flex gap-2 px-4 py-4 rounded-[4px] bg-[#fff] items-center">
                    <label for="tags" class="text-base font-bold text-bg">Tags : </label>
                    <div id="tagsDiv" class="flex gap-2 ">
                        @if (isset($blog))
                            @foreach (explode(',',$blog->tags) as $item)
                               <p id="taged" class="relative px-4 py-1 whitespace-nowrap dash-border rounded-xl">
                                    {{$item}}
                                    <i class="fa-solid fa-x absolute text-[10px] rounded-full text-bg -top-2 -right-1 p-1 x-red cursor-pointer"></i>
                                </p> 
                            @endforeach
                        @endif
                        <input type="text" autofocus id="tags" name="tags" placeholder="définissez vos tags"
                        class="w-[90%] outline-none !border-none hover:!border-none active:!border-none focus:!border-none">
                    </div>
                    @error('tags')
                        <small class="text-red">
                            {{$message}}
                        </small> 
                    @enderror
                </div>
                <div class="flex gap-3 ">
                    <button type="submit" id="submit" class=" cursor-pointer px-4 py-1 rounded-[4px] bg-accent1 text-white text-base font-semibold">
                        {{isset($blog) ? 'Mettre à jour' : 'Envoyer'}}
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
 {{-- datepicker --}}
 <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js" ></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script> --}}

 <script src="{{asset('js/setter.js')}}"></script>
 <script src="{{asset('js/tags.js')}}"></script>
 <script src="{{asset('js/date.js')}}" type="module"></script>
 <script src="{{asset('js/imgUpload.js')}}"></script>
@endsection