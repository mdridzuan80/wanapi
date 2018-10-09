<?php

namespace App\Http\Controllers;

use App\Pelajar;
use Illuminate\Http\Request;
use App\Transformers\PelajarTransformer;
use Illuminate\Support\Facades\Mail;

class PelajarController extends Controller
{
    public function index(Request $request, Pelajar $nokp)
    {
        return fractal()
            ->item($nokp)
            ->transformWith(new PelajarTransformer)
            ->toArray();
    }

    public function basic_email()
    {
        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('md.ridzuan80@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
            $message->from('wanlatiah@gmail.com', 'Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email()
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

    public function attachment_email()
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
