<?php
if (empty($_SESSION['usuario'])){
    if (!empty($_GET['buscarPokemon'])) {
        $pokemonDevuelto = buscarPokemonPorTipo($_GET['buscarPokemon']);
        if ($pokemonDevuelto != null) {
            foreach ($pokemonDevuelto as $pokemon) {
                echo
                    "<tbody>
        <tr>
            <th scope='row'><a href=plantilla.php?nombre=".$pokemon["numero_id"].">  <img style='width: 100px' src=" . $pokemon["imagen"] . "> </th>
            <td> <img style='width: 100px'  src=" . $pokemon['tipo'] . "></td>
            <td>" . $pokemon['numero_id'] . "</td>
            <td>" . $pokemon['nombre'] . "</td>
        </tr>
        </tbody>";
            }
        }
    }
}if (!empty($_SESSION['usuario'])){
    if (!empty($_GET['buscarPokemon'])) {
        $pokemonDevuelto = buscarPokemonPorTipo($_GET['buscarPokemon']);
        if ($pokemonDevuelto != null) {
            foreach ($pokemonDevuelto as $pokemon) {
                echo
                    "<tbody>
        <tr>
            <th scope='row'><a href=plantilla.php?nombre=".$pokemon["numero_id"].">  <img style='width: 100px' src=" . $pokemon["imagen"] . "> </th>
            <td> <img style='width: 100px'  src=" . $pokemon['tipo'] . "></td>
            <td>" . $pokemon['numero_id'] . "</td>
            <td>" . $pokemon['nombre'] . "</td>
            <td>
                <button class='btn btn-secondary'><a style='text-decoration: none; color:white' href=modificar.php?id=".$pokemon['id'].">Modificar</a></button>
                <button class='btn btn-secondary '><a style='text-decoration: none; color:white' href=eliminar.php?id=".$pokemon['id'].">Eliminar</a></button>
            </td>
        </tr>
        </tbody>";
            }
        }
    }
}

