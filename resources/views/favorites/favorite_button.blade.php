@if(Auth::id() !=$user->id)
    @if(Auth::user()->is_favorite($user->id))
        {{--お気に入り削除ボタンフォーム--}}
        {!! Form::open(['route' =>['favorite.unfavorite',$user->id],'method' =>'delete']) !!}
            {!! Form::submit('お気に入り削除',['class' =>'btn btn-danger btn-block']) !!}
        {!! Form::close() !!}
    @else
        {{--お気に入り登録ボタンフォーム--}}
        {!! Form::open(['route' => ['favorite.favorite', $user->id]]) !!}
            {!! Form::submit('お気に入り登録',['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    @endif
@endif