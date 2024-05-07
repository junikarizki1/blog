<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Dashboard</title> --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">
  <x-header>
    {{-- bagian h1 itu adalah slot, tapi tidak kita tulis slot karena nama slot udah kita bikin jadi title, sesuai dengan halaman home, about dll. --}}
    <h1 class="font-bold text-2xl">{{$title}}</h1>
</x-header>
<x-navbar></x-navbar>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h2>{{$slot}}</h2>
    </div>
  </main>
</div>
</body>
</html>