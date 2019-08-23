<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//Recoger la vista a imprimir
ob_start();
require_once "html.php";
$html = ob_get_clean();
//End

$html2pdf->writeHTML($html);
$html2pdf->output("generete_pdf_1.pdf");
