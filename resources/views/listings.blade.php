@extends('layout')

@section('content')

<div class="lg:grid lg:grid-cols-2 gap-x-[76px] gap-y-10 mb-[88px]">

@unless(count($listings) == 0)

@foreach($listings as $listing) 

   <div class="bg-gray-50 bg-gradient-to-br from-lightGray to-gray rounded-3xl p-6">
    <div class="flex justify-start gap-6">
        <div class="bg-white rounded-xl p-10 w-48 flex items-center flex-wrap">
            <img src="images/companies-logos/octalink-logo.png" alt="company-logo" class="">
        </div>
        <div class="w-[75%]">
            <h3 class="text-[2rem] text-background font-semibold leading-8 mb-[7px]">
                <a href="show.html">{{$listing->title}}</a>
            </h3>
            <div class="text-2xl text-background font-light leading-[34px] mb-[14px]">{{$listing->company}} </div>
            <ul class="flex mb-[7px] gap-4">
                <li class="flex items justify-center bg-white text-black rounded-2xl py-0.5 px-4 font-normal text-sm">
                    <a href="#">Laravel</a>
                </li>
                <li class="flex items justify-center bg-white text-black rounded-2xl py-0.5 px-4 font-normal text-sm">
                    <a href="#">RESTful</a>
                </li>
                <li class="flex items justify-center bg-white text-black rounded-2xl py-0.5 px-4 font-normal text-sm">
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class=" text-background mt-2 font-light leading-8">
                <i class="fa-solid fa-location-dot mr-2"></i>{{$listing->location}}
            </div>
        </div>
    </div>
   </div>

@endforeach

@else
<p>No listings found</p>
@endunless

</div>

@endsection
