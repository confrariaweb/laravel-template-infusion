<?php

namespace ConfrariaWeb\TemplateInfusion\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

class TemplateInfusionController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function home()
    {
        $dir = 'vendor/confrariaweb/template-infusion/images/partners/';
        $this->data['partners'] = array_map(function($imagem) use ($dir) {
            return asset($dir . basename($imagem));
        }, File::glob(public_path($dir . '*.png')));
        $this->data['posts'] = Config::get('cw_template_infusion.posts');
        return view('templateInfusion::home', $this->data);
    }
}
