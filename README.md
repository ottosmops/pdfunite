# Glue PDFs together

[![GitHub license](https://img.shields.io/github/license/ottosmops/pdfunite.svg)](https://github.com/ottosmops/pdfunite/blob/master/LICENSE.md)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ottosmops/pdfunite/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ottosmops/pdfunite/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ottosmops/pdfunite/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/ottosmops/pdfunite/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/ottosmops/pdfunite/badges/build.png?b=master)](https://scrutinizer-ci.com/g/ottosmops/pdfunite/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/ottosmops/pdfunite/v/stable?format=flat-square)](https://packagist.org/packages/ottosmops/pdfunite)
[![Packagist Downloads](https://img.shields.io/packagist/dt/ottosmops/pdfunite.svg?style=flat-square)](https://packagist.org/packages/ottosmops/pdfunite)

## Usage

```php

$exitcode = Pdfunite::unite([$path_to_file1, $path_to_file2, ...], $path_to_result);

// if ($exitcode == 0) everything should be all right

```
