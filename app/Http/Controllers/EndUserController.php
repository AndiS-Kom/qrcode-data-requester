<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Md5hash;
use App\Models\EndUser;

class EndUserController extends Controller
{
    public function showInputForm($hash)
    {
        $md5hash = Md5hash::where('md5hash', $hash)->first();

        if (!$md5hash) {
            return view('enduser.invalid');
        }

        if ($md5hash->taken) {
            return view('enduser.taken');
        }

        return view('enduser.input', compact('hash'));
    }

    public function storeData(Request $request, $hash)
    {
        $md5hash = Md5hash::where('md5hash', $hash)->first();

        if (!$md5hash) {
            return view('enduser.invalid');
        }

        if ($md5hash->taken) {
            return view('enduser.taken');
        }

        EndUser::create([
            'md5hash' => $hash,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'postal_code' => $request->input('postal_code'),
            'country' => $request->input('country')
        ]);

        $md5hash->taken = true;
        $md5hash->save();

        return view('enduser.success');
    }

}


