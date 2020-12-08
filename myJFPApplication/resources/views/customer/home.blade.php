@extends('customer.template.layout')
@section('content')
<section class="value" id="value">
    <div class="max-width">
        <div class="title">Added Value</div>
        <div class="value-content">
            <div class="column left">
                <img src="{{ asset('assets/images/home-delivery.jpg')}}" alt="">
            </div>
            <div class="column right">
                <div class="text">Home Delivery 24/7 is one of our newest value added <span> Services</span></div>
                <p>We’ve all had those moments when it’s almost midnight, our stomachs start rumbling like some wild
                    African cat and there’s no food in the fridge. Because your usual food merchants have already
                    closed, you’re left with either ordering McDonald’s or going to sleep hungry. But unbeknownst to
                    many, there are actually plenty of food delivery services that go well past midnight – with some
                    operating 24 hours. With Indian, Western, Chinese, Japanese, Thai, Korean cuisine available,
                    you’ll never go hungry at midnight again.</p>
            </div>
        </div>
    </div>
</section>
<section class="testimonial" id="testimonial">
    <div class="max-width">
        <div class="title">Testimonial</div>
        <div class="testimonial-content">
            <div class="column right">
                <img src="{{ asset('assets/images/testimoney.jpg')}}" alt="">
            </div>
            <div class="column left">
                <div class="text">Home Delivery 24/7 is one of our newest value added<span> Services</span></div>
                <p>We’ve all had those moments when it’s almost midnight, our stomachs start rumbling like some wild
                    African cat and there’s no food in the fridge. Because your usual food merchants have already
                    closed, you’re left with either ordering McDonald’s or going to sleep hungry. But unbeknownst to
                    many, there are actually plenty of food delivery services that go well past midnight – with some
                    operating 24 hours. With Indian, Western, Chinese, Japanese, Thai, Korean cuisine available,
                    you’ll never go hungry at midnight again.</p>
            </div>
        </div>
    </div>
</section>
@endsection