<div id="partners" class="owl-carousel">
    @foreach($partners as $partner)
        <div class="item">
            <a href="#">
                <img src="{{ $partner }}" alt="image" style="width: initial;padding: 20px 20px;">
            </a>
        </div>
    @endforeach
</div>