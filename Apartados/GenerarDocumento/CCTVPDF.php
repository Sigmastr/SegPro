<?php
require('../../recursos/PDF/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../../recursos/imagene/logo.png', 10, 8, 33);
        $this->SetDrawColor(239, 239, 239);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 12);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(40, 10, utf8_decode('Informe Técnico'), 0, 0, 'C');
        $this->Cell(40);
        $this->SetFont('Arial', '', 12);
        $this->Cell(20, 10, utf8_decode('Fecha'), 0, 0, 'R');
        $this->SetDrawColor(0, 0, 0);
        $this->SetY(12);
        $this->SetX(170);
        $this->Cell(30, 5, utf8_decode(''), 1, 0, 'R');
        // $this->Ln(10);
        //mover la celda hacia la derecha
        $this->Ln(3);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(35);
        $this->Cell(30, 10, utf8_decode('Mantención de sistema de control de acceso'), 0, 0, 'L');
        $this->SetFont('Arial', '', 12);
        $this->Cell(96, 10, utf8_decode('Nom. Técnico'), 0, 0, 'R');
        $this->SetDrawColor(0, 0, 0);
        $this->SetY(18);
        $this->SetX(170);
        $this->Cell(30, 5, utf8_decode(''), 1, 0, 'R');

        $this->Cell(80);
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->SetDrawColor(231, 231, 231);
$pdf->Cell(70, 5, utf8_decode('Cliente: '), 1, 0, 'L');
$pdf->Cell(60, 5, utf8_decode('Rut: '), 1, 0, 'L');
$pdf->Cell(55, 5, utf8_decode('Fono/Fax: '), 1, 1, 'L');
$pdf->SetDrawColor(231, 231, 231);
$pdf->setFillColor(224, 224, 224);
$pdf->Cell(70, 5, utf8_decode('Ciudad: '), 1, 0, 'L', TRUE);
$pdf->Cell(60, 5, utf8_decode('Comuna: '), 1, 0, 'L', TRUE);
$pdf->Cell(55, 5, utf8_decode('Email: '), 0, 1, 'L', TRUE);
$pdf->Cell(130, 5, utf8_decode('Dirección: '), 1, 0, 'L');
$pdf->Cell(55, 5, utf8_decode('Representante: '), 1, 1, 'L');
// for ($i = 1; $i <= 40; $i++)
//     $pdf->Cell(0, 10, utf8_decode('Imprimiendo línea número ')  . $i, 0, 1);
$pdf->Output();
