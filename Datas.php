<?php

/*
 * -> P representação de período: vem antes de dia, mês, ano, semana
*  Y anos
 * M meses
 * D dias
 * W semanas
 * -> T representação de tempo: vem antes de hora, minuto e segundo
 * H horas
 * M minutos
 * S segundos
 * */
    $data = new DateTime();
    $intervalo = new DateInterval('P5DT10H50S'); //adiciona um periodo de 5 minutos
    $data->sub($intervalo);

    echo $data->format('d/m/Y - h:m:s');