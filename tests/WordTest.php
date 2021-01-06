<?php

namespace GGGGino\WordBundle\Tests;

use GGGGino\WordBundle\WordFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;
use PHPUnit\Framework\TestCase;

class WordTest extends TestCase
{
    public function testInstancesDocx()
    {
        $wordObj = new WordFactory();

        // assert that your calculator added the numbers correctly!
        $this->assertInstanceOf(WordFactory::class, $wordObj);
        $this->assertInstanceOf(PhpWord::class, $wordObj->createPHPWordObject(__DIR__ . '/files/file2.docx'));
        $this->assertInstanceOf(TemplateProcessor::class, $wordObj->createTemplateObject(__DIR__ . '/files/file2.docx'));
    }
}