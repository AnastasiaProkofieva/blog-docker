<label for=""><b>TAGS</b></label>
<div style="display: flex">
    @foreach($tags->chunk(5) as $chunk)
        <div>
            @foreach($chunk as $tag)
                <div>
                    <input type="checkbox" style="margin: 10px">{{ $tag->name }}
                </div>
            @endforeach
        </div>
    @endforeach
</div>
