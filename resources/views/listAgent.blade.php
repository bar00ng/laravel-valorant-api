@extends('parent')

@section('content')
<div class="container px-4 pt-10">
  <div class="p-5 flex flex-col items-center h-screen overflow-y-scroll scrollbar-hide mb-5 m-auto">
    @foreach ($agents as $agent)
      <a href="{{ route('agent.info', $agent['uuid']) }}" class="m-auto">
        <div class="border border-red-500 rounded-lg flex sm:flex-row flex-col items-center mb-5 w-3/4">
          <img src="{{ $agent['displayIcon'] }}" alt="{{ $agent['displayName'] }}" class="w-32 rounded-l-lg">
          <div class="flex flex-col ml-5 mr-3 my-2.5 sm:my-0">
            <div class="flex items-center">
              <h1 class="text-red-500 uppercase text-wider text-lg">{{ $agent['displayName'] }}</h1>
              <p class="text-sm ml-2.5">{{ $agent['role']['displayName'] }}</p>
            </div>
            <p>{{ $agent['description'] }}</p>
          </div>
        </div>
      </a>
    @endforeach
  </div>
</div>
@endsection