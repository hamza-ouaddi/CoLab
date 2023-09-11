<x-layout>
    
    <div class="bg-gradient-to-br from-lightBlue2 to-lightBlue mb-[88px] 2xl:px-40 2xl:py-20 md:px-32 md:py-16 py-16 px-8 rounded-[32px]">

        <div class="flex lg:flex-row flex-col-reverse justify-center gap-28">

            <form method="POST" action="/users" class="lg:w-[50%] w-full">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-xl font-light leading-[34px] mb-2">
                        Name
                    </label>
                    <input
                        type="text"
                        class="rounded-xl py-4 px-4 w-full"
                        name="name"
                        value="{{old('name')}}"
                    />

                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-xl font-light leading-[34px] mb-2"
                        >Email</label
                    >
                    <input
                        type="email"
                        class="rounded-xl py-4 px-4 w-full"
                        name="email"
                        value="{{old('email')}}"
                    />
                    
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="password"
                        class="inline-block text-xl font-light leading-[34px] mb-2"
                    >
                        Password
                    </label>
                    <input
                        type="password"
                        class="rounded-xl py-4 px-4 w-full"
                        name="password"
                        value="{{old('password')}}"
                    />

                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-16">
                    <label
                        for="password_confirmation"
                        class="inline-block text-xl font-light leading-[34px] mb-2"
                    >
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        class="rounded-xl py-4 px-4 w-full"
                        name="password_confirmation"
                        value="{{old('password_confirmation')}}"
                    />

                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-7">
                    <button type="submit" class="bg-gradient-to-br from-blue to-purple text-white rounded-xl py-4 px-4 font-normal text-lg w-full hover:shadow-lg hover:shadow-blue/50 duration-500 ease-in-out">Sign Up</button>
                </div>

                <div class="">
                    <p class="text-lg mr-2">
                        Already have an account?
                        <a href="/login" class="text-transparent bg-clip-text bg-gradient-to-br from-blue to-purple"
                            >Login</a
                        >
                    </p>
                </div>
            </form>

            <div class="flex flex-col justify-center sm:items-center lg:w-[50%] w-full">
                <header class="lg:text-right md:text-center text-left text-gray mb-16">
                    <h1 class="sm:text-[64px] text-[32px] font-semibold sm:mb-4 mb-2">Register</h1>
                    <p class="sm:text-2xl text-base font-light leading-[34px]">Create an account to post an offer</p>
                </header>
    
                <div>
                    <img src="{{ asset('images/register-picture.png') }}" alt="hero-picture">
                </div>
            </div>

        </div>

    </div>

</x-layout>