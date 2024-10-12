@extends('admin.layouts.header')
@section('title','Youth Reproductive Health | Contacts management')
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
        <p> Accueil / Gestionnaire des contacts</p>
    </div>
    <div class=" flex flex-col gap-6 w-full">
        <h1 class=" text-2xl">
            GESTIONNAIRE DES CONTACTS
        </h1>
    </div>
    @session('success')
        <p class="fixed right-6 px-4 py-2 rounded-[4px] dash-border text-[gray] bg-[#00800031]">
            {{session('success')}}
        </p>
    @endsession
   </section>
   <section class=" flex flex-col gap-4 px-8 w-full ">
        <div class=" w-full flex justify-between items-center bg-[#fff] py-4 px-4 rounded-sm">
            <label for="pagination" class=" flex gap-3 items-center text-base">
                <select name="pagination" id="pagination" class=" w-[5rem] border-[0.3px] border-secodary rounded-[4px] bg-[transparent] py-1">
                    <option value="5" class=" text-center text-base">5</option>
                    <option value="10" class=" text-center text-base bg-secodary text-white" >10</option>
                    <option value="20" class=" text-center text-base " >20</option>
                    <option value="all" class=" text-center text-base bg-secodary text-white" >Tout</option>
                </select>
                résultats par page
            </label>
            <label for="search" class=" flex gap-3 items-center text-base">
                Rechercher : 
                <input type="text" name="search" id="search" class="text-base duration-300 ease-in-out focus:border-accent1 outline-none border-[0.3px] border-secodary text-bg px-4 py-1 rounded-[4px] bg-[transparent]">
            </label>
        </div>
   </section>
   <section class=" w-full px-8 flex flex-col">
        <table class=" dash-border rounded-[4px]">
            <thead class=" border-b  dash-border">
                <tr class="">
                    <th class=" w-[8%] py-2 h-auto border-r dash-border">ID</th>
                    <th class=" w-[16%] border-r dash-border">nom</th>
                    <th class=" w-[16%] border-r dash-border">E-mail</th>
                    <th class="w-[50%] border-r dash-border">Message</th>
                    <th class="w-[10%] border-r dash-border"> date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                <tr class="h-[2rem]">
                    <td class="w-[8%]  border-r dash-border h-[4rem] text-center"> {{$contact->id}} </td>
                    <td class="w-[16%] border-r dash-border  py-2  px-4"> 
                        {{$contact->contactname}}
                    </td>
                    <td class="w-[16%] border-r dash-border text-center "> 
                        {{$contact->contactemail}}
                    </td>
                    <td class="w-[50%] border-r dash-border text-center "> 
                        {{$contact->contactmessage}}
                    </td>
                    <td class="w-[10%] border-r dash-border text-center "> {{$contact->created_at->format('M, d-Y')}} </td>
                    <td class="dash-border px-2">
                        <div class=" flex gap-3 w-full justify-center items-center">
                             <form action="{{route('admin.deleteContacts',['id' => $contact->id])}}" method="POST" class=" flex items-center">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" rounded-md text-base gap-1 text-white bg-red flex justify-center items-center px-2 py-1">
                                    <i class=" fa-solid fa-trash text-base "></i>
                                    Supprimer
                                </button>
                             </form>
                        </div>
                   </td>
                </tr>
                @empty
                    <tr class="">
                        <td class="pl-20 whitespace-nowrap py-4 ">
                            Aucun contact pour le moment
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
   </section>
   <section class=" w-full px-8">
    <div class=" w-full flex justify-between items-center bg-[#fff] py-4 px-4 rounded-sm">
        <div>
            <p class=" text-bg text-base">
                {{$contacts->firstItem()}} à {{$contacts->lastItem()}} résultats sur {{count($contacts)}}
            </p>
        </div>
        <div class=" flex">
            <button class=" px-4 py-1 text-sm text-accent1 rounded-tl-[4px] rounded-bl-[4px] border border-accent1">
                <a href="{{$contacts->previousPageUrl()}}">
                    <
                </a>
            </button>
            <button class=" px-3 py-1 bg-accent1 text-white">
                {{$contacts->currentPage()}}
            </button>
            <button  class=" px-4 py-1 text-sm text-accent1 rounded-tr-[4px] rounded-br-[4px] border border-accent1">
                <a href="{{$contacts->nextPageUrl()}}">
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