<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Diagnosa | {{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('./src/css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('./src/css/index.css') }}">
  @vite('resources/css/app.css')
</head>
<body>
<div class="root h-screen w-full flex gap-10 flex-col lg:flex-row justify-center items-center p-5 lg:p-20">
  <article class="__diagnose-image w-full lg:w-[1000px] gap-5 flex justify-center items-center flex-col">
    <h3 class="lg:text-xl text-lg text-slate-600 text-center lg:text-left font-bold">Hasil Diagnosis</h3>
    <img class="lg:w-2/3 w-1/3" src="{{ asset('./src/assets/images/medical-prescription-pana.svg') }}" alt="Diagnose">
  </article>
  <article class="p-10 border w-full lg:grow rounded-3xl">
    <p class="text-xs text-slate-800">Hasil diagnosis menyatakan bahwa penyakit yang kemungkinan diderita adalah</p>
    <h2 class="lg:text-2xl my-3 font-bold text-teal-500 text-xl">{{  $groupedDiseases[0]['name'] }}</h2>
    <div class="p-3 bg-teal-100 rounded-2xl">
      <p>{{ $groupedDiseases[0]['description'] }}</p>
    </div>
    <h2 class="lg:text-2xl my-3 font-bold text-teal-500 text-xl">Solusi</h2>

    <div class="rounded-2xl">
      <ul class="list-disc mx-5">
        @foreach($groupedDiseases[0]['solutions'] as $solution)
          <li>{{ $solution['desc'] }}</li>
        @endforeach
      </ul>
    </div>
  </article>
</div>
<div class="">

</div>
</body>
</html>
