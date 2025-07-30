<?php
$titol = "Definir mètodes i propietats";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">Anar a l'índex</a>
  </p>

  <h1>
    Definir mètodes i propietats
  </h1>

  <p>
    En JavaScript, quan treballem amb <strong>classes</strong>, podem definir tant <strong>propietats</strong> com <strong>mètodes</strong>. Les propietats representen l’estat o característiques de l’objecte, i els mètodes són funcions que defineixen el comportament de l’objecte.
  </p>

  <h2>
    Propietats d’una classe
  </h2>

  <p>
    Les propietats es defineixen dins del constructor amb <code>this</code>. Això indica que aquella propietat pertany a la instància concreta de la classe.
  </p>

  <pre>
    <code>
        class Gos {
          constructor(nom, raça) {
            this.nom = nom;
            this.raça = raça;
          }
        }

        const rufus = new Gos("Rufus", "Labrador");
        console.log(rufus.nom); // Rufus
    </code>
  </pre>

  <h2>
    Mètodes d’una classe
  </h2>

  <p>
    Els mètodes es defineixen dins de la classe, però fora del constructor. No cal escriure <code>function</code>.
  </p>

  <pre>
    <code>
        class Gos {
          constructor(nom, raça) {
            this.nom = nom;
            this.raça = raça;
          }

          bordar() {
            console.log(`${this.nom} diu: Bup bup!`);
          }
        }

        const rufus = new Gos("Rufus", "Labrador");
        rufus.bordar(); // Rufus diu: Bup bup!
    </code>
  </pre>

  <h2>
    Diferència amb la sintaxi antiga (objectes literals)
  </h2>

  <p>
    Quan creàvem objectes amb la forma antiga (objecte literal), escrivíem les propietats i mètodes directament dins de les claus:
  </p>

  <pre>
    <code>
        const gat = {
          nom: "Mishi",
          miolar: function() {
            console.log("Miau!");
          }
        };

        gat.miolar(); // Miau!
    </code>
  </pre>

  <p>
    Amb les <strong>classes</strong>, el codi queda més organitzat i escalable, especialment si creem múltiples instàncies.
  </p>

  <h2>
    Conclusions
  </h2>

  <ul>
    <li>Les <strong>propietats</strong> es defineixen al <code>constructor</code> mitjançant <code>this</code>, i representen l’estat de l’objecte.</li>
    <li>Els <strong>mètodes</strong> són funcions dins la classe que defineixen el comportament dels objectes.</li>
    <li>No cal escriure <code>function</code> dins les classes modernes per declarar un mètode.</li>
    <li>Podem accedir a les propietats i mètodes amb la notació <code>objecte.propietat</code> i <code>objecte.mètode()</code>.</li>
    <li>Les classes fan el codi més net, escalable i reutilitzable que els objectes literals tradicionals.</li>
  </ul>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Crea una classe Cotxe
  </h3>

  <p>
    Defineix una classe <code>Cotxe</code> amb propietats <code>marca</code> i <code>any</code>, i un mètode <code>presentar()</code> que mostri un missatge com: "Aquest cotxe és un Toyota de l'any 2020".
  </p>

  <pre>
    <code>
// Escriu aquí la teva classe Cotxe
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">Mostra / Amaga solució</button>
  <pre id="solucio1" style="display:none;">
    <code>
class Cotxe {
  constructor(marca, any) {
    this.marca = marca;
    this.any = any;
  }

  presentar() {
    console.log(`Aquest cotxe és un ${this.marca} de l'any ${this.any}`);
  }
}

const cotxe1 = new Cotxe("Toyota", 2020);
cotxe1.presentar(); // Aquest cotxe és un Toyota de l'any 2020
    </code>
  </pre>

  <h3>
    Exercici: Afegeix un mètode saludar a Persona
  </h3>

  <p>
    Donada una classe <code>Persona</code>, afegeix un mètode <code>saludar()</code> que imprimeixi "Hola, sóc en [nom]!".
  </p>

  <pre>
    <code>
class Persona {
  constructor(nom) {
    this.nom = nom;
  }

  // Escriu aquí el mètode saludar
}

const maria = new Persona("Maria");
maria.saludar(); // Hola, sóc en Maria!
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">Mostra / Amaga solució</button>
  <pre id="solucio2" style="display:none;">
    <code>
class Persona {
  constructor(nom) {
    this.nom = nom;
  }

  saludar() {
    console.log(`Hola, sóc en ${this.nom}!`);
  }
}

const maria = new Persona("Maria");
maria.saludar(); // Hola, sóc en Maria!
    </code>
  </pre>

  <h3>
    Exercici: Mètode calcularAnyNaixement
  </h3>

  <p>
    A la classe <code>Persona</code>, afegeix un mètode <code>anyNaixement()</code> que retorni l’any de naixement (considera que estem al 2025).
  </p>

  <pre>
    <code>
class Persona {
  constructor(nom, edat) {
    this.nom = nom;
    this.edat = edat;
  }

  // Escriu aquí el mètode anyNaixement
}

const joan = new Persona("Joan", 30);
console.log(joan.anyNaixement()); // 1995
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">Mostra / Amaga solució</button>
  <pre id="solucio3" style="display:none;">
    <code>
class Persona {
  constructor(nom, edat) {
    this.nom = nom;
    this.edat = edat;
  }

  anyNaixement() {
    return 2025 - this.edat;
  }
}

const joan = new Persona("Joan", 30);
console.log(joan.anyNaixement()); // 1995
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


