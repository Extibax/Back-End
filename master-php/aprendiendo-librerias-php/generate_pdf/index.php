<?php

require "../vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

$html = "<h1>Hello World</h1>";
$html .= "<p>Master en PHP</p>";

$html2pdf->writeHTML($html);
$html2pdf->output("generete_pdf_1");