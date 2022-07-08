@extends('parent')

@section('content')
{{-- Valorant Agents Preview --}}
<div class="container mx-auto px-4 pt-10">
  <div class="agents">
     <h2 class="uppercase tracking-wider text-red-500 text-xl font-semibold text-center">Agents</h2>
     <div class="grid grid-cols-1 md:grid-cols-5 gap-0 mt-5">
      @foreach ($agents as $agent)
        @if ($loop->index < 5)
        <a href="{{ route('agent.info', $agent['uuid']) }}">
          <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 z-10 hover:z-20">
            <img src="{{$agent['displayIcon']}}" alt="{{$agent['displayName']}}" class="opacity-50 group-hover:opacity-75 bg-black">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
              <h1 class="group-hover:text-red-500">{{$agent['displayName']}}</h1>
            </div>
          </div>
        </a>
          @endif
      @endforeach
    </div>
    <a href="{{ route('agents') }}" class="mt-5">
      <h2 class="mt-6 text-red-500 text-center text-sm hover:underline hover:underline-offset-4">see more agents</h2>
    </a>
  </div>

  <div class="weapons py-10">
    <h2 class="uppercase tracking-wider text-red-500 text-xl font-semibold text-center">weapons</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 sm:gap-0 mt-5">
      @foreach ($weapons as $weapon)
        @if ($loop->index < 6)
          <div class="relative group hover:cursor-pointer hover:scale-110 transation duration-100 bg-white z-10 hover:z-20">
            <img src="{{$weapon['displayIcon']}}" alt="{{$weapon['displayName']}}" class="opacity-50 group-hover:opacity-75">
              <a href="{{ route('weapon.info',$weapon['uuid']) }}">
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full uppercase font-bold text-lg tracking-wider group bg-black bg-opacity-50">
                  <h1 class="group-hover:text-red-500">{{$weapon['displayName']}}</h1>
                </div>
              </a>
          </div>
        @endif
      @endforeach
    </div>
    <a href="{{ route('weapons') }}" class="mt-5">
      <h2 class="mt-6 text-red-500 text-center text-sm hover:underline hover:underline-offset-4">see more weapons</h2>
    </a>
  </div>
</div>
@endsection