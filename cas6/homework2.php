<?php
/*
Čas 6, Domaći 2

Napisati program koji ispiše na ekran brojeve od 1 do 25, kao i to da li je broj paran ili neparan. Primer ispisa:

```
1 je neparan broj.
2 je paran broj.
3 je neparan broj.
4 je paran broj.
...
```

Uradite isti zadatak sa for() petljom i sa do-while petljom.

Bonus: Nakon svog tog ispisa, neka program takođe ispiše koji je zbir svih parnih brojeva,
i koji je zbir svih neparnih brojeva.

 */
$sumOfEvenNumbers = 0;
$sumOfOddNumbers = 0;
for ($i = 1; $i<=25; $i++){

	echo $i;


	if ($i%2==0){
		echo ' je paran broj.';
		echo '<br />';
		//bonus deo zadataka - zbir svih parnih brojeva
		$sumOfEvenNumbers = $sumOfEvenNumbers + $i;				
	}
	else{
		echo ' je neparan broj.';
		echo '<br />';
		//bonus deo - zbir svih neparnih brojeva
		$sumOfOddNumbers = $sumOfOddNumbers + $i;
	}
}

//bonus - ispis zbira parnih i neparnih brojeva
echo 'Zbir parnih brojeva je: ' . $sumOfEvenNumbers . '<br />';
echo 'Zbir neparnih brojeva je: ' . $sumOfOddNumbers . '<br />';

