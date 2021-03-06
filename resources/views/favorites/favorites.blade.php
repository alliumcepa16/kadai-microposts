@if(count($favorites) > 0)
    <ul class="list-unstyled">
        @foreach ($favorites as $micropost)
            <li class="media mb-3">
                {{--投稿の所有者のメールアドレスをもとにGravatarを取得して表示--}}  
                <img class="mr-2 rounded" src="{{ Gravatar::get($micropost->user->email,['size' => 50]) }}" alt="">
                
                <div class="media-body">
                    <div>
                        {{--投稿の所有者のユーザ詳細ページへのリンク--}} 
                        {!! link_to_route('users.show',$micropost->user->name,['user' => $micropost->user->id]) !!}
                        <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                    </div>
                    <div>
                        {{--投稿内容--}}
                        <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                    </div>
                   
                    <div>
                        {{--お気に入りボタンのフォーム--}} 
                        @include('favorites.favorite_button')
                    </div>
                      
                </div>
            </li>
        @endforeach
    </ul>
    {{--ページネーションのリンク--}}
    {{ $favorites->links() }}
@endif