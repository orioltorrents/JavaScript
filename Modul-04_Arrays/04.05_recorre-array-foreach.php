<?php
$titol = "Recorre un array amb forEach";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Recorre un array amb forEach
    </h1>

    <p>
        Fem un array amb alguns llenguatges de programació: <pre><code>let llenguatges = ["ruby","php","javascript","python"]</code></pre>
    </p>

    <p>
        Si vulguessim recorrer els elements d'aquest array, fins ara hem après que fariem...
    </p>

    <pre>
        <code>
            let llenguatges = ["ruby","php","javascript","python"];

            for (let i = 0; i < llenguatges.length - 1; i++){
                console.log(llenguatges[i])
            }
        </code>
    </pre>

    <p>
        Podem utilitzar forEach per fer el mateix però hem de saber que foreach és un mètode que podem aplicar a l'array i per tant, hem d'escriure el nom de l'array, un punt, després foreach. Foreach se li envia una funció dins de parèntesis que rep un argument que serà cada element de l'array. La funció s'executarà tants cops com elements tingui l'array.
    </p>

    <pre>
        <code>
            array.forEach(function(argument){});
        </code>
    </pre>

    <p>    
        El nom d'aquest argument ens el podem inventar però normalment es tria un nom que tingui lògica. En el nostre cas, triariem "llenguatge". Aquesta funció s'executarà a cada element de l'array.
    </p>

    <pre>
        <code>
            let llenguatges = ["ruby","php","javascript","python"];

            llenguatges.foreach(function(llenguatge){
                console.log(llenguatge);
            })
        </code>
    </pre>

    <p>
        Potser s'utilitza més el forEach perquè és més clar i expressiu que el cicle for. 
    </p>

    <h2>
        Arguments de foreach i de la funció
    </h2>

    <p>
    El mètode <code>forEach()</code> pot rebre **dos arguments**, però cal no confondre'ls amb els **arguments de la funció** que li passem com a callback.
    </p>

    <h3>
    1. Arguments que rep el mètode <code>forEach()</code>
    </h3>

    <ul>
        <li>
            <strong>Primer argument:</strong> una funció <span title="Una callback és una funció que passem com a argument a una altra funció, perquè s'executi més endavant, normalment quan es compleix una condició o s'acaba una acció.">callback</span> que s’executarà per a cada element.
        </li>
        <li>
            <strong>Segon argument (opcional):</strong> un valor que es pot usar com a <span title="En JavaScript, 'this' fa referència al context en què s’està executant el codi. Pot ser un objecte, el context global o undefined, segons com es cridi la funció.">this</span> dins de la funció (poc utilitzat actualment).
        </li>
    </ul>

    <p>
    Exemple bàsic:
    </p>
    
    <pre>
        <code>
            const noms = ["Pau", "Laia", "Nil"];
            noms.forEach(function(nom) {
            console.log(nom);
            });
        </code>
    </pre>
    
    <h4>
        Arguments que rep la funció (callback)
    </h4>        
      
    <p>
        La funció que passem com a primer argument pot rebre fins a **tres paràmetres**:
    </p>
   
    <ul>
        <li>
            <strong>1r: l’element actual</strong> – el valor que estem processant.
        </li>
        <li>
            <strong>2n: l’índex</strong> – la posició dins l’array.
        </li>
        <li>
            <strong>3r: l’array complet</strong> – l’array original.
        </li>
    </ul>

    <pre>
        <code>
            const notes = [7, 8, 9];
            notes.forEach(function(valor, index, array) {
            console.log("Nota " + valor + " a la posició " + index + " de " + array);
            });
        </code>
    </pre>

    <p>
        Resultat:
    </p>
    
    <pre>
        Nota 7 a la posició 0 de 7,8,9  
        Nota 8 a la posició 1 de 7,8,9  
        Nota 9 a la posició 2 de 7,8,9
    </pre>

    <h3>
        Resum visual
    </h3>

    <table border="1" cellpadding="6">
    <thead>
        <tr>
        <th>Tipus</th>
        <th>Arguments</th>
        <th>Descripció</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><code>forEach()</code></td>
        <td>funció, thisArg (opcional)</td>
        <td>La funció que s’executarà i, opcionalment, el valor de <code>this</code></td>
        </tr>
        <tr>
        <td>Funció (callback)</td>
        <td>element, índex, array</td>
        <td>Valors que reps dins de la funció per treballar amb l’array</td>
        </tr>
    </tbody>
    </table>

    <h4>
        El segon argument de <code>forEach()</code>: el valor de <code>this</code>
    </h4>

    <p>
        A més de la funció (callback), el mètode <code>forEach()</code> pot rebre un <strong>segon argument opcional</strong>. Aquest segon argument serveix per indicar quin valor ha de tenir <code>this</code> dins la funció que estem passant.
    </p>

    <p>
        Per defecte, el valor de <code>this</code> dins la funció pot ser <code>undefined</code> o apuntar al context global (segons com escrivim la funció). Però si li passem un segon argument a <code>forEach()</code>, aquest serà el valor de <code>this</code> dins la funció.
    </p>

    <h3>
        Exemple amb segon argument (thisArg)
    </h3>

    <pre>
        <code>
            const context = {
            prefix: "Hola",
            };

            const noms = ["Pau", "Laia", "Nil"];

            noms.forEach(function(nom) {
            console.log(this.prefix + " " + nom);
            }, context); // Passem 'context' com a segon argument (thisArg)
        </code>
    </pre>

    <p>
        En aquest exemple, el valor de <code>this</code> dins la funció fa referència a l’objecte <code>context</code>, perquè l’hem passat com a segon argument al <code>forEach()</code>.
    </p>

    <p>
        Resultat:
    </p>

    <pre>
        Hola Pau  
        Hola Laia  
        Hola Nil
    </pre>

    <p>
        Això és útil quan volem accedir a propietats d’un objecte des de dins del bucle sense haver de declarar variables auxiliars.
    </p>

    <h3>
        ⚠️ Atenció
    </h3>
    
    <p>
        Aquest comportament només funciona si la funció que passem a <code>forEach()</code> és una <strong>funció normal</strong>. Si fas servir una <strong>funció fletxa (arrow function)</strong>, <code>this</code> no es redefineix, i el segon argument serà ignorat.
    </p>

    <pre>
        <code>
            // Aquest NO funciona com esperem:
            noms.forEach((nom) => {
            console.log(this.prefix + " " + nom);
            }, context); // ❌ 'this.prefix' és undefined
        </code>
    </pre>

    <h2>
        Exercicis
    </h2>

    <h3>
        Saluda cada alumne
    </h3>

    <p>
        Escriu un programa que tingui un array amb noms d’alumnes. Utilitza <code>forEach</code> per mostrar per pantalla un missatge personalitzat per a cada alumne que digui: <em>"Bon dia, NOM!"</em>
    </p>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let alumnes = ["Anna", "Pau", "Marc", "Júlia"];
            alumnes.forEach(function(alumne) { 
                console.log("Bon dia, " + alumne + "!"); 
            });
        </code> 
    </pre>

    <h3>
    Mostra alumnes numerats
    </h3>

    <p>
    Escriu un programa que tingui un array amb noms d’alumnes. Utilitza <code>forEach</code> per mostrar per pantalla cada nom amb el seu número d’ordre començant per 1. Per exemple: <em>"1. Anna"</em>, <em>"2. Pau"</em>, etc.
    </p>

    <button onclick="mostrarSolucio('solucio2')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio2" style="display:none;">
        <code>
            let alumnes = ["Anna", "Pau", "Marc", "Júlia"];

            alumnes.forEach(function(alumne, index) {
            console.log((index + 1) + ". " + alumne);
            });
        </code>
    </pre>

    <h3>
        Avisa segons la llargada del nom
    </h3>

    <p>
        Escriu un programa que tingui un array amb noms d’alumnes. Utilitza <code>forEach</code> per mostrar un missatge diferent segons si el nom té més de 5 lletres o no. Per exemple: <em>"Júlia és un nom curt"</em>, <em>"Francesc és un nom llarg"</em>.
    </p>

    <button onclick="mostrarSolucio('solucio4')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio4" style="display:none;">
        <code>
            let alumnes = ["Joan", "Francesc", "Mia", "Cristina"];

            alumnes.forEach(function(alumne) {
            if (alumne.length > 5) {
                console.log(alumne + " és un nom llarg");
            } else {
                console.log(alumne + " és un nom curt");
            }
            });
        </code>
    </pre>

    <h3>
    Afegeix numeració i etiqueta segons el nom
    </h3>

    <p>
        Escriu un programa que tingui un array amb noms d’alumnes. Utilitza <code>forEach</code> per numerar cada alumne i afegir una etiqueta especial si el seu nom és "Marc". El resultat ha de ser com:
    </p>

    <pre>
        <code>
            1. Anna
            2. Marc - Ets el profe!
            3. Júlia
        </code>
    </pre>

    <button onclick="mostrarSolucio('solucio5')">
    Mostra / Amaga solució
    </button>

    <pre id="solucio5" style="display:none;">
        <code>
            let alumnes = ["Anna", "Marc", "Júlia"];

            alumnes.forEach(function(alumne, index) {
            let missatge = (index + 1) + ". " + alumne;

            if (alumne === "Marc") {
                missatge += " - Ets el profe!";
            }

            console.log(missatge);
            });
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