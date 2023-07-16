<nav class="w-full bg-white/80 p-5 border-b z-10 flex justify-between items-center fixed backdrop-blur-lg" id="navbar">

  <a href="" class="text-teal-500 text-xl font-bold" id="nav-brand">
    {{ config('app.name') }}
  </a>

  <ul class="gap-4 ms-auto hidden lg:flex" id="nav-list">
    <li><a href="{{ route('beranda') }}" class="flex justify-center items-center {{ $title == 'Beranda' ? 'font-bold text-teal-500' : ''}}"><x-carbon-home class="h-5 inline mx-1"/>Beranda</a></li>
    <li><a href="{{ route('tentang') }}" class="flex justify-center items-center {{ $title == 'Tentang' ? 'font-bold text-teal-500' : ''}}"><x-tabler-info-circle class="h-5 inline"/>Tentang</a></li>
  </ul>

  <a href="" id="hamburger" class="lg:hidden ms-auto">
    <x-polaris-major-mobile-hamburger class="h-5 hover:text-teal-500" />
  </a>

  @auth()
    <a href="" class="mx-4 border px-3 py-2 rounded-full flex justify-center items-center gap-2"><x-carbon-user-avatar class="inline w-5" /><span class="hidden lg:flex">{{ auth()->user()->name }}</span></a>
  @else
    <a href="" class="ml-3 lg:mx-8 font-bold text-slate-100 bg-teal-500 px-4 py-2 rounded-full flex justify-center items-center "><x-tabler-login class="h-5 inline" /> Masuk</a>
  @endauth
</nav>
