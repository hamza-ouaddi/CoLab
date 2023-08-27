
<x-layout>

{{-- Search bar --}}
@include('partials._searchBar')

<a href="/" class="flex items-center text-black text-lg mb-6">
    <i class="fa-solid fa-arrow-left mr-2"></i> Back
</a>
<div>
    <div class="bg-gradient-to-br from-lightBlue2 to-lightBlue mb-[88px] lg:py-14 pt-[82px] pb-8 lg:px-32 px-8 rounded-[32px]">
        <div class="flex lg:flex-row flex-col">
        {{-- Company info --}}
            <div class="flex flex-col items-center text-center">
                <div class="flex-none bg-white rounded-xl p-10 md:w-48 w-32 md:h-48 h-32 flex items-center flex-shrink-0 mb-7">
                    <img src="{{ asset('images/companies-logos/neuidee-logo.png') }}" alt="company-logo" />
                </div>
                <div class="text-[40px] text-gray leading-[44px] mb-[18px]">{{$listing->company}}</div>
                <div class="text-2xl text-gray mb-8">
                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                </div>
                <div class="flex items-center">
                    <a href="mailto:{{$listing->email}}" class="flex-none bg-gradient-to-br from-blue to-purple text-white text-lg py-[18px] px-4 rounded-2xl ">
                        Contact Employer
                    </a>
                </div>
                    <a href="{{$listing->website}}" target="_blank" class="text-transparent bg-clip-text bg-gradient-to-br from-blue to-purple text-lg py-[18px] px-4">
                        Visit Website
                    </a>
                
            </div>

        {{-- Divider --}}
            <div class="lg:flex hidden items-center">
                <div class="h-[75%] w-[1px] mx-28 bg-lightGray"></div>
            </div>

            <div class="lg:hidden flex justify-center">
                <hr class="text-lightGray w-[75%] my-[55px]">
            </div>

        {{-- Offer info --}}
            <div class="w-full">
                <h3 class="md:text-[40px] text-[32px] text-gray font-semibold lg:leading-10 leading-9 mb-4">{{$listing->title}} </h3>   

                <ul class="flex gap-4 mb-8">
                   
                        <x-listing-tags :tags-csv="$listing->tags" class="flex items justify-center bg-gray text-white rounded-2xl py-0.5 px-4 font-normal md:text-lg text-[14px]"/>
                    
                </ul>
                
                <div>
                    <h3 class="text-gray md:text-[32px] text-2xl leading-[34px] md:mb-[18px] mb-[10px]"> Job Description</h3>
                    <div class="md:text-2xl text-base text-gray">
                        <p>
                            {{$listing->description}}
                        </p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

</x-layout>
    
