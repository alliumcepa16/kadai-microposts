<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り登録するアクション
     * @param $id お気に入り登録する投稿のid
     * @return \Illuminate\Http\
     */
    public function store($id)
    {
        // 認証済みユーザがidの投稿をお気に入り登録する
        \Auth::user()->favorite($id);
        //前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * 投稿をお気に入りから削除するアクション
     * @param $id 投稿のid
     * @return
     */
    public function destroy($id)
    {
        //認証済みユーザがidの投稿をお気に入りから削除する
        \Auth::user()->unfavorite($id);
        //前のURLへリダイレクトさせる
        return back();
    }
}