<?php
$titol = "Funcions constructores";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Funcions constructores
    </h1>

    <p>
        Les <strong>funcions constructores</strong> són una manera tradicional de crear objectes en JavaScript. Ens permeten crear múltiples instàncies d’un mateix "tipus" d’objecte amb propietats i mètodes compartits.
    </p>

    <h2>
        Sintaxi d'una funció constructora
    </h2>

    <p>
        Per crear una funció constructora, utilitzem una funció normal, però per convenció el seu nom comença en majúscula. A dins, utilitzem la paraula clau <code>this</code> per assignar les propietats de l'objecte. Quan la cridem amb <code>new</code>, es crea un nou objecte. El valor de <code>this</code> es el nou objecte creat. Utilitzem <code>this</code> per accedir a les propietats de l'objecte i assignar valors.
    </p>

    <pre>
        <code>
            function NomdeLaFuncioConstructora() {
                this.propietat1 = "valor1";
                this.propietat2 = "valor2";  
            }
            let objecte = new NomdeLaFuncioConstructora();
        </code>
    </pre>

    <p>
        Un exemple amb dues propietats i un mètode:
    </p>

    <pre>
        <code>
            function Cotxe(marca, model) {
                this.marca = marca;
                this.model = model;
                this.presentar = function() {
                    console.log("Sóc un " + this.marca + " " + this.model);
                };
            }

            let cotxe1 = new Cotxe("Toyota", "Corolla");
            cotxe1.presentar(); // Sóc un Toyota Corolla

            let cotxe2 = new Cotxe("Ford", "Transit");
            cotxe2.presentar(); // Sóc un Ford Transit

            let cotxe3 = new Cotxe("Fiat", "Tipo");
            cotxe3.presentar(); // Sóc un Fiat Tipo
        </code>
    </pre>

    <h2>
        Què fa realment <code>new</code>?
    </h2>

    <p>
        Quan utilitzem <code>new Cotxe("Toyota", "Corolla")</code> passa això:
    </p>
    <ul>
        <li>Es crea un objecte nou i buit</li>
        <li>Es vincula amb el prototip de la funció</li>
        <li>Executa la funció amb <code>this</code> apuntant a l'objecte creat</li>
        <li>Retorna aquest objecte</li>
    </ul>

    <h2>
        Afegir mètodes dins o fora
    </h2>

    <p>
        Els mètodes dins la funció es dupliquen per cada instància. Si els posem al <code>prototype</code>, totes les instàncies comparteixen el mateix mètode (ho veurem en el Mòdul 08).
    </p>

    <h2>
        Exercicis
    </h2>

    <h3>
        Exercici 1: Crear una persona
    </h3>

    <p>
        Fes una funció constructora anomenada <code>Persona</code> amb les propietats <code>nom</code> i <code>edat</code>, i un mètode <code>saludar</code> que mostri "Hola, sóc en/la [nom] i tinc [edat] anys".
    </p>

    <pre>
        <code>
            // Crea aquí la funció constructora i una instància
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            function Persona(nom, edat) {
                this.nom = nom;
                this.edat = edat;
                this.saludar = function() {
                    console.log("Hola, sóc en/la " + this.nom + " i tinc " + this.edat + " anys");
                };
            }

            let alumne = new Persona("Joana", 17);
            alumne.saludar();
        </code>
    </pre>

    <h3>
        Exercici 2: Producte amb descompte
    </h3>

    <p>
        Fes una funció constructora anomenada <code>Producte</code> amb <code>nom</code> i <code>preu</code>, i un mètode <code>descompte</code> que mostri el preu amb un 10% de descompte.
    </p>

    <pre>
        <code>
            // Defineix la funció Producte i prova-la amb un exemple
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio2')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
        <code>
            function Producte(nom, preu) {
                this.nom = nom;
                this.preu = preu;
                this.descompte = function() {
                    let preuFinal = this.preu * 0.9;
                    console.log("Preu amb descompte: " + preuFinal + " €");
                };
            }

            let llibre = new Producte("JS bàsic", 20);
            llibre.descompte();
        </code>
    </pre>

    <h3>
        Exercici 3: Biblioteca de llibres
    </h3>

    <p>
        Crea una funció constructora <code>Llibre</code> amb <code>titol</code>, <code>autor</code> i un mètode <code>mostrarInfo</code> que imprimeixi "‘[títol]’ de [autor]".
    </p>

    <pre>
        <code>
            // Prova-la amb 2 llibres diferents
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio3')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
        <code>
            function Llibre(titol, autor) {
                this.titol = titol;
                this.autor = autor;
                this.mostrarInfo = function() {
                    console.log("‘" + this.titol + "’ de " + this.autor);
                };
            }

            let llibre1 = new Llibre("El Petit Príncep", "Antoine de Saint-Exupéry");
            let llibre2 = new Llibre("1984", "George Orwell");

            llibre1.mostrarInfo();
            llibre2.mostrarInfo();
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