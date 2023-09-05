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

        $formInputs['user_id'] = auth()->id();

        Listing::create($formInputs);

        return redirect('/')->with('message', 'Listing created successfully.');
    }

    //Show manage listing
    public function manage(){
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

    //Show edit listing
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update listing data
    public function update(Request $request, Listing $listing){

        //Check if user is owner or not
        if($listing->user_id != auth()->id){
            abort(403, 'Unauthorized Action');
        }

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

    //Delete Listing
    public function destroy(Listing $listing){

        //Check if user is owner or not
        if($listing->user_id != auth()->id){
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();

        return redirect('/')->with('message', 'Listing deleted successfully.');
    }

    //Show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
