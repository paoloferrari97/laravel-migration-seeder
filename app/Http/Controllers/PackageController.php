<?php

namespace App\Http\Controllers;

use App\Package;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacchetti = Package::all();
        return view('packages.index', compact('pacchetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $data = $request->all();

        $newPackage = new Package;
        $newPackage->destinazione = $data['destinazione'];
        $newPackage->prezzo = $data['prezzo'];
        $newPackage->giorni_permanenza = $data['giorni_permanenza'];
        $newPackage->data_partenza = $data['data_partenza'];

        $newPackage->save();

        return redirect()->route('packages.show', $newPackage->id); */

        $validated = $request->validate([
            'destinazione' => 'required|max:255',
            'prezzo' => 'required|numeric',
            'giorni_permanenza' => 'required|numeric',
            'data_partenza' => 'required|date'
        ]);

        Package::create($validated);

        return redirect()->route('packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        /* $data = $request->all();

        $package->update($data);

        return redirect()->route('packages.show', $package->id); */

        $validated = $request->validate([
            'destinazione' => 'required|max:255',
            'prezzo' => 'required|numeric',
            'giorni_permanenza' => 'required|numeric',
            'data_partenza' => 'required|date'
        ]);

        $package->update($validated);

        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('packages.index');
    }
}