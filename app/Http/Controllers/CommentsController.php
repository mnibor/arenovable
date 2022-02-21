<?php

namespace App\Http\Controllers;
use App\Comments;

use Illuminate\Http\Request;
use App\Http\Requests\CommentStoreRequest;


class CommentsController extends Controller
{
    public function store(CommentStoreRequest $request)
    {

        $comment = Comments::create(request()->all());
        return back()
            ->with('info', 'Comentario fue creado exitosamente. Acción Renovable se reserva el derecho de mantener publicado dicho comentario');

    }
}
