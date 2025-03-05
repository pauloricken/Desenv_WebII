<?php

require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf();

$html = '<h1>Exemplo de PDF Gerado com mPDF</h1>';
$html .= '<p>Este é um PDF gerado utilizando o pacote mPDF.</p>';
$html .= '<p>Parabéns, você configurou e gerou o seu primeiro PDF com sucesso!</p>';


$mpdf->WriteHTML($html);

$mpdf->Output('meu_pdf.pdf', 'F');

echo "PDF gerado com sucesso!";
