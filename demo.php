<?php

$name = "Fran";
    $isDev = true;
    $age = 30;

    define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');
    $output = "Hola $name";
    $output .= ", con una edad de $age.";

    const NOMBRE = 'Fran';

    $outputAge = match (true) {
        $age < 2 => "Eres un bebé, $name",
        $age < 10 => "Eres un niño, $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age < 60 => "Eres un adulto viejo, $name",
        default => "Hueles más a madera que a fruta, $name"
    };

    $bestLanguages = ["PHP", "JavaScript", "Python", 1, 2]; 
    $bestLanguages[3] = "Java"; // accede a la posición 3 y la cambia por ese
    $bestLanguages[] = "TypeScript"; // lo añade al final del array
    
?>
    <h3>
    El mejor lenguaje es <?= $bestLanguages[1] ?>
</h3>

<ul>
    <?php foreach($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>
<h2><?= $outputAge ?></h2>
<img src= "<?= LOGO_URL ?>" alt="PHP Logo"  width="200" >
<h1>
<?= $output; ?> 

</h1>