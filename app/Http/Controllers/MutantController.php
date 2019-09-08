<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutant;

class MutantController extends Controller
{

    public function index()
    {
        $mutants = Mutant::all();
        return view('xmen', [
            'mutants' => $mutants,
        ]);
    }

    public function createMutant(Request $request)
    {

        $mutant = new Mutant();

        $mutant->email = $request->input('email');
        $mutant->description = $request->input('description');

        if ($request->hasFile('beforePicture')) {
            $file = $request->file('beforePicture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/beforePictures/', $filename);
            $mutant->beforePicture = $filename;
        } else {
            return $request;
            $mutant->beforePicture = '';
        }

        if ($request->hasFile('afterPicture')) {
            $file = $request->file('afterPicture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/afterPictures/', $filename);
            $mutant->afterPicture = $filename;
        } else {
            return $request;
            $mutant->afterPicture = '';
        }

        $mutant->save();

        return back();
    }
}
