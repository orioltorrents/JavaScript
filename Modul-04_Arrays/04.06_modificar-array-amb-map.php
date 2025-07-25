<?php
$titol = "Modificar un array amb map";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Modificar un array amb map
    </h1>

    <h2>
        Fins ara que sabíem...
    </h2>

    <p>
        Imagineu que teniu un array de nombres i voleu fer els quadrats d'aquests nombres conservant sempre els nombres originals.
    </p>

    <p>
        Fins ara, sabem que podem tenir un array amb els nombres, podem generar un array quadrats buit i podem fer un cicle for per onplir l'array quadrats.
    </p>

    <pre>
        <code>
            let nombres = [2, 5, 3, 1, 25];

            let quadrats = [];

            for(let i = 0; i < nombres.length - 1; i++){
                quadrats[i] = nombre[i] * nombre[i];
            }

            console.log(quadrats);
        </code>
    </pre>

    <p>
        La funció <code>map()</code> ens permet transformar un array sense modificar l’original. Retorna un nou array on cada element és el resultat d’aplicar una funció de modificació a cada element de l’array original.
    </p>

    <pre>
        <code>
            array.map(function(){})
        </code>
    </pre>

    <p>
        Per exemple, si tenim un array de números i volem multiplicar cada element per 10, podem fer-ho així:
    </p>

    <pre>
        <code>
            let numeros = [1, 2, 3, 4];

            let quadrats = numeros.map(function(num) {
            return num * 10;
            });

            console.log(quadrats); // [10, 20, 30, 40]
        </code>
    </pre>

    <p>
        Per tant, map és un mètode d'un array que rep una function que s'executa a cada element. El resultat de map és el nou array generat on s'ha de fer un return per cada element.
    </p>

    <p>
        un altre exemple...
    </p>

    <p>
        Tinc un array de strings que tenen nombres. Vull pasar-los a nombres enters. Com ho fariem amb la funció map. 
    </p>

    <pre>
        <code>
            let nombres = ["10", "5"; "3", "25"]
            
            console.log(nombres); 
            
            nombres = nombres.map(function(numString){
                return parseInt(numString);
            });
            
            console.log(nombres); 
        </code>
    </pre>

    <p>
        En aquest exemple, estic reassignant els valors enters al mateix array però map no altera l'array inicial.
    </p>

    <p>
        També podem passar el segon argument a map per tenir l'index i el tercer argument per tenir l'array complet.
    </p>

    <pre>
        <code>
            let nombres = ["10", "5"; "3", "25"]
            
            console.log(nombres); 
            
            nombres = nombres.map(function(numString, index, array){
                console.log(numString, index, array)
                return parseInt(numString);
            });
            
            console.log(nombres); 
        </code>
    </pre>

    <p>
        També podem utilitzar una <code>arrow function</code> per fer-ho més curt:
    </p>

    <pre>
        <code>
            let multiplicats = numeros.map(num => num * 10);
        </code>
    </pre>

    <h2>
        Per a què serveix <code>map</code>?
    </h2>

    <p>
        És molt útil quan volem crear un nou array modificat a partir d’un existent, com per exemple:
        <ul>
            <li>
                Canviar majúscules/minúscules en textos
            </li>
            <li>
                Afegir unitats a números
            </li>
            <li>
                Transformar objectes
            </li>
        </ul>
    </p>

    <h2>
        Exercicis
    </h2>

    <h3>
    Exercici: Sumar 5 a cada nota
    </h3>

    <p>
        Tens un array amb algunes notes. Fes servir <code>map</code> per sumar 5 punts a cada nota. Així practiquem com modificar números dins un array.
    </p>

    <pre>
        <code>
            let notes = [4, 7, 8, 10];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let notes = [4, 7, 8, 10];

            let novesNotes = notes.map(function(nota) {
                return nota + 5;
            });

            console.log(novesNotes); // [9, 12, 13, 15]
        </code>
    </pre>

    <h3>
    Exercici: Llargada de les paraules
    </h3>

    <p>
        Tens un array amb paraules. Fes servir <code>map</code> per crear un nou array amb la llargada (nombre de lletres) de cada paraula. Pista: pots fer servir <code>.length</code> dins la funció.
    </p>

    <pre>
        <code>
            let paraules = ["cotxe", "bicicleta", "bus", "avió"];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio2')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
        <code>
            let paraules = ["cotxe", "bicicleta", "bus", "avió"];

            let llargades = paraules.map(function(p) {
                return p.length;
            });

            console.log(llargades); // [5, 9, 3, 4]
        </code>
    </pre>

    <h3>
        Exercici: Afegir text a cada edat
    </h3>

    <p>
        Tens un array amb edats. Fes servir <code>map</code> per transformar-les en frases com "Edat: 15 anys". Pista: pots fer servir la concatenació amb <code>+</code> o els <code>template literals</code>.
    </p>

    <pre>
        <code>
            let edats = [15, 18, 21, 30];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio3')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
        <code>
            let edats = [15, 18, 21, 30];

            let frases = edats.map(function(edat) {
                return "Edat: " + edat + " anys";
            });

            console.log(frases);
            // ["Edat: 15 anys", "Edat: 18 anys", "Edat: 21 anys", "Edat: 30 anys"]
        </code>
    </pre>

    <h3>
        Exercici: Majúscules a noms propis
    </h3>

    <p>
        Tenim un array amb noms de persones en minúscules. Fes servir <code>map</code> per convertir-los a majúscules (només la primera lletra). Us dono una pista: s'ha d'utilitzar el mètode toUpperCase a cada element de l'array.
    </p>

    <pre>
        <code>
            let noms = ["maria", "joan", "lucia", "marc"];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
        <code>
            let noms = ["maria", "joan", "lucia", "marc"];

            let capitalitzats = noms.map(function(nom) {
            return nom[0].toUpperCase() + nom.slice(1);
            });

            console.log(capitalitzats); // ["Maria", "Joan", "Lucia", "Marc"]
        </code>
    </pre>

    

    <script>
        function mostrarSolucio(id) {
        const bloc = document.getElementById(id);
        bloc.style.display = bloc.style.display === "none" ? "block" : "none";
        }
    </script>
</body>
</body>
</html>