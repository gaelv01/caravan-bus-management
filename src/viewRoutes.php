<?php

require('../db/connection.php');
include('../util/tags.php');

$embeddedhtml =
'
<div class = "bloque --blanco">
<div class = "container">
        <div class = "map">
            <div class = "position0">
                <div class="marker"></div>
                <span class="title">Bus MD63J4E</span>
                <div class="marker-animation"></div>
                <div class="marker-animation1"></div>
            </div>

            <div class = "position1">
                <div class="marker"></div>
                <span class="title">Bus PVKE989</span>
                <div class="marker-animation"></div>
                <div class="marker-animation1"></div>
            </div>

            <div class = "position2">
                <div class="marker"></div>
                <span class="title">Bus QR284JD</span>
                <div class="marker-animation"></div>
                <div class="marker-animation1"></div>
            </div>

            <div class = "position3">
                <div class="marker"></div>
                <span class="title">Bus MX054U3</span>
                <div class="marker-animation"></div>
                <div class="marker-animation1"></div>
            </div>
        </div>
    </div>
</div>
';

generatePage($embeddedhtml, 'Localización de rutas');
