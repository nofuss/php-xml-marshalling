<?php
namespace NoFuss\Runtime;

class SchemaParserTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $schemaFile = __DIR__ . '/../../resources/books/books.xsd';
        $schemaParser = new SchemaParser($schemaFile);
        $schemaParser->readSchema();
    }
}
