<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATOL</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-800 text-white font-sans">
  <div class="bg-red-500">
    {{-- Topbar --}}
    <div class="text-center p-2 mb-2 flex items-center justify-between">
      <a href="{{ route('index') }}" class="uppercase font-bold tracking-wide text-5xl">VALORANT </a>
      <div class="flex items-center">
        <a href="{{ route('agents') }}" class="cursor-pointer tracking-widest uppercase px-6 py-2 hover:bg-white hover:text-gray-800 transition ease-in-out duration-150" active>Agents</a>
        <a href="{{ route('weapons') }}" class="cursor-pointer tracking-widest uppercase px-6 py-2 hover:bg-white hover:text-gray-800 transition ease-in-out duration-150">Weapons</a>
      </div>
    </div>
    {{-- Navbar --}}
    <nav>
      
    </nav>
  </div>

  @yield('content')
</body>
</html>