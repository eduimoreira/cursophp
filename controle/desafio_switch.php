<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="valor">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

//if ((isset($_POST(['valor']))  && isset($_POST(['conversao']))  )){}

$valor = ($_POST['valor']);
if ($valor==NULL){ 
    $valor=1; 

}



switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $valor * FATOR_KM_MILHA;
        $mensagem = "$valor Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $valor / FATOR_KM_MILHA;
        $mensagem = "$valor Milha(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $valor / FATOR_METRO_KM;
        $mensagem = "$valor Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $valor * FATOR_METRO_KM;
        $mensagem = "$valor Km(s) = $distancia Metro(s)";
        break;
    case 'cel-fah':
        $conversao = $valor * FATOR_CEL_FAH + 32;
        $mensagem = "{$valor}° Celsius = {$conversao}° Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($valor - 32) / FATOR_CEL_FAH;
        $mensagem = "{$valor}° Fahrenheit = {$conversao}° Celsius";
        break;
    default:
    
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";
