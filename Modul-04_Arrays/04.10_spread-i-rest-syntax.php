<?php
$titol = "Spread i Rest Syntax";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">Anar a l'índex</a>
  </p>

  <h1>
    Spread i Rest Syntax
  </h1>

  <p>
    En aquest apartat aprendrem dues eines molt potents de JavaScript: l'operador <code>...</code>, que pot funcionar de dues maneres segons on el posem:
  </p>

  <ul>
    <li>
        <strong>Spread</strong>: quan volem <strong>expandir</strong> un array o objecte.
    </li>
    <li>
        <strong>Rest</strong>: quan volem <strong>recollir</strong> valors dins d'una funció com a array.
    </li>
  </ul>

  <p>
    Necessitem introduir el concepte de iterable per entendre l'operador <code>...</code>. Qualsevol objecte de JD que pot ser separat en elements pot ser considerat iterable. Un iterable és un objecte que conté elements que podem recorrer amb un bucle. Els arrays, els strings i els objectes són iterables. Un array conté elements iterables que són els elements de l'array. Un string conté iterables que són els caracters del string. Un object és un iterable perquè els propietats de l'objecte els podem recorrer o iterar. La spread syntax ens permet expandir arrays i objectes a l'hora de passar arguments a una funció o elements a un array. 
  </p>

  <h2>
    Spread Syntax (....) o sintaxi d'expansió
  </h2>

  <p>
    Per expandir un array o objecte utilitzem l'operador <code>...</code> a l'hora de passar arguments a una funció o elements a un array.
  </p>

  <pre>
    <code>
      let array = [1, 2, 3];
      console.log(array); // [1, 2, 3]
      console.log(...array); // 1 2 3
    </code>
  </pre>

  <p>
    Funciona també amb strings. Els caracters del string es converteixen en elements de l'array.
  </p>

  <pre>
    <code>
      let string = "hola";
      console.log(string); // hola
      console.log(...string); // h o l a
    </code> 
  </pre>

  <p>
    Funciona també amb objectes. Les propietats de l'objecte es converteixen en elements de l'array.
  </p>

  <pre>
    <code>
      let objecte = {
        nom: "Pintxu",
        edat: 12,
        raça: "Gos d'aigua"
      }

      console.log(objecte); // { nom: "Pintxu", edat: 12, raça: "Gos d'aigua" }
      console.log(...objecte); // nom Pintxu edat 12 raça Gos d'aigua 
    </code>
  </pre>
  
  <p>
    El spread ens permet copiar o combinar arrays fàcilment.
  </p>

  <h3>
    Exemple: combinar dos arrays
  </h3>

  <pre>
    <code>
      let fruits = ["poma", "plàtan"];
      let verdures = ["pastanaga", "enciam"];

      let tot = [...fruits, ...verdures];

      console.log(tot); // ["poma", "plàtan", "pastanaga", "enciam"]
    </code>
  </pre>

  <h2>
    Rest Syntax
  </h2>

  <p>
    El rest ens permet agrupar múltiples arguments d'una funció en un sol array.
  </p>

  <p>
    L'exemple més fàcil és aquest
  </p>

  <pre>
    <code>
      function demo(...array) {
        console.log(array);
      }
      demo(1, 2, 3); // [1, 2, 3]
    </code>
  </pre>

  <p>
      Un altre exemple    
  </p>

  <pre>
    <code>
      function mitjana(nom,...notes) {
        console.log(nom, notes);
      }
      mitjana("Pau", 8, 9, 10); // Pau [8, 9, 10]
    </code>
  </pre>

  <h3>
    Exemple: suma amb rest
  </h3>

  <pre>
    <code>
      function suma(...nombres) {
        return nombres.reduce(function(total, actual) {
          return total + actual;
        }, 0);
      }

      console.log(suma(1, 2, 3, 4)); // 10
    </code>
  </pre>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Copia un array i afegeix nous elements
  </h3>

  <p>
    Tenim un array amb colors. Fes-ne una còpia i afegeix-hi "negre" i "blanc" al final.
  </p>

  <pre>
    <code>
      let colors = ["vermell", "groc", "blau"];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      let colors = ["vermell", "groc", "blau"];

      let nousColors = [...colors, "negre", "blanc"];

      console.log(nousColors); // ["vermell", "groc", "blau", "negre", "blanc"]
    </code>
  </pre>

  <h3>
    Exercici: Agrupa arguments amb rest
  </h3>

  <p>
    Fes una funció anomenada <code>llista</code> que accepti qualsevol nombre de paraules i les mostri com un array.
  </p>

  <pre>
    <code>
      // crida esperada
      llista("taula", "cadira", "llit"); // ["taula", "cadira", "llit"]
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      function llista(...paraules) {
        console.log(paraules);
      }

      llista("taula", "cadira", "llit");
    </code>
  </pre>

  <h3>
    Exercici: Combina i ordena dues llistes
  </h3>

  <p>
    Combina dues llistes de noms i ordena-les alfabèticament.
  </p>

  <pre>
    <code>
      let alumnes1 = ["Oriol", "Clàudia"];
      let alumnes2 = ["Anna", "Joan"];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
      let alumnes1 = ["Oriol", "Clàudia"];
      let alumnes2 = ["Anna", "Joan"];

      let tots = [...alumnes1, ...alumnes2].sort();

      console.log(tots); // ["Anna", "Clàudia", "Joan", "Oriol"]
    </code>
  </pre>

  <h3>
    Exercici: Multiplica tots els arguments
  </h3>

  <p>
    Fes una funció <code>multiplica</code> que accepti tants números com vulguis i retorni el seu producte.
  </p>

  <button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio4" style="display:none;">
    <code>
      function multiplica(...nums) {
        return nums.reduce(function(producte, num) {
          return producte * num;
        }, 1);
      }

      console.log(multiplica(2, 3, 4)); // 24
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
