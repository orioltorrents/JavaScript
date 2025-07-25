<?php
$titol = "Recorre un array";
include("../includes/head.php");
?>

<body>
    <p>
        <a href="../index.html">
            Anar a l'índex
        </a>
    </p>

    <h1>
        Recorre un array
    </h1>

    <p>
        Treballem amb arrays per treballar amb un conjunt de variables agrupades sota una mateixa variable. Aquesta variable ens permet treballar amb cicles o funcions per treballar amb cdascun dels elements de l'array. Aquí estudiarem com utilitzar els cicles per recorrer un array.
    </p>

    <p>
        La forma més senzilla per recorrer un array és utilitzar un cicle for. Recordem que l'estructura d'un cicle for és:
    </p>

    <pre>
        <code>
            array = [1,2,3,4];

            for (Inicialització ; Condició ; Actualització){
                codi a executar en cada posiciód de l'array
            }
        </code>
    </pre>
    
    Un exemple de com ho fariem seria...

    <pre>
        <code>
            for (let i = 0 ; i < array.length ; i++){
                console.log(array[i])
            }
        </code>
    </pre>

    <p>
        Comencem el bucle for per recorrer l'array des de l'index zero posant let i = 0 a inicialització perquè el <strong>primer valor de l'array té index zero </strong>. No arribem fins al final de l'array fins que no estem al nombre de la longitud de l'array menys 1. Després incrementem index un a un per anar-los recorrent un a un. Un exemple de codi que podriem utilitzar és console.log (array[i]) per imprimir tots els elements per consola.
    </p>

    <p>
        Per recorrer els elements de darrera fins a davant, fariem...
    </p>

    <pre>
        <code>
            for (let i = array.length - 1 ; i >= 0 ; i--){
                codi a executar en cada posició de l'array
            }
        </code>
    </pre>
    
    <p>
        Podem guardar els elements de l'array en una variable...
    </p>

    <pre>
        <code>
            for (let i = 0 ; i < array.length - 1 ; i++){
                let element = array[i];
            }
        </code>
    </pre>
    
    <p>
        Més endavant, podem recorrer els arrays d'altres maneres, des de que es va introduir uns metodes en la última revisió ECMAScript 5.
    </p>
</body>
</html>