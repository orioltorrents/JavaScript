<?php
$titol = "Buscar elements amb un array";
include("../includes/head.php");
?>

<body>
    <p>
    <a href="../index.html">
        Anar a l'índex
    </a>
    </p>

    <h1>
    Buscar elements amb un array
    </h1>

    <p>
    En JavaScript podem buscar elements dins d’un array amb diversos mètodes. Els més comuns són:
    </p>

    <ul>
        <li>
            <code>includes()</code>: comprova si un element existeix a l’array.
        </li>
        <li>
            <code>indexOf()</code>: retorna la posició on es troba l’element, o -1 si no hi és.
        </li>
        <li>
            <code>find()</code>: retorna el primer element que compleix una condició.
        </li>
        <li>
            <code>findIndex()</code>: retorna la posició del primer element que compleix una condició.
        </li>
    </ul>

    <p>
    Aquests mètodes són molt útils per fer cerques dins arrays. Són més nets i legibles que fer un bucle <code>for</code> manual.
    </p>

    <h2>
        Com funcionen aquests mètodes?
    </h2>

    <h3>
        includes()
    </h3>
    
    <p>
        El mètode <code>includes()</code> serveix per comprovar si un valor concret existeix dins d’un array.
        Retorna <code>true</code> si l’element hi és, i <code>false</code> si no hi és.
    </p>
    
    <p>
        És molt útil per fer comprovacions ràpides, com per exemple: "Aquest alumne està inscrit?"
    </p>

    <h3>
        indexOf()
    </h3>
    
    <p>
        <code>indexOf()</code> busca un valor concret dins l’array i retorna la seva posició (l’índex).
        Si l’element no es troba, retorna <code>-1</code>.
    </p>
    
    <p>
        L’índex comença en 0, així que si retorna 2, vol dir que l’element és el tercer de la llista.
    </p>

    <h3>
        find()
    </h3>
    
    <p>
        <code>find()</code> busca el primer element que compleix una condició. No has de saber el valor exacte,
        només definir què busques (per exemple, "el primer nombre parell").
    </p>
    
    <p>
        Retorna el primer element que compleix la condició. Si cap element ho compleix, retorna <code>undefined</code>.
    </p>

    <h3>
        findIndex()
    </h3>
    
    <p>
        Aquest mètode funciona igual que <code>find()</code>, però en lloc de retornar l’element, et dóna la seva posició.
    </p>
    
    <p>
        Si no troba cap element que compleixi la condició, també retorna <code>-1</code>.
    </p>

    <h2>
    Quan cal posar <code>return</code>?
    </h2>

    <p>
        Només cal posar <code>return</code> quan fem servir una funció amb claudàtors <code>{}</code>. Això passa amb mètodes com <code>find()</code>, <code>findIndex()</code>, <code>filter()</code> o <code>map()</code>, perquè necessiten una funció que retorni un resultat per a cada element. En canvi, mètodes com <code>includes()</code> o <code>indexOf()</code> no fan servir funcions de condició, així que no cal <code>return</code>. Amb les funcions de fletxa, no cal posar return.
    </p>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
            <th>Mètode</th>
            <th>Cal funció?</th>
            <th>Cal <code>return</code>?</th>
            <th>Exemple curt</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><code>includes()</code></td>
            <td>❌ No</td>
            <td>❌ No</td>
            <td><code>arr.includes("joan")</code></td>
            </tr>
            <tr>
            <td><code>indexOf()</code></td>
            <td>❌ No</td>
            <td>❌ No</td>
            <td><code>arr.indexOf("joan")</code></td>
            </tr>
            <tr>
            <td><code>find()</code></td>
            <td>✅ Sí</td>
            <td>✅ Sí</td>
            <td><code>arr.find(x => x > 10)</code></td>
            </tr>
            <tr>
            <td><code>findIndex()</code></td>
            <td>✅ Sí</td>
            <td>✅ Sí</td>
            <td><code>arr.findIndex(x => x > 10)</code></td>
            </tr>
            <tr>
            <td><code>filter()</code></td>
            <td>✅ Sí</td>
            <td>✅ Sí</td>
            <td><code>arr.filter(x => x !== 0)</code></td>
            </tr>
            <tr>
            <td><code>map()</code></td>
            <td>✅ Sí</td>
            <td>✅ Sí</td>
            <td><code>arr.map(x => x * 2)</code></td>
            </tr>
        </tbody>
    </table>

    <h2>
        Exercicis
    </h2>

    <h3>
        Exercici 1: Comprovar si un element existeix
    </h3>

    <p>
        Volem saber si el nom <code>"joan"</code> és dins l’array següent.
    </p>

    <pre>
        <code>
            let noms = ["anna", "joan", "marc", "lucia"];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let noms = ["anna", "joan", "marc", "lucia"];

            let existeix = noms.includes("joan");

            console.log(existeix); // true
        </code>
    </pre>

    <h3>
        Exercici 2: Buscar la posició d’un element
    </h3>

    <p>
        Ara volem saber en quina posició es troba <code>"marc"</code>.
    </p>
    
    <pre>
        <code>
            let noms = ["anna", "joan", "marc", "lucia"];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio2')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
        <code>
            let noms = ["anna", "joan", "marc", "lucia"];

            let posicio = noms.indexOf("marc");

            console.log(posicio); // 2
        </code>
    </pre>

    <h3>
        Exercici 3: Trobar un número parell
    </h3>

    <p>
        Tenim una llista de números i volem trobar el primer número parell.
    </p>

    <pre>
        <code>
            let numeros = [3, 7, 9, 10, 15];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio3')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
        <code>
            let numeros = [3, 7, 9, 10, 15];

            let primerParell = numeros.find(function(num) {
            return num % 2 === 0;
            });

            console.log(primerParell); // 10
        </code>
    </pre>

    <h3>
        Exercici 4: Trobar la posició d’un número major que 100
    </h3>
    
    <p>
        Troba l’índex del primer número més gran de 100.
    </p>
   
    <pre>
        <code>
            let valors = [23, 45, 98, 101, 150];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio4')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio4" style="display:none;">
        <code>
            let valors = [23, 45, 98, 101, 150];

            let indexGran = valors.findIndex(function(num) {
            return num > 100;
            });

            console.log(indexGran); // 3
        </code>
    </pre>

    <script>
    function mostrarSolucio(id) {
        const bloc = document.getElementById(id);
        bloc.style.display = bloc.style.display === "none" ? "block" : "none";
    }
    </script>
</body>
</html>
