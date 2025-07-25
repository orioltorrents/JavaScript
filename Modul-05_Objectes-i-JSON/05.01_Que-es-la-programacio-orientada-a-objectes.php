<?php
$titol = "Què és la programació orientada a objectes";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">
      Anar a l'índex
    </a>
  </p>

  <h1>
    Què és la programació orientada a objectes
  </h1>

  <p>
    La <strong>programació orientada a objectes</strong> (POO) és un paradigma de programació que es basa en la creació d’<strong>objectes</strong>, els quals poden contenir <strong>dades</strong> i <strong>funcions</strong> dins seu.
  </p>

  <p>
    Aquest enfocament busca que representem el nostre codi i els algoritmes amb objectes que imiten elements del món real. És a dir, estructurem el nostre programa com si fos un conjunt d’objectes que interactuen entre ells.
  </p>

  <p>
    La POO es fonamenta en quatre grans principis:
  </p>

  <ul>
    <li>
        <strong>Abstracció:</strong> capturar només la informació essencial d’un objecte, amagant els detalls innecessaris.
    </li>
    <li>
        <strong>Encapsulació:</strong> protegir les dades internes d’un objecte, permetent accedir-hi només a través de mètodes controlats.
    </li>
    <li>
        <strong>Herència:</strong> permetre que un objecte "fill" hereti característiques i comportaments d’un "pare".
    </li>
    <li>
        <strong>Polimorfisme:</strong> permetre que diferents objectes puguin compartir un mateix nom de mètode però executar accions diferents.
    </li>
  </ul>

  <p>
    El propòsit principal de la POO és que els <strong>objectes siguin independents</strong>, reutilitzables i fàcils d’integrar. Això vol dir que cada objecte pot funcionar per si sol, sense dependre del funcionament intern d'altres objectes.
  </p>

  <h2>
    Com és un objecte?
  </h2>

  <p>
    Un <strong>objecte</strong> és una combinació de <strong>propietats</strong> (també anomenades atributs) i <strong>mètodes</strong> (funcions que defineixen accions que pot fer l’objecte).
  </p>

  <p>
    Cada objecte pot emmagatzemar informació pròpia i modificar-la sense afectar els altres objectes. Per exemple, si tenim dos objectes que representen <em>marcadors</em>, cada un pot tenir el seu color, mida i quantitat de tinta, tot i que siguin del mateix tipus.
  </p>

  <p>
    Exemple de propietats d’un objecte marcador:
  </p>

  <ul>
    <li>color: blau, verd, vermell...</li>
    <li>tinta disponible: 75%</li>
    <li>material: plàstic o alumini</li>
    <li>gruix: fi o gruixut</li>
  </ul>

  <p>
    Aquestes propietats poden variar per cada marcador, i els seus mètodes podrien ser accions com <code>pintar()</code> o <code>recarregarTinta()</code>.
  </p>

  <h2>
    El poder de la composició
  </h2>

  <p>
    Un altre concepte important és el de <strong>composició</strong>: els objectes complexos es poden crear a partir d’objectes més petits amb responsabilitats senzilles.
  </p>

  <p>
    Tornant a l’exemple del marcador, podem imaginar que:
  </p>

  <ul>
    <li>la punta és un objecte que només ha d’absorbir tinta</li>
    <li>el cos és un objecte que només ha de sostenir les parts</li>
    <li>el sistema de tinta és un objecte que controla el nivell i el flux</li>
  </ul>

  <p>
    Això ens permet veure el marcador no com un objecte únic i complex, sinó com una <strong>composició d’elements més simples</strong>, cadascun amb una funció clara. Així també organitzem millor el nostre codi.
  </p>

  <h2>
    Per què ens interessa això?
  </h2>

  <p>
    El paradigma orientat a objectes ens ajuda a:
  </p>

  <ul>
    <li>Evitar repetició de codi</li>
    <li>Dividir problemes complexos en parts més petites</li>
    <li>Fer que el codi sigui més fàcil d'entendre, mantenir i reutilitzar</li>
  </ul>

  <h2>
    El context i <code>this</code>
  </h2>

  <p>
    En aquest bloc ens centrarem especialment en el <strong>context d’execució</strong> i el valor especial de <code>this</code>, però és important entendre primer què són els objectes i com funcionen dins d’un programa.
  </p>

  <p>
    Comencem a explorar com es creen i utilitzen!
  </p>

  <h2>
    Exemple senzill d'un objecte
  </h2>

  <p>
    Definim un objecte anomenat <code>marcador</code> amb algunes propietats i un mètode. Aquest objecte representa un marcador real.
  </p>

  <pre>
    <code>
        const marcador = {
          color: "blau",               // propietat: color del marcador
          tinta: 80,                   // propietat: percentatge de tinta disponible
          marca: "Stabilo",            // propietat: nom del fabricant

          pintar: function() {        // mètode: acció que pot fer el marcador
            if (this.tinta > 0) {
              console.log("Estàs pintant amb el marcador " + this.color);
              this.tinta -= 10;       // resta tinta quan es fa servir
            } else {
              console.log("El marcador s'ha quedat sense tinta!");
            }
          }
        };

        marcador.pintar();            // Cridem el mètode pintar()
        console.log(marcador.tinta); // Mostrem la tinta restant
    </code>
  </pre>

  <p>
    Aquest exemple introdueix: 
  </p>
  
  <ul>
    <li>
        La definició d’un objecte amb la sintaxi de clau-valor.
    </li>
    <li>
        L’ús del mètode pintar() i el valor de this dins el mètode.
    </li>
    <li>
        Com un objecte pot modificar el seu propi estat (en aquest cas, la tinta).
    </li>
  </ul>
  
  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici 1: Crear un objecte llibre
  </h3>

  <p>
    Crea un objecte que representi un llibre amb les propietats <code>titol</code>, <code>autor</code> i <code>pagines</code>. Mostra per consola el títol del llibre.
  </p>

  <pre>
    <code>
        // Escriu aquí el teu objecte
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
        const llibre = {
          titol: "El petit príncep",
          autor: "Antoine de Saint-Exupéry",
          pagines: 96
        };

        console.log(llibre.titol);
    </code>
  </pre>

  <h3>
    Exercici 2: Afegir un mètode
  </h3>

  <p>
    Afegeix a l’objecte <code>llibre</code> un mètode <code>resum()</code> que mostri per consola una frase amb el títol i l’autor.
  </p>

  <pre>
    <code>
        // Parteix del mateix objecte llibre de l'exercici anterior
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
        const llibre = {
          titol: "El petit príncep",
          autor: "Antoine de Saint-Exupéry",
          pagines: 96,

          resum: function() {
            console.log("El llibre \"" + this.titol + "\" és de " + this.autor + ".");
          }
        };

        llibre.resum();
    </code>
  </pre>

  <h3>
    Exercici 3: Controlar l'estat d’un objecte
  </h3>

  <p>
    Crea un objecte <code>llum</code> amb una propietat <code>encès</code> (booleana) i un mètode <code>intercanviar()</code> que canviï l’estat (de <code>true</code> a <code>false</code> o viceversa).
  </p>

  <pre>
    <code>
        // Pensa en com pots canviar el valor amb this.encès
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
        const llum = {
          encès: false,

          intercanviar: function() {
            this.encès = !this.encès;
            console.log("Llum encès? " + this.encès);
          }
        };

        llum.intercanviar(); // true
        llum.intercanviar(); // false
    </code>
  </pre>

  <h3>
    Exercici 4: Objectes independents
  </h3>

  <p>
    Crea dos objectes <code>usuari1</code> i <code>usuari2</code> amb la mateixa estructura: <code>nom</code> i un mètode <code>saludar()</code>. Mostra que poden tenir noms diferents i saludar de forma independent.
  </p>

  <pre>
    <code>
        // Evita que un canvi en un afecti l’altre
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio4" style="display:none;">
    <code>
        const usuari1 = {
          nom: "Anna",
          saludar: function() {
            console.log("Hola! Sóc " + this.nom);
          }
        };

        const usuari2 = {
          nom: "Marc",
          saludar: function() {
            console.log("Hola! Sóc " + this.nom);
          }
        };

        usuari1.saludar(); // Hola! Sóc Anna
        usuari2.saludar(); // Hola! Sóc Marc
    </code>
  </pre>

  <h3>
    Exercici 5: Composició d’objectes
  </h3>

  <p>
    Crea un objecte <code>ordinador</code> que tingui dues propietats que siguin a la vegada objectes: <code>pantalla</code> i <code>teclat</code>. 
    Cada un d’aquests haurà de tenir les seves pròpies propietats. Mostra per consola el tipus de pantalla i el tipus de teclat.
  </p>

  <pre>
    <code>
        // Recorda que dins d’un objecte pots tenir altres objectes
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio5')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio5" style="display:none;">
    <code>
        const ordinador = {
          pantalla: {
            mida: "24 polzades",
            tipus: "LED"
          },
          teclat: {
            tipus: "mecànic",
            idioma: "català"
          }
        };

        console.log("Tipus de pantalla: " + ordinador.pantalla.tipus);
        console.log("Tipus de teclat: " + ordinador.teclat.tipus);
    </code>
  </pre>

  <p>
    Mostra que podem organitzar dades complexes dins d’un objecte. Fa veure que cada part pot tenir responsabilitats pròpies, reforçant la idea de composició i separació de responsabilitats.
  </p>

  <h3>
    Exercici 6: Mètode dins d’un objecte compost
  </h3>

  <p>
    Afegeix un mètode <code>apagar()</code> dins de l’objecte <code>pantalla</code> que mostri per consola <code>"Pantalla apagada."</code> quan s’executi. 
    Crida aquest mètode a través de l’objecte <code>ordinador</code>.
  </p>

  <pre>
    <code>
        // Has d’accedir al mètode amb: ordinador.pantalla.apagar()
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio6')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio6" style="display:none;">
    <code>
        const ordinador = {
          pantalla: {
            mida: "24 polzades",
            tipus: "LED",
            apagar: function() {
              console.log("Pantalla apagada.");
            }
          },
          teclat: {
            tipus: "mecànic",
            idioma: "català"
          }
        };

        ordinador.pantalla.apagar(); // Pantalla apagada.
    </code>
  </pre>

  <p>
    Estem introduint el coneixement jeràrquic dins dels objectes (objectes dins d'objectes). L’ús de mètodes específics dins de components concrets.
  </p>

  <h3>
    Exercici 7: Modificar una propietat des d’un mètode
  </h3>

  <p>
    Crea un objecte <code>portatil</code> amb una propietat <code>bateria</code> (percentatge) i un mètode <code>utilitzar()</code> que redueixi la bateria en un 10% cada vegada que es crida.
    Mostra per consola el valor actual de la bateria després de cada ús.
  </p>

  <pre>
    <code>
        // Pista: has de fer this.bateria -= 10 dins del mètode
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio7')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio7" style="display:none;">
    <code>
        const portatil = {
          bateria: 100,

          utilitzar: function() {
            if (this.bateria > 0) {
              this.bateria -= 10;
              console.log("Bateria restant: " + this.bateria + "%");
            } else {
              console.log("La bateria està esgotada.");
            }
          }
        };

        portatil.utilitzar(); // 90%
        portatil.utilitzar(); // 80%
    </code>
  </pre>

  <h2>
    Conclusions
  </h2>

  <p>
    La programació orientada a objectes ens ajuda a entendre i estructurar el codi com si fos un conjunt d’elements del món real. Cada objecte té les seves dades (propietats) i pot fer accions (mètodes).
  </p>

  <p>
    Aquest enfocament ens permet escriure programes més clars, reutilitzables i fàcils de mantenir. A més, fomenta que cada part del codi tingui una responsabilitat concreta, evitant confusions i errors difícils de rastrejar.
  </p>

  <p>
    Hem vist que:
  </p>

  <ul>
    <li>Podem representar qualsevol cosa com un objecte amb propietats i mètodes.</li>
    <li>Els objectes poden contenir altres objectes: això s’anomena composició.</li>
    <li>Podem modificar el seu estat (com la bateria d’un portàtil) a través de mètodes.</li>
  </ul>

  <p>
    En les pròximes classes aprofundirem en el <strong>context</strong> i el valor especial de <code>this</code>, que és fonamental per entendre com es comporten els mètodes dins dels objectes.
  </p>

</body>
</html>

