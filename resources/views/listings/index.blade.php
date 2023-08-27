
<x-layout>

{{-- Hero section --}}
@include('partials._hero')

{{-- Partner section --}}
@include('partials._partners')

{{-- Search bar --}}
@include('partials._searchBar')

<div class="grid xl:grid-cols-2 grid-cols-1 md:gap-x-[76px] gap-x-6 md:gap-y-10 gap-y-6 mb-[88px]">

@unless(count($listings) == 0)

@foreach($listings as $listing) 

   <x-listing-card :listing="$listing" />

@endforeach

@else
<p>No listings found</p>
@endunless

</div>

</x-layout>
