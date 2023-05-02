<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/js/app.js')

  <title>Vestry</title>

  <script></script>
</head>

<body class="antialiased bg-neutral-200 min-h-screen w-full flex flex-col overflow-x-hidden ">
  <x-modal-show-picture />
  <x-navbar />
  @if (session()->has('pesan'))
    <div class="absolute w-full h-full bg-neutral-500/50 flex items-center justify-center z-10">
      <div class="p-4 bg-white rounded-md flex flex-col items-center text-neutral-700 font-roboto font-medium gap-2 text-center">
        <h2 class="text-lg">Pesan!</h2>
        <p class="text-sm font-light text-neutral-400 w-[10rem]">{{ session()->get('pesan') }}</p>
        <a href="{{ '/pembayaran/detail/' . $pembayaran->id_pembayaran }}"
          class="py-1 w-[7rem] text-center bg-red-500 text-white hover:text-red-500 hover:bg-white rounded-md hover:shadow-md hover:shadow-red-500/50">close</a>
      </div>
    </div>
    {{ session()->forget('pesan') }}
  @endif
  <div class="flex-1 flex flex-col items-center gap-4">
    <h1 class="text-3xl font-righteous text-yellow-500 my-4">Detail Pembayaran</h1>
    <div class="w-[35rem] rounded-md bg-white shadow-[2px_3px_7px_0px_rgba(0,0,0,0.3)] p-4 flex flex-col gap-2">
      <div class="flex flex-col text-neutral-600 font-medium font-roboto">
        <p class="text-sm mx-2">ID Proyek</p>
        <div class="p-2 bg-neutral-200 rounded-md w-full flex items-center">
          <p class="flex-1">1</p>
          <a href="/pendanaan/detail/1" class="text-white hover:text-amber-400 cursor-pointer duration-200">Click Here</a>
        </div>
      </div>
      <div class="flex flex-col text-neutral-600 font-medium font-roboto">
        <p class="text-sm mx-2">Tanggal Pembayaran</p>
        <div class="p-2 bg-neutral-200 rounded-md w-full">
          2023-05-12
        </div>
      </div>
      <div class="flex flex-col text-neutral-600 font-medium font-roboto">
        <p class="text-sm mx-2">Status Pembayaran</p>
        <div class="p-2 bg-neutral-200 rounded-md w-full">
          2023-05-12
        </div>
      </div>
      @if (id_status_pembayaran == 1)
        <div class="flex flex-col items-center w-full gap-2 text-neutral-600 hover:bg-neutral-200 cursor-pointer hover:text-amber-400">
          <img src="/icons/upload.svg" class="w-12 h-12 object-cover object-center" alt="">
          <p>Upload Bukti Transfer</p>
        </div>
      @else
        <div class="flex flex-col items-center w-full gap-2 text-neutral-600 hover:bg-neutral-200 cursor-pointer hover:text-amber-400">
          <img src="/icons/img.svg" class="w-12 h-12 object-cover object-center" alt="">
          <p>Lihat Bukti Transfer</p>
        </div>
      @endif
    </div>
  </div>

</body>

</html>
