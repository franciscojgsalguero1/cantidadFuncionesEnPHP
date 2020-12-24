<?php
    $funcs = get_defined_functions();
    echo "Hay " . count($funcs['internal']) . " funciones del core y extensiones instaladas";
?>