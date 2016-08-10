<?php
/**
 Čas 5, Domaći 3(ujedno i bonus):

Napraviti sledeći niz: $tenisPlayers

Taj niz treba da sadrži indekse poput 'Nadal' i 'Djokovic', odnosno imena tenisera.
Imena će dakle biti indeksi, a ti indeksi će pokazivati na nizove koji će sadržati indekse: 'position' i 'country'.
'position' treba sadržati integer, koji označava poziciju tog tenisera.
'country' treba sadržati string, odnosno državu tog tenisera.

Na početku programa neka taj niz sadrži samo dva tenisera, kao i njihove pozicije i države.
U toku rada programa koristite postojeći niz da napravite novi niz $tenisPlayersByCountry.
Ovaj niz treba da sadrži indekse sa imenima država, koji dalje treba da sadrže indekse 'player' i 'city'.
Nemojte direktno samo definisati ovaj novi niz sa podacima, nego koristite prethodni niz, i izvucite podatke iz njega
koristeći postojeće indekse.

Nakon što ste to uradili na taj novi niz $tenisPlayersByCountry dodajte još jedan ceo unos države i tenisera, po izboru.

Probajte sami prvo, ali ako vam nije jasno kako treba da izgleda novi niz, pišite mi.

Srećno!
 */

$tennisPlayer = [
	'Nadal' => [
		'country' => 'Spain',
		'position' => 3
	],	

	'Djokovic' => [
		'country' => 'Serbia',
		'position' => 1
	],

	'Cilic' => [
		'country'=>'Croatia',
		'position'=>200
	]
];

echo '<pre>';
print_r($tennisPlayer);
echo '<pre/>';

$tennisPlayersByCountry[$tennisPlayer['Nadal']['country']] = [
	'player'=> 'Nadal',
	'position'=> 3

];

$tennisPlayerByCountry ['Switzerland'] = [
	'player'=> 'Federer',
	'position'=> 4
];
					

echo '<pre>';
print_r($tennisPlayersByCountry);
echo '<pre/>';
