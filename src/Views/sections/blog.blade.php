<div id="blog" class="text-center">
    <div class="heading">
        <h1>medium.com/confrariaweb</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single-blog wow fadeIn" data-wow-delay="0.2s">
                    <a href="{{ $post['url'] }}" target="_blank">
                        <img src="{{ $post['photo'] }}" alt="image" class="img-responsive"></a>
                    <div class="post-description">
                        <span><i class="fa fa-calendar"></i> {{ $post['date'] }}</span>
                        <span><i class="fa fa-user"></i> {{ $post['user'] }}</span>
                    </div>
                    <div class="subtitle">{{ $post['title'] }}</div>
                    <p>{{ $post['text'] }}</p>
                    <div class="text-center">
                        <a href="{{ $post['url'] }}" class="blog-btn" target="_blank">
                            Saiba mais
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!--div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single-blog wow fadeIn" data-wow-delay="0.35s">
                    <a href="{{ asset('vendor/confrariaweb/template-infusion/single-post.html') }}" target="_blank">
                    <img src="{{ asset('vendor/confrariaweb/template-infusion/images/blog2.jpg') }}"
                                                                                                                         alt="image" class="img-responsive"></a>
                    <div class="post-description">
                        <span><i class="fa fa-calendar"></i> Oct 12, 2017</span>
                        <span><i class="fa fa-comments"></i> 12 Comments</span>
                    </div>
                    <div class="subtitle">Power of Chemical Reactions</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text...</p>
                    <div class="text-center">
                        <a href="{{ asset('vendor/confrariaweb/template-infusion/single-post.html') }}" class="blog-btn" target="_blank">Read More</a>
                    </div>
                </div>
            </div-->
            <!--div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single-blog wow fadeIn" data-wow-delay="0.5s">
                    <a href="{{ asset('vendor/confrariaweb/template-infusion/single-post.html') }}" target="_blank"><img src="{{ asset('vendor/confrariaweb/template-infusion/images/blog3.jpg') }}"
                                                                                                                         alt="image" class="img-responsive"></a>
                    <div class="post-description">
                        <span><i class="fa fa-calendar"></i> Oct 12, 2017</span>
                        <span><i class="fa fa-comments"></i> 12 Comments</span>
                    </div>
                    <div class="subtitle">10 Web Design Hacks</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text...</p>
                    <div class="text-center">
                        <a href="{{ asset('vendor/confrariaweb/template-infusion/single-post.html') }}" class="blog-btn" target="_blank">Read More</a>
                    </div>
                </div>
            </div-->
        </div>
    </div>
</div>