@extends('parent')
@section('content')
<div class="border-b border-red-500">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <div class="flex-none bg-white">
      <img src="{{ $map['displayIcon'] }}" alt="{{ $map['displayName'] }}" class="w-64 lg:w-96 m-auto z-10">
    </div>
    <div class="md:ml-24">
      <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $map['displayName'] }}</h2>
    </div>
  </div>
</div>
@endsection