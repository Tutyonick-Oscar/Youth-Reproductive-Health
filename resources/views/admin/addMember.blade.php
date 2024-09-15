
@extends('admin.layouts.header')
@section('title','YR Health | Member')
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
            <p> Accueil / members management </p>
        </div>
        <div class=" flex flex-col gap-6 w-full">
            <h1 class=" text-2xl">
                {{isset($member) ? 'METTRE A JOUR LE MEMBRE' : 'AJOUTER UN MEMBRE'}}
            </h1>
        </div>
       </section>
       <section class="w-full flex flex-col gap-4 pb-5 px-8">
        <form id="form" method="POST" action="{{isset($member) ? route('admin.updateMember',['id' => $member->id]) : route('admin.storeMember')}}" class="w-full flex gap-10 items-center h-[25.75rem] justify-center" enctype="multipart/form-data">
            @csrf
            @if (isset($member))
                @method('PUT')
            @endif
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
                        <img id="noimage" src="
                        @if (isset($member))
                            /storage/{{$member->image}}
                        @else
                            {{asset('images/noimage.png')}}
                        @endif
                        " alt="" width="200" height="150"
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
                    <label for="name" class="text-bg text-base font-bold">Nom : </label>
                    <input type="text" name="name" value="{{isset($member) ? $member->name : old('name')}}"
                    class="w-[90%] outline-none duration-300 ease-in-out dash-border rounded-[4px] px-4 py-1 focus:border-accent1">
                    @error('name')
                        <small class=" text-red">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <p class=" text-bg text-base font-bold">
                    Description
                </p>
                <div id="editorjs" class="rounded-[4px] min-h-[62%] overflow-y-scroll h-auto dash-border bg-[#fff] px-4 py-2">

                </div>
                @error('content')
                    <small class=" text-red">
                        {{$message}}
                    </small>
                @enderror
                <small id="error" class="text-red hidden">la description ne doit pas être vide !</small>
                <input type="text" name="content" id="content" class="hidden">
                <div id="json" class="json hidden">
                    {{isset($member) ? $member->content : ''}}
                </div>
                <div class=" flex gap-3">
                    <button type="submit" class=" cursor-pointer px-4 py-1 rounded-[4px] bg-accent1 text-white text-base font-semibold">
                       {{isset($member) ? 'Mettre à jour' : ' Envoyer'}}
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