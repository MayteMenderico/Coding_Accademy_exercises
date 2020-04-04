<?php 

/*
Turn in: pool_php_d02/ex_06/ex_06.php
Prototype: my_create_continent(mixed $continentNameToAdd, mixed &$worldMap);
Prototype:my_create_country(mixed $countryNameToAdd, mixed $continentName, mixed &$worldMap);
Prototype:my_create_city(mixed $cityNameToAdd, mixed $postalCodeOfCityToAdd, mixed $countryName,
mixed $continentName, mixed &$worldMap);
Prototype: get_country_of_continent(mixed $continentName, mixed $worldMap);
Prototype: get_cities_of_country(mixed $countryName, mixed $continentName, mixed $worldMap);
Prototype: get_city_postal_code(mixed $cityName, mixed $countryName, mixed $continentName, mixed
$worldMap);
In this exercise, we will create an awesome world map. We will create a map, in a map, in a map. Hold
on, it’s not so complicated:
-We will have cities (name and postal code) in countries.
-We will have countries (name and cities) in continents.
-We will have continents (name and countries) in world.
So, we’ll create some functions to create and get these maps.
If a continent, a country or a city is not found, you have to write the error message: “Failure to get continent.”,
“Failure to get country.”, “Failure to get city” followed by a new line and return NULL
*/


function my_create_continent($continentName, &$map) {
    if(!isset($map[$continentName]))
    $map[$continentName] = [];
}

function my_create_country ($countryName, $continentName, &$map) {
    if( isset($map[$continentName]) && !isset($map[$continentName][$countryName]) ) {
        $map[$continentName][$countryName] = [];
    }
}

function my_create_city($cityName, $num, $countryName, $continentName, &$map) {
    if( isset($map[$continentName]) && isset($map[$continentName][$countryName]) &&  !isset($map[$continentName][$countryName][$cityName]) ) 
    $map[$continentName][$countryName][$cityName] = $num;
}


