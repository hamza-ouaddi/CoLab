<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    
    //Show all listings
    public function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //Show create listing
    public function create(){
        return view('listings.create');
    }

    //Store listing data
    public function store(Request $request){
        $formInputs = $request->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formInputs['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formInputs);

        return redirect('/')->with('message', 'Listing created successfully.');
    }

    //Show edit listing
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update listing data
    public function update(Request $request, Listing $listing){
        $formInputs = $request->validate([
            'company' => ['required'],
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formInputs['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formInputs);

        return back()->with('message', 'Listing updated successfully.');
    }

    //Show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
