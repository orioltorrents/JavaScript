<?php
$titol = "Duplicar o combinar objectes";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Duplicar o combinar objectes
    </h1>

    <p>
    En JavaScript, sovint necessitem duplicar objectes (fer una còpia independent) o combinar diversos objectes en un de sol. Per fer-ho de manera eficient, utilitzem l’operador <code>spread</code> <code>(...)</code> i la funció <code>Object.assign()</code>.
    </p>

    <h2>
        Duplicar un objecte
    </h2>

    <p>
        Si volem copiar un objecte per separat (sense referència compartida), podem fer-ho amb l’operador spread (...):
    </p>

    <pre>
        <code>
            let gos1 = {
                    nom: "Pintxu",
                    edat: 12,
                    raça: "Gos d'aigua"
                }

            // Amb spread
            let gos2 = { ...gos1 };

            console.log(gos1); // { nom: "Pintxu", edat: 12, raça: "Gos d'aigua" }
            console.log(gos2); // { nom: "Pintxu", edat: 12, raça: "Gos d'aigua" }
        </code>
    </pre>

    <p>
        Fem una còpia independent de l’objecte <code>gos1</code> i la còpia no afecta l’original.
    </p>

    <p>
    La còpia es pot fer també amb la funció <code>Object.assign()</code>.  Com funciona Object.assign ? Té dos paràmetres: l’objecte de desti i l’objecte de origen. L’objecte de desti es modifica i l’objecte d’origen es conserva intacte.
    </p>
    
    <pre>
        <code>
            // Amb object literals
            let gos2 = { ...gos1 };
            
            // Amb Object.assign
            let gos3 = Object.assign({}, gos1);

            console.log(gos1); // { nom: "Pintxu", edat: 12, raça: "Gos d'aigua" }
            console.log(gos2); // { nom: "Pintxu", edat: 12, raça: "Gos d'aigua" }
            console.log(gos3); // { nom: "Pintxu", edat: 12, raça: "Gos d'aigua" }
        </code>
    </pre>

    <p>
        Després dels dos paràmetres, podem passar tant objectes com vulguem que s'aniran posant a la seva posició respectiva. 
    </p>

    <pre>
        <code>
            // Amb Object.assign
            let gos3 = Object.assign({}, gos1, { raça: "Pastor aleman" }, { nom: "Boby" });
        </code>
    </pre>

    <p>
        Si modifiquem la propietat <code>raça</code> de <code>gos2</code>, no afecta <code>gos1</code>:
    </p>
        
    <pre>
        <code>
            gos2.raça = "Pastor aleman";
            console.log(gos1); // { nom: "Pintxu", edat: 12, raça: "Gos d'aigua" }
            console.log(gos2); // { nom: "Pintxu", edat: 12, raça: "Pastor aleman" }
        </code>
    </pre>

       
    <h2>
        Combinar objectes
    </h2>

    <p>
        Podem ajuntar diversos objectes en un de sol. Si hi ha propietats repetides, prevalen les de l’últim objecte:
    </p>

    <pre>
        <code>
            let usuari = { nom: "Pau", edat: 25 };
            let dadesExtra = { edat: 28, ciutat: "Barcelona" };

            let combinat = { ...usuari, ...dadesExtra };

            console.log(combinat);
            // { nom: "Pau", edat: 28, ciutat: "Barcelona" }
        </code>
    </pre>

    <p>
        Tant <code>spread</code> com <code>Object.assign()</code> fan una <strong>còpia superficial</strong> (shallow copy), això vol dir que si alguna propietat és un objecte, es copiarà la referència, no el contingut. 
    </p>

    <p>
        En altres paraules, Si la propietat és un valor primitiu (com un número, un text, un booleà...), es copia correctament i de forma independent. Però si la propietat és un objecte (com un altre objecte o un array), no es copia el contingut, sinó que es copia la referència a la mateixa zona de memòria o que és el mateix, apunten al mateix objecte, per tant, si fem canvis, afecten a tots dos.
    </p>

    <pre>
        <code>
            let alumne1 = {
                nom: "Clara",
                adreça: { ciutat: "Barcelona" }
            };

                let alumne2 = { ...alumne1 };
                alumne2.adreça.ciutat = "Girona";

                console.log(alumne1.adreça.ciutat); // Girona (!)

        </code>
    </pre>

    <p>
        Encara que hem fet ...alumne1, l’objecte intern adreça no s’ha duplicat realment, sinó que alumne1.adreça i alumne2.adreça són el mateix objecte en memòria. Per això, si canvies ciutat en un, canvia també en l'altre. Si es vol evitar, cal fer una còpia profunda (deep copy). Ja ho ensenyarem més endavant.
    </p>


    <h2>
        Exercicis
    </h2>

    <h3>
        Exercici 1: Còpia d’un objecte
    </h3>

    <p>
        Fes una còpia independent de l’objecte <code>cotxe</code> i modifica el model de la còpia sense afectar l’original.
    </p>

    <pre>
        <code>
            let cotxe = { marca: "Toyota", model: "Corolla", any: 2020 };
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let copiaCotxe = { ...cotxe };
            copiaCotxe.model = "Yaris";

            console.log(cotxe.model);      // Corolla
            console.log(copiaCotxe.model); // Yaris
        </code>
    </pre>

    <h3>
        Exercici 2: Combinar dues persones
    </h3>

    <p>
        Combina la informació de <code>persona1</code> i <code>persona2</code> en un nou objecte. Prevalen les dades de <code>persona2</code> si hi ha conflicte.
    </p>

    <pre>
        <code>
            let persona1 = { nom: "Joana", edat: 40 };
            let persona2 = { edat: 45, ciutat: "Girona" };
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio2')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
        <code>
            let personaCombinada = { ...persona1, ...persona2 };

            console.log(personaCombinada);
            // { nom: "Joana", edat: 45, ciutat: "Girona" }
        </code>
    </pre>

    <h3>
        Exercici 3: Object.assign per copiar
    </h3>

    <p>
        Fes una còpia de l’objecte <code>llibre</code> amb <code>Object.assign</code> i modifica el títol només a la còpia.
    </p>

    <pre>
        <code>
            let llibre = { titol: "1984", autor: "George Orwell" };
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio3')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
        <code>
            let copiaLlibre = Object.assign({}, llibre);
            copiaLlibre.titol = "Rebel·lió a la granja";

            console.log(llibre.titol);       // 1984
            console.log(copiaLlibre.titol);  // Rebel·lió a la granja
        </code>
    </pre>

    <h3>
        Exercici 4: Fusionar configuracions
    </h3>

    <p>
        Fusiona els dos objectes <code>configPerDefecte</code> i <code>configUsuari</code>. Les opcions de l’usuari han de prevaldre.
    </p>

    <pre>
        <code>
            let configPerDefecte = { tema: "clar", idioma: "ca", mida: "mitjana" };
            let configUsuari = { tema: "fosc", mida: "gran" };
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio4')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio4" style="display:none;">
        <code>
        let configFinal = { ...configPerDefecte, ...configUsuari };

        console.log(configFinal);
        // { tema: "fosc", idioma: "ca", mida: "gran" }
        </code>
    </pre>

    <h2>
        Conclusions
    </h2>

    <p>
        Duplicar o combinar objectes de forma clara i eficient és fonamental per evitar efectes col·laterals en el nostre codi. L’operador <code>spread</code> i la funció <code>Object.assign</code> són eines essencials per aconseguir-ho.
    </p>

    <script>
    function mostrarSolucio(id) {
        const elem = document.getElementById(id);
        elem.style.display = (elem.style.display === "none") ? "block" : "none";
    }
    </script>
</body>
</html>
