<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//以下の1行を追記することで、News Mpdelが扱えるようになる
use App\Models\News;

class NewsController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }

public function create(Request $request)
    {
        //以下を追記
        //Validationを行う
        $this->validate($request,News::$rules);

        $news = new News;
        $form = $request->all();

        //フォームから画像が送信されてきたら、保存して、$news->image_path に画像パスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $news->image_path = basename($path);
        } else {
            $news->image_path = null;
        }

        //フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        //フォームから送信されてきたimageを削除する
        unset($form['image']);

        //データベースに保存する
        $news->fill($form);
        $news->save();
        // 追記ここまで
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }
}