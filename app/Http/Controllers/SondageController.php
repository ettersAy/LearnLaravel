<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SondageRequest;

class SondageController extends Controller
{

    protected $survey = [
        'evaluation' => [
            'title' => 'Que pensez vous de ce site?',
            'choices' => ['mauvais', 'moyen', 'bien', 'excelent'],
            'results' => [10, 30, 40, 20]
        ],
        'preference' => [
            'title' => 'Quel est votre langage prefere?',
            'choices' => ['php', 'java', 'python', '.net'],
            'results' => [10, 30, 40, 20]
        ]
    ];

    public function index()
    {
        return view('sondage');
    }

    public function getForm($idSurvey)
    {
        return view('vote')->with([
            'idSurvey' => $idSurvey,
            'survey' => $this->survey[$idSurvey]
        ]);
    }

    public function postForm($idSurvey, SondageRequest $request)
    {
        return view('confirm_vote')->with(
            'survey', $this->survey[$idSurvey]
        );
    }
}
