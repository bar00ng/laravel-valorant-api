@extends('parent')
@section('content')
<div class="container mx-auto px-4 pt-10">
  <h2 class="uppercase tracking-wider text-red-500 text-xl font-semibold mb-5">Heavy</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-2 sm:gap-0 mb-10">
    @foreach ($weapons as $weapon)
    @continue (!str_contains($weapon['category'],'Heavy'))
      <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 bg-white z-10 hover:z-20">
        <img src="{{$weapon['displayIcon']}}" alt="{{$weapon['displayName']}}" class="opacity-50 group-hover:opacity-75">
        <a href="{{ route('weapon.info', $weapon['uuid']) }}">
          <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
            <h1 class="group-hover:text-red-500">{{$weapon['displayName']}}</h1>
          </div>
        </a>
      </div>
   @endforeach
  </div>

  <h2 class="uppercase tracking-wider text-red-500 text-xl font-semibold mb-5">Rifle</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-2 sm:gap-0 mb-10">
    @foreach ($weapons as $weapon)
       @continue (!str_contains($weapon['category'],'Rifle'))
       <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 bg-white z-10 hover:z-20">
         <img src="{{$weapon['displayIcon']}}" alt="{{$weapon['displayName']}}" class="opacity-50 group-hover:opacity-75">
         <a href="{{ route('weapon.info', $weapon['uuid']) }}">
          <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
            <h1 class="group-hover:text-red-500">{{$weapon['displayName']}}</h1>
          </div>
        </a>
       </div>
   @endforeach
  </div>

  <h2 class="uppercase tracking-wider text-red-500 text-xl font-semibold mb-5">Shotgun</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-2 sm:gap-0 mb-10">
    @foreach ($weapons as $weapon)
       @continue (!str_contains($weapon['category'],'Shotgun'))
       <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 bg-white z-10 hover:z-20">
         <img src="{{$weapon['displayIcon']}}" alt="{{$weapon['displayName']}}" class="opacity-50 group-hover:opacity-75">
         <a href="{{ route('weapon.info', $weapon['uuid']) }}">
          <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
            <h1 class="group-hover:text-red-500">{{$weapon['displayName']}}</h1>
          </div>
        </a>
       </div>
   @endforeach
  </div>

  <h2 class="uppercase tracking-wider text-red-500 text-xl font-semibold mb-5">Sniper</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-2 sm:gap-0 mb-10">
    @foreach ($weapons as $weapon)
       @continue (!str_contains($weapon['category'],'Sniper'))
       <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 bg-white z-10 hover:z-20">
         <img src="{{$weapon['displayIcon']}}" alt="{{$weapon['displayName']}}" class="opacity-50 group-hover:opacity-75">
         <a href="{{ route('weapon.info', $weapon['uuid']) }}">
          <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
            <h1 class="group-hover:text-red-500">{{$weapon['displayName']}}</h1>
          </div>
        </a>
       </div>
   @endforeach
  </div>

  <h2 class="uppercase tracking-wider text-red-500 text-xl font-semibold mb-5">SMG</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-2 sm:gap-0 mb-10">
    @foreach ($weapons as $weapon)
       @continue (!str_contains($weapon['category'],'SMG'))
       <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 bg-white z-10 hover:z-20">
         <img src="{{$weapon['displayIcon']}}" alt="{{$weapon['displayName']}}" class="opacity-50 group-hover:opacity-75">
         <a href="{{ route('weapon.info', $weapon['uuid']) }}">
          <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
            <h1 class="group-hover:text-red-500">{{$weapon['displayName']}}</h1>
          </div>
        </a>
       </div>
   @endforeach
  </div>

</div>
@endsection