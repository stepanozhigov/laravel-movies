<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    private function fakePopularMovies_old() {
        return Http::response([
            'results'=>[
                [
                    "popularity"=> 130.939,
                    "vote_count"=> 289,
                    "video"=> false,
                    "poster_path"=> "\/b5XfICAvUe8beWExBz97i0Qw4Qh.jpg",
                    "id"=> 612706,
                    "adult"=> false,
                    "backdrop_path" => "\/ishzDCZIv9iWfI70nv5E4ZreYUD.jpg",
                    "original_language" => "en",
                    "original_title"=> "Work It",
                    "genre_ids"=> [
                        35,
                        10402
                    ],
                    "title"=> "Popular Fake Movie",
                    "vote_average"=> 8,
                    "overview"=> "A brilliant but clumsy high school senior vows to get into her late father's alma mater by transforming herself and a misfit squad into dance champions.",
                    "release_date"=> "2020-08-07"
                ],
                [
                    "popularity"=> 117.58,
                    "vote_count"=> 61,
                    "video"=> false,
                    "poster_path"=> "\/5MSDwUcqnGodFTvtlLiLKK0XKS.jpg",
                    "id"=> 521034,
                    "adult"=> false,
                    "backdrop_path"=> "\/8PK4X8U3C79ilzIjNTkTgjmc4js.jpg",
                    "original_language"=> "en",
                    "original_title"=> "The Secret Garden",
                    "genre_ids"=> [
                        18,
                        14,
                        10751
                    ],
                    "title"=> "The Secret Garden",
                    "vote_average"=> 7.5,
                    "overview"=> "Mary Lennox is born in India to wealthy British parents who never wanted her. When her parents suddenly die, she is sent back to England to live with her uncle. She meets her sickly cousin, and the two children find a wondrous secret garden lost in the grounds of Misselthwaite Manor.",
                    "release_date"=> "2020-07-08"
                ],
                [
                    "popularity"=> 117.367,
                    "vote_count"=> 49,
                    "video"=> false,
                    "poster_path"=> "\/3eg0kGC2Xh0vhydJHO37Sp4cmMt.jpg",
                    "id"=> 531499,
                    "adult"=> false,
                    "backdrop_path"=> "\/zogWnCSztU8xvabaepQnAwsOtOt.jpg",
                    "original_language"=> "en",
                    "original_title"=> "The Tax Collector",
                    "genre_ids"=> [
                        28,
                        80,
                        18,
                        53
                    ],
                    "title"=> "The Tax Collector",
                    "vote_average"=> 6.2,
                    "overview"=> "David Cuevas is a family man who works as a gangland tax collector for high ranking Los Angeles gang members. He makes collections across the city with his partner Creeper making sure people pay up or will see retaliation. An old threat returns to Los Angeles that puts everything David loves in harm’s way.",
                    "release_date"=> "2020-08-07"
                ]
            ]
        ],200);
    }
    private function fakePopularMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
                    "original_language" => "en",
                    "original_title" => "Fake Movie",
                    "genre_ids" => [
                        12,
                        18,
                        9648,
                        878,
                        53,
                    ],
                    "title" => "Popular Fake Movie",
                    "vote_average" => 6,
                    "overview" => "Fake movie description. The near future, a time when both hope and hardships drive humanity to look to the stars and beyond. While a mysterious phenomenon menaces to destroy life on planet earth.",
                    "release_date" => "2019-09-17",
                ]
            ]
        ], 200);
    }
    private function fakeNowPlayingMovies_old() {
        return Http::response([
            'results'=>[
                [
                    "popularity"=> 130.939,
                    "vote_count"=> 289,
                    "video"=> false,
                    "poster_path"=> "\/b5XfICAvUe8beWExBz97i0Qw4Qh.jpg",
                    "id"=> 612706,
                    "adult"=> false,
                    "backdrop_path" => "\/ishzDCZIv9iWfI70nv5E4ZreYUD.jpg",
                    "original_language" => "en",
                    "original_title"=> "Work It",
                    "genre_ids"=> [
                        35,
                        10402
                    ],
                    "title"=> "Now Playing Fake Movie",
                    "vote_average"=> 8,
                    "overview"=> "A brilliant but clumsy high school senior vows to get into her late father's alma mater by transforming herself and a misfit squad into dance champions.",
                    "release_date"=> "2020-08-07"
                ],
                [
                    "popularity"=> 117.58,
                    "vote_count"=> 61,
                    "video"=> false,
                    "poster_path"=> "\/5MSDwUcqnGodFTvtlLiLKK0XKS.jpg",
                    "id"=> 521034,
                    "adult"=> false,
                    "backdrop_path"=> "\/8PK4X8U3C79ilzIjNTkTgjmc4js.jpg",
                    "original_language"=> "en",
                    "original_title"=> "The Secret Garden",
                    "genre_ids"=> [
                        18,
                        14,
                        10751
                    ],
                    "title"=> "The Secret Garden",
                    "vote_average"=> 7.5,
                    "overview"=> "Mary Lennox is born in India to wealthy British parents who never wanted her. When her parents suddenly die, she is sent back to England to live with her uncle. She meets her sickly cousin, and the two children find a wondrous secret garden lost in the grounds of Misselthwaite Manor.",
                    "release_date"=> "2020-07-08"
                ],
                [
                    "popularity"=> 117.367,
                    "vote_count"=> 49,
                    "video"=> false,
                    "poster_path"=> "\/3eg0kGC2Xh0vhydJHO37Sp4cmMt.jpg",
                    "id"=> 531499,
                    "adult"=> false,
                    "backdrop_path"=> "\/zogWnCSztU8xvabaepQnAwsOtOt.jpg",
                    "original_language"=> "en",
                    "original_title"=> "The Tax Collector",
                    "genre_ids"=> [
                        28,
                        80,
                        18,
                        53
                    ],
                    "title"=> "The Tax Collector",
                    "vote_average"=> 6.2,
                    "overview"=> "David Cuevas is a family man who works as a gangland tax collector for high ranking Los Angeles gang members. He makes collections across the city with his partner Creeper making sure people pay up or will see retaliation. An old threat returns to Los Angeles that puts everything David loves in harm’s way.",
                    "release_date"=> "2020-08-07"
                ]
            ]
        ],200);
    }
    private function fakeNowPlayingMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
                    "original_language" => "en",
                    "original_title" => "Now Playing Fake Movie",
                    "genre_ids" => [
                        12,
                        18,
                        9648,
                        878,
                        53,
                    ],
                    "title" => "Now Playing Fake Movie",
                    "vote_average" => 6,
                    "overview" => "Now playing fake movie description. The near future, a time when both hope and hardships drive humanity to look to the stars and beyond. While a mysterious phenomenon menaces to destroy life on planet earth.",
                    "release_date" => "2019-09-17",
                ]
            ]
        ], 200);
    }
    private function fakeGenres_old() {
        return Http::response([
            'genres'=>[
                [
                    "id"=> 28,
                    "name"=> "Action"
                ],
                [
                    "id"=> 12,
                    "name"=> "Adventure"
                ],
                [
                    "id"=> 16,
                    "name"=> "Animation"
                ],
                [
                    "id"=> 35,
                    "name"=> "Comedy"
                ],
                [
                    "id"=> 80,
                    "name"=> "Crime"
                ],
                [
                    "id"=> 99,
                    "name"=> "Documentary"
                ],
                [
                    "id"=> 18,
                    "name"=> "Drama"
                ],
                [
                    "id"=> 10751,
                    "name"=> "Family"
                ],
                [
                    "id"=> 14,
                    "name"=> "Fantasy"
                ],
                [
                    "id"=> 36,
                    "name"=> "History"
                ],
                [
                    "id"=> 27,
                    "name"=> "Horror"
                ],
                [
                    "id"=> 10402,
                    "name"=> "Music"
                ],
                [
                    "id"=> 9648,
                    "name"=> "Mystery"
                ],
                [
                    "id"=> 10749,
                    "name"=> "Romance"
                ],
                [
                    "id"=> 878,
                    "name"=> "Science Fiction"
                ],
                [
                    "id"=> 10770,
                    "name"=> "TV Movie"
                ],
                [
                    "id"=> 53,
                    "name"=> "Thriller"
                ],
                [
                    "id"=> 10752,
                    "name"=> "War"
                ],
                [
                    "id"=> 37,
                    "name"=> "Western"
                ]
            ]
        ],200);
    }
    private function fakeGenres()
    {
        return Http::response([
            'genres' => [
                [
                    "id" => 28,
                    "name" => "Action"
                ],
                [
                    "id" => 12,
                    "name" => "Adventure"
                ],
                [
                    "id" => 16,
                    "name" => "Animation"
                ],
                [
                    "id" => 35,
                    "name" => "Comedy"
                ],
                [
                    "id" => 80,
                    "name" => "Crime"
                ],
                [
                    "id" => 99,
                    "name" => "Documentary"
                ],
                [
                    "id" => 18,
                    "name" => "Drama"
                ],
                [
                    "id" => 10751,
                    "name" => "Family"
                ],
                [
                    "id" => 14,
                    "name" => "Fantasy"
                ],
                [
                    "id" => 36,
                    "name" => "History"
                ],
                [
                    "id" => 27,
                    "name" => "Horror"
                ],
                [
                    "id" => 10402,
                    "name" => "Music"
                ],
                [
                    "id" => 9648,
                    "name" => "Mystery"
                ],
                [
                    "id" => 10749,
                    "name" => "Romance"
                ],
                [
                    "id" => 878,
                    "name" => "Science Fiction"
                ],
                [
                    "id" => 10770,
                    "name" => "TV Movie"
                ],
                [
                    "id" => 53,
                    "name" => "Thriller"
                ],
                [
                    "id" => 10752,
                    "name" => "War"
                ],
                [
                    "id" => 37,
                    "name" => "Western"
                ],
            ]
        ], 200);
    }
    private function fakeSingleMovie() {
        return Http::response([
                "adult"=> false,
                "backdrop_path"=> "/5nRyaVklxyA9OkxqZaPv1KBRqpd.jpg",
                "belongs_to_collection"=> null,
                "budget"=> 0,
                "genres"=> [
                    [
                        "id"=> 35,
                        "name"=> "Comedy"
                    ],
                    [
                        "id"=> 18,
                        "name"=> "Drama"
                    ]
                ],
                "homepage"=> "https=>//www.ifcfilms.com/films/made-in-italy",
                "id"=> 12345,
                "imdb_id"=> "tt9207700",
                "original_language"=> "en",
                "original_title"=> "Made in Italy",
                "overview"=> "A bohemian artist travels from London to Italy with his estranged son to sell the house they inherited from his late wife.",
                "popularity"=> 95.114,
                "poster_path"=> "/dKjD3DTZjRI3Ipkf7Oz5zAILnwD.jpg",
                "production_companies"=> [
                    [
                        "id"=> 32201,
                        "logo_path"=> null,
                        "name"=> "CrossDay Productions Ltd.",
                        "origin_country"=> "GB"
                    ],
                    [
                        "id"=> 18156,
                        "logo_path"=> "/3nAuYcaWdpW0ULMvMz6V5HIJmCO.png",
                        "name"=> "Indiana Production Company",
                        "origin_country"=> "IT"
                    ],
                    [
                        "id"=> 136765,
                        "logo_path"=> null,
                        "name"=> "Rojovid Films",
                        "origin_country"=> "GB"
                    ]
                ],
                "production_countries"=> [
                    [
                        "iso_3166_1"=> "IT",
                        "name"=> "Italy"
                    ],
                    [
                        "iso_3166_1"=> "GB",
                        "name"=> "United Kingdom"
                    ]
                ],
                "release_date"=> "2020-08-06",
                "revenue"=> 0,
                "runtime"=> 94,
                "spoken_languages"=> [
                    [
                        "iso_639_1"=> "en",
                        "name"=> "English"
                    ]
                ],
                "status"=> "Released",
                "tagline"=> "",
                "title"=> "Fake Movie Title",
                "video"=> false,
                "vote_average"=> 6.7,
                "vote_count"=> 15,
                "credits"=> [
                    "cast"=> [
                        [
                            "cast_id"=> 2,
                            "character"=> "",
                            "credit_id"=> "5e0d8d92a84ff70018364b98",
                            "gender"=> 2,
                            "id"=> 3896,
                            "name"=> "Liam Neeson",
                            "order"=> 1,
                            "profile_path"=> "/wloLd5YrrlRPiTgfaMJsAx7U6hr.jpg"
                        ],
                        [
                            "cast_id"=> 3,
                            "character"=> "",
                            "credit_id"=> "5e0d8d976dc6c000184c333d",
                            "gender"=> 1,
                            "id"=> 30083,
                            "name"=> "Lindsay Duncan",
                            "order"=> 2,
                            "profile_path"=> "/kx2x62Rhod8wz1XuVDRQfqXpEqE.jpg"
                        ],
                        [
                            "cast_id"=> 4,
                            "character"=> "",
                            "credit_id"=> "5e0d8da26dc6c000134c47e6",
                            "gender"=> 2,
                            "id"=> 2202462,
                            "name"=> "Micheál Richardson",
                            "order"=> 3,
                            "profile_path"=> "/z9uCzTIAy9pi3r3X2fDGiYuLCXK.jpg"
                        ],
                        [
                            "cast_id"=> 5,
                            "character"=> "",
                            "credit_id"=> "5e0d8da85541fa00111ff245",
                            "gender"=> 1,
                            "id"=> 129108,
                            "name"=> "Valeria Bilello",
                            "order"=> 4,
                            "profile_path"=> "/8Qw4i7TLs5h5oayxFWevHZUDFK7.jpg"
                        ],
                        [
                            "cast_id"=> 6,
                            "character"=> "",
                            "credit_id"=> "5e0d8db4fd4f8000175d9dc9",
                            "gender"=> 0,
                            "id"=> 996844,
                            "name"=> "Marco Quaglia",
                            "order"=> 5,
                            "profile_path"=> "/w2oRqYtVa8B3ALOrBqajwp72YQf.jpg"
                        ],
                        [
                            "cast_id"=> 7,
                            "character"=> "",
                            "credit_id"=> "5e0d8db9a84ff700153680f0",
                            "gender"=> 0,
                            "id"=> 135145,
                            "name"=> "Gian Marco Tavani",
                            "order"=> 6,
                            "profile_path"=> "/poGfUrBmJ1tzafAebB2gIWyb7Q3.jpg"
                        ],
                        [
                            "cast_id"=> 8,
                            "character"=> "",
                            "credit_id"=> "5e0d8dc59974ee0017a547cc",
                            "gender"=> 0,
                            "id"=> 2496634,
                            "name"=> "Helena Antonio",
                            "order"=> 7,
                            "profile_path"=> "/7etI6F9SIZhJG4Z4hvNKDrxOWZd.jpg"
                        ]
                    ],
                    "crew"=> [
                        [
                            "credit_id"=> "5f2d8bf3b84f940035835bf7",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 6226,
                            "job"=> "Executive Producer",
                            "name"=> "Zygi Kamasa",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d889baf58cb0035b2ffe3",
                            "department"=> "Production",
                            "gender"=> 1,
                            "id"=> 6371,
                            "job"=> "Producer",
                            "name"=> "Pippa Cross",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8aa5af58cb0034b306a1",
                            "department"=> "Editing",
                            "gender"=> 2,
                            "id"=> 11345,
                            "job"=> "Editor",
                            "name"=> "Mark Day",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8a786a34480035277b97",
                            "department"=> "Costume & Make-Up",
                            "gender"=> 1,
                            "id"=> 16340,
                            "job"=> "Costume Design",
                            "name"=> "Louise Stjernsward",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5e0d8d819974ee0017a54792",
                            "department"=> "Directing",
                            "gender"=> 2,
                            "id"=> 19655,
                            "job"=> "Director",
                            "name"=> "James D'Arcy",
                            "profile_path"=> "/m2yEhWXGpxUC9aBFLfJQFEnt0yn.jpg"
                        ],
                        [
                            "credit_id"=> "5f2d8b5a87a27a0035cfbadc",
                            "department"=> "Production",
                            "gender"=> 2,
                            "id"=> 19655,
                            "job"=> "Executive Producer",
                            "name"=> "James D'Arcy",
                            "profile_path"=> "/m2yEhWXGpxUC9aBFLfJQFEnt0yn.jpg"
                        ],
                        [
                            "credit_id"=> "5f2d888587a27a0036cfb6d2",
                            "department"=> "Writing",
                            "gender"=> 2,
                            "id"=> 19655,
                            "job"=> "Writer",
                            "name"=> "James D'Arcy",
                            "profile_path"=> "/m2yEhWXGpxUC9aBFLfJQFEnt0yn.jpg"
                        ],
                        [
                            "credit_id"=> "5f2d8b3aaf58cb0034b309a9",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 20774,
                            "job"=> "Executive Producer",
                            "name"=> "Janette Day",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8ab9af58cb0034b306ad",
                            "department"=> "Camera",
                            "gender"=> 2,
                            "id"=> 68543,
                            "job"=> "Director of Photography",
                            "name"=> "Mike Eley",
                            "profile_path"=> "/8pWxnYqVtmtpfDzYP4x1LOv5RBN.jpg"
                        ],
                        [
                            "credit_id"=> "5f2d8bb5af58cb0034b30a81",
                            "department"=> "Production",
                            "gender"=> 2,
                            "id"=> 69883,
                            "job"=> "Executive Producer",
                            "name"=> "Peter Watson",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8a036a3448003527770f",
                            "department"=> "Costume & Make-Up",
                            "gender"=> 0,
                            "id"=> 75485,
                            "job"=> "Hair Designer",
                            "name"=> "Noriko Watanabe",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8a0baf58cb0033b301be",
                            "department"=> "Costume & Make-Up",
                            "gender"=> 0,
                            "id"=> 75485,
                            "job"=> "Makeup Designer",
                            "name"=> "Noriko Watanabe",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8a85af58cb0035b30f20",
                            "department"=> "Art",
                            "gender"=> 0,
                            "id"=> 125262,
                            "job"=> "Production Design",
                            "name"=> "Stevie Herbert",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8ca56a34480035278879",
                            "department"=> "Production",
                            "gender"=> 2,
                            "id"=> 865418,
                            "job"=> "Executive Producer",
                            "name"=> "Fabrizio Donvito",
                            "profile_path"=> "/iRtwasgu6Bk187JotYSq9jjMtlW.jpg"
                        ],
                        [
                            "credit_id"=> "5f2d8c8991f0ea0036360270",
                            "department"=> "Production",
                            "gender"=> 2,
                            "id"=> 1118298,
                            "job"=> "Executive Producer",
                            "name"=> "Marco Cohen",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8966b84f940037835dfe",
                            "department"=> "Production",
                            "gender"=> 2,
                            "id"=> 1333644,
                            "job"=> "Line Producer",
                            "name"=> "Michael S. Constable",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8c996840cc0035d13bb0",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 1356833,
                            "job"=> "Executive Producer",
                            "name"=> "Benedetto Habib",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d88ba91f0ea003835ffa2",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 1533490,
                            "job"=> "Casting Director",
                            "name"=> "Martin Ware",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8b2687a27a0036cfbf28",
                            "department"=> "Production",
                            "gender"=> 2,
                            "id"=> 1544275,
                            "job"=> "Executive Producer",
                            "name"=> "Alessandro Mascheroni",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d88ceaf58cb0034b30003",
                            "department"=> "Sound",
                            "gender"=> 2,
                            "id"=> 1606169,
                            "job"=> "Music Supervisor",
                            "name"=> "Iain Cooke",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8b696a344800352783fa",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 1651925,
                            "job"=> "Executive Producer",
                            "name"=> "Martin Rushton-Turner",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8aae87a27a0034cfb85d",
                            "department"=> "Editing",
                            "gender"=> 2,
                            "id"=> 1771230,
                            "job"=> "Editor",
                            "name"=> "Anthony Boys",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8c2d6840cc0038d14284",
                            "department"=> "Production",
                            "gender"=> 2,
                            "id"=> 1805083,
                            "job"=> "Executive Producer",
                            "name"=> "Anders Erdén",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8b0eaf58cb0034b30732",
                            "department"=> "Sound",
                            "gender"=> 2,
                            "id"=> 2012608,
                            "job"=> "Original Music Composer",
                            "name"=> "Alex Belcher",
                            "profile_path"=> "/RzVxdQXIozrF6BwufFG1lxbVg.jpg"
                        ],
                        [
                            "credit_id"=> "5f2d8bfe6840cc0037d134d6",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 2055956,
                            "job"=> "Executive Producer",
                            "name"=> "Peter Touche",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d88ab91f0ea003735fca6",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 2090846,
                            "job"=> "Producer",
                            "name"=> "Sam Tipper-Hale",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8ba2af58cb0033b3085c",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 2320640,
                            "job"=> "Executive Producer",
                            "name"=> "Marie-Gabrielle Stewart",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d8b3112eb89003723addd",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 2327067,
                            "job"=> "Executive Producer",
                            "name"=> "Daniel Campos Pavoncelli",
                            "profile_path"=> null
                        ],
                        [
                            "credit_id"=> "5f2d89586840cc0036d1326b",
                            "department"=> "Production",
                            "gender"=> 0,
                            "id"=> 2517138,
                            "job"=> "Line Producer",
                            "name"=> "Alberto Monte",
                            "profile_path"=> null
                        ]
                    ]
                ],
                "videos"=> [
                    "results"=> [
                        [
                            "id"=> "5efb5c2ebe7f350035a4dabb",
                            "iso_639_1"=> "en",
                            "iso_3166_1"=> "US",
                            "key"=> "tJHcv0Pm0RU",
                            "name"=> "Made in Italy - Official Trailer I HD I IFC Films",
                            "site"=> "YouTube",
                            "size"=> 1080,
                            "type"=> "Trailer"
                        ]
                    ]
                ],
                "images"=> [
                    "backdrops"=> [
                        [
                            "aspect_ratio"=> 1.777777777777778,
                            "file_path"=> "/5nRyaVklxyA9OkxqZaPv1KBRqpd.jpg",
                            "height"=> 900,
                            "iso_639_1"=> null,
                            "vote_average"=> 5.312,
                            "vote_count"=> 1,
                            "width"=> 1600
                        ],
                        [
                            "aspect_ratio"=> 1.777777777777778,
                            "file_path"=> "/fvBrUQaUhslmpQaqy0yLyHaSRgr.jpg",
                            "height"=> 1125,
                            "iso_639_1"=> null,
                            "vote_average"=> 5.172,
                            "vote_count"=> 1,
                            "width"=> 2000
                        ],
                        [
                            "aspect_ratio"=> 1.777777777777778,
                            "file_path"=> "/ooZ2lTxSNY5LgoGopWVA49aqeEX.jpg",
                            "height"=> 720,
                            "iso_639_1"=> "en",
                            "vote_average"=> 0.0,
                            "vote_count"=> 0,
                            "width"=> 1280
                        ]
                    ],
                    "posters"=> [
                        [
                            "aspect_ratio"=> 0.6666666666666666,
                            "file_path"=> "/dKjD3DTZjRI3Ipkf7Oz5zAILnwD.jpg",
                            "height"=> 3000,
                            "iso_639_1"=> "en",
                            "vote_average"=> 5.312,
                            "vote_count"=> 1,
                            "width"=> 2000
                        ],
                        [
                            "aspect_ratio"=> 0.6666666666666666,
                            "file_path"=> "/cW5YpPP67EjioxPNUet5WF7CXs.jpg",
                            "height"=> 1620,
                            "iso_639_1"=> "uk",
                            "vote_average"=> 0.0,
                            "vote_count"=> 0,
                            "width"=> 1080
                        ],
                        [
                            "aspect_ratio"=> 0.6666666666666666,
                            "file_path"=> "/pCRMzIYuoprz7Zee9bwLGIsMlfa.jpg",
                            "height"=> 3000,
                            "iso_639_1"=> "en",
                            "vote_average"=> 0.0,
                            "vote_count"=> 0,
                            "width"=> 2000
                        ]
                    ]
                ]
            ],200);
    }


    /** @test */
    public function testShowMainPage()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular'=>$this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing'=>$this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/genre/movie/list'=>$this->fakeGenres()
        ]);
        $response = $this->get(route('movies.index'));
        $response ->assertSuccessful();
//        $response->assertSee('Popular Fake Movie');
//        $response->assertSee('Now Playing Fake Movie');
    }
    /** @test */
    public function testShowMoviePage() {
        Http::fake([
            'https://api.themoviedb.org/3/movie/*'=>$this->fakeSingleMovie()
        ]);
        $response = $this->get(route('movies.show',12345));
        $response->assertSee('Liam Neeson');
        $response->assertSee('Fake Movie Title');
    }
}
