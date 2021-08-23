<?php

namespace Ottosmops\Pdfunite;

use Symfony\Component\Process\Process;

/*
 * Usage
 * Pdfunite::unite(['path_to_file1', 'path_to_file2'], $path_to_united_pdf);
 */

class Pdfunite
{
    public static function unite(array $srcfiles, string $resultfile)
    {
        $command = 'pdfunite ' . join(' ', $srcfiles) . ' '. $resultfile;
        $process = Process::fromShellCommandline($command);
        $process->run();

        return $process->getExitCode();
    }

}
