<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; // Postモデルを使用するために追加
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function store(CommentRequest $request)
    {
        $post = new Comment;
        $post->post_id = $request->post_id;
        $post->comment_text = $request->comment_text;
        $post->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        // テーブルから指定のIDのレコード1件を取得
        $comment = Comment::find($id);
        // レコードを削除
        $comment->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->back();
    }
}