<?php
require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf -> load_html('DOMpdf untuk membuat report PDF');

$dompdf->setPaper('A4','landscape');

$dompdf-> render();

$dompdf->stream('hasil_report.pdf');

?>