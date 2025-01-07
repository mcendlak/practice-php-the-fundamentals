<?php

$books = [
    '978-83-7278-000-3' => [
        'author' => 'J.K. Rowling',
        'title' => [
            'en' => 'Harry Potter and the Philosopher\'s Stone',
            'pl' => 'Harry Potter i Kamień Filozoficzny',
        ],
        'translator' => [
            'en' => null,
            'pl' => 'Andrzej Polkowski',
        ],
    ],
    '83-7278-007-2' => [
        'author' => 'J.K. Rowling',
        'title' => [
            'en' => 'Harry Potter and the Chamber of Secrets',
            'pl' => 'Harry Potter i Komnata Tajemnic',
        ],
        'translator' => [
            'en' => null,
            'pl' => 'Andrzej Polkowski',
        ],
    ],
];

function getAuthor($books, $isbn) {
    if (!isset($books[$isbn])) {
        // Taki ISBN nie istnieje w spisie
        return null;
    }

    $author = $books[$isbn]['author'];
    if ($author) {
        // Zwracam informacje o autorze
        return $author;
    }

    // Brak informacji o autorze
    return false;
}

enum Lang: string {
    case EN = "en";
    case PL = "pl";
}

function getTitle(array $books, string $isbn, Lang $lang) {
    if (!isset($books[$isbn])) {
        return null;
    }

    return $books[$isbn]['title'][$lang->value] ?? null;
}

function getTranslator(array $books, string $isbn, Lang $lang) {
    if (!isset($books[$isbn])) {
        return null;
    }

    return $books[$isbn]['translator'][$lang->value] ?? false;
}

// Testowanie
echo getAuthor($books, '978-83-7278-000-3'); // J.K. Rowling
echo var_export(getAuthor($books, '000-00-0000-000-0'), true); // null
echo getTitle($books, '978-83-7278-000-3', Lang::PL); // Harry Potter i Kamień Filozoficzny
echo getTitle($books, '978-83-7278-000-3', Lang::EN); // Harry Potter and the Philosopher's Stone
echo getTranslator($books, '83-7278-007-2', Lang::PL); // Andrzej Polkowski
echo var_export(getTranslator($books, '83-7278-007-2', Lang::EN), true) // false
?>