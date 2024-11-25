<?php
ob_start(); // Inicia almacenamiento en búfer

require('fpdf/fpdf.php');

// Datos estáticos de los productos
$productos = [
    ['id' => 1, 'nombre' => 'Lápiz HB', 'categoria' => 'Escritura', 'precio' => 5.50, 'stock' => 100],
    ['id' => 2, 'nombre' => 'Cuaderno Profesional', 'categoria' => 'Papelería', 'precio' => 35.00, 'stock' => 50],
    ['id' => 3, 'nombre' => 'Borrador', 'categoria' => 'Escritura', 'precio' => 8.00, 'stock' => 200],
    ['id' => 4, 'nombre' => 'Regla 30cm', 'categoria' => 'Instrumentos', 'precio' => 12.00, 'stock' => 75],
    ['id' => 5, 'nombre' => 'Marcador Permanente', 'categoria' => 'Escritura', 'precio' => 20.00, 'stock' => 40]
];

// Inicia FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Encabezados de la tabla
$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(60, 10, 'Nombre', 1);
$pdf->Cell(40, 10, 'Categoría', 1);
$pdf->Cell(30, 10, 'Precio', 1);
$pdf->Cell(30, 10, 'Stock', 1);
$pdf->Ln();

// Agregar datos estáticos a la tabla
$pdf->SetFont('Arial', '', 12);

if (count($productos) > 0) {
    foreach ($productos as $producto) {
        $pdf->Cell(10, 10, $producto['id'], 1);
        $pdf->Cell(60, 10, $producto['nombre'], 1);
        $pdf->Cell(40, 10, $producto['categoria'], 1);
        $pdf->Cell(30, 10, '$' . number_format($producto['precio'], 2), 1);
        $pdf->Cell(30, 10, $producto['stock'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(170, 10, 'No hay datos disponibles', 1, 0, 'C');
}

ob_end_clean(); // Limpia el búfer antes de generar el PDF
$pdf->Output();
?>
