<?php
$titol = "Operacions funcionals d'arrays";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Operacions funcionals d'arrays
    </h1>

    <h2>
    Introducció
    </h2>

    <p>
    En les versions modernes de JavaScript, els arrays disposen d'una sèrie de mètodes que ens permeten fer operacions per recórrer-los, inspeccionar-los o modificar-los.
    </p>

    <p>
    Aquestes operacions es van introduir amb la revisió del llenguatge de l’any 2009, coneguda com <strong>ES5</strong>, una de les actualitzacions més importants de JavaScript. Una de les millores clau d’aquesta versió és, precisament, l’aparició d’aquests mètodes.
    </p>

    <h2>
    Programació funcional i mètodes d’array
    </h2>

    <p>
    Els mètodes com <code>forEach</code>, <code>map</code>, <code>filter</code>, <code>reduce</code> i <code>find</code> tenen en comú que es poden utilitzar sobre qualsevol array i que operen a través de funcions que passem com a argument.
    </p>

    <p>
    Aquest tipus d’escriptura adopta pràctiques del <strong>paradigma funcional</strong>, on el codi es basa sobretot en funcions. Això permet reduir la complexitat del codi i fer-lo més clar i llegible.
    </p>

    <h2>
    Exemple comparatiu
    </h2>

    <p>
    És important destacar que un codi no és millor pel fet de ser més curt. El que realment importa és que sigui <strong>clar i entenedor</strong>. Vegem dues formes de fer el mateix:
    </p>

    <pre>
        <code>
            // Forma tradicional
            for(let i = 0; i < array.length; i++){
            let element = array[i];
            console.log(element);
            }

            // Forma moderna
            array.forEach(function(element){
            console.log(element);
        });
        </code>
    </pre>

    <p>
    Amb <code>forEach</code> no només fem el codi més compacte, sinó que també és més expressiu: sabem que es farà "per a cada element".
    </p>

    <h2>
    Aprofundirem en cada mètode
    </h2>

    <p>
    En les següents classes veurem amb detall cadascuna d’aquestes operacions: com funcionen, quan s’utilitzen i exemples pràctics. Aquestes eines et seran molt útils per treballar amb dades dins dels arrays de manera neta i eficient.
    </p>
    
</body>
</html>