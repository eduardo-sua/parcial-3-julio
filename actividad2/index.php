<?php
ob_start(); // Evitar salidas antes del PDF

require('fpdf/fpdf.php');

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "papeleria";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta de productos
$query = "SELECT * FROM papeleria";
$result = $conn->query($query);

if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

// Iniciar FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// Título del PDF
$pdf->Cell(190, 10, 'Papeleria Julio ', 0, 1, 'C');
$pdf->Ln(5);

// Encabezados de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(70, 10, 'Producto', 1);
$pdf->Cell(50, 10, 'Categoria', 1);
$pdf->Cell(30, 10, 'Precio', 1);
$pdf->Cell(30, 10, 'Cantidad', 1);
$pdf->Ln();

// Agregar datos de la base de datos a la tabla
$pdf->SetFont('Arial', '', 12);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(10, 10, $row['id'], 1);
        $pdf->Cell(70, 10, str_replace(',', '', $row['producto']), 1); // Eliminar comas
        $pdf->Cell(50, 10, $row['categoria'], 1);
        $pdf->Cell(30, 10, '$' . number_format($row['precio'], 2, '.', ''), 1); // Sin comas en precio
        $pdf->Cell(30, 10, $row['cantidad'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(190, 10, 'No hay datos disponibles', 1, 0, 'C');
}

// Cierra la conexión
$conn->close();

ob_end_clean(); // Limpia el búfer antes de generar el PDF
$pdf->Output();
?>
