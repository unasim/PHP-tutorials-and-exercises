<?php
/*
Čas 6, Domaći 1

Napisati program koji ispiše brojeve od 20 do 1, dakle od najvećeg do najmanjeg.
Svaki broj treba da bude u posebnom redu.

Uradite isti zadatak sa for() petljom i sa while() petljom.

Bonus: Ako naiđe na broj deljiv sa brojem 6, neka pored tog broja i ispiše da je deljiv sa 6.

Primer ispisa:

20
19
18 je deljiv sa 6
17
...

 */

for ($i=20; $i>=1; $i--){
	for ($i; $i%6==0; $i--) {
		echo $i . ' je deljiv sa 6.';
		echo '<br />';
	}
	echo $i;
		echo '<br />';
}

echo '<hr />';

$i=20;
while ($i>=1) {
	if ($i%6 == 0){
		echo $i . ' je deljiv sa 6!!!';
	}
	else 
		echo $i;
		$i--;
		echo '<br />';
	
}
