<?php
$titol = "Reduir un array amb reduce";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">
      Anar a l'índex
    </a>
  </p>

  <h1>
    Reduir un array amb reduce
  </h1>

  <p>
    El mètode <code>reduce</code> serveix per agrupar o reduir tots els valors d’un array a un sol valor. Accepta una <span title="Una callback és una funció que passem com a argument a una altra funció, perquè s'executi més endavant, normalment quan es compleix una condició o s'acaba una acció.">callback</span> com a primer argument, i un valor inicial com a segon.
  </p>

  <p>
    Per exemple, per sumar tots els números d’un array:
  </p>

  <pre>
    <code>
        let nombres = [1, 2, 3, 4];

        let suma = nombres.reduce(function(acc, actual) {
        return acc + actual;
        }, 0);

        console.log(suma); // 10
    </code>
  </pre>

  <p>
    El primer valor és l’acumulador (<code>acc</code>), que comença en 0. Després es va sumant cada valor (<code>actual</code>) de l’array.
  </p>

  <h2> 
    Per a què serveix realment <code>reduce</code>? 
  </h2>
  
  <p>
    El mètode <code>reduce</code> és molt útil quan volem transformar un array en un únic resultat. S'utilitza sovint per: 
  </p>
  
  <ul>
    <li>
        <strong>Fer càlculs:</strong> com sumes, multiplicacions o mitjanes d’un conjunt de valors.
    </li>
    <li>
        <strong>Comptar o agrupar:</strong> per exemple, quantes vegades apareix cada paraula en un text.
    </li>
    <li>
        <strong>Transformar en altres estructures:</strong> convertir un array en un objecte, una cadena o un array nou.
    </li>
    <li>
        <strong>Processar dades:</strong> en aplicacions reals, com ara calcular el total de la cistella de la compra, resumir resultats d’una enquesta o crear informes.
    </li> 
  </ul> 
  
  <p> 
    Tot i que pot semblar complicat al principi, un cop entès, <code>reduce</code> es converteix en una eina potent i elegant per fer operacions complexes amb arrays. 
  </p>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Suma total d’un array
  </h3>

  <p>
    Tenim un array de notes i volem obtenir la suma total. Fes servir <code>reduce</code>.
  </p>

  <pre>
    <code>
        let notes = [6, 8, 7, 9, 5];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
        let notes = [6, 8, 7, 9, 5];

        let suma = notes.reduce(function(acc, nota) {
        return acc + nota;
        }, 0);

        console.log(suma); // 35
    </code>
  </pre>

  <h3>
    Exercici: Producte de tots els elements
  </h3>

  <p>
    Tenim un array de números enters i volem calcular el seu producte.
  </p>

  <pre>
    <code>
        let valors = [2, 3, 4];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
        let valors = [2, 3, 4];

        let producte = valors.reduce(function(acc, num) {
        return acc * num;
        }, 1);

        console.log(producte); // 24
    </code>
  </pre>

  <h3>
    Exercici: Comptar quants són parells
  </h3>

  <p>
    Amb <code>reduce</code>, compta quants nombres parells hi ha dins l’array.
  </p>

  <pre>
    <code>
        let nombres = [3, 6, 8, 7, 4, 9];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
        let nombres = [3, 6, 8, 7, 4, 9];

        let parells = nombres.reduce(function(acc, num) {
        if (num % 2 === 0) {
            return acc + 1;
        } else {
            return acc;
        }
        }, 0);

        console.log(parells); // 3
    </code>
  </pre>

  <h3>
    Exercici: Convertir array a objecte
  </h3>

  <p>
    A partir d’un array de paraules, crea un objecte amb les paraules com a claus i la seva longitud com a valor.
  </p>

  <pre>
    <code>
        let paraules = ["casa", "ordinador", "gat"];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio4" style="display:none;">
    <code>
        let paraules = ["casa", "ordinador", "gat"];

        let objecte = paraules.reduce(function(acc, paraula) {
        acc[paraula] = paraula.length;
        return acc;
        }, {});

        console.log(objecte); 
        // { casa: 4, ordinador: 9, gat: 3 }
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
