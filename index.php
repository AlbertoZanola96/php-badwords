<?php
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    $testo = "Cappuccetto Rosso, chiamata anche Cappuccetto, è una bambina che vive con la sua mamma in una casetta vicino al bosco. Un giorno la mamma le consegna un cestino pieno di cose buone da portare alla nonna malata, che vive al di là della foresta. La mamma raccomanda a Cappuccetto di fare attenzione, durante il tragitto. Nel bosco, però, la bambina incontra un lupo, che con l'inganno le si avvicina e si fa rivelare dove abita la nonna. Il lupo così si allontana, arriva prima di lei alla casetta, bussa alla porta, presentandosi alla nonna come la nipotina, e così apre la porta e se la mangia in un sol boccone. Cappuccetto Rosso arriva più tardi alla casetta, entra e trova il lupo nel letto, travestito da nonna, e anche la bambina viene a sua volta divorata in un sol boccone. Successivamente un cacciatore, amico della nonna di Cappuccetto, si accorge di quello che è accaduto, si precipita nella casa dell'anziana signora e apre la pancia del lupo, dalla quale fuoriescono immediatamente la nonna e Cappuccetto Rosso sane e salve. Con il loro aiuto il cacciatore riempie la pancia del lupo di pietre per sostituire il peso delle due donne. Una volta sveglio, il lupo, nonostante il pasto precedente l'abbia saziato, si sente ancora pesante, così decide di uscire a fare una passeggiata. Dopo aver fatto appena pochi passi, però, cade a terra affannato e muore. La nonna, il cacciatore e Cappuccetto Rosso festeggiano. La piccola può tornare a casa senza ulteriori preoccupazioni e anche l'uomo si allontana portando il corpo del lupo con sé per farne delle pellicce. ";
    // ottengo la lunghezza.
    $lung = strlen($testo);
    $bannata = $_GET["ban"];
    //sostituisco 
    $testoBan = str_ireplace($bannata, '***', $testo);
    $lung2 = strlen($testoBan);
?>

<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<p> <?php echo $testo ?> </p>
<p> <?php echo $lung ?> </p>
<p> <?php echo $testoBan ?> </p>
<p> <?php echo $lung2 ?> </p>
