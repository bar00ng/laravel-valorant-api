@extends('parent')
@section('content')
<div class="border-b border-red-500">
  <div class="container mx-auto px-4 py-16 flex flex-col sm:flex-row w-full">
      <div class="relative bg-white h-80 text-black mb-5">
        <img src="{{$weapon['displayIcon']}}" alt="{{$weapon['displayName']}}">
        <div class="w-full absolute flex justify-between bottom-0 bg-red z-20 px-2">
          <h1 class="font-bold uppercase text-lg">{{ $weapon['displayName'] }}</h1>
          <p class="">{{ 'Creds '.number_format($weapon['shopData']['cost']) }}</p>
        </div>
      </div>

      <div class="flex flex-col items-center sm:ml-16">
        <div class="grid grid-cols-2 gap-2">
          <div class="max-w-xs min-w-min border border-red-500 h-fit">
            {{-- Header --}}
            <div class="bg-red-500 text-center w-full">
              <h1 class="text-white font-bold uppercase tracking-wide">FIRE RATE</h1>
            </div>
            {{-- Angka dan Satuan --}}
            <div class="flex flex-col items-center justify-center">
              <p class="text-4xl font-bold">{{$weapon['weaponStats']['fireRate']}}</p>
              <p class="text-sm font-light">RDS/SEC</p>
            </div>
          </div>
  
          <div class="max-w-xs min-w-min border border-red-500 h-fit">
            {{-- Header --}}
            <div class="bg-red-500 text-center w-full">
              <h1 class="text-white font-bold uppercase tracking-wide">Run speed</h1>
            </div>
            {{-- Angka dan Satuan --}}
            <div class="flex flex-col items-center justify-center">
              <p class="text-4xl font-bold">{{$weapon['weaponStats']['runSpeedMultiplier']}}</p>
              <p class="text-sm font-light">M/SEC</p>
            </div>
          </div>
  
          <div class="max-w-xs min-w-min border border-red-500 h-fit">
            {{-- Header --}}
            <div class="bg-red-500 text-center w-full">
              <h1 class="text-white font-bold uppercase tracking-wide">Equip speed</h1>
            </div>
            {{-- Angka dan Satuan --}}
            <div class="flex flex-col items-center justify-center">
              <p class="text-4xl font-bold">{{$weapon['weaponStats']['equipTimeSeconds']}}</p>
              <p class="text-sm font-light">SEC</p>
            </div>
          </div>
  
          <div class="max-w-xs min-w-min border border-red-500 h-fit">
            {{-- Header --}}
            <div class="bg-red-500 text-center w-full">
              <h1 class="text-white font-bold uppercase tracking-wide">1st SHOT SPREAD</h1>
            </div>
            {{-- Angka dan Satuan --}}
            <div class="flex flex-col items-center justify-center">
              <p class="text-4xl font-bold">{{$weapon['weaponStats']['firstBulletAccuracy']}}</p>
              <p class="text-sm font-light">DEG (HIP/ADS)</p>
            </div>
          </div>
  
          <div class="max-w-xs min-w-min border border-red-500 h-fit">
            {{-- Header --}}
            <div class="bg-red-500 text-center w-full">
              <h1 class="text-white font-bold uppercase tracking-wide">RELOAD SPEED</h1>
            </div>
            {{-- Angka dan Satuan --}}
            <div class="flex flex-col items-center justify-center">
              <p class="text-4xl font-bold">{{$weapon['weaponStats']['reloadTimeSeconds']}}</p>
              <p class="text-sm font-light">SEC</p>
            </div>
          </div>
  
          <div class="max-w-xs min-w-min border border-red-500 h-fit">
            {{-- Header --}}
            <div class="bg-red-500 text-center w-full">
              <h1 class="text-white font-bold uppercase tracking-wide">Magazine</h1>
            </div>
            {{-- Angka dan Satuan --}}
            <div class="flex flex-col items-center justify-center">
              <p class="text-4xl font-bold">{{$weapon['weaponStats']['magazineSize']}}</p>
              <p class="text-sm font-light">RDS</p>
            </div>
          </div>
        </div>

        <table class="w-full mt-5">
          <thead class="bg-red-500 text-white">
            <tr>
              <th>DAMAGE</th>
              @if (count($weapon['weaponStats']['damageRanges']) > 1)
                <th>{{ $weapon['weaponStats']['damageRanges'][0]['rangeStartMeters'].'-'.$weapon['weaponStats']['damageRanges'][0]['rangeEndMeters'].'m' }}</th>
                <th>{{ $weapon['weaponStats']['damageRanges'][1]['rangeStartMeters'].'-'.$weapon['weaponStats']['damageRanges'][1]['rangeEndMeters'].'m' }}</th>
              @else
                <th>{{ $weapon['weaponStats']['damageRanges'][0]['rangeStartMeters'].'-'.$weapon['weaponStats']['damageRanges'][0]['rangeEndMeters'].'m' }}</th>
              @endif
              
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-red-500 text-center">
              <td class="p-2 uppercase">head</td>
              @if (count($weapon['weaponStats']['damageRanges']) > 1)
                <td>{{$weapon['weaponStats']['damageRanges'][0]['headDamage']}}</td>
                <td>{{$weapon['weaponStats']['damageRanges'][1]['headDamage']}}</td>
              @else
                <td>{{$weapon['weaponStats']['damageRanges'][0]['headDamage']}}</td>
              @endif
            </tr>
            <tr class="border-b border-red-500 text-center">
              <td class="p-2 uppercase">body</td>
              @if (count($weapon['weaponStats']['damageRanges']) > 1)
                <td>{{$weapon['weaponStats']['damageRanges'][0]['bodyDamage']}}</td>
                <td>{{$weapon['weaponStats']['damageRanges'][1]['bodyDamage']}}</td>
              @else
                <td>{{$weapon['weaponStats']['damageRanges'][0]['bodyDamage']}}</td>
              @endif
            </tr>
            <tr class="border-b border-red-500 text-center">
              <td class="p-2 uppercase">legs</td>
              @if (count($weapon['weaponStats']['damageRanges']) > 1)
                <td>{{$weapon['weaponStats']['damageRanges'][0]['legDamage']}}</td>
                <td>{{$weapon['weaponStats']['damageRanges'][1]['legDamage']}}</td>
              @else
                <td>{{$weapon['weaponStats']['damageRanges'][0]['legDamage']}}</td>
              @endif
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
@endsection