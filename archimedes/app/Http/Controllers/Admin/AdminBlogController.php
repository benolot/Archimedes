<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\CommonMark\Converter;

class AdminBlogController extends Controller
{
    public function __construct(Converter $converter, Request $request) {
    	$this->converter = $converter;
    	$this->request = $request;
    }

    public function new() {
    	return view('admin.blog.new');
    }

    public function newPost() {
    	$input = $this->request->all();
    	$title = $input['markdown_content'];
    	$parsed_content = $this->converter->convertToHtml($input['markdown_content']);
    	return $parsed_content;
    }
}
