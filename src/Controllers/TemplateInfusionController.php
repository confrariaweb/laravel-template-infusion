<?php

namespace ConfrariaWeb\TemplateInfusion\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class TemplateInfusionController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function home()
    {
        $this->data['posts'] = Config::get('cw_template_infusion.posts');
        return view('templateInfusion::home', $this->data);
    }
}
