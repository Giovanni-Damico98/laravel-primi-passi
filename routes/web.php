<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Rotta per la home
Route::get('/', function () {
    return view('home');
})->name('home');
// Rotta per la prima pagina
Route::get('/firstpage', function () {
    $titolo = 'Pokedex';
    $pokemonArray = [
        [
            'name' => 'Pikachu',
            'type' => 'Electric',
            'level' => 25,
            'hp' => 90,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png'
        ],
        [
            'name' => 'Charmander',
            'type' => 'Fire',
            'level' => 16,
            'hp' => 80,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png'
        ],
        [
            'name' => 'Bulbasaur',
            'type' => 'Grass/Poison',
            'level' => 12,
            'hp' => 85,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png'
        ],
        [
            'name' => 'Squirtle',
            'type' => 'Water',
            'level' => 18,
            'hp' => 88,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png'
        ],
        [
            'name' => 'Jigglypuff',
            'type' => 'Normal/Fairy',
            'level' => 14,
            'hp' => 100,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/039.png'
        ],
        [
            'name' => 'Gengar',
            'type' => 'Ghost/Poison',
            'level' => 40,
            'hp' => 150,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/094.png'
        ],
        [
            'name' => 'Eevee',
            'type' => 'Normal',
            'level' => 20,
            'hp' => 75,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/133.png'
        ],
        [
            'name' => 'Psyduck',
            'type' => 'Water',
            'level' => 22,
            'hp' => 85,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/054.png'
        ],
        [
            'name' => 'Snorlax',
            'type' => 'Normal',
            'level' => 30,
            'hp' => 160,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/143.png'
        ],
        [
            'name' => 'Dragonite',
            'type' => 'Dragon/Flying',
            'level' => 55,
            'hp' => 200,
            'img_url' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/149.png'
        ]
    ];


    return view(
        'firstpage',
        compact("titolo", "pokemonArray")
    );
})->name('firstpage');
// Rotta per la seconda pagina
Route::get('/secondpage', function () {
    $titolo = 'Personaggi Pokemon';
    $charactersArray = [
        [
            'name' => 'Ash Ketchum',
            'role' => 'Allenatore di Pokémon',
            'team' => 'Pikachu, Bulbasaur, Charizard, Squirtle, ecc.',
        ],
        [
            'name' => 'Misty',
            'role' => 'Capopalestra di Cerulean',
            'team' => 'Starmie, Psyduck, Gyarados, Staryu, ecc.',
        ],
        [
            'name' => 'Brock',
            'role' => 'Capopalestra di Pewter',
            'team' => 'Onix, Geodude, Crobat, Steelix, ecc.',
        ],
        [
            'name' => 'Professor Oak',
            'role' => 'Professore di Pokémon',
            'team' => 'Nessuno (studioso)',
        ],
        [
            'name' => 'Gary Oak',
            'role' => 'Rivale di Ash',
            'team' => 'Blastoise, Arcanine, Nidoking, Umbreon, ecc.',
        ],
        [
            'name' => 'Jessie',
            'role' => 'Membro del Team Rocket',
            'team' => 'Wobbuffet, Seviper, Dustox, ecc.',
        ],
        [
            'name' => 'James',
            'role' => 'Membro del Team Rocket',
            'team' => 'Weezing, Victreebel, Cacnea, Chimecho, ecc.',
        ],
        [
            'name' => 'Giovanni',
            'role' => 'Capo del Team Rocket',
            'team' => 'Persian, Rhyperior, Nidoking, Kangaskhan, ecc.',
        ],
        [
            'name' => 'Dawn',
            'role' => 'Allenatrice di Pokémon e Coordinatrice',
            'team' => 'Piplup, Buneary, Pachirisu, Mamoswine, ecc.',
        ],
        [
            'name' => 'Cynthia',
            'role' => 'Campionessa della Lega Pokémon di Sinnoh',
            'team' => 'Garchomp, Lucario, Togekiss, Spiritomb, ecc.',
        ]
    ];


    return view(
        'secondpage',
        compact("titolo", "charactersArray")
    );
})->name('secondpage');