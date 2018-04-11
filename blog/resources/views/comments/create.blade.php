<h4>Add comment</h4>

    <form method="POST" action="{{route('add-comment', ['id'=> $post->id])}}">

        {{ csrf_field() }}

        <div class="form-group">
            
            <div class="form-group">
                <label for="text">Your comment</label>
                <textarea class="form-control" id="text" name="text"></textarea>
                @include('partials.error-message', ['fieldTitle' => 'text'])
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            

        </div>
    </form>