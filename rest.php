<?php
require_once('database.php');

$format = filter_input(INPUT_GET, 'format');

if (isset($format)) {
    if ($format == 'xml')
        echo header("Content-type: text/xml");
    else if ($format == 'json')
        echo header("Content-type: application/json");
    else
        exit;
} else {
    $format = 'xml';
    echo header("Content-type: text/xml");
}

    // Get all courses
    $query = 'SELECT * FROM books ORDER BY productID';
    $statement = $db->prepare($query);
    $statement->execute();
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    if ($format == 'json') {
        echo json_encode($books, JSON_PRETTY_PRINT); 
    }
    else {
        $doc = new DOMDocument('1.0', 'utf-8');
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $root = $doc->createElement('books');
        $root = $doc->appendChild($root);

        foreach ($books as $book) {
            $courseNode = $doc->createElement('book');
            $courseNode = $root->appendChild($courseNode);
            
            foreach($book as $key => $value) {
                $i = $doc->createElement($key, $value);
                $courseNode->appendChild($i);
            }
        }
        echo $doc->saveXML();
    }

    
?>