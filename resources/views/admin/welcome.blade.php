@extends('admin.layouts.header')
@section('title','welcome to dashboard')
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
    {{-- starting main content --}}
    <div class="px-6 py-4">
      <h1 class="text-2xl font-bold mb-4 text-center text-secodary">
        WELCOME TO DASHBOARD
      </h1>
    </div>
    {{-- ending main content --}}
  </div>
</div>
@endsection