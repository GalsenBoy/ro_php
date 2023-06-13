<?php


function checkbox(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data) && in_array($value, $data[$name])) {
        $attributes .= 'cheked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" id="">
HTML;
}
