<?php
$titol = "Mètode constructor";
include("../includes/head.php");
?>

<body>
  <p>
    <a href="../index.html">Anar a l'índex</a>
  </p>

  <h1>
    Mètode <code>constructor</code>
  </h1>

  <p>
    En JavaScript, quan utilitzem una classe, el mètode especial <code>constructor</code> s'executa automàticament en crear una nova instància. Serveix per inicialitzar les propietats de l'objecte amb valors determinats.
  </p>

  <p>
    Vegem un exemple senzill:
  </p>

  <pre>
    <code>
      class Cotxe {
        constructor(marca, model) {
          this.marca = marca;
          this.model = model;
        }

        descriure() {
          console.log("Aquest cotxe és un " + this.marca + " " + this.model);
        }
      }

      let cotxe1 = new Cotxe("Toyota", "Yaris");
      cotxe1.descriure(); // Aquest cotxe és un Toyota Yaris
    </code>
  </pre>

  <p>
    Quan fem <code>new Cotxe("Toyota", "Yaris")</code>, s'executa automàticament el mètode <code>constructor</code> i s'assignen els valors a les propietats <code>marca</code> i <code>model</code>.
  </p>

  <h2>
    Què fa diferent el <code>constructor</code>?
  </h2>

  <p>
    El mètode <code>constructor</code> és especial perquè s'executa automàticament quan creem una nova instància amb <code>new</code>. Serveix per inicialitzar les propietats de l'objecte. A diferència dels altres mètodes:
  </p>

  <ul>
    <li>Només pot haver-hi un <code>constructor</code> per classe.</li>
    <li>No cal cridar-lo manualment (s’executa sol).</li>
    <li>S’utilitza per donar valors inicials a les propietats de l’objecte.</li>
  </ul>

  <p>
    Els altres mètodes (com <code>saluda()</code>, <code>mostrarInfo()</code>, etc.) només s'executen quan els cridem de forma explícita. El <code>constructor</code> en canvi, és com l’arrencada automàtica d’un cotxe nou: es posa en marxa tot sol quan es crea l’objecte.
  </p>

  <h2>
    Exercicis
  </h2>

  <h3>
    Exercici: Crear una classe <code>Llibre</code>
  </h3>

  <p>
    Crea una classe <code>Llibre</code> amb propietats <code>titol</code> i <code>autor</code>. Afegeix un mètode <code>mostrarInfo</code> que mostri la frase: "Llibre: TÍTOL, escrit per AUTOR".
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
      class Llibre {
        constructor(titol, autor) {
          this.titol = titol;
          this.autor = autor;
        }

        mostrarInfo() {
          console.log("Llibre: " + this.titol + ", escrit per " + this.autor);
        }
      }

      let llibre1 = new Llibre("1984", "George Orwell");
      llibre1.mostrarInfo(); // Llibre: 1984, escrit per George Orwell
    </code>
  </pre>

  <h3>
    Exercici: Classe <code>Rectangle</code>
  </h3>

  <p>
    Crea una classe <code>Rectangle</code> amb propietats <code>ample</code> i <code>alt</code>. Afegeix un mètode <code>area</code> que retorni l'àrea del rectangle.
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
      class Rectangle {
        constructor(ample, alt) {
          this.ample = ample;
          this.alt = alt;
        }

        area() {
          return this.ample * this.alt;
        }
      }

      let r = new Rectangle(5, 3);
      console.log(r.area()); // 15
    </code>
  </pre>

  <h3>
    Exercici: Classe <code>Usuari</code> amb valors per defecte
  </h3>

  <p>
    Crea una classe <code>Usuari</code> amb propietats <code>nom</code> i <code>edat</code>. Si no es proporciona l'edat, que prengui el valor per defecte de 18.
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
      class Usuari {
        constructor(nom, edat = 18) {
          this.nom = nom;
          this.edat = edat;
        }

        saluda() {
          console.log("Hola " + this.nom + ", tens " + this.edat + " anys.");
        }
      }

      let usuari1 = new Usuari("Pau");
      usuari1.saluda(); // Hola Pau, tens 18 anys.
    </code>
  </pre>

  <h2>
    Conclusions
  </h2>

  <p>
    El mètode <code>constructor</code> s'executa automàticament quan es crea un objecte amb <code>new</code>. Ens permet inicialitzar propietats i preparar l'objecte per funcionar correctament. També podem definir valors per defecte per fer les nostres classes més flexibles.
  </p>

  <script>
    function mostrarSolucio(id) {
      const bloc = document.getElementById(id);
      bloc.style.display = bloc.style.display === "none" ? "block" : "none";
    }
  </script>
</body>

</html>