<x-layouts.main>
    <section>
        <div class="container">
            <div class="section-title">
                <h3>Edit post</h3>
            </div>
            <div class="text-container fl-wrap">

                <div class="contact-form-holder fl-wrap">
                    <div id="contact-form">
                        <div id="message"></div>
                        <form method="post" action="{{route('posts.update', ['id'=> $post->id] )}}" >
                            @csrf
                            @method('put')
                            <input name="title" type="text" id="title" placeholder="Title" value="{{$post->title}}" required>

                            <textarea name="description"  id="description" placeholder="Description" required>{{$post->description}}</textarea>

                            <textarea name="body"  id="body" placeholder="Body" required>{{$post->body}}</textarea>

                            <button type="submit"  id="submit"  data-top-bottom="transform: translateY(-50px);"
                                    data-bottom-top="transform: translateY(50px);"><span>Save </span></button>
                        </form>
                    </div>
                </div>
                <!-- contact form  end-->
            </div>
        </div>
    </section>
</x-layouts.main>
