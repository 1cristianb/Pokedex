# Pokedex

## Descripción del Proyecto

Pokedex es una aplicación web que permite a los usuarios explorar información detallada sobre diferentes Pokémon. Los usuarios pueden buscar Pokémon por nombre, tipo, y número.

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación utilizado para la lógica del servidor.
- **MySQL**: Base de datos utilizada para almacenar información sobre los Pokémon.
- **HTML/CSS**: Utilizados para la estructura y el diseño de la interfaz de usuario.

## Requisitos Previos

Asegúrate de tener instalados los siguientes componentes antes de comenzar:

- PHP
- MySQL Server
- Servidor web ( Apache )

## Instalación

1. **Clonar el repositorio**:
    ```bash
    git clone https://github.com/1cristianb/pokedex.git
    cd pokedex
    ```

2. **Configurar la base de datos**:

   - Crear una base de datos en MySQL (ya hay instrucciones sql en `pokemon/instrucciones_SQL.php` )
    

3. **Configurar las credenciales de la base de datos**:

   Modifica el archivo `conexionBD.php` con tus credenciales de MySQL:


4. **Desplegar la aplicación**:

   - Copia todos los archivos del proyecto al directorio raíz de tu servidor web 
   - Asegúrate de que tu servidor web esté configurado para servir archivos PHP y esté apuntando al directorio correcto.

5. **Acceder a la aplicación**:

   Abre tu navegador web y dirígete a la dirección donde está alojada tu aplicación. Por ejemplo: http://localhost/Pokemon

## Autor
Cristian Boschi
