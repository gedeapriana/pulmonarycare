<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-scroll">
<div class="root w-full h-screen flex flex-col lg:flex-row gap-10 justify-center items-center">
  <article class="w-96 flex flex-col justify-center items-center gap-3">
    <h3 class="lg:text-xl text-lg text-slate-600 text-center lg:text-left font-bold leading-10">Selamat datang di <span class="border bg-teal-500 text-teal-50 px-4 py-2 rounded-full mx-2">{{ config('app.name') }}</span></h3>
    <img src="{{ asset($loginImage['url']) }}" alt="{{ $loginImage['alt'] }}">
  </article>
  <article class="flex flex-col gap-5 justify-center items-center">
    <form action="{{ route('submit-login') }}" class="flex flex-col gap-4" method="post">
      @csrf
      <label for="email" class="flex gap-2 flex-col">
        <span class="text-slate-700">Email</span>
        <input class="border px-5 py-3 rounded-xl" type="email" name="email" id="email" placeholder="Masukkan email">
      </label>
      <label for="password" class="flex gap-2 flex-col">
        <span class="text-slate-700">Password</span>
        <input class="border px-5 py-3 rounded-xl" type="password" name="password" id="password" placeholder="Masukkan password">
      </label>

      <div class="flex w-full justify-end gap-4">
        <a href="{{ route('beranda') }}" class="px-3 py-2 border rounded-xl hover:border-teal-500 font-bold text-slate-700">Batal</a>
        <button type="submit" class="px-3 py-2 border rounded-xl hover:border-teal-500 font-bold text-slate-100 bg-teal-500">Masuk</button>
      </div>
    </form>
    <p class="text-slate-700">Anda belum memiliki akun? <a href="{{ route('register') }}" class="font-bold text-teal-500">Daftar</a></p>
  </article>
</div>
</body>
</html>
