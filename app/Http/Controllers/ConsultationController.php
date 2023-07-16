<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Support\Collection;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ConsultationController extends Controller
{
  public function form(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
  {
    return view('user.consultation.form', [
      'title' => 'Konsultasi',
      'formImage' => ['url' => './src/assets/images/doctors-pana.svg', 'alt' => 'doctor about to check patient'],
    ]);
  }
  public function formStore(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
  {
    $credentials = $request->validate([
      'name'      => ['required', 'string', 'max:255'],
      'age'       => ['required', 'numeric'],
      'telephone' => ['required', 'numeric'],
      'email'     => ['required', 'email:rfc,dns'],
    ], [
      'name.required'      => 'harus diisi',
      'name.string'        => 'harus berupa string',
      'name.max'           => 'maksimal 255 karakter',
      'age.required'       => 'harus diisi',
      'age.numeric'        => 'harus berupa angka',
      'telephone.required' => 'harus diisi',
      'telephone.numeric'  => 'harus berupa angka',
      'email.required'     => 'harus diisi',
      'email.email'        => 'tidak valid',
    ]);

    return redirect(route('gejala'));
  }
  public function symptom(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
  {
    $symptoms = Symptom::all();
    return view('user.consultation.symptoms', [
      'title' => 'Gejala',
      'symptomImage' => ['url' => './src/assets/images/medical-prescription.svg', 'alt' => 'doctor about to check patient'],
      'symptoms' => $symptoms,
    ]);
  }
  public function symptomUpdate(Request $request): string
  {
    $selectedSymptomIds = collect($request->except(['_method', '_token']))->values()->all();
    $diseases = DB::table('diseases')
      ->join('disease_symptom', 'diseases.id', '=', 'disease_symptom.disease_id')
      ->leftJoin('solutions', 'diseases.id', '=', 'solutions.disease_id')
      ->whereIn('disease_symptom.symptom_id', $selectedSymptomIds)
      ->select('diseases.id', 'diseases.name', 'diseases.description', 'solutions.id as solution_id', 'solutions.description as solution_desc')
      ->selectRaw('COUNT(disease_symptom.symptom_id) as symptom_count')
      ->groupBy('diseases.id', 'diseases.name', 'diseases.description', 'solutions.id', 'solutions.description')
      ->orderByRaw('symptom_count DESC')
      ->distinct()
      ->get();

    $groupedDiseases = $diseases->groupBy('id')->map(function ($items) {
      $solutions = $items->map(function ($item) {
        return [
          'id' => $item->solution_id,
          'desc' => $item->solution_desc,
        ];
      })->toArray();

      return [
        'id' => $items[0]->id,
        'name' => $items[0]->name,
        'description' => $items[0]->description,
        'symptom_count' => $items[0]->symptom_count,
        'solutions' => $solutions,
      ];
    })->values()->all();
    session()->put('groupedDiseases', $groupedDiseases);
    return redirect()->route('diagnosa');
  }

  /**
   * @throws ContainerExceptionInterface
   * @throws NotFoundExceptionInterface
   */
  public function diagnosis(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
  {
    $groupedDiseases = session()->get('groupedDiseases');
    return view('user.consultation.diagnose', compact('groupedDiseases'));
  }
}
