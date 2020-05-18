<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks 1 & 2</title>
</head>
<body>
    <?php
    /**
     * PHP Snack 1:
     * Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario
     * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite
     * Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
     */
    ?>

    <!-- Creo array partite -->
    <?php
    $matches = [
        [
            'home team' => 'Hap. Gerusalemme',
            'away team' => 'Canarias',
            'home team points' => rand(1, 200),
            'away team points' => rand(1, 200)
        ],

        [
            'home team' => 'Nižnij Novgorod',
            'away team' => 'Anversa',
            'home team points' => rand(1, 200),
            'away team points' => rand(1, 200)
        ],

        [
            'home team' => 'JSF Nanterre',
            'away team' => 'Virtus Bologna',
            'home team points' => rand(1, 200),
            'away team points' => rand(1, 200)
        ],

        [
            'home team' => 'Brose Bamberg',
            'away team' => 'AEK Atene',
            'home team points' => rand(1, 200),
            'away team points' => rand(1, 200)
        ]
    ]
    ?>
    <h1>PHP Snacks</h1>
    <h2>PHP Snack 1 - Risultati partite:</h2>
    <ul>
        <!-- Ciclo per stampare a schermo i singoli match presenti nell'array -->
        <?php for($i = 0; $i < count($matches); $i++) {
            $single_match = $matches[$i];?>
            <li>
                <?php echo $single_match['home team']; ?> vs <?php echo $single_match['away team']; ?> | <?php echo $single_match['home team points'];?> - <?php echo $single_match['away team points'];?>
            </li>
        <?php } ?>
    </ul>

    <?php
    /**
     * PHP Snack 2:
     * Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * 1. name sia più lungo di 3 caratteri,
     * 2. che mail contenga un punto e una chiocciola,
     * 3. e che age sia un numero.
     * Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
     */
    ?>

    <h2>PHP Snack 2 - Inserimento e validazione dati:</h2>
    <!-- Creo variabile data da utilizzare al posto del metodo GET -->
    <?php $data = $_GET ?>
    
    <!-- Stabilisco condizioni per permettere l'accesso -->
    <?php
    if(empty($data['name']) || empty($data['email']) || empty($data['age'])) {
        echo 'Accesso negato: non hai inserito tutti i dati necessari!';
    } elseif(strlen($data['name']) < 3) {
        echo 'Accesso negato: il nome che hai inserito è troppo corto!';
    } elseif(strpos($data['email'], '.') === false || strpos($data['email'], '@') === false) {
        echo 'Accesso negato: email non valida';
    } elseif(is_numeric($data['age']) === false) {
        echo "Accesso negato: inserire un numero nel campo dell'età";
    } else {
        echo 'Nome: ' . $data['name'] . '<br>';
        echo 'E-mail: ' . $data['email'] . '<br>';
        echo 'Età: ' . $data['age'] . '<br>';
        echo 'Accesso riuscito. Benvenuto!';
    }
    ?>
</body>
</html>