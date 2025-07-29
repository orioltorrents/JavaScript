<?php
$titol = "Arrow functions i el context";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">
      Anar a l'índex
    </a>
  </p>

  <h1>
    Arrow functions i el context
  </h1>

  <p>
    Les <strong>arrow functions</strong> tenen una particularitat molt important respecte a les funcions tradicionals: <code>this</code> no es redefineix dins d'elles. Això vol dir que <code>this</code> conserva el valor del context on s’ha definit la funció, no pas on s’executa.
  </p>

  <p>
    Aquesta característica fa que siguin molt útils per mantenir el valor de <code>this</code> en funcions internes, especialment quan treballem amb objectes, esdeveniments o <code>setTimeout</code>/<code>setInterval</code>.
  </p>

  <h2>
    Exemple comparatiu
  </h2>

  <p>
    Observa com es comporta <code>this</code> en una funció normal vs. una arrow function:
  </p>

  <pre>
    <code>
      const persona = {
        nom: "Clara", // Propietat de l'objecte amb el nom de la persona

        // Mètode que fa servir una funció tradicional dins de setTimeout
        saludarAmbFuncioNormal: function() {
          setTimeout(function() {
            // En una funció normal, 'this' apunta al context global (window), no a 'persona'
            console.log("Hola, sóc " + this.nom); // this.nom = undefined
          }, 1000);
        },

        // Mètode que fa servir una arrow function dins de setTimeout
        saludarAmbArrow: function() {
          setTimeout(() => {
            // Les arrow functions no canvien el valor de 'this',
            // així que 'this' segueix sent l'objecte 'persona'
            console.log("Hola, sóc " + this.nom); // this.nom = "Clara"
          }, 1000);
        }
      };

      // Crida al primer mètode: donarà "Hola, sóc undefined" perquè 'this' no és 'persona'
      persona.saludarAmbFuncioNormal();

      // Crida al segon mètode: donarà "Hola, sóc Clara" perquè 'this' es manté lligat a 'persona'
      persona.saludarAmbArrow();

    </code>
  </pre>

  <p>
    L’arrow function no redefineix el this, per tant, hereta el this del context on s’ha definit. En canvi, una funció normal crea el seu propi this, i dins de setTimeout, aquest fa referència a window (o undefined en mode estricte), no a l’objecte persona.
  </p>
  
  <p>
    A la funció normal, <code>this</code> dins de <code>setTimeout</code> apunta al context global (o <code>undefined</code> en mode estricte), mentre que a l'arrow function es manté el <code>this</code> de l'objecte <code>persona</code>.
  </p>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici 1: Saludar des d’un objecte amb arrow function
  </h3>

  <p>
    Crea un objecte <code>usuari</code> amb una propietat <code>nom</code> i un mètode que mostri el nom amb un <code>setTimeout</code> de 1 segon. Fes-ho primer amb una arrow function perquè funcioni correctament.
  </p>

  <pre>
    <code>
      const usuari = {
        nom: "Joan",
        saluda: function() {
          // Escriu aquí
        }
      };

      usuari.saluda();
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      const usuari = {
        nom: "Joan",
        saluda: function() {
          setTimeout(() => {
            console.log("Hola " + this.nom);
          }, 1000);
        }
      };

      usuari.saluda();
    </code>
  </pre>

  <h3>
    Exercici 2: Comparar amb funció normal
  </h3>

  <p>
    Reescriu l’exercici anterior però fent servir una funció tradicional dins de <code>setTimeout</code>. Observa què passa amb <code>this</code>.
  </p>

  <pre>
    <code>
      const usuari = {
        nom: "Joan",
        saluda: function() {
          // Escriu aquí
        }
      };

      usuari.saluda();
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      const usuari = {
        nom: "Joan",
        saluda: function() {
          setTimeout(function() {
            console.log("Hola " + this.nom); // this no apunta a usuari
          }, 1000);
        }
      };

      usuari.saluda(); // Hola undefined
    </code>
  </pre>

  <h2>
    Conclusió
  </h2>

  <p>
    Les <strong>arrow functions</strong> no tenen el seu propi <code>this</code>; hereten el del context on han estat definides. Això és molt útil per mantenir la referència correcta dins de callbacks com <code>setTimeout</code>, <code>forEach</code>, etc.
  </p>

  <p>
    Sempre que necessitis accedir a <code>this</code> en contextos interns, considera usar arrow functions per evitar problemes.
  </p>

  <script>
    function mostrarSolucio(id) {
      const element = document.getElementById(id);
      element.style.display = (element.style.display === "none") ? "block" : "none";
    }
  </script>
</body>
</html>