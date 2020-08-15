{{--$movie--}}
{{--$genres--}}
<div class="movie-grid-item">
    <a href="{{ route('movies.show',[
        'movie_id'=>$movie['id']
    ]) }}">
        <img src="{{asset('https://image.tmdb.org/t/p/w500/').$movie['poster_path']}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="#" class="text-xl hover:text-gray-300">{{ $movie['title'] ?? 'No title'}}</a>
        <div class="flex items-center text-gray-400 text-sm">
            <svg viewBox="0 0 20 20" fill="currentColor" class="star text-orange-500 w-4 h-4"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <span class="ml-1">{{ ($movie['vote_average']*10).'%' ?? '0.0'}}</span>
            <span class="mx-2">|</span>
            <span>{{\Carbon\Carbon::parse($movie['release_date'])->toFormattedDateString()}}</span>
        </div>
        <div class="movie-genres text-gray-400 text-sm">@foreach($movie['genre_ids'] as $i=>$id){{$genres->get($id)}}{{(!$loop->last) ? ', ' : ''}}@endforeach</div>
    </div>
</div>
