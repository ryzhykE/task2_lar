<?php

class TaskController extends BaseController
{
    public function showAbout()
    {
        return View::make('about');
    }

    public function getArticles()
    {
        $articles = ['articles'=>
            ['article1'=>['articleText' =>'article 1','articleHref'=>'article/1'],
            'article2'=>['articleText' =>'article 2','articleHref'=>'article/2'],
            'article3'=>['articleText' =>'article 3','articleHref'=>'article/3'],
            'article4'=>['articleText' =>'article 4','articleHref'=>'article/4'],
            'article5'=>['articleText' =>'article 5','articleHref'=>'article/5'],
        ]];

        return View::make('article',$articles);
    }

    public function showArticle($id)
    {
        return View::make('articleItem',['name'=>$id]);
    }

    public function getContacts()
    {
        return View::make('contact-us');
    }

    public function postContacts()
    {
        $validator = Validator::make(Input::all(),
            array('name' => 'required',
                'message' => 'required')
            );
        if ($validator->fails())
        {
            $messages = $validator->messages();
            return Redirect::to('contact-us')->withErrors($messages);
        }
        else
        {
            return View::make('thank-you',['name'=>Input::get('name')]);
        }
    }

}