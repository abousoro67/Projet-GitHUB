<?php
include("layout/header.php");
?>


    <label for="numun">Nombre 1:</label>
    <input type="number" id="numun" name="numun" required>
    <label for="numdeux">Nombre 2:</label>
    <input type="number" id="numdeux" name="numdeux" required>
    <button id="calculer" onclick="calcul()">calculer</button>  
    <span id="result"> </span>


    <br>

    <div style="text-align: center; margin-top: 50px;">
        <button id="clickButton" onclick="clickButton()">Cliquez-moi</button>
        <p id="counterText">Nombre de clics : 0</p>
    </div>

   

<script>
    function calcul(){
        var x=document.getElementById("numun").value;
        var y=document.getElementById("numdeux").value;
        let result=document.getElementById("result");
        var somme=0;
        somme =parseFloat(x)+parseFloat(y);
        
        result.textContent = somme;
    }

     // Initialisation des variables
     var button = document.getElementById('clickButton');
        var counterText = document.getElementById('counterText');
        let clickCount = 0;

        function clickButton(){
            clickCount++;
            counterText.textContent = 'Nombre de clics : '+ clickCount;

            // Désactiver le bouton après 10 clics
            if (clickCount >= 10) {
                button.setAttribute('disabled', 'true');
            }
        }
</script>















<?php
include("layout/footer.php");
?>