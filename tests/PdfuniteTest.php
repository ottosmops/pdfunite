<?php

namespace Ottosmops\Pdfunite\Test;

use PHPUnit\Framework\TestCase;
use Ottosmops\Pdfunite\Pdfunite;

class PdfuniteTest extends TestCase
{
    protected $src_path = __DIR__.'/testfiles/';

    protected $tmp_dir = __DIR__.'/testfiles/tmp/';

    protected function setUp() : void
    {
        is_dir($this->tmp_dir) || mkdir($this->tmp_dir, 0777);
    }

    protected function tearDown() : void
    {
        putenv('PATH=$PATH:/usr/local/bin/:/usr/bin/:/bin/');
        //exec("rm -r ".__DIR__.'/testfiles/tmp');
    }

    /** @test */
    public function it_unites_file()
    {
        $dummy = $this->src_path . 'dummy.pdf';
        $result = $this->src_path . 'result.pdf';
        $exitcode = Pdfunite::unite([$dummy, $dummy], $result);

        // https://stackoverflow.com/questions/14644353/get-the-number-of-pages-in-a-pdf-document
        exec('pdfinfo ' . $result, $output);

        // Iterate through lines
        $pagecount = 0;
        foreach($output as $op)
        {
            // Extract the number
            if (preg_match("/Pages:\s*(\d+)/i", $op, $matches) === 1)
            {
                $pagecount = intval($matches[1]);
                break;
            }
        }

        $this->assertEquals(2, $pagecount);
        $this->assertEquals(0, $exitcode);
    }


}
