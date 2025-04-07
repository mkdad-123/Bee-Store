<?php

namespace App\Http\Controllers;
use App\Models\Tool;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function showTools()
    {
        $tools = Tool::all();

        return view('tools', compact('tools'));
    }

    public function showToolDetails($id)
    {
        $tool = Tool::find($id);

        if (!$tool) {
            abort(404, 'المنتج غير موجود');
        }

        return view('tools.details', compact('tool'));
    }

    public function searchTool(Request $request)
    {
        $keyword = $request->query('keyword');

        $tools = Tool::where('name', 'like', '%' . $keyword . '%')->get();

        return view('tools.search', compact('tools', 'keyword'));
    }
    }
