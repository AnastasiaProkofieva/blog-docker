<x-layouts.main>
    <section>
        <div class="container">
            <div class="section-title">
                <h3>Create post</h3>
            </div>
            <div class="text-container fl-wrap">

                <div class="contact-form-holder fl-wrap">
                    <div id="contact-form">
                        <div id="message"></div>
                        <form method="post" action="{{route('posts.store') }}" >
                            @csrf
                            <input name="title" type="text" id="title" placeholder="Title" required>

                            <textarea name="description"  id="description" placeholder="Description" required></textarea>

                            <textarea name="body"  id="body" placeholder="Body" required></textarea>

                            <button type="submit"  id="submit"  data-top-bottom="transform: translateY(-50px);"
                                    data-bottom-top="transform: translateY(50px);"><span>Create </span></button>
                        </form>
                    </div>
                </div>
                <!-- contact form  end-->
            </div>
        </div>
    </section>
</x-layouts.main>
