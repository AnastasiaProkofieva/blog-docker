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
                        <form method="post" action="{{route('posts.update', compact('post'))}}" >
                            @csrf
                            @method('put')
                            <x-category-select :id="$post->category_id" />
                            <x-tag-select :current="$post->tags" />
                            <x-blog.inputs :post="$post"/>


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
