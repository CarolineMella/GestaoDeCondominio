<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Doc;

class DocController extends Controller
{

    // Leitura dos documentos adicionados:
    public function getAll() {
        $array = ['error' => ''];

        $docs = Doc::all();

        foreach($docs as $docKey => $docValue) {
            $docs[$docKey]['fileurl'] = asset('storage/'.$docValue['fileurl']);
        }
        $array['list'] = $docs;

        return $array;
    }
}
