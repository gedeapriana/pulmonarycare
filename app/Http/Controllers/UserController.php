<?php
namespace App\Http\Controllers;
use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Http\Request;
class UserController extends Controller {
  public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
      return view('user.index', [
        'title'     => 'Beranda',
        'heroImage' => ['url' => './src/assets/images/lung.png', 'alt' => 'lung'],
      ]);
    }

  public function tentang(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
  {
    return view('user.tentang', [
      'title' => 'Tentang'
    ]);
  }
}
