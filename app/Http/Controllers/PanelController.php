<?php

namespace AgendaWeb\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    //mostrar las pantallas
    public function inicio()
    {
        return view('panel.inicio');
    }

    public function lista()
    {
        return view( 'panel.lista');
    }

    public function nuevo()
    {
        return view( 'panel.nuevo');
    }
    public function perfil()
    {
        return view('panel.perfil');
    }
    public function contactos()
    {
        return view( 'panel.contacto');
    }
}
