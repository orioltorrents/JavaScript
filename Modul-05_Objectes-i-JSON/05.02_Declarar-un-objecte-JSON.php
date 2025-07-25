<?php
$titol = "Declarar un objecte JSON";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">Anar a l'índex</a>
  </p>

  <h1>
    Declarar un objecte JSON
  </h1>

  <p>
    A JavaScript, un objecte JSON és una manera molt comuna de representar informació estructurada. JSON vol dir <strong>JavaScript Object Notation</strong> i ens permet emmagatzemar dades com si fossin fitxers d'informació, amb claus i valors.
  </p>

  <h2>
    Crear un objecte JSON
  </h2>

  <p>
    Per declarar un objecte JSON utilitzem claus <code>{ }</code> i definim parelles <code>clau: valor</code>. Per exemple:
  </p>

  <pre>
    <code>
      let persona = {
        nom: "Anna",
        edat: 28,
        viu: true
      };
    </code>
  </pre>

  <p>
    En aquest cas, <code>persona</code> és un objecte que té tres propietats: nom (una cadena de text), edat (un número) i viu (un booleà).
  </p>

  <h2>
    Accedir a les propietats
  </h2>

  <p>
    Podem accedir a les propietats de dues maneres:
  </p>

  <pre>
    <code>
      console.log(persona.nom);     // "Anna"
      console.log(persona["edat"]); // 28
    </code>
  </pre>

  <p>
    Tant la notació amb punt com la de clau entre cometes funcionen. Però la notació amb punt és més habitual.
  </p>

  <h2>
    Afegir o modificar propietats
  </h2>

  <p>
    Podem afegir o modificar propietats com si l’objecte fos una capsa amb etiquetes:
  </p>

  <pre>
    <code>
      persona.professio = "mestra";
      persona.edat = 29;
    </code>
  </pre>

  <h2>
    Objectes dins d’objectes
  </h2>

  <p>
    Un valor també pot ser un altre objecte:
  </p>

  <pre>
    <code>
      let alumne = {
        nom: "Joan",
        assignatures: {
          matematiques: 7.5,
          biologia: 8.2
        }
      };

      console.log(alumne.assignatures.biologia); // 8.2
    </code>
  </pre>

  <h2>
    Arrays dins d’un objecte
  </h2>

  <p>
    També podem posar arrays com a valors:
  </p>

  <pre>
    <code>
      let cotxe = {
        marca: "Toyota",
        models: ["Yaris", "Corolla", "Prius"]
      };

      console.log(cotxe.models[1]); // "Corolla"
    </code>
  </pre>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici 1: Crear un objecte senzill
  </h3>
  
  <p>
    Crea un objecte anomenat <code>llibre</code> amb les propietats: <code>titol</code>, <code>autor</code> i <code>any</code>.
  </p>

  <pre>
    <code>
      // Escriu aquí el teu codi
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio1" style="display:none;">
    <code>
      let llibre = {
        titol: "1984",
        autor: "George Orwell",
        any: 1949
      };
    </code>
  </pre>

  <h3>
    Exercici 2: Accedir a una propietat
  </h3>
  
  <p>
    Mostra pel terminal el títol del llibre anterior.
  </p>

  <pre>
    <code>
      // Escriu aquí el teu codi
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio2" style="display:none;">
    <code>
      console.log(llibre.titol); // "1984"
    </code>
  </pre>

  <h3>
    Exercici 3: Objecte amb array
  </h3>
  
  <p>
    Crea un objecte <code>classe</code> amb una propietat <code>alumnes</code> que sigui un array amb tres noms.
  </p>

  <pre>
    <code>
      // Escriu aquí el teu codi
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio3" style="display:none;">
    <code>
      let classe = {
        alumnes: ["Maria", "Joan", "Marc"]
      };
    </code>
  </pre>

  <h3>
    Exercici 4: Objecte dins d’un objecte
  </h3>
  
  <p>
    Declara un objecte <code>usuari</code> amb nom i adreça. L’adreça ha de ser un altre objecte amb carrer i ciutat.
  </p>

  <pre>
    <code>
      // Escriu aquí el teu codi
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
  </button>

  <pre id="solucio4" style="display:none;">
    <code>
      let usuari = {
        nom: "Laia",
        adreça: {
          carrer: "Carrer Major, 15",
          ciutat: "Girona"
        }
      };
    </code>
  </pre>

  <h2>
    Conclusions
  </h2>

  <p>
    Els objectes JSON són essencials per estructurar dades en JavaScript. Permeten agrupar informació relacionada i accedir-hi fàcilment. Aquesta manera d’organitzar la informació és molt útil quan treballem amb aplicacions web, APIs o bases de dades.
  </p>

  <p>
    Aprendre a declarar, accedir, modificar i organitzar objectes és una base indispensable abans d'entrar en la programació orientada a objectes amb classes.
  </p>

  <script>
    function mostrarSolucio(id) {
      const bloc = document.getElementById(id);
      bloc.style.display = bloc.style.display === "none" ? "block" : "none";
    }
  </script>
</body>
</html>