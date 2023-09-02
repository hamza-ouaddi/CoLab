@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3500)" x-show="show" class="animated-flash flex items-center bg-gradient-to-br from-lightPurple to-blue text-white py-4 px-8 mt-2 rounded-2xl shadow-lightPurple shadow-[rgba(13,_38,_76,_0.19)_0px_9px_20px] z-10">
        <i class="fa-solid fa-check text-lg mr-2"></i> {{session('message')}}
    </div>
@endif