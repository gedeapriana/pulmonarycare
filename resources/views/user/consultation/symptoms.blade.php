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
<body class="overflow-auto">
<div class="root overflow-y-scroll p-10 w-full h-screen flex lg:gap-20 gap-10 flex-col-reverse lg:flex-row justify-center items-center">
  <article class="__form-form w-full lg:w-2/6 flex justify-center items-center">
    <form action="{{ route('submit-gejala') }}" method="post" class="w-full lg:w-8/12 flex flex-col gap-7 justify-center items-start">
      @method('PUT')
      @csrf
      <div class="flex flex-col justify-center flex-wrap items-start gap-3">
        @foreach($symptoms as $symptom)
          <label for="" class="flex justify-center items-center gap-2"><input type="checkbox" class="w-6 h-6 rounded" name="{{ $symptom->id }}" value="{{ $symptom->id }}" id="">{{ $symptom->description }}</label>
        @endforeach
      </div>
      <div class="flex justify-center items-center w-full gap-3">
        <button class="bg-teal-500 text-white rounded-full px-5 py-2">Diagnosis Sekarang</button>
      </div>
    </form>
  </article>
  <article class="__form-image w-full lg:w-4/12 flex flex-col justify-center items-center">
    <img class="w-full max-w-[600px]" src="{{ $symptomImage['url'] }}" alt="{{ $symptomImage['alt'] }}">
    <h3 class="text-xl text-slate-600 text-center lg:text-left font-bold">Silahkan ceritakan keluhan anda, <span class="text-teal-500">chekclist semua gejala yang anda alami</span></h3>
  </article>
</div>
</body>
</html>
