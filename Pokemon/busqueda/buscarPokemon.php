
<table class="table table-bordered mt-5 text-center">
    <thead>
    <tr>
        <th scope="col">Imagen</th>
        <th scope="col">Tipo</th>
        <th scope="col">Número</th>
        <th scope="col">Nombre</th>
    </tr>
    </thead>

<?php


if (!empty($_GET['buscarPokemon'])) {
    $pokemonDevueltoPorNombre = buscarPokemonPorNombre($_GET['buscarPokemon']);
    $pokemonDevueltoPorTipo=buscarPokemonPorTipo($_GET['buscarPokemon']);
    $pokemonDevueltoPorNumero=buscarPokemonPorNumero($_GET['buscarPokemon']);
    if ($pokemonDevueltoPorNombre != null) {
        echo
            "<tbody>
        <tr>
            <th scope='row' class='hover-imagen'><a href=plantilla.php?nombre=".$pokemonDevueltoPorNombre["numero_id"]."> <img style='width: 80px' src=" . $pokemonDevueltoPorNombre["imagen"] . "> </th>
            <td> <img style='width: 100px'  src=" . $pokemonDevueltoPorNombre['tipo'] . "></td>
            <td>" . $pokemonDevueltoPorNombre['numero_id'] . "</td>
            <td>" . $pokemonDevueltoPorNombre['nombre'] . "</td>
        </tr>
        </tbody>";
    }
    if($pokemonDevueltoPorTipo!=null){
        include_once("buscarPorTipo.php");
    }
    if($pokemonDevueltoPorNumero!=null){
        include_once("buscarPokemonPorNumero.php");
    }
    if ($pokemonDevueltoPorNombre == null && $pokemonDevueltoPorTipo==null && $pokemonDevueltoPorNumero==null ) {
        echo '<script language="javascript">alert("pokemon no encontrado");</script>';
        foreach ($resultAsArray as $pokemon) {
            echo
                "<tbody>
        <tr>
            <th scope='row' class='hover-imagen'><a href=plantilla.php?nombre=".$pokemon["numero_id"]."> <img style='width: 80px' src=" . $pokemon["imagen"] . "> </th>
            <td><img style='width: 100px'  src=" . $pokemon['tipo'] . "></td>
            <td>" . $pokemon['numero_id'] . "</td>
            <td>" . $pokemon['nombre'] . "</td>
        </tr>
        </tbody>";
        }
    }
} else {
    foreach ($resultAsArray as $pokemon) {
        echo
            "<tbody>
        <tr>
            <th scope='row' class='hover-imagen'><a href=plantilla.php?nombre=".$pokemon["numero_id"]."><img style='width: 80px' src=" . $pokemon["imagen"] . "> </th>
            <td><img style='width: 100px' src=". $pokemon['tipo'] ." ></td>
            <td>" . $pokemon['numero_id'] . "</td>
            <td>" . $pokemon['nombre'] . "</td>
        </tr>
        </tbody>";
    }
}


?>

</table>
