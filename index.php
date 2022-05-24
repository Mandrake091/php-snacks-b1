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
//snack-1
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

//snack-2
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

//snack-3
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


//snack-4
$newArray = [];
while (count($newArray) < 15) {
    $number = rand(1, 50);
    if (!in_array($number, $newArray)) {
        $newArray[] = $number;
    }
};

//snack-5
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi ducimus qui a sequi quasi et obcaecati, ea sit maiores odio aspernatur culpa vitae ipsum modi labore suscipit nobis iste doloribus accusantium magnam rem tempore cumque. Blanditiis adipisci eum fugit ut reiciendis nam perferendis voluptatem quis ipsa doloremque sed, aut quos eos repellat? Blanditiis perspiciatis, ex consectetur quae tenetur at ut alias molestiae quibusdam error cupiditate asperiores excepturi ducimus exercitationem id minus odit illo tempore hic veritatis atque qui. Asperiores possimus unde explicabo quos dolor praesentium nesciunt ducimus magni sunt totam, suscipit itaque autem maiores, sapiente sit obcaecati consequatur. Error!';

//snack-6
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

//snack-7
$arrayAlunni = [
    [
        'nome' => 'Paolo',
        'cognome' => 'Bianchi',
        'voti' => [9, 10, 7, 4, 8, 6]
    ],
    [
        'nome' => 'Giulia',
        'cognome' => 'Rossi',
        'voti' => [4, 2, 2, 4, 5, 1]
    ],
    [
        'nome' => 'Carla',
        'cognome' => 'Bruni',
        'voti' => [2, 2, 2, 8, 4, 7]
    ]
];
function calcolaMedia($nums)
{
    $qt = count($nums);
    $res = 0;
    foreach ($nums as $n) {
        $res += $n;
    }
    return $res / $qt;
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>php-snacks</title>
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

            <?php
            foreach ($posts as $key => $value) {
                echo "<h5> Data: $key </h5>";
                "<br>";
                foreach ($value as $prop => $item) {
                    echo "<ul>";
                    foreach ($item as $k => $val) {
                        echo "<li>{$k}: {$val}</li>";
                    }
                    echo "</ul>";
                }
            }
            ?>
            <h1 class="text-primary"> Snack case 4</h1>
            <?php var_dump($newArray) ?>

            <h1 class="text-primary"> Snack case 5</h1>
            <?php var_dump(explode(".", $paragraph)) ?>

            <h1 class="text-primary"> Snack case 6</h1>

            <?php foreach ($db as $key => $value) { ?>
            <?php echo "<h2>$key</h2>" ?>
            <div class="<?php echo $key ?>">
                <?php foreach ($value as $value) {
                        echo "
                        <p>$value[name] $value[lastname] </p>";
                    } ?>
            </div> <?php
                    } ?>

            <h1 class="text-primary"> Snack case 7</h1>
            <ul><?php foreach ($arrayAlunni as $j => $j_value) { ?>
                <li>
                    <?php echo $j_value['nome']; ?><br>
                    <?php echo $j_value['cognome']; ?><br>
                    <?php $media = calcolaMedia($j_value['voti']);
                    echo 'Media voto : ' . round($media, $precision = 1);
                } ?><br>
                </li>
            </ul>
    </main>
</body>

</html>