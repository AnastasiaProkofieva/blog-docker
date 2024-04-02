@csrf
<input name="title" type="text" id="title" value="{{old('title', $post->title ?? '' )}}" placeholder="Title">
@error('title')
<p style="color: red">{{$message}}</p>
@enderror
<input name="cover" type="hidden" value="cover" required>

<textarea name="description"  id="description" placeholder="Description">{{old('description', $post->description ?? '')}}</textarea>
@error('description')
<p style="color: red">{{$message}}</p>
@enderror
<textarea name="body"  id="body" placeholder="Body">{{old('body', $post->body ?? '')}}</textarea>
@error('body')
<p style="color: red">{{$message}}</p>
@enderror
