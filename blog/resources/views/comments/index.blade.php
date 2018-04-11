

@if(count($post->comments))
        <hr>
        <h4>Comments</h4>
        <ul class="list-unstyled">
            @foreach($post->comments as $comment)
                <li><p> {{  $comment->text }} </p></li>
            @endforeach
        </ul>
@endif