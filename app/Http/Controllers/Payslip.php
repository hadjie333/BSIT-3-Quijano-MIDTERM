<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class Payslip extends Controller
{
    public static function print(Request $request) 
    {
        
        $fpdf = new Fpdf('P', 'mm', 'A4');
        $fpdf->AddPage();
      
       
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        $fpdf->Cell(55, 10, 'PAYSLIP', 0, 0, 'C');
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        
        
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        $fpdf->Cell(55, 10, 'Fairy Tail', 0, 0, 'C');
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
       
        
        $fpdf->Ln();
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        $fpdf->Cell(55, 10, 'Inoburan, City Of Naga, Cebu', 0, 0, 'C');
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
       
        $fpdf->Ln();
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        $fpdf->Cell(55, 10, 'Mobile no.: 09924337269', 0, 0, 'C');
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
       
      
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();

      
        $fpdf->Cell(40, 10, 'Date of Joining', 0, 0, 'L');
        $fpdf->Cell(5, 10, ':', 0, 0, 'L');
        $fpdf->Cell(60, 10, 'January 10, 2024', 0, 0, 'L');
       
        $fpdf->Cell(40, 10, 'Member Name', 0, 0, 'L');
        $fpdf->Cell(5, 10, ':', 0, 0, 'L');
        $fpdf->Cell(40, 10, 'AJ Dragneel', 0, 0, 'L');
       
        $fpdf->Ln();
        $fpdf->Cell(40, 10, 'Pay Date', 0, 0, 'L');
        $fpdf->Cell(5, 10, ':', 0, 0, 'L');
        $fpdf->Cell(60, 10, 'October 17, 2024', 0, 0, 'L');
       
        $fpdf->Cell(40, 10, 'Magic Type', 0, 0, 'L');
        $fpdf->Cell(5, 10, ':', 0, 0, 'L');
        $fpdf->Cell(40, 10, 'Dragon Slayer', 0, 0, 'L');
       
        $fpdf->Ln();
        $fpdf->Cell(40, 10, 'Worked Days', 0, 0, 'L');
        $fpdf->Cell(5, 10, ':', 0, 0, 'L');
        $fpdf->Cell(60, 10, 282, 0, 0, 'L');
       
        $fpdf->Cell(40, 10, 'Department', 0, 0, 'L');
        $fpdf->Cell(5, 10, ':', 0, 0, 'L');
        $fpdf->Cell(40, 10, 'Class S Wizard', 0, 0, 'L');

        
        $fpdf->Image('c:\Users\fc\Downloads\images.png', 10, 10, 50);
        
        
        $fpdf->Line(10, 50, 200, 50);
        $fpdf->Line(10, 51, 200, 51);

        $fpdf->Ln();
        $fpdf->Ln();
        
        $fpdf->Ln(1); 
        $fpdf->SetFont( 'Arial', 'B', 12 );
        $fpdf->Cell(50, 10, 'Earnings', 1, 0, 'C');
        $fpdf->Cell(60, 10, 'Amount', 1, 0, 'C');
        $fpdf->Cell(40, 10, 'Deduction', 1, 0, 'C');
        $fpdf->Cell(40, 10, 'Amount', 1, 0, 'C');
       
        $fpdf->Ln();
        $fpdf->Cell(50, 10, 'Basic', 1, 0, 'L');
        $fpdf->Cell(60, 10, 10000, 1, 0, 'R');
        $fpdf->Cell(40, 10, 'Provident Fund', 1, 0, 'L');
        $fpdf->Cell(40, 10, 1200, 1, 0, 'R');
       
        $fpdf->Ln();
        $fpdf->Cell(50, 10, 'Incentive Pay', 1, 0, 'L');
        $fpdf->Cell(60, 10, 1000, 1, 0, 'R');
        $fpdf->Cell(40, 10, 'Professional Tax', 1, 0, 'L');
        $fpdf->Cell(40, 10, 500, 1, 0, 'R');
       
        $fpdf->Ln();
        $fpdf->Cell(50, 10, 'House Rent Allowance', 1, 0, 'L');
        $fpdf->Cell(60, 10, 400, 1, 0, 'R');
        $fpdf->Cell(40, 10, 'Loan', 1, 0, 'L');
        $fpdf->Cell(40, 10, 400, 1, 0, 'R');

        $fpdf->Ln();
        $fpdf->Cell(50, 10, 'Meal Allowance', 1, 0, 'L');
        $fpdf->Cell(60, 10, 200, 1, 0, 'R');
        $fpdf->Cell(40, 10, '', 1, 0, 'L');
        $fpdf->Cell(40, 10, '', 1, 0, 'R');

        $fpdf->Ln();
        $fpdf->Cell(50, 10,'', 1, 0, 'L');
        $fpdf->Cell(60, 10,'', 1, 0, 'R');
        $fpdf->Cell(40, 10, '', 1, 0, 'L');
        $fpdf->Cell(40, 10, '', 1, 0, 'R');

        $fpdf->Ln();
        $fpdf->Cell(50, 10, 'Total Earnings', 1, 0, 'R');
        $fpdf->Cell(60, 10, 11600, 1, 0, 'R');
        $fpdf->Cell(40, 10, 'Total Deduction', 1, 0, 'R');
        $fpdf->Cell(40, 10, 2100, 1, 0, 'R');

        $fpdf->Ln();
        $fpdf->Cell(50, 10, '', 1, 0, 'R');
        $fpdf->Cell(60, 10, '', 1, 0, 'R');
        $fpdf->Cell(40, 10, 'Net Pay', 1, 0, 'R');
        $fpdf->Cell(40, 10, 9500, 1, 0, 'R');

        $fpdf->Ln();
        $fpdf->Ln();
        
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        $fpdf->Cell(55, 10, 9500, 0, 0, 'C');
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        
        $fpdf->Ln();
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        $fpdf->Cell(55, 10, 'NINE THOUSAND FIVE HUNDRED', 0, 5, 'C');
        $fpdf->Cell(70, 10, '', 0, 0, 'C');

        $fpdf->Ln();
        $fpdf->Cell(50, 10, 'Guild Master Signature', 0, 0, 'R');
        $fpdf->Cell(60, 10, '', 0, 0, 'R');
        $fpdf->Cell(70, 10, 'Member Signature', 0, 0, 'R');
        $fpdf->Cell(40, 10, '', 0, 0, 'R');

        $fpdf->Ln();

        $fpdf->Line(10, $fpdf->GetY() + 15, 70, $fpdf->GetY() + 15); 
        $fpdf->Line(150, $fpdf->GetY() + 15, 200, $fpdf->GetY() + 15);
        
        $fpdf->Ln();

        $fpdf->Ln();
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
        $fpdf->Cell(55, 10, 'THANKYOU FOR YOUR YOUR HARDWORK', 0, 0, 'C');
        $fpdf->Cell(70, 10, '', 0, 0, 'C');
      
        $fpdf->Output();
    }
}
