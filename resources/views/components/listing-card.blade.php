@props(['listing'])

<div class="md:h-[240px] h-[150px] bg-gradient-to-br from-lightGray to-gray rounded-3xl md:p-6 p-3">
    <div class="flex gap-6">
        <div class="flex-none bg-white rounded-xl p-10 md:w-48 w-32 md:h-48 h-32 flex items-center flex-shrink-0">
            <img src="{{ asset('images/companies-logos/octalink-logo.png') }}" alt="company-logo" class="">
        </div>
        <div class="flex-grow">
            <h3 class="md:text-[2rem] text-[1.4rem] text-background font-semibold md:leading-8 leading-6 md:mb-[7px] mb-0.5">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="md:text-2xl text-sm text-background font-light md:leading-[34px] leading-6 md:mb-[14px] mb-2">{{$listing->company}} </div>
            
            <ul  class="flex mb-[7px] md:gap-4 gap-[10px]">
                    <x-listing-tags :tags-csv="$listing->tags" class="flex items justify-center bg-white text-black rounded-2xl py-0.5 px-4 font-normal md:text-sm text-[0.5rem]"/>
            </ul>
            
            <div class=" text-background md:text-base text-[10px] mt-2 font-light leading-8">
                <i class="fa-solid fa-location-dot mr-2"></i>{{$listing->location}}
            </div>
        </div>
    </div>
</div>