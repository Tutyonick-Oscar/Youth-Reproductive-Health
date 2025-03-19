@extends('admin.layouts.header')
@section('title','Youth Reproductive Health | Comments management')
@section('content')
<div class="w-full h-auto md:flex">
  {{-- side bar --}}
  @include('admin.layouts.side')
  <div class="flex-1 main">
    <!-- Main content -->
    <div class="flex flex-col w-full">
      <div class="flex flex-col px-6">
        {{-- <div class="flex items-center justify-between w-full mt-4">
          <p class="text-secodary">Admin</p>
          <div class="items-center hidden gap-2 md:flex text-secodary">
            <p>Log Out</p>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div> --}}
        @include('admin.layouts.logout')
        <div class="w-full mt-8 border-b-2 border-b-bg"></div>
      </div>
    </div>
    {{-- starting the main content --}}
   <section class="flex flex-col gap-4 px-8 py-5 ">
    <div class="w-full ">
        <p> Accueil / Gestionnaire des commentaires</p>
    </div>
    <div class="flex flex-col w-full gap-6 ">
        <h1 class="text-2xl ">
            GESTIONNAIRE DES COMMENTAIRES
        </h1>
    </div>
    @session('success')
        <p class="fixed right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[#00800031]">
            {{session('success')}}
        </p>
    @endsession
   </section>
   <section class="flex flex-col w-full gap-4 px-8 ">
        <div class=" w-full flex justify-between items-center bg-[#fff] py-4 px-4 rounded-sm">
            <label for="pagination" class="flex items-center gap-3 text-base ">
                <select name="pagination" id="pagination" class=" w-[5rem] border-[0.3px] border-secodary rounded-[4px] bg-[transparent] py-1">
                    <option value="5" class="text-base text-center ">5</option>
                    <option value="10" class="text-base text-center text-white bg-secodary" >10</option>
                    <option value="20" class="text-base text-center " >20</option>
                    <option value="all" class="text-base text-center text-white bg-secodary" >Tout</option>
                </select>
                résultats par page
            </label>
            <label for="search" class="flex items-center gap-3 text-base ">
                Rechercher : 
                <input type="text" name="search" id="search" class="text-base duration-300 ease-in-out focus:border-accent1 outline-none border-[0.3px] border-secodary text-bg px-4 py-1 rounded-[4px] bg-[transparent]">
            </label>
        </div>
   </section>
   <section class="flex flex-col w-full px-8 ">
        <table class=" dash-border rounded-[4px]">
            <thead class="border-b dash-border">
                <tr class="">
                    <th class=" w-[8%] py-2 h-auto border-r dash-border">ID</th>
                    <th class=" w-[16%] border-r dash-border">nom</th>
                    <th class=" w-[16%] border-r dash-border">E-mail</th>
                    <th class="w-[25%] border-r dash-border">Message</th>
                    <th class="w-[25%] border-r dash-border">Titre du blog</th>
                    <th class="w-[10%] border-r dash-border"> date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @forelse ($comments as $comment )
                    <tr class="h-[2rem]">
                    <td class="w-[8%]  border-r dash-border h-[4rem] text-center"> {{$comment->id}} </td>
                    <td class="w-[16%] border-r dash-border  py-2  px-4"> 
                        {{$comment->name}}
                    </td>
                    <td class="w-[16%] border-r dash-border text-center "> 
                        {{$comment->email}}
                    </td>
                    <td class="w-[25%] border-r dash-border text-center "> 
                        {{$comment->comment}}
                    </td>
                    <td class="w-[25%] border-r dash-border text-center "> 
                        {{$comment->blog->title}}
                    </td>
                    <td class="w-[10%] border-r dash-border text-center "> {{$comment->created_at->format('d M Y')}} </td>
                    <td class="px-2 dash-border">
                        <div class="flex items-center justify-center w-full gap-3 ">
                             <form action="{{route('admin.deleteComment',['id'=>$comment->id])}}" class="flex items-center "method='POST'>
                             @method('DELETE')
                             @csrf
                                <button type="submit" class="flex items-center justify-center gap-1 px-2 py-1 text-base text-white rounded-md bg-red">
                                    <i class="text-base fa-solid fa-trash"></i>
                                    Supprimer
                                </button>
                             </form>
                        </div>
                   </td>
                </tr>
               @empty
               <tr>
                    <td class="py-2 pl-20 whitespace-nowrap"> 
                        Aucun commentaire pour le moment
                    </td>
                </tr>
               @endforelse
            </tbody>
        </table>
   </section>
   <section class="w-full px-8 ">
    <div class=" w-full flex justify-between items-center bg-[#fff] py-4 px-4 rounded-sm">
        <div>
            <p class="text-base text-bg">
                {{$comments->firstItem()}} à {{$comments->lastItem()}} résultats sur {{count($comments)}}
            </p>
        </div>
        <div class="flex ">
            <button class=" px-4 py-1 text-sm text-accent1 rounded-tl-[4px] rounded-bl-[4px] border border-accent1">
                <a href="{{$comments->previousPageUrl()}}">
                    <
                </a>
            </button>
            <button class="px-3 py-1 text-white bg-accent1">
                {{$comments->currentPage()}}
            </button>
            <button  class=" px-4 py-1 text-sm text-accent1 rounded-tr-[4px] rounded-br-[4px] border border-accent1">
                <a href="{{$comments->nextPageUrl()}}">
                    >
                </a>
            </button
        </div>
    </div>
   </section>
    {{-- ending the main content --}}
  </div>
</div>
@endsection