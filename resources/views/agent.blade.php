@extends('parent')
@section('content')
<div class="border-b border-red-500">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <div class="flex-none bg-white">
      <img src="{{ $agent['fullPortrait'] }}" alt="{{ $agent['displayName'] }}" class="w-64 lg:w-96 m-auto">
    </div>
    <div class="md:ml-24">
      <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $agent['displayName'] }}</h2>
      <div class="flex flex-wrap items-center text-gray-400 text-md mt-1">
        <img src="{{ $agent['role']['displayIcon'] }}" alt="{{ $agent['role']['displayName'] }}" class="w-6">
        <span class="ml-2">{{ $agent['role']['displayName'] }}</span>
      </div>

      <p class="mt-8 text-justify">{{ $agent['description'] }}</p>
    </div>
  </div>
</div>

<div class="border-b border-red-500">
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-semibold text-center">SKILLS</h2>
    <div class="flex flex-col sm:flex-row mt-10 sm:items-center sm:justify-center">
      @foreach ($agent['abilities'] as $ability)
          <div class="flex flex-col items-center mx-5">
            <img src="{{ $ability['displayIcon'] }}" alt="{{ $ability['displayName'] }}" class="w-20">
            <h1 class="my-5 font-bold text-xl">{{ $ability['displayName'] }}</h1>
            <p class="text-justify">{{ $ability['description'] }}</p>
          </div>
      @endforeach
    </div>
  </div>
</div>
@endsection