<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Gestion\PhotoGestion;

class PhotoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getForm()
    {
        return view('photo');
    }

    /**
     * @param ImagesRequest $request
     * @param PhotoGestionInterface $photogestion
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function postForm(
        ImagesRequest $request,
        PhotoGestionInterface  $photoGestion
    ) {

        if($photoGestion->save($request->file('image'))) {
            return view('photo_ok');
        }
        return redirect('photo')
            ->with('error','Désolé mais votre image ne peut pas être envoyée !');

    }

}