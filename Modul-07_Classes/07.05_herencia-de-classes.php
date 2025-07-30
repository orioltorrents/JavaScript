<?php
$titol = "Herència de classes";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">
      Anar a l'índex
    </a>
  </p>

  <h1>
    Herència de classes
  </h1>

  <p>
    Una de les grans avantatges de la programació orientada a objectes és la possibilitat de <strong>reutilitzar codi</strong> mitjançant l’<strong>herència</strong>. En JavaScript, podem crear una classe base (també anomenada "pare") i fer que altres classes ("filles") heretin les seves propietats i mètodes. Això permet que diferents objectes comparteixin funcionalitats comunes sense duplicar el codi.
  </p>

  <p>
    Per fer-ho, utilitzem la paraula clau <code>extends</code>. Aquesta indica que una classe hereta d'una altra. Quan volem cridar el constructor de la classe pare dins de la subclasse, utilitzem <code>super()</code>. Això és obligatori si volem accedir a <code>this</code> dins la subclasse.
  </p>

  <p>
    A més, una classe filla pot <strong>afegir noves propietats o mètodes</strong> que només li són propis, o fins i tot <strong>substituir (sobreescriure)</strong> els mètodes del pare si vol personalitzar-ne el comportament. Aquesta flexibilitat ens permet adaptar el codi a casos concrets sense perdre la reutilització.
  </p>

  <p>
    Veiem un exemple
  </p>

  <pre>
    <code>
        // Classe pare
        class Animal {
          constructor(nom) {
            this.nom = nom;
          }

          ferSoroll() {
            console.log("Aquest animal fa un soroll indefinit.");
          }
        }
    </code>
  </pre>


  <p>
    La classe fill podria ser aixi
  </p>

  <pre>
    <code>
      // Classe filla que hereta d'Animal
      class Gos extends Animal {
        constructor(nom, raça) {
          super(nom); // reutilitza el constructor del pare
          this.raça = raça; // propietat nova només pel gos
        }

        // Sobreescrivim el mètode ferSoroll()
        ferSoroll() {
          console.log(`${this.nom} diu: Bup Bup!`);
        }

        // Mètode nou afegit a la subclasse
        mostrarInfo() {
          console.log(`${this.nom} és un gos de raça ${this.raça}.`);
        }
      }

      // Exemple d'ús
      let rex = new Gos("Rex", "Labrador");
      rex.ferSoroll();     // Rex diu: Bup Bup!
      rex.mostrarInfo();   // Rex és un gos de raça Labrador
    </code>
  </pre>

  <p>
    Què ha passat? 
  </p>

  <ul>
    <li>
      Gos hereta el mètode i la propietat de Animal gràcies a extends.
    </li>
    <li>
      Amb super(nom), cridem el constructor del pare.
    </li>
    <li>
      Afegim una propietat nova (raça) i un mètode nou (mostrarInfo()).
    </li>
    <li>
      Sobreescrivim el mètode ferSoroll() per fer-lo específic per gossos.
    </li>
  </ul>

  <p>
    A continuació veurem un exemple amb una classe <code>Player</code> que encapsula el comportament comú de reproduir un vídeo, i dues subclasses concretes: <code>Youtube</code> i <code>Vimeo</code>. Aquestes dues només necessiten afegir informació específica si cal, ja que la funcionalitat principal ja està definida a la classe pare.
  </p>

  <h2>
    Exemple amb herència
  </h2>

  <pre>
    <code>
      // Classe base amb comportament comú
      class Player {
        constructor(id) {
          this.id = id;
        }

        reproduir() {
          console.log(`Reproduint vídeo amb ID: ${this.id}`);
        }
      }

      // Subclasse per a YouTube
      class Youtube extends Player {
        constructor(id) {
          super(id); // super crida el constructor de Player
          this.plataforma = "YouTube";
        }
      }

      // Subclasse per a Vimeo
      class Vimeo extends Player {
        constructor(id) {
          super(id); // reutilitzem constructor de Player
          this.plataforma = "Vimeo";
        }
      }

      // Exemple d'ús
      let video1 = new Youtube("abc123");
      video1.reproduir(); // Reproduint vídeo amb ID: abc123

      let video2 = new Vimeo("xyz789");
      video2.reproduir(); // Reproduint vídeo amb ID: xyz789
    </code>
  </pre>

  <h2>
    Què fa cada part del codi?
  </h2>

  <ul>
    <li><code>class Player</code>: és la classe pare, conté el mètode <code>reproduir()</code> comú a totes les plataformes.</li>
    <li><code>extends Player</code>: fa que <code>Youtube</code> i <code>Vimeo</code> heretin totes les funcionalitats de <code>Player</code>.</li>
    <li><code>super(id)</code>: crida al constructor de la classe pare i ens permet accedir a <code>this.id</code>.</li>
    <li><code>this.plataforma</code>: és una propietat afegida només a les subclasses, per tenir informació específica de cada tipus.</li>
  </ul>

  <h2>
    Extendre funcionalitats
  </h2>

  <p>
    Podem també heredar els metodes i les propietats dels build in objects de JavaScript, com ara <code>Array</code>, <code>Date</code> o <code>Object</code> per poder afegir funcionalitats com ara <code>forEach</code> o <code>map</code>.
  </p>

  <pre>
    <code>
      class Customdate extends Date {}
      class CustomArray extends Array {}
    </code>
  </pre>

  <p>
    Tot i que actualment utilitzem <code>class</code> i <code>extends</code>, cal saber que abans de l’ES6 l’herència es feia amb funcions constructores i manipulació del <code>prototype</code>. Avui dia, només cal conèixer-ho com a referència històrica o per llegir codi antic.
  </p>

  <h2>
    Conclusions
  </h2>

  <p>
    Amb l’ús d’<code>extends</code> i <code>super()</code>, podem construir jerarquies de classes on totes comparteixen una base comuna. Això ens permet escriure menys codi, mantenir-lo millor organitzat, i fer-lo més fàcil d’escalar. Si en el futur volem afegir funcionalitats com ara <code>pausar()</code> o <code>mostrarPlataforma()</code>, només caldria afegir-les a <code>Player</code> i totes les subclasses les heretarien automàticament.
  </p>

  <h2>
  Exercicis
  </h2>

  <h3>
    Exercici 1: Herència d’una propietat
  </h3>

  <p>
    Crea una classe <code>Vehicle</code> amb una propietat <code>marca</code> i un mètode <code>mostrarMarca()</code>. Fes que la classe <code>Cotxe</code> hereti de <code>Vehicle</code> i crea una instància per provar-ho.
  </p>

  <pre>
    <code>
      // Escriu les dues classes i comprova que la marca es mostra correctament.
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      class Vehicle {
        constructor(marca) {
          this.marca = marca;
        }

        mostrarMarca() {
          console.log("Marca: " + this.marca);
        }
      }

      class Cotxe extends Vehicle {
        // No cal afegir res més si només volem heretar
      }

      let cotxe1 = new Cotxe("Toyota");
      cotxe1.mostrarMarca(); // Marca: Toyota
    </code>
  </pre>

  <h3>
    Exercici 2: Afegir propietat nova al fill
  </h3>

  <p>
    A partir de l’exercici anterior, afegeix a <code>Cotxe</code> una nova propietat <code>model</code> i un mètode <code>mostrarInfo()</code> que mostri la marca i el model.
  </p>

  <pre>
    <code>
      // Pensa a fer servir super() dins del constructor del fill.
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      class Vehicle {
        constructor(marca) {
          this.marca = marca;
        }
      }

      class Cotxe extends Vehicle {
        constructor(marca, model) {
          super(marca);
          this.model = model;
        }

        mostrarInfo() {
          console.log(`Cotxe: ${this.marca} ${this.model}`);
        }
      }

      let cotxe1 = new Cotxe("Honda", "Civic");
      cotxe1.mostrarInfo(); // Cotxe: Honda Civic
    </code>
  </pre>

  <h3>
    Exercici 3: Sobreescriure un mètode
  </h3>

  <p>
    Fes que la classe <code>Cotxe</code> sobreescrigui un mètode <code>arrencar()</code> de <code>Vehicle</code> per mostrar un missatge diferent.
  </p>

  <pre>
    <code>
      // Recorda que pots definir el mètode amb el mateix nom i el fill el sobreescriurà.
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
      class Vehicle {
        arrencar() {
          console.log("El vehicle s’està posant en marxa...");
        }
      }

      class Cotxe extends Vehicle {
        arrencar() {
          console.log("El cotxe està arrencant amb clau electrònica.");
        }
      }

      let cotxe1 = new Cotxe();
      cotxe1.arrencar(); // El cotxe està arrencant amb clau electrònica.
    </code>
  </pre>


  <script>
    function mostrarSolucio(id) {
      let solucio = document.getElementById(id);
      if (solucio.style.display === "none") {
        solucio.style.display = "block";
      } else {
        solucio.style.display = "none";
      }
    }
  </script>
</body>
