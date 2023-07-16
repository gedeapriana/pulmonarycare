@extends('user.layouts.schema')

@section('user-main')
  {{--Hero--}}
  <main class="w-full h-screen flex justify-center items-center">
    <div class="__wrapper h-full lg:w-10/12 flex justify-center items-center flex-col-reverse lg:flex-row">
      <article class="grow p-10 lg:p-20 flex flex-col justify-center items-center lg:items-start">
        <h1 class="text-xl my-8 md:text-2xl text-center lg:text-left lg:text-4xl leading-[50px] text-teal-500 font-bold">Selamat datang di <span class="px-6 py-3 rounded-full border-2 text-teal-500 inline-block my-2">{{ config('app.name') }}</span></h1>
        <p class="text-lg text-slate-800 text-center lg:text-start">Panduan Terpercaya untuk Diagnosis dan Pengobatan Penyakit Paru-paru</p>
        <a href="{{ route('konsultasi') }}" class="text-xl block lg:text-3xl my-10 lg:my-14 text-slate-100 bg-teal-500 py-3 px-6 font-bold hover:bg-teal-700 rounded-full">Konsultasi Sekarang</a>
      </article>

      <article class="p-10 lg:p-20 flex h-full w-full lg:w-5/12 justify-center items-center">
        <img class="w-80 lg:w-96 translate-x-1.5 mt-80 lg:mt-0" src="{{ asset($heroImage['url']) }}" alt="{{ $heroImage['alt'] }}">
      </article>
    </div>
  </main>
  {{--Hero end--}}
@endsection
