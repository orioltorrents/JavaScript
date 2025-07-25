<?php
$titol = "Filtra elements d’un array amb filter";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Filtra elements d’un array amb <code>filter</code>
    </h1>

    <p>
        El mètode <code>filter</code> ens permet crear un nou array a partir dels elements d’un array original que compleixin una determinada condició.
    </p>

    <p>
        És com passar un colador als elements: només hi passen aquells que compleixen el filtre que hem definit.
    </p>

    <p>
        La funció <code>filter</code> rep com a argument una <strong>callback</strong>, és a dir, una funció que diu si cada element ha de passar el filtre o no. Aquesta funció ha de retornar <code>true</code> o <code>false</code>.
    </p>

    <pre>
        <code>
            let numeros = [10, 15, 20, 25, 30];

            let majorsDe20 = numeros.filter(function(num) {
            return num > 20;
            });

            console.log(majorsDe20); // [25, 30]
        </code>
        </pre>

    <p>
        En aquest cas, només els números superiors a 20 passen el filtre.
    </p>

    <h2>
        Exercicis
    </h2>

    <h3>
        Exercici 1: Números parells
    </h3>

    <p>
        Fes servir <code>filter</code> per quedar-te només amb els números parells d’aquest array:
    </p>

    <pre>
        <code>
            let numeros = [1, 2, 3, 4, 5, 6, 7, 8];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let numeros = [1, 2, 3, 4, 5, 6, 7, 8];

            let parells = numeros.filter(function(num) {
            return num % 2 === 0;
            });

            console.log(parells); // [2, 4, 6, 8]
        </code>
    </pre>

    <h3>
        Exercici 2: Noms curts
    </h3>

    <p>
        Filtra els noms que tenen menys de 5 lletres.
    </p>

    <pre>
        <code>
            let noms = ["Anna", "Bernat", "Jo", "Clara", "Pau"];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio2')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
        <code>
            let noms = ["Anna", "Bernat", "Jo", "Clara", "Pau"];

            let curts = noms.filter(function(nom) {
            return nom.length < 5;
            });

            console.log(curts); // ["Anna", "Jo", "Pau"]
        </code>
    </pre>

    <h3>
        Exercici 3: Nombres positius
    </h3>

    <p>
        D’un array de nombres, queda’t només amb els positius.
    </p>

    <pre>
        <code>
            let valors = [-3, 0, 4, -1, 10, 5];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio3')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
        <code>
            let valors = [-3, 0, 4, -1, 10, 5];

            let positius = valors.filter(function(num) {
            return num > 0;
            });

            console.log(positius); // [4, 10, 5]
        </code>
    </pre>

    <h3>
        Exercici 4: Productes disponibles
    </h3>

    <p>
        D’una llista de productes amb la propietat <code>disponible</code>, filtra només els que estan disponibles.
    </p>

    <pre>
        <code>
            let productes = [
            { nom: "Llibre", disponible: true },
            { nom: "Auriculars", disponible: false },
            { nom: "Motxilla", disponible: true }
            ];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio4')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio4" style="display:none;">
        <code>
            let productes = [
            { nom: "Llibre", disponible: true },
            { nom: "Auriculars", disponible: false },
            { nom: "Motxilla", disponible: true }
            ];

            let disponibles = productes.filter(function(p) {
            return p.disponible;
            });

            console.log(disponibles);
            // [{ nom: "Llibre", disponible: true }, { nom: "Motxilla", disponible: true }]
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
