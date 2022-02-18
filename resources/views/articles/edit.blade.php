<form method="POST" action="/blog">
    @csrf
    @method('PUT')
    @method('DELETE')
    <div class="field">
        <label for="title"> {{$article->title}} </label>
        <div class="control">
            <input type="text" name="title" id="title">
        </div>
    </div>

    <div class="field">
        <label for="excerpt"> {{$article->excerpt}} </label>
        <div class="control">
            <textarea name="excerpt" id="excerpt" rows="2" cols="50"> </textarea>
        </div>
    </div>

    <div class="field">
        <label for="body"> {{$article->body}} </label>
        <div class="control">
            <textarea name="body" id="body" rows="3" cols="50"> </textarea>
        </div>
    </div>

    <div class="field">
        <label for="link"> {{$article->link}} </label>
        <div class="control">
            <input type="text" name="link" id="link" value="for example: My-Post-1">
        </div>
    </div>

    <button type="submit">Submit</button>

</form>
