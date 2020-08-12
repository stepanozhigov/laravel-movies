{{--$cast--}}
<div class="cast-grid-item">
    <a href="#">
        <img src="{{asset('https://image.tmdb.org/t/p/w300'.$cast['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150 w-full">
    </a>
    <div class="mt-2">
        <a href="#" class="text-xl hover:text-gray-300">{{$cast['name']}}</a>
        <div class="text-gray-400 text-sm">{{$cast['character'] !='' ? $cast['character'] : 'No Character' }}</div>
    </div>
</div>
