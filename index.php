<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum et non deleniti, vitae sint vel distinctio nobis dolor odio laborum ipsum cumque cupiditate maxime incidunt aliquam velit tenetur repellendus doloremque.";
file_put_contents("lorem.txt", $text);
/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$array = ["Salut", "Bonjour", "hey", "lets go", "Hello", "Hola", "Bnj", "Cc", "Slt", "Bye"];
for($i = 0; $i < count($array); $i++){
    $string .= $array[$i]." ";
}
file_put_contents("lorem.txt", $text.$string);
/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$path = pathinfo("C:\Users\cleme\PhpstormProjects\Exo-160-PHP-Gestion-des-fichiers\index.php");
echo $path["extension"]."<br>";


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
if(!file_exists("toto.txt")){
    echo "Le fichier n'est pas créer !";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.
$file = file_get_contents("lorem.txt");
$string = str_replace("a", "@", $file);
echo $string;
file_put_contents("lorem.txt", $string);