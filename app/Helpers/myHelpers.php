<?php
use Carbon\Carbon;

function fechaActual($formato) {
    return Carbon::now()->format($formato);
}

function formatoDiaMesAnyo($fecha) {
    return new Carbon($fecha);
}
