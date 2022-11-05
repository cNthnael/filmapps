<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::query()->insert(

            [
                [
                    "id" => 1,
                    "name" => "Black Panther : Wakanda Forever",
                    "genre" => "Sci-Fi",
                    "desc" => "Wakanda Forever! Long Live Wakanda! For Honor, For Legacy, For Wakanda!",
                    "release" => "Nov 20. 2022",
                    "image_path" => "https://web3.21cineplex.com/movie-images/22BPWF.jpg"
                ],
                [
                    "id" => 2,
                    "name" => "Avatar 2",
                    "genre" => "Sci-Fi",
                    "desc" => "This Family is our Fortress.",
                    "release" => "Nov 22. 2022",
                    "image_path" => "https://media.tabloidbintang.com/files/thumb/avatar2-poster11.jpg"
                ],
                [
                    "id" => 3,
                    "name" => "The Devil's Light",
                    "genre" => "Horror",
                    "desc" => "Once you know the Devil, the Devil knows you.",
                    "release" => "Nov 23. 2022",
                    "image_path" => "https://web3.21cineplex.com/movie-images/21DLIT.jpg"
                ],
                [
                    "id" => 4,
                    "name" => "Perempuan Bergaun Merah",
                    "genre" => "Horror",
                    "desc" => "Dia Kembali.",
                    "release" => "Nov 3. 2022",
                    "image_path" => "https://web3.21cineplex.com/movie-images/12PBMH.jpg"
                ],
                [
                    "id" => 5,
                    "name" => "Qodrat",
                    "genre" => "Horror",
                    "desc" => "Assalamu'alaikum, Ustad Qodrat!",
                    "release" => "Oct 27. 2022",
                    "image_path" => "https://web3.21cineplex.com/movie-images/12QODT.jpg"
                ]
            ]

        );
    }
}
