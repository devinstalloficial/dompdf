<?php

require __DIR__ . "/dompdf/autoload.inc.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Courier');

$dompdf = new Dompdf($options);

$dompdf->loadHtml('Hello World!');

$dompdf->setPaper('A4');

$dompdf->render();

$dompdf->stream("arquivo.pdf", array(
    "Attachment" => false
));

