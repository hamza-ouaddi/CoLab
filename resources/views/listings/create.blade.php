<x-layout>
    <div class="bg-gradient-to-br from-lightBlue2 to-lightBlue mb-[88px] md:py-16 py-8 md:px-20 px-8 2xl:mx-[320px] xl:mx-[160px] lg:mx-40 lg:rounded-[32px] rounded-2xl">
        <header class="text-center lg:mb-16 mb-8">
            <h2 class="lg:text-[32px] text-2xl font-semibold leading-[34px] uppercase lg:mb-[18px] mb-2">Create an Offer</h2>
            <p class="lg:text-2xl text-lg font-light leading-[34px]">Post an offer to collaborate</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data" class="flex flex-col lg:gap-[32px] gap-5">
            @csrf
            <div>
                <label for="company" class="lg:text-xl text-lg font-light leading-[34px]">Company Name</label>
                <input
                    type="text"
                    class="lg:mt-4 mt-[6px] sm:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full"
                    name="company"
                    value="{{old('company')}}"
                />

                @error('company')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="title" class="lg:text-xl text-lg font-light leading-[34px]">Job Title</label>
                <input
                    type="text"
                    class="lg:mt-4 mt-[6px] sm:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full"
                    name="title"
                    placeholder="Example: Senior Front-end Developer"
                    value="{{old('title')}}"
                />

                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="location" class="lg:text-xl text-lg font-light leading-[34px]">Job Location</label>
                <input
                    type="text"
                    class="lg:mt-4 mt-[6px] sm:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full"
                    name="location"
                    placeholder="Example: Remote,US or Cologne, DE...etc"
                    value="{{old('location')}}"
                />

                @error('location')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="lg:text-xl text-lg font-light leading-[34px]">Contact Email</label>
                <input
                    type="text"
                    class="lg:mt-4 mt-[6px] sm:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full"
                    name="email"
                    value="{{old('email')}}"
                />

                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="website" class="lg:text-xl text-lg font-light leading-[34px]">Website/Application URL</label>
                <input
                    type="text"
                    class="lg:mt-4 mt-[6px] sm:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full"
                    name="website"
                    value="{{old('website')}}"
                />

                @error('website')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="tags" class="lg:text-xl text-lg font-light leading-[34px]">Tags (Comma Separated)</label>
                <input
                    type="text"
                    class="lg:mt-4 mt-[6px] sm:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full"
                    name="tags"
                    placeholder="Example: React, Developer, Branding...etc"
                    value="{{old('tags')}}"
                />

                @error('tags')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="logo" class="lg:text-xl text-lg font-light leading-[34px]">Company Logo</label>
                <div class="file-upload-container mt-4">
                    <input 
                        type="file" 
                        class="file-input" 
                        id="fileInput" 
                        class="lg:mt-4 mt-[6px] lg:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full" 
                        name="logo"
                    >
                </div>
                @error('logo')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="lg:text-xl text-lg font-light leading-[34px]">Job Description</label>
                <textarea
                    class="lg:mt-4 mt-[6px] lg:rounded-2xl rounded-lg lg:py-5 py-3 px-4 w-full"
                    name="description"
                     rows="10"
                    placeholder="Include company introduction, offer tasks, requirements, sallary...etc"
                >{{old('description')}}</textarea>

                @error('description')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="lg:block flex justify-center items-center">
                <button class="bg-gradient-to-br from-blue to-purple text-white lg:rounded-2xl rounded-lg lg:py-4 py-3 lg:px-8 px-6 font-normal lg:text-lg text-sm">Create Offer</button>
                <a href="/" class="text-transparent bg-clip-text bg-gradient-to-br from-blue to-purple rounded-2xl lg:py-4 py-3 lg:px-8 px-6 font-normal lg:text-lg text-sm"> Back </a>
            </div>
        </form>
    </div>
</x-layout>