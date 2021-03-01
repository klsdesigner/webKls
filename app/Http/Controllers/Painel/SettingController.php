<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
//use App\Http\Requests\SettingRequest;
use App\Model\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public $request;
    //private $setting;

    /**
     * Construtor da classe.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();

        /** Pega Uri da pagina */
        $uri = $this->request->route()->uri();
        $explode = explode('/', $uri);
        $url = $explode[1];

        return view('painel.configSite.index', compact('settings', 'url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // não será implementado
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // não será implementado
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        // não será implementado
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('configSite.edit', ['setting' => $setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        /** Recebe a imagem do logotipo */
        $logo = $request->file('logotipo');

        if ($logo->isValid() && $logo->getMimeType() == 'image/png' || $logo->getMimeType() == 'image/jpeg') {

            /** Renomeia a logo */
            $newName = 'logo' .  strtolower($request->name) . '.' . $logo->extension();

            //$request->file('logotipo')->store('imgSetting');
            dd($logo->storeAs('imgSetting', $newName));
        }

        /* if (!empty($request->file('icon'))) {

            if($request->file('icon')->isValid()){
                dd($request->file('icon'));
            } 
        }*/

        //dd($request->file('logotipo'), $request->file('icon'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        // não será implementado
    }
}
