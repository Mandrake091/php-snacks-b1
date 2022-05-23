<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di
casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo
tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che
name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok
stampare “Accesso riuscito”, altrimenti “Accesso negato”
## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come
valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti
paragrafi. Ogni punto un nuovo paragrafo.
## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un
rettangolo grigio e i PM in un rettangolo verde.
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i
suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php
$matchArray = [
    [
        'match' => 'Olimpia',
        'ospite' => 'Francia',
        'puntiOspite' => 24,
        'casa' => 'Italia',
        'puntiCasa' => 10,
    ],
    [
        'match' => 'Meazza',
        'ospite' => 'Spagna',
        'puntiOspite' => 56,
        'casa' => 'UK',
        'puntiCasa' => 34,
    ],
    [
        'match' => 'Barbera',
        'ospite' => 'Svezia',
        'puntiOspite' => 23,
        'casa' => 'Australia',
        'puntiCasa' => 12,
    ],
    [
        'match' => 'Mazzarini',
        'ospite' => 'Tokio',
        'puntiOspite' => 43,
        'casa' => 'Giappone',
        'puntiCasa' => 78,
    ]
];
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
    $message = 'Non hai inserito dei dati validi!';
} elseif (strlen($name) > 3 && strpos($mail, '@') != false && strpos($mail, '.') != false && is_numeric($age) != false) {
    $message = 'Accesso riuscito!';
} else {
    $message = 'Accesso negato';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container">
            <h1 class="text-primary"> Snack case 1</h1>
            <ul> <?php for ($i = 0; $i < count($matchArray); $i++) { ?>
                    <li>
                        <?php echo  'Stadio: ' . "{$matchArray[$i]['match']}"; ?>
                        <br>
                        <?php echo 'Match: ' . "{$matchArray[$i]['casa']}"; ?>
                        <?php echo ' - ' . "{$matchArray[$i]['ospite']}"; ?>
                        <?php echo ' | Risultato: ' . "{$matchArray[$i]['puntiOspite']}"; ?>
                    <?php echo ' - ' . "{$matchArray[$i]['puntiCasa']}";
                    } ?>
                    </li>
            </ul>
            <h1 class="text-primary"> Snack case 2</h1>
            <p><?php echo $message ?></p>
            <h1 class="text-primary"> Snack case 3</h1>

        </div>

    </main>

</body>

</html>