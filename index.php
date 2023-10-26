<?php

$file = fopen("test.txt", "r");
$fileData = fread($file, filesize("test.txt"));
fclose($file);

$words = preg_split('/[ \t\n]+/', $fileData);

foreach ($words as $word) {
    echo $word . "<br>";
    
}

// class Token {
//     public $type;
//     public $value;

//     public function __construct($type, $value) {
//         $this->type = $type;
//         $this->value = $value;
//     }
// }

// class Lexer {
//     private $keywords = ['if', 'else', 'while', 'for', 'int', 'float', 'return'];

//     public function tokenize($input) {
//         $tokens = [];
//         $position = 0;
//         $inputLength = strlen($input);

//         while ($position < $inputLength) {
//             $char = $input[$position];

//             if (preg_match('/\s/', $char)) {
//                 // Ignore whitespace
//                 $position++;
//             } elseif (preg_match('/[a-zA-Z_]/', $char)) {
//                 // Identifier (variable or keyword)
//                 $value = '';
//                 while ($position < $inputLength && preg_match('/[a-zA-Z0-9_]/', $input[$position])) {
//                     $value .= $input[$position];
//                     $position++;
//                 }

//                 $type = in_array($value, $this->keywords) ? 'keyword' : 'identifier';
//                 $tokens[] = new Token($type, $value);
//             } elseif (preg_match('/[0-9]/', $char)) {
//                 // Number (integer or float)
//                 $value = '';
//                 while ($position < $inputLength && preg_match('/[0-9\.]/', $input[$position])) {
//                     $value .= $input[$position];
//                     $position++;
//                 }

//                 $tokens[] = new Token('number', $value);
//             } else {
//                 // Operators and separators
//                 $value = $char;
//                 $position++;

//                 $operators = ['+', '-', '*', '/', '=', '==', '!=', '<', '>', '<=', '>=', ';', '(', ')', '{', '}'];
//                 if (in_array($value, $operators)) {
//                     $tokens[] = new Token('operator', $value);
//                 } else {
//                     $tokens[] = new Token('separator', $value);
//                 }
//             }
//         }

//         return $tokens;
//     }
// }

// $input = file_get_contents("test.txt");
// $lexer = new Lexer();
// $tokens = $lexer->tokenize($input);

// foreach ($tokens as $token) {
//     echo "Type: {$token->type}, Value: {$token->value}";
//     echo "<pre>";
// }