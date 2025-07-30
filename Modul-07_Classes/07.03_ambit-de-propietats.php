<?php
$titol = "Àmbit de propietats";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">Anar a l'índex</a>
  </p>

  <h1>
    Àmbit de propietats
  </h1>

  <p>
    En una classe de JavaScript, podem definir diferents tipus de propietats: <strong>públiques</strong> (accedibles des de fora) i <strong>privades</strong> (només accessibles des de dins). A més, poden ser <strong>de la instància</strong> o <strong>estàtiques</strong>.
  </p>

  <h2>
    Propietats de la instància
  </h2>

  <p>
    Aquestes propietats es creen dins del constructor i són pròpies de cada objecte creat.
  </p>

  <pre>
    <code>
      class Persona {
        constructor(nom) {
          this.nom = nom;
        }
      }

      const p1 = new Persona("Clara");
      const p2 = new Persona("Pau");

      console.log(p1.nom); // Clara
      console.log(p2.nom); // Pau
    </code>
  </pre>

  <h2>
    Propietats estàtiques
  </h2>

  <p>
    Les propietats estàtiques no es guarden dins de cada objecte, sinó a la pròpia classe. Es defineixen amb la paraula clau <code>static</code>.
  </p>

  <pre>
    <code>
      class Cotxe {
        static marca = "Toyota";

        constructor(model) {
          this.model = model;
        }
      }

      const c = new Cotxe("Yaris");

      console.log(Cotxe.marca); // Toyota
      console.log(c.model);     // Yaris
    </code>
  </pre>

  <h2>
    Propietats fora del constructor
  </h2>

  <p>
    També podem declarar propietats públiques directament dins de la classe sense usar el constructor.
  </p>

  <pre>
    <code>
      class Animal {
        tipus = "mamífer";

        constructor(nom) {
          this.nom = nom;
        }
      }

      const a = new Animal("Dofí");
      console.log(a.tipus); // mamífer
    </code>
  </pre>

  <h2>
    Propietats privades amb <code>#</code>
  </h2>

  <p>
    Quan volem que una propietat sigui completament privada, podem usar el símbol <code>#</code> davant del nom. Això fa que no sigui accessible des de fora de la classe.
  </p>

  <pre>
    <code>
      class Llibre {
        #autor; // propietat privada

        constructor(titol, autor) {
          this.titol = titol;
          this.#autor = autor;
        }

        mostrarAutor() {
          return this.#autor;
        }
      }

      const llibre = new Llibre("1984", "George Orwell");

      console.log(llibre.titol);         // 1984
      console.log(llibre.mostrarAutor()); // George Orwell
      // console.log(llibre.#autor);     // ❌ Error
    </code>
  </pre>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Propietats de la instància
  </h3>

  <p>
    Crea una classe <code>Pel·lícula</code> amb propietats <code>titol</code> i <code>director</code> que s’assignin dins el constructor. Afegeix dues instàncies diferents.
  </p>

  <pre>
    <code>
      // Crea aquí la classe
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      class Pellicula {
        constructor(titol, director) {
          this.titol = titol;
          this.director = director;
        }
      }

      const p1 = new Pellicula("Inception", "Christopher Nolan");
      const p2 = new Pellicula("Titanic", "James Cameron");

      console.log(p1.titol); // Inception
      console.log(p2.director); // James Cameron
    </code>
  </pre>

  <h3>
    Exercici: Propietat estàtica
  </h3>

  <p>
    Fes una classe <code>App</code> amb una propietat estàtica <code>versio</code> i una d’instància <code>nom</code>. Mostra per consola les dues.
  </p>

  <pre>
    <code>
      // Escriu la classe aquí
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      class App {
        static versio = "1.0";

        constructor(nom) {
          this.nom = nom;
        }
      }

      const a = new App("Editor de text");

      console.log(App.versio); // 1.0
      console.log(a.nom);      // Editor de text
    </code>
  </pre>

  <h3>
    Exercici: Propietat pública fora del constructor
  </h3>

  <p>
    Crea una classe <code>Usuari</code> amb una propietat pública <code>rol</code> definida fora del constructor, i comprova el seu valor.
  </p>

  <pre>
    <code>
      // Escriu aquí la classe
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
      class Usuari {
        rol = "visitant";

        constructor(nom) {
          this.nom = nom;
        }
      }

      const u = new Usuari("Núria");
      console.log(u.rol); // visitant
    </code>
  </pre>

  <h3>
    Exercici: Propietat privada amb mètode d'accés
  </h3>

  <p>
    Crea una classe <code>CompteBancari</code> amb una propietat privada <code>#saldo</code> i un mètode <code>consultarSaldo()</code>. No es pot accedir directament a <code>#saldo</code>.
  </p>

  <pre>
    <code>
      // Escriu aquí la classe
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio4" style="display:none;">
    <code>
      class CompteBancari {
        #saldo;

        constructor(saldoInicial) {
          this.#saldo = saldoInicial;
        }

        consultarSaldo() {
          return this.#saldo;
        }
      }

      const compte = new CompteBancari(500);
      console.log(compte.consultarSaldo()); // 500
      // console.log(compte.#saldo); // ❌ Error
    </code>
  </pre>

  <h2>
    Conclusions
  </h2>

  <p>
    Aprendre a gestionar l'àmbit de les propietats ens permet controlar millor la visibilitat i seguretat de les dades dins les classes. Les propietats amb <code>#</code> són privades i només accessibles des de dins la classe. Les públiques es poden declarar al constructor o directament a la classe. Les <code>estàtiques</code> pertanyen a la classe i no a la instància.
  </p>

  <script>
    function mostrarSolucio(id) {
      const element = document.getElementById(id);
      element.style.display = (element.style.display === 'none') ? 'block' : 'none';
    }
  </script>
</body>
