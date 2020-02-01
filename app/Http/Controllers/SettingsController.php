<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    /**
     * The Settings instance.
     *
     * @var \Models\Settings
     */
    protected $model;


    function __construct(Settings $model) {
        $this->model = $model;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['binary'] = $this->model->find(1);
        return view('settings', $data);
    }


    public function changeMode(Request $request) {
        $binary = $this->model->find(1);
        $binary->value = !$binary->value;
        $binary->save();
        return redirect('/');
    }

}
