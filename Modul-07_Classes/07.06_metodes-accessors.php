<?php
$titol = "Mètodes accessors (get i set)";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">Anar a l'índex</a>
  </p>

  <h1>
    Mètodes accessors (get i set)
  </h1>

  <h2>
    Què són?
  </h2>

  <p>
    Els <strong>mètodes accessors</strong> ens permeten controlar com es llegeixen (<code>get</code>) i s’assignen (<code>set</code>) les propietats d’un objecte. A diferència de les propietats públiques normals, amb els accessors podem encapsular la lògica d’accés o validació.
  </p>

  <h2>
    Per què encapsular?
  </h2>

  <p>
    L'<strong>encapsulació</strong> és un principi clau de la programació orientada a objectes. Consisteix a amagar els detalls interns d’un objecte i controlar com s’hi accedeix. Això aporta molts avantatges:
  </p>

  <ul>
    <li>Evita que el codi extern modifiqui directament dades sensibles.</li>
    <li>Permet validar o transformar valors abans de desar-los.</li>
    <li>Facilita mantenir el codi i detectar errors.</li>
    <li>Millora la seguretat i el control del comportament intern.</li>
  </ul>

  <h2>
    Exemple bàsic
  </h2>

  <pre>
    <code>
      class Persona {
        constructor(nom) {
          this._nom = nom;
        }

        get nom() {
          return this._nom.toUpperCase();
        }

        set nom(valor) {
          if (valor.length > 0) {
            this._nom = valor;
          }
        }
      }

      const p = new Persona("Clara");
      console.log(p.nom); // CLARA

      p.nom = "Joan";
      console.log(p.nom); // JOAN
    </code>
  </pre>

  <p>
    Tot i que accedim a <code>p.nom</code> com si fos una propietat, en realitat s’està executant la funció <code>get nom()</code>. Igualment, quan fem <code>p.nom = "Joan"</code>, s’executa automàticament la funció <code>set nom()</code>.
  </p>

  <h2>
    Com funcionen exactament <code>get</code> i <code>set</code>?
  </h2>

  <p>
    Un <code>getter</code> ens permet definir com es llegeix una propietat, però sense necessitat de cridar cap funció amb parèntesis. És a dir, no fem <code>p.nom()</code>, sinó simplement <code>p.nom</code>, i internament s’executa la funció del getter.
  </p>

  <p>
    Amb el <code>setter</code> passa el mateix: podem definir una funció que s’executa automàticament quan assignem un valor. Això ens permet validar, transformar o controlar l’assignació sense canviar com escrivim el codi:
  </p>

  <pre>
    <code>
      const persona = new Persona("Clara");

      // Aquesta línia executa el GET
      console.log(persona.nom); // CLARA

      // Aquesta línia executa el SET
      persona.nom = "Joan";
    </code>
  </pre>

  <p>
    Gràcies a aquest comportament, els accessors fan que el codi sigui més net i intuïtiu, com si treballéssim amb propietats normals, però amb tot el poder de les funcions al darrere.
  </p>

  <h2>
    Què passa si no encapsulem? Perill d’accedir directament
  </h2>

  <p>
    Si no fem servir <code>get</code> i <code>set</code>, estem exposant les dades internes de l’objecte. Això vol dir que qualsevol part del programa pot canviar-les sense cap control.
  </p>

  <pre>
    <code>
      class Persona {
        constructor(nom) {
          this.nom = nom; // accessible directament
        }
      }

      const p = new Persona("Clara");
      p.nom = ""; // ERROR: assignació buida
      console.log(p.nom); // (buit)
    </code>
  </pre>

  <p>
    Amb accessors, podem evitar aquests errors:
  </p>

  <pre>
    <code>
      class Persona {
        constructor(nom) {
          this._nom = nom;
        }

        get nom() {
          return this._nom;
        }

        set nom(valor) {
          if (valor.length > 0) {
            this._nom = valor;
          }
        }
      }

      const p = new Persona("Clara");
      p.nom = ""; // no canvia
      console.log(p.nom); // Clara
    </code>
  </pre>

  <p>
    ✅ Amb <code>set</code>, protegim la informació.<br>
    ❌ Sense encapsular, qualsevol pot trencar l’objecte sense voler.
  </p>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici 1: Getter que formata el preu
  </h3>

  <p>
    Crea una classe <code>Producte</code> amb una propietat <code>preu</code>. Afegeix un <code>getter</code> que el retorni en format "12.50 €".
  </p>

  <pre>
    <code>
      class Producte {
        constructor(preu) {
          this._preu = preu;
        }

        // Afegeix aquí el getter preuFormat
      }

      const p = new Producte(12.5);
      console.log(p.preuFormat); // "12.50 €"
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio1')">Mostra / Amaga solució</button>

  <pre id="solucio1" style="display:none;">
    <code>
      class Producte {
        constructor(preu) {
          this._preu = preu;
        }

        get preuFormat() {
          return this._preu.toFixed(2) + " €";
        }
      }

      const p = new Producte(12.5);
      console.log(p.preuFormat); // "12.50 €"
    </code>
  </pre>

  <h3>
    Exercici 2: Setter amb validació d’edat
  </h3>

  <p>
    Crea una classe <code>Usuari</code> amb una propietat <code>edat</code>. El setter ha de rebutjar valors negatius.
  </p>

  <pre>
    <code>
      class Usuari {
        constructor(edat) {
          this._edat = edat;
        }

        // Afegeix aquí el setter
      }

      const u = new Usuari(25);
      u.edat = -5;
      console.log(u._edat); // 25
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio2')">Mostra / Amaga solució</button>

  <pre id="solucio2" style="display:none;">
    <code>
      class Usuari {
        constructor(edat) {
          this._edat = edat;
        }

        set edat(valor) {
          if (valor >= 0) {
            this._edat = valor;
          }
        }
      }

      const u = new Usuari(25);
      u.edat = -5;
      console.log(u._edat); // 25
    </code>
  </pre>

  <h3>
    Exercici 3: Conversió de temperatura
  </h3>

  <p>
    Crea una classe <code>Temperatura</code> que guardi la temperatura en Celsius, però que permeti accedir-hi i modificar-la també en Fahrenheit.
  </p>

  <pre>
    <code>
      class Temperatura {
        constructor(celsius) {
          this._celsius = celsius;
        }

        // Afegeix aquí get/set fahrenheit
      }

      const t = new Temperatura(0);
      console.log(t.fahrenheit); // 32

      t.fahrenheit = 212;
      console.log(t._celsius); // 100
    </code>
  </pre>

  <button onclick="mostrarSolucio('solucio3')">Mostra / Amaga solució</button>

  <pre id="solucio3" style="display:none;">
    <code>
      class Temperatura {
        constructor(celsius) {
          this._celsius = celsius;
        }

        get fahrenheit() {
          return this._celsius * 9 / 5 + 32;
        }

        set fahrenheit(valor) {
          this._celsius = (valor - 32) * 5 / 9;
        }
      }

      const t = new Temperatura(0);
      console.log(t.fahrenheit); // 32

      t.fahrenheit = 212;
      console.log(t._celsius); // 100
    </code>
  </pre>

  <h2>
    Conclusions
  </h2>

  <p>
    Els mètodes <code>get</code> i <code>set</code> ens ajuden a encapsular la lògica interna d’una classe. Això ens permet controlar com s’accedeix a la informació i protegir-la d’errors o usos incorrectes. És una eina fonamental per mantenir el nostre codi segur, net i fàcil d'ampliar.
  </p>

  <script>
    function mostrarSolucio(id) {
      const bloc = document.getElementById(id);
      bloc.style.display = bloc.style.display === "none" ? "block" : "none";
    }
  </script>
</body>
