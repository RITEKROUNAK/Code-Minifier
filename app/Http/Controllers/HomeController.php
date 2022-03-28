<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CssMinifier;
use JShrink\Minifier;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    /**
    |--------------------------------------------------------------------------
    | Home page function
    |--------------------------------------------------------------------------*/
    public function index()
    {
        return view('home');
    }

    /**
    |--------------------------------------------------------------------------
    | Return view to minify css
    |--------------------------------------------------------------------------*/
    public function cssView(){
        return view('css');
    }

    /**
    |--------------------------------------------------------------------------
    | Return minified css code
    |--------------------------------------------------------------------------*/
    public function minifyCss(Request $request){
        $minified = new CssMinifier($request->content_css);
        return redirect()->back()->withMinified($minified->getMinified())->withContent($request->content_css);
    }

    /**
    |--------------------------------------------------------------------------
    | Return view to minify js
    |--------------------------------------------------------------------------*/
    public function jsView(){
        return view('js');
    }

    /**
    |--------------------------------------------------------------------------
    | Return js minified code
    |--------------------------------------------------------------------------*/
    public function minifyJavascript(Request $request){
        $minified = Minifier::minify($request->content_js);
        return redirect()->back()->withMinified($minified)->withContent($request->content_js);
    }

    /**
    |--------------------------------------------------------------------------
    | Return view to minify html
    |--------------------------------------------------------------------------*/
    public function htmlView(){
        return view('html');
    }

    /**
    |--------------------------------------------------------------------------
    | Return html minified code
    |--------------------------------------------------------------------------*/
    public function minifyHtml(Request $request){
        $minified = preg_replace(
            array(
                '/ {2,}/',
                '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s'
            ),
            array(
                ' ',
                ''
            ),
            $request->content_html
        );
        return redirect()->back()->withMinified($minified)->withContent($request->content_html);
    }

    /**
    |--------------------------------------------------------------------------
    | Send Contact email
    |--------------------------------------------------------------------------*/
    public function contact(Request $request){
        Mail::send('mails.contact',['request' => $request], function ($message) use ($request){
            $message->from('no-reply@gmail.com', "Minify");
            $message->subject('Contact form submitted');
            $message->to('nd_sohail@yahoo.com');
        });
        return redirect()->back()->withMessage('Email sent we will get back to you');
    }

}
