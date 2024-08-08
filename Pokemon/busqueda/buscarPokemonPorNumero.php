<?php
if(empty($_SESSION['usuario'])){
    if (!empty($_GET['buscarPokemon'])) {
        $pokemonDevueltoPorNumero = buscarPokemonPorNumero($_GET['buscarPokemon']);
        if ($pokemonDevueltoPorNumero != null) {
            echo
                "<tbody>
        <tr>
            <th scope='row' class='hover-imagen'><a href=plantilla.php?nombre=".$pokemonDevueltoPorNumero[0]["numero_id"].">  <img style='width: 80px' src=" . $pokemonDevueltoPorNumero[0]['imagen'] . "> </th>
            <td> <img style='width: 100px'  src=" . $pokemonDevueltoPorNumero[0]['tipo'] . "></td>
            <td>" . $pokemonDevueltoPorNumero[0]['numero_id'] . "</td>
            <td>" . $pokemonDevueltoPorNumero[0]['nombre'] . "</td>
        </tr>
        </tbody>";
        }
    }
}if(!empty($_SESSION['usuario'])){
    if (!empty($_GET['buscarPokemon'])) {
        $pokemonDevueltoPorNumero = buscarPokemonPorNumero($_GET['buscarPokemon']);
        if ($pokemonDevueltoPorNumero != null) {
            echo
                "<tbody>
        <tr>
            <th scope='row' class='hover-imagen'><a href=plantilla.php?nombre=".$pokemonDevueltoPorNumero[0]["numero_id"].">  <img style='width: 80px' src=" . $pokemonDevueltoPorNumero[0]['imagen'] . "> </th>
            <td> <img style='width: 100px'  src=" . $pokemonDevueltoPorNumero[0]['tipo'] . "></td>
            <td>" . $pokemonDevueltoPorNumero[0]['numero_id'] . "</td>
            <td>" . $pokemonDevueltoPorNumero[0]['nombre'] . "</td>
            <td>
                <button class='btn btn-secondary'><a style='text-decoration: none; color:white' href=modificar.php?id=".$pokemonDevueltoPorNumero[0]['numero_id'].">Modificar</a></button>
                <button class='btn btn-secondary '><a style='text-decoration: none; color:white' href=eliminar.php?id=".$pokemonDevueltoPorNumero[0]['numero_id'].">Eliminar</a></button>
            </td>
        </tr>
        </tbody>";
        }
    }
}
