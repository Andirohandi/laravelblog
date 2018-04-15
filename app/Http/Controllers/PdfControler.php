<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfControler extends Controller
{
    function test(){
    	$data = \App\Posts::with('author')
						->latestFirst()
						->simplePaginate(4);
    	$report = \PDF::loadHtml('<h1>Test</h1>', ['data' => $data]);
    	return $report->stream('test.pdf');
    }
}
