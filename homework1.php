<?php
/*
Da se podsetite kako baratati nizovima:
Napravite niz koji će sadržati sve dane u nedelji, $daysOfTheWeek.
Indeksirajte tako da se slažu sa redosledom dana, tj, da je 'ponedeljak' na indeksu 1, a 'nedelja' na indeksu 7. 


U nekim kalendarima nedelja ide prvo, pa onda ponedeljak, itd. počevši sa prošlim nizom napravite novi:
$sundayFirst = $dayOfTheWeek;
I odatle menjajte $sundayFirst ovim redosledom:
Obrišite nedelju sa kraja niza.
Dodajte nedelju na nultu poziciju u nizu.
Sortirajte niz.

I na kraju, ispišite 'petak' na ekranu, koristeći se ovim novim nizom.
 */

$daysOfTheWeek = [
	1 => 'Ponedeljak',
	2 => 'Utorak',
	3 => 'Sreda',
	4 => 'Cetvrtak',
	5 => 'Petak',
	6 => 'Subota',
	7 => 'Nedelja'

];

print_r($daysOfTheWeek);

$sundayFirst =[
	1 => 'Ponedeljak',
	2 => 'Utorak',
	3 => 'Sreda',
	4 => 'Cetvrtak',
	5 => 'Petak',
	6 => 'Subota',
	7 => 'Nedelja'

];

unset($sundayFirst[7]);
$sundayFirst[0] = 'Nedelja';

ksort($sundayFirst);






var_dump($sundayFirst);

echo $sundayFirst[5];