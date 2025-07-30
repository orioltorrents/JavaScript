<?php
$titol = "Mètodes i propietats estàtiques";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">
      Anar a l'índex
    </a>
  </p>

  <h1>
    Mètodes i propietats estàtiques
  </h1>

  <p>
    A JavaScript, podem definir <strong>propietats i mètodes estàtics</strong> dins d’una classe amb la paraula clau <code>static</code>. Aquest tipus de membres <strong>no pertanyen a cap <span title="Una instància és un objecte creat a partir d’una classe. Cada cop que fem 'new', creem una instància.">instància</span> concreta</strong> de la classe, sinó a la classe en si mateixa.
  </p>

  <p>
    Són útils quan volem crear funcions auxiliars o valors compartits entre totes les instàncies. No necessiten que es creï cap objecte per poder-se utilitzar.
  </p>

  <h2>
    Exemple bàsic de mètode estàtic
  </h2>

  <pre>
    <code>
      class Calculadora {
        static suma(a, b) {
          return a + b;
        }
      }

      console.log(Calculadora.suma(3, 7)); // 10
    </code>
  </pre>

  <p>
    En aquest exemple, el mètode <code>suma</code> no depèn de cap instància de <code>Calculadora</code>. Podem cridar-lo directament des de la classe.
  </p>

  <h2>
    Propietats estàtiques
  </h2>

  <pre>
    <code>
      class Configuracio {
        static versio = "1.0.3";
      }

      console.log(Configuracio.versio); // "1.0.3"
    </code>
  </pre>

  <p>
    Igual que els mètodes, les propietats estàtiques es poden accedir directament des de la classe.
  </p>

  <h2>
    Diferència amb mètodes d’instància
  </h2>

  <p>
    Els <strong>mètodes normals</strong> s’accedeixen mitjançant una instància:
  </p>

  <pre>
    <code>
      class Persona {
        constructor(nom) {
          this.nom = nom;
        }

        saluda() {
          return "Hola, sóc " + this.nom;
        }
      }

      const joan = new Persona("Joan");
      console.log(joan.saluda()); // Hola, sóc Joan
    </code>
  </pre>

  <p>
    En canvi, si definíssim <code>saluda</code> com a estàtic, hauríem d’accedir-hi com <code>Persona.saluda()</code>, però llavors <code>this.nom</code> no existiria perquè no hi ha cap instància.
  </p>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Mètode estàtic per convertir graus
  </h3>

  <p>
    Crea una classe <code>Conversor</code> amb un mètode estàtic <code>celsiusAFahrenheit</code> que converteixi graus Celsius a Fahrenheit.
  </p>

  <pre>
    <code>
      // Implementa aquí la classe Conversor
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      class Conversor {
        static celsiusAFahrenheit(celsius) {
          return (celsius * 9/5) + 32;
        }
      }

      console.log(Conversor.celsiusAFahrenheit(25)); // 77
    </code>
  </pre>

  <h3>
    Exercici: Comptador de crides
  </h3>

  <p>
    Crea una classe <code>Crides</code> amb una propietat estàtica <code>comptador</code> i un mètode estàtic <code>incrementar()</code> que augmenti el comptador i el mostri per consola.
  </p>

  <pre>
    <code>
      // Implementa aquí la classe Crides
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      class Crides {
        static comptador = 0;

        static incrementar() {
          this.comptador++;
          console.log("Comptador: " + this.comptador);
        }
      }

      Crides.incrementar(); // Comptador: 1
      Crides.incrementar(); // Comptador: 2
    </code>
  </pre>

  <h3>
    Exercici: Nom d'aplicació com a propietat estàtica
  </h3>

  <p>
    Crea una classe <code>Aplicacio</code> amb una propietat estàtica <code>nom</code> i un mètode estàtic <code>mostrarNom()</code> que la mostri per consola.
  </p>

  <pre>
    <code>
      // Implementa aquí la classe Aplicacio
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
      class Aplicacio {
        static nom = "Gestor de Tasques";

        static mostrarNom() {
          console.log("Aplicació: " + this.nom);
        }
      }

      Aplicacio.mostrarNom(); // Aplicació: Gestor de Tasques
    </code>
  </pre>

  <script>
    function mostrarSolucio(id) {
      const solucio = document.getElementById(id);
      if (solucio.style.display === "none") {
        solucio.style.display = "block";
      } else {
        solucio.style.display = "none";
      }
    }
  </script>
</body>
