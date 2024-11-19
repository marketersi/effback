<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PdfCopy;

class PdfCopyController extends Controller
{
    public function pdfCopyIndex()
    {
        $pdfDetail = PdfCopy::get();
        // dd($logoDetail);
        return view('pdf-copy.index', compact('pdfDetail'));
    }
    
    public function pdfCopyCreate()
    {
        $pdfDetails = PdfCopy::get();
        return view('pdf-copy.create', compact('pdfDetails'));
    }

    public function pdfCopyStore(Request $request)
    {
        
        $request->validate([
            'normalText' => 'required',
            'image'  => 'required',
            'imageTitle'  => 'required',
            'imageSubtitle'  => 'required',
            'imageLinkText'  => 'required',
            'imageLink'  => 'required',
        ]);

        try {
            $details = [
                'normalText',
            'image' ,
            'imageTitle' ,
            'imageSubtitle' ,
            'imageLinkText' ,
            'imageLink' ,
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = PdfCopy::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    PdfCopy::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('pdf.index')->with('success', 'PDF Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('pdf.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
