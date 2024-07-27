@extends('layout')

@section('navbar')
    <nav class="container mx-auto flex items-center justify-between">
      <div>
        <a href="/"><img class="w-24 p-4"src="{{asset('images/SeekAppLogo.png')}}"></a>
      </div>
      <div class="flex gap-6 mr-4">
        <a href="/login" class="flex gap-4 mr-4 py-8 border-b-2 border-transparent hover:border-orange-500">
        <i class="fa-solid fa-user-plus text-lg md:pt-1"></i><li class="hidden md:block text-lg">Login</li>
         </a>
        <a href="/register" class="flex gap-4 mr-4 py-8 border-b-2 border-transparent hover:border-orange-500"> 
        <i class="fa-solid fa-right-to-bracket text-lg md:pt-1"></i><li class="hidden md:block text-lg">Sign-up</li>
         </a>
      </div>
    </nav>
@endsection