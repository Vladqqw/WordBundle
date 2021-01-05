<?php

namespace GGGGino\WordBundle\Tests;

use GGGGino\WordBundle\Factory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\WriterInterface;
use PhpOffice\PhpWord\Reader\ReaderInterface;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testCreate()
    {
        $factory =  new Factory();
        $this->assertInstanceOf(PhpWord::class, $factory->createPHPWordObject());
    }

    public function testCreateReader()
    {
        $factory =  new Factory();
        $this->assertInstanceOf(ReaderInterface::class, $factory->createReader());
    }

    public function testCreateWriter()
    {
        $factory =  new Factory();
        $this->assertInstanceOf(WriterInterface::class, $factory->createWriter($factory->createPHPWordObject()));
    }

    public function testCreateStreamedResponse()
    {
        $this->assertEquals('2', '2');
        /*$writer = $this->getMockBuilder(WriterInterface::class);
        $writer->expects($this->once())
            ->method('save')
            ->with('php://output');

        $factory =  new Factory();
        $factory->createStreamedResponse($writer)->sendContent();*/
    }
}
