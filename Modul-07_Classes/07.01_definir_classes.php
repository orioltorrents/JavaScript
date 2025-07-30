<?php
$titol = "Definir classes";
include("../includes/head.php");
?>

<body>


  <h1>
    Definir classes en JavaScript
  </h1>

    <p>
    A JavaScript, una <strong>classe</strong> és una plantilla per crear objectes. Encapsula dades i comportaments dins d'una sola entitat, de manera que podem crear múltiples instàncies amb la mateixa estructura i funcionalitats.
  </p>

  <p>
    La sintaxi de classes va ser introduïda a l'estàndard ECMAScript 2015 (ES6). No és un nou sistema d'herència, sinó una forma més clara i moderna d’escriure el que abans es feia amb funcions constructores i prototips. És a dir, per dins, JavaScript segueix utilitzant prototips.
  </p>

  <p>
    Aquesta sintaxi ens ajuda a organitzar millor el codi, especialment quan treballem amb molts objectes similars. A més, facilita la lectura i manteniment, sobretot en projectes grans.
  </p>

  <p>
    Podem definir una classe amb la paraula clau <code>class</code>. Aquí tens un exemple bàsic:
  </p>

  <pre>
    <code>
      class Cotxe {
        constructor(marca, model) {
          this.marca = marca;
          this.model = model;
        }

        descriure() {
          return `Aquest cotxe és un ${this.marca} ${this.model}.`;
        }
      }

      let cotxe1 = new Cotxe("Toyota", "Corolla");
      console.log(cotxe1.descriure());
    </code>
  </pre>

  <p>
    La funció <code>constructor</code> és un mètode especial que s'executa quan es crea una nova instància de la classe. Els altres mètodes (com <code>descriure()</code>) es poden cridar des de qualsevol objecte creat amb <code>new</code>.
  </p>

  <h2>
    Diferències amb la manera antiga
  </h2>

  <p>
    Abans d'ES6, per crear objectes fèiem servir funcions constructores i prototips. Ara fem servir la paraula <code>class</code>, que és més clara i ordenada. Però en realitat, per dins JavaScript continua funcionant amb prototips.
  </p>

  <h3>
    Forma antiga
  </h3>

  <pre>
    <code>
      function Cotxe(marca, model) {
        this.marca = marca;
        this.model = model;
      }

      Cotxe.prototype.descriure = function() {
        return `Cotxe: ${this.marca} ${this.model}`;
      };
    </code>
  </pre>

  <h3>
    Forma nova amb <code>class</code>
  </h3>

  <pre>
    <code>
      class Cotxe {
        constructor(marca, model) {
          this.marca = marca;
          this.model = model;
        }

        descriure() {
          return `Cotxe: ${this.marca} ${this.model}`;
        }
      }
    </code>
  </pre>

  <p>
    🎯 En resum: <strong>fa el mateix</strong>, però amb una sintaxi molt més entenedora. És com tenir un motlle per fer objectes, i tot queda més agrupat.
  </p>

  <h2>
    Conclusions
  </h2>

  <ul>
    <li>
      Les <strong>classes</strong> són una manera més neta i moderna de definir objectes i estructurar el nostre codi.
    </li>
    <li>
      Encara que visualment semblin com les d'altres llenguatges (com Java o Python), en realitat són <strong>sintaxi "sugar"</strong> per a la manipulació de prototips.
    </li>
    <li>
      Podem crear tantes instàncies com vulguem amb <code>new</code> i cada objecte tindrà les seves pròpies dades, però compartirà els mètodes definits a la classe.
    </li>
    <li>
      La funció <code>constructor()</code> és la que s'executa quan fem <code>new</code> i serveix per inicialitzar els valors.
    </li>
  </ul>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Crear una classe <code>Persona</code>
  </h3>

  <p>
    Crea una classe <code>Persona</code> que tingui <code>nom</code> i <code>edat</code> com a propietats, i un mètode <code>presentar()</code> que retorni una frase com: "Hola, em dic Carla i tinc 34 anys."
  </p>

  <pre>
    <code>
      // Escriu aquí la teva classe
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      class Persona {
        constructor(nom, edat) {
          this.nom = nom;
          this.edat = edat;
        }

        presentar() {
          return `Hola, em dic ${this.nom} i tinc ${this.edat} anys.`;
        }
      }

      let persona1 = new Persona("Carla", 34);
      console.log(persona1.presentar());
    </code>
  </pre>

  <h3>
    Exercici: Classe <code>Llibre</code> amb títol i autor
  </h3>

  <p>
    Defineix una classe <code>Llibre</code> amb dues propietats: <code>titol</code> i <code>autor</code>, i un mètode <code>mostrar()</code> que imprimeixi: "El llibre 'Nom del llibre' és de l'autor Nom de l'autor".
  </p>

  <pre>
    <code>
      // Escriu aquí la teva solució
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      class Llibre {
        constructor(titol, autor) {
          this.titol = titol;
          this.autor = autor;
        }

        mostrar() {
          return `El llibre '${this.titol}' és de l'autor ${this.autor}.`;
        }
      }

      let llibre1 = new Llibre("1984", "George Orwell");
      console.log(llibre1.mostrar());
    </code>
  </pre>

  <script>
    function mostrarSolucio(id) {
      const bloc = document.getElementById(id);
      bloc.style.display = bloc.style.display === "none" ? "block" : "none";
    }
  </script>
</body>


