<?php
$titol = "Shorthand syntax";
include("../includes/head.php");
?>

<body>
<p>
    <a href="../index.html">
        Anar a l'índex
    </a>
</p>        

<h1>
    Shorthand syntax
</h1>

<p>
    En JavaScript, sovint ens trobem amb expressions i patrons que es poden escriure de forma més breu i elegant. Aquestes es coneixen com a <strong>shorthand syntax</strong> o “sintaxi abreujada”. Aprendre aquestes formes ens permet fer el nostre codi més llegible i professional.
</p>

<h2>
    Declaració d'objectes amb propietats abreujades
</h2>

<p>
    Si el nom de la propietat és igual al nom de la variable, podem evitar repetir-lo:
</p>

<pre>
    <code>
        let nom = "Joana";
        let edat = 22;

        let persona = {
        nom,
        edat
        };

        console.log(persona); // { nom: "Joana", edat: 22 }
    </code>
</pre>

<h2>
    Mètodes amb sintaxi abreujada
</h2>

<p>
    En lloc d'escriure una funció amb la paraula <code>function</code>, podem fer:
</p>

<pre>
    <code>
        let gos = {
        bordar() {
        console.log("Bup bup!");
        }
        };

        gos.bordar(); // Bup bup!
    </code>
</pre>

<h2>
    Valors per defecte en paràmetres
</h2>

<p>
    Podem assignar un valor predeterminat a un paràmetre si no es passa cap valor:
</p>

<pre>
    <code>
        function saluda(nom = "convidat") {
        console.log("Hola " + nom);
        }

        saluda();           // Hola convidat
        saluda("Marta");    // Hola Marta
    </code>
</pre>

<h2>
    Operador ternari
</h2>

<p>
    Una manera curta d'escriure condicions <code>if...else</code>:
</p>

<pre>
    <code>
        let edat = 16;
        let potEntrar = edat >= 18 ? "Sí" : "No";

        console.log(potEntrar); // No
    </code>
</pre>

<h2>
    Exercicis
</h2>

<h3>
    Exercici 1: Objecte amb propietats abreujades
</h3>

<p>
    Crea un objecte que es digui <code>alumne</code> amb les variables <code>nom</code> i <code>curs</code> utilitzant la sintaxi abreujada.
</p>

<pre>
    <code>
        let nom = "Pere";
        let curs = "1r Batxillerat";
    </code>
</pre>

<button onclick="mostrarSolucio('solucio1')">
    Mostra / Amaga solució
</button>

<pre id="solucio1" style="display:none;">
    <code>
        let nom = "Pere";
        let curs = "1r Batxillerat";

        let alumne = {
        nom,
        curs
        };

        console.log(alumne);
    </code>
</pre>

<h3>
    Exercici 2: Mètode amb sintaxi curta
</h3>

<p>
    Crea un objecte <code>calculadora</code> amb un mètode <code>suma</code> que rebi dos números i retorni la seva suma. Fes servir la sintaxi curta per definir-lo.
</p>

<pre>
    <code>
    let calculadora = {
    // completa aquí
    };
    </code>
</pre>

<button onclick="mostrarSolucio('solucio2')">
    Mostra / Amaga solució
</button>

<pre id="solucio2" style="display:none;">
    <code>
        let calculadora = {
        suma(a, b) {
        return a + b;
        }
        };

        console.log(calculadora.suma(3, 7)); // 10
    </code>
</pre>

<h3>
    Exercici 3: Valor per defecte
</h3>

<p>
    Fes una funció <code>presenta</code> que rebi un nom i digui "Sóc ___". Si no es passa cap nom, que digui "Sóc anònim".
</p>

<pre>
    <code>
        function presenta(nom = ) {
        console.log("Sóc " + nom);
        }
    </code>
</pre>

<button onclick="mostrarSolucio('solucio3')">
    Mostra / Amaga solució
</button>

<pre id="solucio3" style="display:none;">
    <code>
        function presenta(nom = "anònim") {
        console.log("Sóc " + nom);
        }

        presenta();         // Sóc anònim
        presenta("Lluc");   // Sóc Lluc
    </code>
</pre>

<h3>
    Exercici 4: Operador ternari
</h3>

<p>
    Crea una variable <code>temps</code> i assigna-li un valor (per exemple 20). Usa l’operador ternari per mostrar si fa fred o calor (si és inferior a 15, fa fred).
</p>

<pre>
    <code>
    let temps = 20;
    let missatge =  temps < 15 ?  : ;
    console.log(missatge);
    </code>
</pre>

<button onclick="mostrarSolucio('solucio4')">
    Mostra / Amaga solució
</button>

<pre id="solucio4" style="display:none;">
    <code>
        let temps = 20;
        let missatge = temps < 15 ? "Fa fred" : "Fa calor";

        console.log(missatge); // Fa calor
    </code>
</pre>

<h2>
    Conclusions
</h2>

<p>
Fer servir <strong>sintaxi abreujada</strong> ens ajuda a fer el codi més net, més curt i més llegible. És una bona pràctica conèixer aquestes formes i aplicar-les quan sigui convenient. Però cal anar amb compte de no sacrificar la claredat si estem treballant amb alumnes o equips que encara s’estan iniciant.
</p>

<script>
function mostrarSolucio(id) {
    const bloc = document.getElementById(id);
    bloc.style.display = bloc.style.display === "none" ? "block" : "none";
}
</script>
</body>

</html>
