<ul class="list-inline">
    <li>
    @if (Auth::user()->id != $micropost->id)
        @if (Auth::user()->is_favorite($micropost->id))
            {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete','style'=>'display:inline-block']) !!}
                {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
            {!! Form::close() !!}
        @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id],'style'=>'display:inline-block']) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
        @endif
    @endif
    @if (Auth::user()->id == $micropost->user_id)
        {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete','style'=>'display:inline-block']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
            {!! Form::close() !!}
    @endif
    </li>
</ul>