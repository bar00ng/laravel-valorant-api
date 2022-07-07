@extends('parent')
@section('content')
<div class="container mx-auto px-4 pt-10">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-0 my-5">
    @foreach ($maps as $map)
    <a href="{{ route('map.info', $map['uuid']) }}">
      <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 z-10 hover:z-20">
        <img src="{{$map['splash']}}" alt="{{$map['displayName']}}" class="opacity-50 group-hover:opacity-75">
        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
          <h1 class="group-hover:text-red-500">{{$map['displayName']}}</h1>
        </div>
      </div>
    </a>
    @endforeach
  </div>
</div>
@endsection