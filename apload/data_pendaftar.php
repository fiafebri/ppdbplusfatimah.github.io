<?php
require '../config/koneksi.php';
 require '../vendor/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('chroot', realpath(''));
ob_start();
require('detail_pdf.php');

$html = ob_get_contents();
ob_get_clean();

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

$dompdf->stream("data_pendaftar.pdf", array("Attachment"=>0)); 


