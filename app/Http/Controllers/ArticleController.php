<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\article;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $article = Article::all();
        return view('Auteur.All', compact('article'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Titre' => 'required|max:255',
            'Text' => 'required',
            'image' => 'file|max:1024',
        ]);
    
        // Enregistrer les données dans la base de données
        $post = new Article;
        $post->Titre = $validatedData['Titre'];
        $post->Text = $validatedData['Text'];
        $post->Image = $validatedData['image'];
        $post->auteur = auth()->user()->name;;
    
        // Si un fichier a été téléchargé, le sauvegarder et stocker le chemin dans la base de données
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('public/Article_img');
            $post->image = $path;
        }
    
        $post->save();
    
        return redirect()->back()->with('success', 'Le formulaire a été enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
