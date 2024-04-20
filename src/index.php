<?php
//session_name('caravan');
//session_start();
require('../db/connection.php');
include('../util/tags.php');

beginHtml("Caravan: Stressless management");
showHeader('standalone');
showMain('centered');

echo "

        <div class='login-card'>
            <div class='login-card-logo'>
                <img src='../img/logo.png' alt='logo'>
            </div>
            <div class='login-card-header'>
                <h1>Iniciar sesión</h1>
                <div>Por favor, ingresa para usar la plataforma.</div>
            </div>
            <form class='login-card-form' method='post' action='../util/auth.php'>
                <div class='form-item'>
                    <span class='form-item-icon material-symbols-rounded'>person</span>
                    <input type='text' placeholder='Tu login' name='login' 
                    autofocus required>
                </div>
                <div class='form-item'>
                    <span class='form-item-icon material-symbols-rounded'>lock</span>
                    <input type='password' placeholder='Tu password' name='password' required>
                </div>
                <button type='submit'>Entrar</button>
            </form>
        </div>
";

closeMain();
showFooter();
endHtml();
