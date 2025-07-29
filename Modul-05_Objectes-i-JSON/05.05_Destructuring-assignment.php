<?php
$titol = "Destructuring assignment";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Destructuring assignment
    </h1>

    <p>
        La <strong>destructuració</strong> ens permet extreure valors d'arrays o propietats d'objectes i assignar-los a variables de manera molt més concisa i llegible. També podem desestructurar els paràmetres que reben una funció.
    </p>

    <h2>
        Destructuring d'arrays
    </h2>

    <p>
        Suposem que tenim un array amb tres valors:
    </p>

    <pre>
        <code>
            let numeros = [12, 20, 35];         
            let [a, b, c] = numeros; // 

            console.log(a);  // 12
            console.log(b); // 20
            console.log(c); // 35
            console.log(numeros); // [12, 20, 35]             
        </code>
    </pre>

    <p>
        Què hem fet? Al costat esquerre de l'operador d'assignació, posem la paraula reservada let, els claudàtors i dins de l'array posem les variables amb les quals se separaran els valors de l'array. A la dreta posem el nom de l'array que volem desestructurar. L'array numeros no ha canviat i el podem treure per consola tot sencer si volem.
    </p>
        
    <p>
        També podem ignorar valors o assignar només els que ens interessen:
    </p>

    <pre>
        <code>
            let numeros = [12, 20, 35]; 
            let [primer, , tercer] = numeros;
            console.log(tercer); // 35
        </code>
    </pre>

    <p>
        Tambén podem treure un valor de l'array i els sobrants d'un array utilitzant el operador rest:
    </p>

    <pre>
        <code>
            let numeros = [12, 20, 35, 43, 67];
            let [primer, ...rest] = numeros;
            console.log(rest); // [ 20, 35, 43, 67]
        </code>
    </pre>

    <h2>
        Destructuring d'objectes
    </h2>

    <p>
        Amb objectes, cal utilitzar els mateixos noms de propietat:
    </p>

    <pre>
        <code>
            let persona = {
            nom: "Anna",
            edat: 28,
            ciutat: "Barcelona"
            };

            let { nom, edat } = persona;

            console.log(nom);  // Anna
            console.log(edat); // 28
        </code>
    </pre>

    <p>
        També podem canviar el nom de la variable, és a dir, si vulguessim assignar el valor de la propietat "ciutat" a una variable que no sigui "ciutat" sinó per exermple "localitat", hauriem d'adoptar aquesta sintaxi :
    </p>

    <pre>
        <code>
            let { ciutat: localitat } = persona;
            console.log(localitat); // Barcelona
        </code>
    </pre>

    <p>
        Igual que als arrays, podem extrure un valor de l'objecte i els sobrants d'un objecte utilitzant el operador rest:
    </p>

    <pre>
        <code>
            let persona = {
                nom: "Anna",
                edat: 28,
                ciutat: "Barcelona"
            };        

            let { nom, ...rest } = persona;

            console.log(rest); // { edat: 28, ciutat: "Barcelona" }
    </pre>

    <h2>
        Destructuring paràmetres d'una funció
    </h2>

    <p>
        Podem utilitzar destructuring per assignar valors a paràmetres d'una funció:
    </p>

    <pre>
        <code>
            let persona = {
                nom: "Anna",
                edat: 28,
                ciutat: "Barcelona"
            }; 

            function mostrarNom({nom}) {
            console.log(nom); // Anna
            }

            mostrarNom(persona);
        </code>
    </pre>

    <p>
        També podem jugar amb el que retorna una funció amb destructuring:
    </p>

    <pre>
        <code>
            function obtenirQualificacions() { 
                return [10, 9, 8, 7] 
            };

            let [matemàtiques, ...rest] = obtenirQualificacions();
            console.log(matemàtiques); // 10
            console.log(rest); // [9, 8, 7]
        </code>
    </pre>

    <h2>
        Conclusions
    </h2>

    <p>
        El destructuring de variables i objectes es pot utilitzar per aconseguir una manera clara i eficient de accedir a les dades i assignar valors a variables.
    </p>

    <p>
        Podem fer tot això amb destructuring assigment:
    </p>

    <ol>
        
        <li>
            Assignar diverses propietats d'un objecte a diverses variables en una sola linia de codi
        </li>
        <li>
            Obtenir algunes propietats d'un objecte i excloure'n d'altres
        </li>
        <li>
            Separar les propietats d'un objecte que rebem com arguments d'una funció en diverses variables
        </li>
        <li>
            Separar el retorn d'una funció en diverses variables
        </li>
        <li>
            Assignar valors d'un array a diverses variables
        </li>
        <li>
           Obtenir alguns valors d'un array i excloure'n d'altres
        </li> 
    </ol>

    <h2>
    Aplicació pràctica
    </h2>

    <p>
        La destructuració és especialment útil quan treballem amb:
    </p>

    <ul>
        <li>Dades provinents d’<strong>APIs</strong> (objectes i arrays amb moltes propietats).</li>
        <li>Funcions que retornen múltiples valors o objectes.</li>
        <li>Components i props si treballes amb <code>React</code> o altres frameworks.</li>
    </ul>

    <p>
        Fer servir <strong>destructuring</strong> no només fa que el teu codi sigui més breu, sinó també més clar i mantenible. És una eina essencial per treballar com un/a desenvolupador/a JavaScript modern.
    </p>
    
    <h2>
        Exercicis
    </h2>

    <h3>
        Exercici: Intercanvi de valors
    </h3>

    <p>
        Utilitza destructuring per intercanviar el valor de dues variables sense fer servir una variable auxiliar.
    </p>

    <pre>
        <code>
            let x = 5;
            let y = 10;
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let x = 5;
            let y = 10;

            [x, y] = [y, x];

            console.log(x); // 10
            console.log(y); // 5
        </code>
    </pre>

    <h3>
        Exercici: Accedir al primer i últim element
    </h3>

    <p>
        Dona un array de noms, accedeix només al primer i a l’últim nom amb destructuring.
    </p>

    <pre>
        <code>
            let noms = ["Maria", "Joan", "Pere", "Laia"];
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio2')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
        <code>
            let noms = ["Maria", "Joan", "Pere", "Laia"];

            let [primer, , , ultim] = noms;

            console.log(primer); // Maria
            console.log(ultim);  // Laia
        </code>
    </pre>

    <h3>
        Exercici: Destructuring d’un objecte amb canvi de nom
    </h3>

    <p>
        Donat l’objecte següent, extreu la propietat <code>cognom</code> i guarda-la en una variable anomenada <code>llinatge</code>.
    </p>

    <pre>
        <code>
            let alumne = {
            nom: "Marc",
            cognom: "Soler",
            curs: "2n ESO"
            };
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio3')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
    <code>
        let alumne = {
        nom: "Marc",
        cognom: "Soler",
        curs: "2n ESO"
        };

        let { cognom: llinatge } = alumne;

        console.log(llinatge); // Soler
    </code>
    </pre>

    <h3>
    Exercici: Valors per defecte
    </h3>

    <p>
    Fes servir destructuring amb valors per defecte per evitar <code>undefined</code> quan una propietat no existeix.
    </p>

    <pre>
    <code>
        let usuari = {
        nom: "Laura"
        };
    </code>
    </pre>

    <button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
    </button>

    <pre id="solucio4" style="display:none;">
    <code>
        let usuari = {
        nom: "Laura"
        };

        let { nom, edat = 25 } = usuari;

        console.log(nom);  // Laura
        console.log(edat); // 25
    </code>
    </pre>

    <script>
    function mostrarSolucio(id) {
        let element = document.getElementById(id);
        if (element.style.display === "none") {
        element.style.display = "block";
        } else {
        element.style.display = "none";
        }
    }
    </script>

</body>
</html>
