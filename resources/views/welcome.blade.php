<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/js/app.js')

  <title>Vestry</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased bg-neutral-100 min-h-screen w-full flex flex-col overflow-y-scroll">
  @if (session()->has('logout'))
    <div class="w-full h-full bg-neutral-500/60 absolute z-10 flex items-center justify-center">
      <div class="p-4 bg-white rounded-md flex flex-col items-center text-neutral-700 font-roboto font-medium gap-2 text-center">
        <h2 class="text-lg">Pesan!</h2>
        <p class="text-sm font-medium font-roboto text-neutral-400 w-[18rem]">{{ session()->get('logout') }}</p>
        <a href="/"
          class="py-1 w-[7rem] text-center bg-red-500 text-white hover:text-red-500 hover:bg-white rounded-md hover:shadow-md hover:shadow-red-500/50">close</a>
      </div>
    </div>
  @endif
  <x-navbar />

  <div class="flex-1 flex flex-col px-12 items-center ">
    <h1 class="text-yellow-500 font-semibold text-7xl my-4  text-center font-righteous">Vestry</h1>
    @if (auth('pendana')->check() || auth('pengusaha')->check() || auth('admin')->check())
      <x-home-auth />
    @endif
    @if (!auth('pendana')->check() && !auth('pengusaha')->check() && !auth('admin')->check())
      <x-home-guest />
    @endif
  </div>

</body>

</html>
