<?php
$titol = "El context explicat";
include("../includes/head.php");
?>

<body>
    <p>
      <a href="../index.html">
        Anar a l'índex
      </a>
    </p>

    <h1>
      El context en JavaScript
    </h1>

    <p>
      En JavaScript, el <strong>context</strong> fa referència a l’objecte al qual fa referència la paraula clau <code>this</code> quan s’executa una funció. Aquest context pot variar en funció de com i on cridem la funció.
    </p>

    <p>
      El valor de <code>this</code> <strong>no es defineix pel lloc on s’ha escrit</strong> la funció, sinó pel lloc des d’on s’ha <strong>executat</strong>. Aquesta diferència és fonamental per entendre comportaments aparentment confusos.
    </p>

    <h2>
      El context global
    </h2>

    <p>
      Fora de qualsevol funció o objecte, el context és l’objecte global. En navegadors, això sol ser <code>window</code>.
    </p>

    <pre>
      <code>
        console.log(this); // window (en entorn navegador)
      </code>
    </pre>

    <p>
      Proveu <code>console.log(this);</code> a JSBin i mireu la console. Es mostra l’objecte global que en el cas de navegadors és <code>window</code>.
    </p>

    <h2>
      Dins d'una funció
    </h2>

    <p>
      En una funció, el context fa referència a l’objecte que fa referència la paraula clau <code>this</code> quan s’executa la funció. Continua sent l’objecte global.
    </p>

    <pre>
      <code>
        function demo() {
          console.log(this);
        }

        demo(); // window
      </code>
    </pre>

    <p>
      Podem aclarir el concepte si fem un petit 
    </p>

    <pre>
      <code>
        function demo() {
          console.log(this);
        }

        window.demo(); // window
      </code>
    </pre>

    <p>
      Escriure <code>demo()</code> és equivalent a escriure <code>window.demo()</code>, ja que la funció <code>demo</code> es troba en el context global. Quan una funció està definida en aquest àmbit, es pot invocar a través de l'objecte global <code>window</code>. Per tant, el valor de <code>this</code> dins d’aquesta funció fa referència a <code>window</code>. Qui crida la funció? L’objecte <code>window</code>.
    </p>

    <p>
      Quan definim una funció al context global, com ara <code>function demo()</code>, aquesta queda associada automàticament a l’objecte <code>window</code>. Això vol dir que <code>demo()</code> i <code>window.demo()</code> són equivalents.
    </p>

    <p>
      Si cridem <code>demo()</code> des del context global, el valor de <code>this</code> dins la funció apuntarà a <code>window</code>. És com si diguéssim: “qui està cridant la funció? El mateix objecte global”.
    </p>

    <p>
      Pensa que totes les funcions declarades fora d’un objecte “viuen” dins <code>window</code>. Així que cridar <code>demo()</code> o <code>window.demo()</code> és exactament el mateix. El <code>this</code> en aquest cas fa referència a <code>window</code>.
    </p>

    <p>
      Què passa quan cridem <code>demo()</code> en una funció global? En realitat estem cridant <code>window.demo()</code>, perquè totes les funcions globals formen part de l’objecte <code>window</code>. Per això <code>this</code> dins d’aquesta funció serà <code>window</code>.
    </p>

    <h2>
      El context dins d’un objecte
    </h2>

    <p>
      Quan una funció és una propietat d’un objecte, <code>this</code> fa referència a aquest objecte.
    </p>

    <pre>
      <code>
        let persona = {
          nom: "Júlia",
          parlar: function() {
            console.log("Hola, soc " + this.nom);
          }
        };

        persona.parlar(); // Hola, soc Júlia
      </code>
    </pre>

    <h2>
      Pèrdua de context
    </h2>

    <p>
      Per exemple, imagina’t una funció que diu el nom d’una persona. Si la cridem des d’un objecte, <code>this</code> apuntarà a aquest objecte. Però si la traiem fora i la cridem sola, <code>this</code> ja no sabrà a quin objecte pertany i apuntarà al context global.
    </p>

    <pre>
      <code>
        // Declarem una funció que imprimeix el nom segons el valor de 'this'
        function mostraNom() {
          console.log(this.nom);
        }

        // Creem un objecte amb una propietat 'nom' i una funció que apunta a mostraNom
        let alumne = {
          nom: "Clara",
          saluda: mostraNom
        };

        // Aquí la funció s'executa DINS de l'objecte → 'this' fa referència a 'alumne'
        alumne.saluda(); // Clara

        // Aquí guardem la funció a una nova variable fora de l'objecte
        let saludaFora = alumne.saluda;

        // Ara la cridem des del context global → 'this' ja no apunta a 'alumne'
        saludaFora(); // undefined (perquè no hi ha 'nom' en el context global)
      </code>
    </pre>

    <p>
      un altre exemple per veure que si traiem una funció del seu objecte i la cridem sola, perd el context original.
    </p>

    <pre>
      <code>
        let salutacio = persona.parlar;

        salutacio(); // Hola, soc undefined (perquè this ja no apunta a 'persona')
      </code>
    </pre>

    <p>
        Recorda: el comportament de <code>this</code> <strong>depèn de qui crida la funció, no de qui la va escriure.</strong> Aquesta és una de les claus per dominar el context en JavaScript.
    </p>

    <pre>
      <code>

        // funció declarada al context global
        function demo() {
          console.log(this);
        }
        
        // funció utilitzada dins d'un objecte
        let objecte = {
          func: demo
        };

        objecte.func(); // em retorna el this del objecte
      </code>
    </pre>

    <p>
      La pregunta és qui ha executat la funció ? L'objecte o el context global? És l'objecte que fa referència a la funció.
    </p>

    <p>
      Això explica perquè quan assignem un mètode o l'enviem com argument perd la seva referència original.
    </p>

    <pre>
      <code>
        let objecte = {
          func: function() {
            console.log(this);
          }
        }

        let func = objecte.func; // 
        func(); // la funció perd la seva referència original, em retorna el this del context global
      </code>
    </pre>

    <h2>
      Fixar el context amb <code>bind</code>, <code>call</code> i <code>apply</code>
    </h2>

    <p>
      Podem fixar el valor de <code>this</code> manualment utilitzant <code>bind</code>, <code>call</code> o <code>apply</code>.
    </p>

    <pre>
      <code>
        let novaSalutacio = persona.parlar.bind(persona);
        novaSalutacio(); // Hola, soc Júlia
      </code>
    </pre>

    <h2>
      Exercicis
    </h2>

    <h3>
      Exercici: Context dins d’un objecte
    </h3>

    <p>
      Crea un objecte amb un nom i una funció que mostri el nom usant <code>this</code>.
    </p>

    <pre>
      <code>
        let gos = {
          nom: "Taca",
          // completa la funció
        };
      </code>
    </pre>

    <button onclick="mostrarSolucio('solucio1')">
      Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
      <code>
        let gos = {
          nom: "Taca",
          parlar: function() {
            console.log("Soc el gos " + this.nom);
          }
        };

        gos.parlar(); // Soc el gos Taca
      </code>
    </pre>

    <h3>
      Exercici: Pèrdua de context
    </h3>

    <p>
      Què imprimirà aquest codi? Explica per què.
    </p>

    <pre>
      <code>
        let gat = {
          nom: "Mixu",
          parlar: function() {
            console.log(this.nom);
          }
        };

        let parla = gat.parlar;
        parla();
      </code>
    </pre>

    <button onclick="mostrarSolucio('solucio2')">
      Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
      <code>
        // El valor serà undefined perquè hem perdut el context original.
        // 'this' ja no apunta a 'gat', sinó al context global.
      </code>
    </pre>

    <h3>
      Exercici: Recuperar el context
    </h3>

    <p>
      Fes que el codi anterior funcioni correctament utilitzant <code>bind</code>.
    </p>

    <pre>
      <code>
        let parlaCorregit = ???;
        parlaCorregit(); // Mixu
      </code>
    </pre>

    <button onclick="mostrarSolucio('solucio3')">
      Mostra / Amaga solució
    </button>

    <pre id="solucio3" style="display:none;">
      <code>
        let parlaCorregit = gat.parlar.bind(gat);
        parlaCorregit(); // Mixu
      </code>
    </pre>

    <h2>
      Conclusions
    </h2>

    <p>
      El valor de <code>this</code> depèn de com s'executa la funció, no de com s'ha definit. Quan treballis amb objectes i funcions, pensa sempre qui està cridant la funció per saber què serà <code>this</code>. I si cal, fixa el context amb <code>bind</code>!
    </p>

    <script>
      function mostrarSolucio(id) {
        const element = document.getElementById(id);
        element.style.display = (element.style.display === "none") ? "block" : "none";
      }
    </script>
</body>
</html>



