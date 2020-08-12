{{--$cast--}}
<div class="cast-grid-item flex flex-col">
    @if($cast['profile_path'])
        <a href="#">
            <img src="{{asset('https://image.tmdb.org/t/p/w300'.$cast['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150 w-full">
        </a>
        @else
            <div class="bg-gray-800 flex-grow flex items-center justify-center">No Image</div>
    @endif
    <div class="mt-2">
        <a href="#" class="text-xl hover:text-gray-300">{{$cast['name']}}</a>
        <div class="text-gray-400 text-sm">{{$cast['character'] !='' ? $cast['character'] : 'No Character' }}</div>
    </div>
</div>
