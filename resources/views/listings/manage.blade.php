<x-layout>

    {{-- Search bar --}}
    @include('partials._searchBar')

    <div class="bg-gradient-to-br from-lightBlue2 to-lightBlue mb-[88px] sm:p-12 p-8 sm:rounded-[32px] rounded-2xl divide-lightGray divide-y">
        <header class="flex justify-center border-lightGray border-b-1">
            <h2 class="lg:text-[32px] text-2xl font-semibold leading-[34px] uppercase mb-8">Manage your offers</h2>
        </header>

            {{-- Offers--}}
            @unless ($listings->isEmpty())

            @foreach ($listings as $listing)

            <div class=" ">

                <div class="flex sm:flex-row flex-col justify-between sm:my-12 my-8">
                    <div class=" flex sm:items-center items-start ">
                        <div class="flex-none bg-white rounded-xl sm:h-20 h-12 sm:w-20 w-12 flex items-center justify-center flex-shrink-0 mr-[18px]">
                            <img src="{{ $listing->logo? asset('storage/' . $listing->logo) : asset('/images/companies-logos/neuidee-logo.png') }}" alt="company-logo" class="sm:w-12 w-6"/>
                        </div>
                        <div class="text-left">
                            <h3 class="sm:text-2xl text-lg text-gray font-semibold ">{{$listing->title}}</h3>
                            <div class="sm:text-base text-smz text-gray">{{$listing->company}}</div>
                        </div>
                    </div>
        
                    <div class="flex items-center justify-end sm:gap-8 gap-6">
                        <div class="px-6 sm:py-4 pt-4">
                            <a href="/listings/{{$listing->id}}/edit" class="flex items-center text-gray sm:text-lg text-base">
                                <i class="fa-solid fa-pen mr-2"></i> Edit
                            </a>
                        </div>
                        <div class="px-6 sm:py-4 pt-4">
                            <form method="POST" action="/listings/{{$listing->id}}" class="flex items-center text-gray sm:text-lg text-base">
                                @csrf
                                @method('DELETE')
                                <button><i class="fa-solid fa-trash mr-2"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
                
            @endforeach
                
            @endunless
        

        
    </div>

</x-layout>