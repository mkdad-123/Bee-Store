<?php

namespace App\Http\Controllers;

use App\Models\Compliant;
use Illuminate\Http\Request;

class CompliantsController extends Controller
{
    public function addCompliant(Request $request){
        
            $compliant = Compliant::create([
                'content' => $request->content,
            ]);
    
            if ($compliant) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        }
    }

