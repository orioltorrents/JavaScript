<?php
$titol = "Arrays i els seus usos";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="index.html">Anar a l'índex</a>
    </p>

    <h1>
        Arrays i els seus usos
    </h1>

    <p>
        Un <strong>array</strong> és una estructura que ens permet guardar diversos valors dins d'una sola variable. Un array és un conjunt ordenat de blocs i en cada bloc és una dada que forma part del array. Podem pensar-ho com una caixa plena de dades on cada dada ocupa un lloc determinat.
    </p>

    <p>
        Imaginem que tenim les notes de unes quantes assignatures i volem treballar amb elles. Fins ara el que hem après és tenir-les d'aquesta manera
    </p>

    <pre>
        <code>
            let catala = 5;
            let castella = 6;
            let ingles = 8;
            let biologia = 7;
            let mates = 9;
        </code>
    </pre>

    <p>
        Llistem totes les variables i volem treballar amb elles. No hi ha una forma pràctica de treballar amb elles. Si volem fer la mitjana hauria de fer-ho aixi...
    </p>

    <pre>
        <code>
            let mitjana = (catala + castella + ingles + biologia + mates) / 5;
        </code>
    </pre>

    <p>
        Què passa ara si afegim una nova assignatura? Ja no ens valdria l'expressió per calcular la mitjana i l'hauriem de modificar...
    </p>

     <p>
        Això només és un exemple però en podríem treure molts més. Per exemple, imagina que volem guardar els noms dels teus companys de grup, les puntuacions d’un videojoc, o els dies de la setmana. En tots aquests casos tenim diverses dades relacionades i ens aniria molt millor tenir-les agrupades en un sol lloc.
    </p>

    <p>
        Ara veurem com podem resoldre aquest problema amb un array. Podem guardar totes les notes en una sola variable:
    </p>

    <h2>
        Crear un array
    </h2>

    <p>
        Podem crear un array utilitzant claudàtors <code>[]</code> i separant els valors amb comes:
    </p>

    <pre>
        <code>
            let notes = [5, 6, 8, 7, 9];
        </code>
    </pre>

    <p>
        Tenim un array d'una longitud de 5 valors. La longitud d'un array es la quantitat de valors que hi ha dins de l'array.
    </p>

    <h2>
        Accedir als valors
    </h2>

    <p>
        Cada valor ocupa una posició que comença a comptar des de 0. Podem accedir al primer valor de l'array així, <code>notes[0]</code> que ens dona el primer valor.
    </p>

    <pre>
        <code>
            console.log(notes[1]); // Accedim a la segona posició de l'array i ens imprimeix 6
        </code>
    </pre>

    <p>
        Cada nota està guardada en una posició. La posició en un array és l'index. Les posicions comencen a comptar des de 0:
    </p>

    <ul>
        <li>notes[0] és 5 (Català)</li>
        <li>notes[1] és 6 (Castellà)</li>
        <li>notes[2] és 8 (Anglès)</li>
        <li>notes[3] és 7 (Biologia)</li>
        <li>notes[4] és 9 (Matemàtiques)</li>
    </ul>

    <p>
        Ara sí que podem fer operacions amb totes les notes sense haver de repetir els noms de les variables.
    </p>

    <p>
        Per exemple, podem calcular la mitjana així:
    </p>

    <pre>
        <code>
            let mitjana = (notes[0] + notes[1] + notes[2] + notes[3] + notes[4]) / 5;
        </code>
    </pre>

    <p>
        Podem accedir a la última posició de l'array així: <code>notes[notes.length - 1"]</code>. La longitud d'un array es el nombre de valors que hi ha dins d'ell que la podem conèixer o no.
    </p>
    
    <p>
        I si afegim una nova nota?
    </p>

    <pre>
        <code>
            notes[5] = 10;
        </code>
    </pre>

    <p>
        Només haurem d'adaptar la fórmula. Més endavant aprendrem a fer això automàticament amb bucles.
    </p>

    <h2>
        Exercici
    </h2>

    <p>
        Crea un array amb 4 notes fictícies d'assignatures. Mostra per consola la primera nota, la tercera, i canvia la segona per un altre valor.
    </p>

    <button onclick="mostrarSolucio('solucio1')">
        Mostra / Amaga solució
    </button>

    <pre id="solucio1" style="display:none;">
        <code>
            let notes = [6, 7, 5, 8];
            console.log(notes[0]); // Mostra la primera nota
            console.log(notes[2]); // Mostra la tercera nota
            notes[1] = 9; // Canvia la segona nota
        </code>
    </pre>

    <h2>
        Conclusió
    </h2>

    <p>
        Els arrays ens ajuden a organitzar millor la informació quan tenim molts valors relacionats. En lloc de crear una variable per cada dada, podem posar-les totes dins una sola estructura i accedir-hi per posició. És una eina bàsica i molt potent que utilitzarem molt sovint.
    </p>

    <p>
        <a href="index.html">Anar a l'índex</a>
    </p>
</body>
</html>
