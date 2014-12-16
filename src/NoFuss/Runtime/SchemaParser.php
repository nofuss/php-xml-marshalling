<?php
namespace NoFuss\Runtime;

class SchemaParser
{
    private $schemaFile;

    private $xmlReader;

    public function __construct($schemaFile)
    {
        if (!file_exists($schemaFile) || !is_readable($schemaFile)) {
            throw new \InvalidArgumentException("Unreadable XSD-Schema file: $schemaFile");
        }
        $this->schemaFile = $schemaFile;
        $this->xmlReader = new \XMLReader();
        if ($this->xmlReader->open($schemaFile) === false) {
            throw new \InvalidArgumentException("Failed to load XSD-Schema file: $schemaFile");
        }
    }

    public function readSchema()
    {
        while ($this->xmlReader->read()) {
            if ($this->xmlReader->nodeType == \XMLReader::ELEMENT) {
                print "localname:" . $this->xmlReader->localName . "\n";
                while ($this->xmlReader->moveToNextAttribute()) {
                    print "\tattribute name: " . $this->xmlReader->name . "\n";
                    print "\tattribute value: " . $this->xmlReader->value . "\n";
                }
            }
        }
    }
}
