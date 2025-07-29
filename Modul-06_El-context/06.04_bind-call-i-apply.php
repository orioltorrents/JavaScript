<?php
$titol = "bind(), call() i apply()";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">
      Anar a l'índex
    </a>
  </p>

  <h1>
    bind(), call() i apply()
  </h1>

  <p>
    En JavaScript, les funcions <code>bind()</code>, <code>call()</code> i <code>apply()</code> ens permeten controlar explícitament el valor de <code>this</code> dins d'una funció. Això és útil quan volem reutilitzar funcions amb diferents objectes o mantenir el context en funcions asíncrones.
  </p>

  <h2>
    call()
  </h2>

  <p>
    La funció <code>call()</code> executa una funció indicant explícitament quin ha de ser el valor de <code>this</code>. Els arguments s'han de passar un per un.
  </p>

  <pre>
    <code>
      function saluda() {
        console.log("Hola, sóc " + this.nom);
      }

      const persona = { nom: "Clara" };

      saluda.call(persona); // Hola, sóc Clara
    </code>
  </pre>

  <h2>
    apply()
  </h2>

  <p>
    <code>apply()</code> funciona igual que <code>call()</code>, però els arguments s'han de passar com un array.
  </p>

  <pre>
    <code>
      function presenta(edat, ciutat) {
        console.log(`Sóc ${this.nom}, tinc ${edat} anys i visc a ${ciutat}`);
      }

      const alumne = { nom: "Joan" };

      presenta.apply(alumne, [17, "Barcelona"]);
      // Sóc Joan, tinc 17 anys i visc a Barcelona
    </code>
  </pre>

  <h2>
    bind()
  </h2>

  <p>
    La funció <code>bind()</code> no executa la funció immediatament, sinó que retorna una nova funció amb el <code>this</code> fixat. Aquesta és útil quan volem guardar una funció per usar-la més endavant.
  </p>

  <pre>
    <code>
      const botiga = {
        nom: "Llibres.cat",
        mostrarNom: function() {
          console.log("Botiga: " + this.nom);
        }
      };

      const mostra = botiga.mostrarNom.bind(botiga);

      setTimeout(mostra, 1000); // Botiga: Llibres.cat
    </code>
  </pre>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Reutilitza una funció amb <code>call</code>
  </h3>

  <p>
    Crea una funció <code>saludar</code> que imprimeixi "Hola, sóc X". Després reutilitza-la amb <code>call</code> per fer-la servir amb un objecte amb el nom "Pere".
  </p>

  <pre>
    <code>
      function saludar() {
        // ...
      }

      const usuari = { nom: "Pere" };

      // Crida amb call aquí
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      function saludar() {
        console.log("Hola, sóc " + this.nom);
      }

      const usuari = { nom: "Pere" };

      saludar.call(usuari); // Hola, sóc Pere
    </code>
  </pre>

  <h3>
    Exercici: Utilitza <code>apply</code> per passar arguments
  </h3>

  <p>
    Fes una funció <code>descripcio</code> que imprimeixi el nom, edat i ciutat d'una persona. Utilitza <code>apply</code> per passar aquestes dades.
  </p>

  <pre>
    <code>
      function descripcio(edat, ciutat) {
        // ...
      }

      const persona = { nom: "Maria" };

      // Usa apply aquí
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      function descripcio(edat, ciutat) {
        console.log(`${this.nom}, ${edat} anys, viu a ${ciutat}`);
      }

      const persona = { nom: "Maria" };

      descripcio.apply(persona, [25, "Girona"]);
    </code>
  </pre>

  <h3>
    Exercici: Guarda el context amb <code>bind</code>
  </h3>

  <p>
    Crea un objecte amb una funció que imprimeixi el nom. Després guarda la funció amb <code>bind</code> i crida-la amb <code>setTimeout</code>.
  </p>

  <pre>
    <code>
      const profe = {
        nom: "Laura",
        dirNom: function() {
          // ...
        }
      };

      // Usa bind per mantenir el context i setTimeout
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
      const profe = {
        nom: "Laura",
        dirNom: function() {
          console.log("Nom: " + this.nom);
        }
      };

      const dir = profe.dirNom.bind(profe);
      setTimeout(dir, 1000);
    </code>
  </pre>

  <script>
    function mostrarSolucio(id) {
      const el = document.getElementById(id);
      el.style.display = el.style.display === "none" ? "block" : "none";
    }
  </script>
</body>
</html>