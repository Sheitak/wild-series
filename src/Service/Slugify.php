<?php


namespace App\Service;

/**
 * @Route("/service")
 */
class Slugify
{
    public function generate(string $input) : string
    {
        $input = str_replace(" ", "-", "$input");
        $input = preg_replace('/pratique/[^A-Za-z0-9-]/', '', $input);
        $input = preg_replace('/pratique/-+/', '-', $input);
        $utf8 = array
        (
            '/[áàâãªä]/u' => 'a',
            '/[ÁÀÂÃÄ]/u' => 'A',
            '/[ÍÌÎÏ]/u' => 'I',
            '/[íìîï]/u' => 'i',
            '/[éèêë]/u' => 'e',
            '/[ÉÈÊË]/u' => 'E',
            '/[óòôõºö]/u' => 'o',
            '/[ÓÒÔÕÖ]/u' => 'O',
            '/[úùûü]/u' => 'u',
            '/[ÚÙÛÜ]/u' => 'U',
            '/ç/' => 'c',
            '/Ç/' => 'C',
            '/ñ/' => 'n',
            '/Ñ/' => 'N',
            '//' => '-', // conversion d'un tiret UTF-8 en un tiret simple
            '/[]/u' => ' ', // guillemet simple
            '/[«»]/u' => ' ', // guillemet double
            '/ /' => ' ', // espace insécable (équiv. à 0x160)
        );
        $input = preg_replace(array_keys($utf8), array_values($utf8), $input);
        $input = strtolower($input);

        return trim($input);
    }
}
