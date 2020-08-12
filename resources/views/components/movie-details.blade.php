{{--$movie--}}
<div class="movie-details border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-wrap md:flex-no-wrap">
        <img src="{{asset('https://image.tmdb.org/t/p/w500/').$movie['poster_path']}}" alt="" class="w-full md:w-72 lg:w-96 flex-initial object-cover">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">
                {{ $movie['title'] }} ({{ \Carbon\Carbon::parse($movie['release_date'])->format('Y') }})
            </h2>
            <div class="flex items-center text-gray-400 flex-auto">
                <svg viewBox="0 0 20 20" fill="currentColor" class="star text-orange-500 w-4 h-4"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <span class="ml-1">{{($movie['vote_average']*10).'%'}}</span>
                <span class="mx-2">|</span>
                <span>{{\Carbon\Carbon::parse($movie['release_date'])->toFormattedDateString()}}</span>
            </div>
            <div class="text-gray-400">{{$genres}}</div>
            <div class="text-gray-300 mt-8">{{$movie['overview']}}</div>
            <div class="mt-8">
                <h4 class="text-white font-semibold text-xl border-b border-gray-800 py-2">Featured Crew</h4>
                <div class="flex  flex-wrap mt-2">{{$crew}}</div>
            </div>
            @if(collect($movie['videos']['results'])->count()>0)
                <div class="mt-12 inline-block">
                    <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex items-center bg-orange-500 hover:bg-orange-600 transition ease-in-out duration-150 text-gray-900 rounded font-semibold px-5 py-4">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="play w-6 h-6 mr-1"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                        </svg>
                        Play Trailer
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
