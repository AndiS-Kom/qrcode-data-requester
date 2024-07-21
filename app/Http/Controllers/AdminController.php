<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Md5hash;

class AdminController extends Controller
{
    public function index()
    {
        $hashes = Md5hash::all();
        return view('admin.index', compact('hashes'));
    }

    public function generateHashes(Request $request)
    {
        $count = $request->input('count', 100);

        for ($i = 0; $i < $count; $i++) {
            $md5hash = md5(uniqid(rand(), true));
            Md5hash::create(['md5hash' => $md5hash]);
        }

        return redirect()->route('admin.index');
    }

    public function showQRCodes()
    {
        $hashes = Md5hash::all();
        return view('admin.qrcodelist', compact('hashes'));
    }
}
