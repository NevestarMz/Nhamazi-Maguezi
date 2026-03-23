<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return view('admin.writers.index', compact('writers'));
    }

    public function create()
    {
        return view('admin.writers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('writers', 'public');
        }

        Writer::create($data);

        return redirect()->route('admin.writers.index')->with('success', 'Especialista adicionado à equipa!');
    }
    
    // Podes adicionar depois o edit(), update() e destroy() seguindo a mesma lógica que já tens nos articles.
}