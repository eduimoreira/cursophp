<div class="titulo">Switch</div>

<form action="#" method="post">
    <div>
        <label for="categoria">Carro: </label>
        <select name="categoria" id="categoria">
            <option value="suv">SUV</option>
            <option value="luxo">Luxo</option>
            <option value="sedan">Sedan</option>
            <option value="asdasdasd">Compacto</option>
        </select>
    </div>
      
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
if(isset($_POST['categoria'])){ 
    
    
    $categoria = $_POST['categoria'];




switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";
}