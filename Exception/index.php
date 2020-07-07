<?php

function inverse($x)
{
    if (!$x) {
        throw new Exception('Деление на ноль.');

    }
    return $x / 365;
}

try {
    echo inverse(0);
} catch (Exception $e) {
    echo 'Поймано исключение: ', $e->getMessage(), "\n";
} finally {
    echo 'Блок finally <br>';
}

function age($x)
{
    if ($x > 150) {
        throw new Exception('Таких людей не бывает');
    }

    return $x / 365;
}

try {
    echo age(7123);
} catch (Exception $e) {
    echo 'Поймано исключение: ', $e->getMessage(), "\n";
} finally {
    echo 'Блок finally';
}