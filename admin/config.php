<?php
defined('ABSPATH') or die( "Bye bye" );

if (! current_user_can ( 'manage_options' )) wp_die (__ ( 'No tienes suficientes permisos para acceder a esta página.' ));
?>

<div class= "wrap" >
    <h2><?php _e('Pasarela de Pago','skeleton')?></h2>

    <!--Formulario --> 
    <form action=" " method="get">
        <p>Nombres: <br><input type="text" name="nombres" size="40"></p>
        <p>Apellidos: <br><input type="text" name="apellidos" size="40"></p>
        <p>Número de tarjeta: <br><input type="number" name="tarjeta" min="50"></p>
        <p>Caducidad: <br><input type="number" name="caducidad" max="3"></p>
        <p>CVV: <br><input type="number" name="CVV" max="3"></p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
</div>
