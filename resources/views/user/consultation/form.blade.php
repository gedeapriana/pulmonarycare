<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} | {{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('./src/css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('./src/css/index.css') }}">
  @vite('resources/css/app.css')
</head>
<body>
<div class="root p-10 w-full h-screen flex lg:gap-20 gap-10 flex-col lg:flex-row justify-center items-center">
  <article class="__form-image">
    <img class="w-full max-w-[600px]" src="{{ $formImage['url'] }}" alt="{{ $formImage['alt'] }}">
    <h3 class="text-xl text-slate-600 text-center lg:text-left font-bold">Eits.. sebelum berkonsultasi, <span class="text-teal-500">lebih baik kita data diri dulu yuk...</span></h3>
  </article>
  <article class="__form-form w-full lg:w-2/6 flex justify-center items-center">
    <form action="{{ route('submit-konsultasi') }}" method="post" class="lg:w-11/12 w-full flex gap-2 flex-col justify-center items-center">
      @csrf
      <label class="flex flex-col w-full">
        <span class="mx-1">Nama @error('name')<span class="text-red-300">{{ $message }}</span>@enderror</span>
        <input type="text" class="border @error('name') border-red-300 @enderror px-5 py-2 rounded-full my-3" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}">
      </label>
      <div class="flex w-full justify-between items-center gap-5">
        <label class="flex flex-col w-[45%]">
          <span class="mx-1">Usia @error('age')<span class="text-red-300">{{ $message }}</span>@enderror</span>
          <input type="number" class="border @error('age') border-red-300 @enderror px-5 py-2 rounded-full my-3" name="age" placeholder="Masukkan usia" value="{{ old('age') }}">
        </label>
        <label class="flex flex-col w-[45%]">
          <span class="mx-1">No Telepon @error('telephone')<span class="text-red-300">{{ $message }}</span>@enderror</span>
          <input type="text" class="border @error('telephone') border-red-300 @enderror px-5 py-2 rounded-full my-3" name="telephone" placeholder="08" value="{{ old('telephone') }}">
        </label>
      </div>
      <label class="flex flex-col w-full">
        <span class="mx-1">Email @error('email')<span class="text-red-300">{{ $message }}</span>@enderror</span>
        <input type="email" class="border @error('email') border-red-300 @enderror px-5 py-2 rounded-full my-3" name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
      </label>

      <div class="flex justify-center items-center w-full gap-3">
        <a href="{{ route('beranda') }}" class="bg-slate-800 text-white rounded-full px-5 py-2">kembali</a>
        <button class="bg-teal-500 text-white rounded-full px-5 py-2">Konsultasi</button>
      </div>
    </form>
  </article>
</div>
</body>
</html>
