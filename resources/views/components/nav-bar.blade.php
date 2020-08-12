<nav class="border-b border-gray-800">
    <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row justify-center items-center">

        {{--      LOGO      --}}
        <h1 class="flex items-center justify-between mb-6 md:mb-0">
            <a href="#" class="flex items-center font-medium">
                <i class="fi-cnluxx-videocamera-solid mr-2"></i>
                MovieApp
            </a>
        </h1>
        {{--     MENU       --}}
        <ul class="flex flex-col md:flex-row items-center ml-0 md:ml-8 mb-6 md:mb-0">
            <li class="">
                <a href="#" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">TV Shows</a>
            </li>
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        {{--     SEARCH       --}}
        <div class="flex items-center justify-center ml-0 md:ml-auto mb-6 md:mb-0">
            <div class="relative">
                <input type="text" class="text-sm bg-gray-800 rounded-full w-64 pl-10 pr-4 py-2 focus:outline-none focus:shadow-outline" placeholder="Search">
                <div class="absolute top-0 bottom-0 flex items-center pl-4">
                    <i class="fi-xnsuxl-search fill-current text-gray-500"></i>
                </div>
            </div>
        </div>
        {{--      AVATAR      --}}
        <div class="ml-4">
            <a href="#" class="">
                <img src="{{url('/img/avatar-01.jpg')}}" alt="avatar" class="rounded-full h-8 w-8">
            </a>
        </div>
    </div>
</nav>
