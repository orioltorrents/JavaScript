<?php
$titol = "Conceptes bàsics dels arrays";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">Anar a l'índex</a>
    </p>

    <h1>
        Conceptes bàsics dels arrays
    </h1>

    <p>
        Un <strong>array</strong> és una estructura que ens permet agrupar múltiples valors dins d'una sola variable. Aquesta col·lecció pot contenir dades de qualsevol tipus: números, cadenes de text, booleans, objectes, altres arrays... i fins i tot funcions.
    </p>

    <p>
        En JavaScript, els arrays es declaren amb <code>[]</code> i poden contenir valors separats per comes:
    </p>

    <pre>
        <code>
            let fruits = ["poma", "plàtan", "maduixa"];
            let edats = [15, 18, 21, 30];
            let valors = [true, false, true];
            let barreja = ["hola", 42, true, null];
        </code>
    </pre>

    <h2>
        Quins tipus de dades es poden guardar?
    </h2>

    <p>
        Els arrays en JavaScript són molt flexibles. Podem guardar:
    </p>

    <ul>
        <li><strong>Nombres:</strong> <code>[1, 2, 3]</code></li>
        <li><strong>Textos:</strong> <code>["Anna", "Joan"]</code></li>
        <li><strong>Booleans:</strong> <code>[true, false]</code></li>
        <li><strong>Objectes:</strong> <code>[{ nom: "Pau" }, { nom: "Laia" }]</code></li>
        <li><strong>Arrays dins d'arrays:</strong> <code>[[1, 2], [3, 4]]</code></li>
        <li><strong>Funcions:</strong> <code>[function() { alert("Hola"); }]</code></li>
    </ul>

    <h2>
        Exemple real: dades d’un alumne
    </h2>

    <p>
        Imaginem que volem guardar dades d’un alumne. Podríem fer-ho així:
    </p>

    <pre>
        <code>
            let alumne = [
              "Oriol Torrents",  // nom
              17,                // edat
              true,              // està aprovat?
              ["matemàtiques", "biologia", "física"] // assignatures
            ];
        </code>
    </pre>

        <h2>
        Reassignar valors d’un array
    </h2>

    <p>
        Cada element d’un array té una posició (índex) que comença a comptar des de 0. Podem reassignar el valor d’un element simplement indicant la seva posició:
    </p>

    <pre>
        <code>
            let notes = [5, 6, 7];

            // Reassignem la segona nota (índex 1)
            notes[1] = 8;

            console.log(notes); // Mostra: [5, 8, 7]
        </code>
    </pre>

    <p>
        També podem accedir a un valor amb <code>notes[0]</code>, <code>notes[1]</code> i així successivament.
    </p>

    <h2>
        Afegir nous valors a l’array
    </h2>

    <p>
        Podem afegir elements nous al final d’un array amb el mètode <code>push()</code>:
    </p>

    <pre>
        <code>
            let alumnes = ["Anna", "Joan"];

            alumnes.push("Laia");

            console.log(alumnes); // Mostra: ["Anna", "Joan", "Laia"]
        </code>
    </pre>

    <p>
        Si volem afegir al principi, podem fer servir <code>unshift()</code>:
    </p>

    <pre>
        <code>
            alumnes.unshift("Marc");

            console.log(alumnes); // Mostra: ["Marc", "Anna", "Joan", "Laia"]
        </code>
    </pre>

    <p>
        També es poden afegir valors a una posició concreta amb l’índex (però si no existeix, crea un "buit" fins allà):
    </p>

    <pre>
        <code>
            alumnes[10] = "Xavier";

            console.log(alumnes);
            // Hi haurà valors buits del 4 al 9
        </code>
    </pre>

        <h2>
        Eliminar valors d’un array
    </h2>

    <p>
        Hi ha diferents maneres d’eliminar elements d’un array. Depèn de si volem treure el primer, l’últim o un element concret.
    </p>

    <h3>
        Eliminar l’últim element – <code>pop()</code>
    </h3>

    <pre>
        <code>
            let colors = ["vermell", "blau", "groc"];
            colors.pop();

            console.log(colors); // ["vermell", "blau"]
        </code>
    </pre>

    <h3>
        Eliminar el primer element – <code>shift()</code>
    </h3>

    <pre>
        <code>
            let animals = ["gat", "gos", "ocell"];
            animals.shift();

            console.log(animals); // ["gos", "ocell"]
        </code>
    </pre>

    <h3>
        Eliminar qualsevol element – <code>splice()</code>
    </h3>

    <p>
        Amb <code>splice()</code> podem eliminar un o més elements a partir d’una posició concreta:
    </p>

    <pre>
        <code>
            let esportistes = ["Leo", "Rafa", "Pau", "Marc"];

            // Elimina 2 elements a partir de l’índex 1
            esportistes.splice(1, 2);

            console.log(esportistes); // ["Leo", "Marc"]
        </code>
    </pre>

    <p>
        També podem utilitzar <code>splice()</code> per eliminar només un element:
    </p>

    <pre>
        <code>
            let numeros = [10, 20, 30, 40];

            // Elimina el valor 30 (posició 2)
            numeros.splice(2, 1);

            console.log(numeros); // [10, 20, 40]
        </code>
    </pre>

    <h2>
        Exercici final
    </h2>

    <p>
        Crea un array amb els següents colors: <code>"vermell"</code>, <code>"groc"</code>, <code>"blau"</code> i <code>"verd"</code>.
        <br>
        Fes el següent pas a pas:
    </p>

    <ul>
        <li>Canvia el color de la posició 1 per <code>"taronja"</code></li>
        <li>Afegeix <code>"lila"</code> al final</li>
        <li>Elimina el primer color</li>
        <li>Mostra el resultat amb <code>console.log()</code></li>
    </ul>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let colors = ["vermell", "groc", "blau", "verd"];

            colors[1] = "taronja";       // Reassignem
            colors.push("lila");         // Afegim al final
            colors.shift();              // Eliminem el primer

            console.log(colors);         // ["taronja", "blau", "verd", "lila"]
        </code>
    </pre>

    <script>
        function mostrarSolucio(id) {
            const bloc = document.getElementById(id);
            bloc.style.display = bloc.style.display === "none" ? "block" : "none";
        }
    </script>
    
    <h2>
        Bona pràctica
    </h2>

    <p>
        Tot i que JavaScript permet barrejar tipus, sovint és millor fer servir arrays amb valors del mateix tipus per facilitar la gestió i processament posterior. Per estructures més complexes, podem combinar <strong>arrays amb objectes</strong>.
    </p>

    
</body>
</html>
