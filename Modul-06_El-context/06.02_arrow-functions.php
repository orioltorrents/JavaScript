<?php
$titol = "Funcions fletxa (arrow functions)";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">
      Anar a l'índex
    </a>
  </p>

  <h1>
    Funcions fletxa (arrow functions)
  </h1>

  <p>
    Les <strong>funcions fletxa</strong> són una forma més concisa d’escriure funcions en JavaScript. Es fan servir molt sovint, sobretot amb mètodes com <code>map</code>, <code>filter</code> o <code>forEach</code>.
  </p>

  <h2>
    Sintaxi bàsica
  </h2>

  <p>
    Una funció tradicional com aquesta:
  </p>

  <pre>
    <code>
      function sumar(a, b) {
        return a + b;
      }
    </code>
  </pre>

  <p>
    Es pot escriure amb sintaxi fletxa així:
  </p>

  <pre>
    <code>
      const sumar = (a, b) => a + b;
    </code>
  </pre>

  <p>
    Si només té un paràmetre, podem ometre els parèntesis:
  </p>

  <pre>
    <code>
      const saludar = nom => "Hola " + nom;
    </code>
  </pre>

  <p>
    Si el cos de la funció té més d’una línia, cal obrir claus i fer servir <code>return</code> com sempre:
  </p>

  <pre>
    <code>
      const multiplicar = (a, b) => {
        let resultat = a * b;
        return resultat;
      };
    </code>
  </pre>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Escriu una funció fletxa senzilla
  </h3>

  <p>
    Crea una funció fletxa que rebi un número i retorni el doble.
  </p>

  <pre>
    <code>
      // Exemple d'ús:
      // doble(4) → 8
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      const doble = x => x * 2;

      console.log(doble(4)); // 8
    </code>
  </pre>

  <h3>
    Exercici: Multiplica amb <code>map</code>
  </h3>

  <p>
    Multiplica tots els valors d’un array per 10 amb una funció fletxa i el mètode <code>map</code>.
  </p>

  <pre>
    <code>
      let nombres = [1, 2, 3, 4];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      let nombres = [1, 2, 3, 4];

      let perDeu = nombres.map(n => n * 10);

      console.log(perDeu); // [10, 20, 30, 40]
    </code>
  </pre>

  <h3>
    Exercici: Missatge segons si és parell o no
  </h3>

  <p>
    Escriu una funció fletxa que retorni "És parell" o "És imparell" segons el número donat.
  </p>

  <pre>
    <code>
      // Exemple:
      // parell(6) → "És parell"
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
      const parell = num => {
        return num % 2 === 0 ? "És parell" : "És imparell";
      };

      console.log(parell(6)); // És parell
    </code>
  </pre>

  <h3>
    Exercici: Funció amb nom i cognom
  </h3>

  <p>
    Fes una funció fletxa que rebi dos paràmetres (<code>nom</code> i <code>cognom</code>) i retorni una frase com ara: "Hola Maria Garcia".
  </p>

  <button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio4" style="display:none;">
    <code>
      const saludar = (nom, cognom) => `Hola ${nom} ${cognom}`;

      console.log(saludar("Maria", "Garcia")); // Hola Maria Garcia
    </code>
  </pre>

  <h3>
    Exercici: Comptar quants són positius
  </h3>

  <p>
    Usa <code>filter</code> amb una arrow function per comptar quants nombres són positius.
  </p>

  <pre>
    <code>
      let valors = [-4, 0, 5, 12, -1, 3];
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio5')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio5" style="display:none;">
    <code>
      let valors = [-4, 0, 5, 12, -1, 3];

      let positius = valors.filter(num => num > 0);

      console.log(positius.length); // 3
    </code>
  </pre>

  <h2>
    Conclusions
  </h2>

  <p>
    Les funcions fletxa són ideals per fer codi breu i llegible. Són molt útils amb <code>map</code>, <code>filter</code> i <code>forEach</code>. A classe aprendrem quan és millor usar-les i quan no.
  </p>

  <script>
    function mostrarSolucio(id) {
      let element = document.getElementById(id);
      element.style.display = (element.style.display === "none") ? "block" : "none";
    }
  </script>
</body>
</html>