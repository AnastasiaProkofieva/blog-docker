<div class="post fl-wrap fw-post">
    <h2><span>{{ $post->title }}</span></h2>
    <ul class="blog-title-opt">
        <li><a href="#">12 may 2017</a></li>
        <li> - </li>
        <li><a href="#">Interviews </a></li>
        <li><a href="#">Design</a></li>
    </ul>
    <!-- blog media -->
    <div class="blog-media fl-wrap">
        <div class="single-slider fl-wrap" data-effects="slide">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/folio/1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/folio/1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/folio/1.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <!-- blog media end -->
    <div class="blog-text fl-wrap">
        <div class="pr-tags fl-wrap">
            <span>Tags : </span>
            <ul>
                <li><a href="#">Design</a></li>
                <li><a href="#">Photography</a></li>
                <li><a href="#">Fasion</a></li>
            </ul>
        </div>
        <p>
            {{ $post->description }}
        </p>
        <a href="{{route('posts.show', ['id'=> $post->id]) }}" class="btn float-btn flat-btn" style="margin-right: 20px">Read more </a>
        <a href="{{route('posts.edit', ['id'=> $post->id]) }}" class="btn float-btn  flat-btn" style="margin-right: 20px">Edit post </a>
        <form action="{{route('posts.destroy', ['id'=> $post->id]) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn float-btn flat-btn">Delete post </button>
        </form>
    </div>
</div>
