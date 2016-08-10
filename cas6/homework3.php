<?php
/*
Čas 6, Domaći 3

Na početku programa napišite niz $top5Players, koji će sadržati spisak od 5 sportista(po izboru).
Indeksi će predstavljati poziciju na ovoj rang listi, i pokazivaće na imena tenisera.
Niz u početku treba da sadrži samo pozicije od 1 do 5, bez ponavljanja i preskakanja brojeva.

Uz pomoć for petlje, ispišite svih 5 tenisera, i njihove pozicije. Na primer:
```
Djokovic je na poziciji 1
Nadal je na poziciji 2
Federer je na poziciji 3
Almagro je na poziciji 4
Tipsarevic je na poziciji 5
```

Kad namestite taj ispis, izbacite igrača sa četvrte pozicije, i promenite code tako da ne izbaci grešku u toj petlju.
Umesto praznog ispisa, ispišite "Niko nije na poziciji 4".


Bonus: Vratite opet nekog igrača na četvrtu poziciju u nizu $top5Players i uz pomoć foreach() petlje napravite ispis
svih igrača na toj rang listi, kao i njihove pozicije.

 */

//Prvo se definise niz sa 5 igraca
$top5Players = [
	1 => 'Djokovic',
	2 => 'Nadal',
	3 => 'Mari',
	4 => 'Federer',
	5 => 'Conga'
];


unset ($top5Players[4]); //brise igraca sa 4. pozicije

for ($i=1; $i<=5; $i++){
	

	if (isset($top5Players[$i])){
		echo $top5Players[$i] . ' je na poziciji ' . $i . '<br />';
		
	}

	else {
		echo 'Niko nije na poziciji ' . $i . '<br />';
	}

	
}

//Bonus deo zadatka

echo 'Ispis preko foreach petlje: ' . '<br />';


$top5Players [4] = 'Almagro';



foreach ($top5Players as $key => $player) {
	echo 'Na poziciji ' .$key . ' nalazi se ' . $player . '<br/ >';
}


