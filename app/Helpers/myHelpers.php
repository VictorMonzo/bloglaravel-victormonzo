<?php
use Carbon\Carbon;

function fechaActual($formato) {
    return Carbon::now()->format($formato);
}
