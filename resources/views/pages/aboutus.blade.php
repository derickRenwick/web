@extends('layout.app')

@section('title', 'About Us')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'about-us-page hc-content')

@section('content')
    @include('pages.pagesections.banner', [
    'layout'    => 'row',
    'hideText'  => 'true'
])
    <section class="about-us-intro">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Feel <span class="col-turq">better faster</span> by<br>knowing your legal<br> right to choose
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi cupiditate error natus,
                        necessitatibus quos ratione reprehenderit voluptatem voluptatibus. Alias exercitationem maiores
                        saepe sed voluptates?</p>
                    <div class="btn-area mb-5">
                        @include('components.basic.button', [
                            'classTitle'        => 'btn btn-squared btn-turq',
                            'buttonText'        => 'Find the right hospital',
                            'hrefValue'         => '/results-page',
                            ''
                        ])
                        @include('components.basic.button', [
                            'classTitle'        => 'btn btn-link',
                            'buttonText'        => 'Read our FAQs',
                            'hrefValue'         => '/faqs',
                            'svg'               => 'chevron-right'
                        ])
                    </div>
                    @include('components.basic.testimonial',
                        [
                            'single'    => true,
                            'stars'     => 4.5
                        ]
                    )
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-10 offset-1">
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem et facere
                        ipsum laboriosam magnam
                        maxime nesciunt rerum temporibus vitae voluptate! Accusamus architecto beatae harum, inventore
                        nemo praesentium quidem ullam? Reiciendis!</p>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum,
                        perferendis? A ad at atque
                        autem blanditiis consectetur dicta dignissimos dolor dolore doloremque est eum facilis fugit
                        inventore, itaque maxime modi mollitia nam nesciunt officiis qui recusandae rem sequi similique
                        sit tempore ut. Deserunt illum pariatur praesentium, reprehenderit saepe veniam.</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-4">
                    <div class="col-inner text-center bg-greylight p-4 SofiaPro-Medium">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias consectetur doloribus ducimus
                        eligendi eos esse incidunt magni neque placeat?
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-inner text-center bg-greylight p-4 SofiaPro-Medium">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias consectetur doloribus ducimus
                        eligendi eos esse incidunt magni neque placeat?
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-inner text-center bg-greylight p-4 SofiaPro-Medium">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias consectetur doloribus ducimus
                        eligendi eos esse incidunt magni neque placeat?
                    </div>
                </div>
                <div class="col-12">
                    <div class="swirl"><h2>Swirly thing in here</h2></div>
                </div>
                <div class="col-12">
                    <h2 class="text-center">Understand your available choices</h2>
                </div>
                <div class="col-3">
                    <div class="col-inner text-center">
                        <div class="icon-wrapper mb-3">
                            {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, voluptatum!</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-inner text-center">
                        <div class="icon-wrapper mb-3">
                            {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, voluptatum!</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-inner text-center">
                        <div class="icon-wrapper mb-3">
                            {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, voluptatum!</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-inner text-center">
                        <div class="icon-wrapper mb-3">
                            {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, voluptatum!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="image-wrapper mb-4">
                        <img src="/images/video_placeholder.jpg" alt="People in a meetin talking">
                    </div>
                    <h2>Impartial Advice: NHS vs Private</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus ad autem beatae
                        dignissimos dolor eveniet explicabo impedit labore nulla, praesentium ut veniam voluptatem.
                        Consequuntur explicabo inventore minima odio provident?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus ad autem beatae
                        dignissimos dolor eveniet explicabo impedit labore nulla, praesentium ut veniam voluptatem.
                        Consequuntur explicabo inventore minima odio provident?</p>
                    @include('components.basic.button', [
                        'buttonText'    => 'Find the right hospital',
                        'classTitle'    => 'btn btn-turq btn-squared',
                        'hrefValue'     => '/results-page'
                    ])
                </div>
            </div>
        </div>
    </section>
    {{--    <section>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col col-12 hc-content">--}}
    {{--                    <h1 class="SofiaPro-SemiBold mb-3">About Hospital Compare</h1>--}}
    {{--                    <h2 class="SofiaPro-SemiBold col-turq font-28">Feel better faster by knowing your legal right to--}}
    {{--                        choose.</h2>--}}
    {{--                </div>--}}
    {{--                <div class="col col-7">--}}
    {{--                    <p>Hospital Compare is the unique healthcare comparison website that empowers you to know rights and--}}
    {{--                        make the best choices for your treatment.</p>--}}
    {{--                    <p>Many people across England aren’t aware of their legal rights when it comes to their healthcare…--}}
    {{--                        legal rights that could in fact help them or their loved feel better faster.</p>--}}
    {{--                    <p>It’s a fact that waiting times and quality of care in hospitals across the country can vary--}}
    {{--                        greatly, with millions of people patiently waiting for treatment (some already longer than the--}}
    {{--                        NHS’ 18 week target).</p>--}}
    {{--                    <p>By knowing and acting upon their legal rights, many patients could slash their waiting times and--}}
    {{--                        be treated quicker.</p>--}}
    {{--                </div>--}}
    {{--                <div class="col col-5">--}}
    {{--                    <div class="image-wrapper">--}}
    {{--                        <img class="w-100" src="{{ asset('/images/video_placeholder.jpg') }}"--}}
    {{--                             alt="People sat round a table having a chin wag ">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    {{--    <section class="bg-greylight">--}}
    {{--        <div class="container">--}}
    {{--            <div class="">--}}
    {{--                <div>--}}
    {{--                    <p class="SofiaPro-SemiBold font-24">For example, did you know:</p>--}}
    {{--                    <ul class="blue-dot">--}}
    {{--                        <li>You have the legal right to choose where you have your NHS treatment?</li>--}}
    {{--                        <li>That if you’ve already been waiting 18 weeks for that treatment, you have the legal right to select a different hospital?</li>--}}
    {{--                        <li>You can even choose to have your NHS-funded elective surgery at a private hospital?</li>--}}
    {{--                        <li>informing you of the Choices available to you in law for your hospital treatment</li>--}}
    {{--                        <li>helping you choose the best hospital in England for your treatment</li>--}}
    {{--                        <li>helping you to understand your available choices to have your hospital treatment performed--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                    <p class="SofiaPro-SemiBold font-24">If the answer to any of those questions is ‘no’, Hospital--}}
    {{--                        Compare can help you. It’s our aim to:</p>--}}
    {{--                    <ul class="blue-dot">--}}
    {{--                        <li>Make you aware of the choices available to you</li>--}}
    {{--                        <li>Help you choose the best hospital in England for your treatment</li>--}}
    {{--                        <li>Help you understand the choices available to you, so your treatment can be performed…</li>--}}
    {{--                        <li>informing you of the Choices available to you in law for your hospital treatment</li>--}}
    {{--                        <li>helping you choose the best hospital in England for your treatment</li>--}}
    {{--                        <li>helping you to understand your available choices to have your hospital treatment performed--}}
    {{--                            <ol class="alpha">--}}
    {{--                                <li>Make you aware of the choices available to you</li>--}}
    {{--                                <li>Help you choose the best hospital in England for your treatment</li>--}}
    {{--                                <li>Help you understand the choices available to you, so your treatment can be performed…</li>--}}
    {{--                                <li>sooner, by comparing waiting times at different hospitals</li>--}}
    {{--                                <li>at the best quality hospital, by comparing hospital quality rankings</li>--}}
    {{--                                <li>at a private hospital paid for by the NHS or paid for you self, or by your insurer,--}}
    {{--                                    if that is your preference--}}
    {{--                                </li>--}}
    {{--                                --}}{{--                                <li>to bring you self- pay offers from time to time, provided by private hospitals, so--}}
    {{--                                --}}{{--                                    you can have your treatment performed quicker and more cost effectively, if you or--}}
    {{--                                --}}{{--                                    your insurer wish to pay--}}
    {{--                                --}}{{--                                </li>--}}
    {{--                            </ol>--}}
    {{--                        </li>--}}
    {{--                        --}}{{--                        <p>We compare hospital performance in England for you to consider. You are not charged for this--}}
    {{--                        --}}{{--                            service.</p>--}}
    {{--                        --}}{{--                        <p>Rest assured, one of our key principles is to provide impartial advice at all times on--}}
    {{--                        --}}{{--                            hospital availability and choice based on the search criteria we provide for you.</p>--}}
    {{--                        --}}{{--                        <p><strong>Private hospitals perform NHS treatments. That means you can choose to have your--}}
    {{--                        --}}{{--                                treatment at a private hospital paid for by the NHS. That is your legal choice (there--}}
    {{--                        --}}{{--                                are exceptions- see--}}
    {{--                        --}}{{--                                <a class="text-link" href="/your-rights">Your rights)</a>. This is at no greater cost to--}}
    {{--                        --}}{{--                                the tax payer.--}}
    {{--                        --}}{{--                            </strong></p>--}}
    {{--                    </ul>--}}
    {{--                    <p>By using our unique, accurate, up-to-date and unbiased database of hospital information in--}}
    {{--                        England, you can search and compare healthcare providers across the country completely free,--}}
    {{--                        before selecting the one that’s best suited to help you.--}}
    {{--                        If you choose an NHS hospital, talk to your GP as soon as possible to get a referral. If--}}
    {{--                        you’re paying for your treatment at a private hospital or are covered by your health--}}
    {{--                        insurance provider, they will contact you in due course.</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <h2 class="SofiaPro-SemiBold font-28 text-center">Our Background</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="row">
                        <div class="col-6">
                            <div class="icon-wrapper mb-3">
                                {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                            </div>
                            <p class="mb-3 SofiaPro-SemiBold">Comparison Website</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque delectus dicta nemo odio
                                optio quaerat quos similique temporibus unde voluptas. Dignissimos, ducimus nam neque
                                nihil omnis perferendis quibusdam soluta velit!</p>
                        </div>
                        <div class="col-6">
                            <div class="icon-wrapper mb-3">
                                {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                            </div>
                            <p class="mb-3 SofiaPro-SemiBold">Comparison Website</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque delectus dicta nemo odio
                                optio quaerat quos similique temporibus unde voluptas. Dignissimos, ducimus nam neque
                                nihil omnis perferendis quibusdam soluta velit!</p>
                        </div>
                        <div class="col-6">
                            <div class="icon-wrapper mb-3">
                                {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                            </div>
                            <p class="mb-3 SofiaPro-SemiBold">Comparison Website</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque delectus dicta nemo odio
                                optio quaerat quos similique temporibus unde voluptas. Dignissimos, ducimus nam neque
                                nihil omnis perferendis quibusdam soluta velit!</p>
                        </div>
                        <div class="col-6">
                            <div class="icon-wrapper mb-3">
                                {!! file_get_contents(asset('/images/icons/doctor.svg')) !!}
                            </div>
                            <p class="mb-3 SofiaPro-SemiBold">Comparison Website</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque delectus dicta nemo odio
                                optio quaerat quos similique temporibus unde voluptas. Dignissimos, ducimus nam neque
                                nihil omnis perferendis quibusdam soluta velit!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-contacts">
        <div class="container text-center SofiaPro-Medium">
            <div class="social">
                <ul class="social-list d-flex justify-content-end">
                    <li class="facebook-social">
                        <a href="" target="_blank">{!! file_get_contents(asset('images/icons/social/facebook.svg')) !!}
                            <span class="sr-only">Facebook link</span>
                        </a>
                    </li>
                    <li class="twitter-social">
                        <a href="" target="_blank">{!! file_get_contents(asset('images/icons/social/twitter.svg')) !!}
                            <span class="sr-only">Twitter link</span>
                        </a>
                    </li>
                    <li class="instagram-social">
                        <a href="" target="_blank">{!! file_get_contents(asset('images/icons/social/instagram.svg')) !!}
                            <span class="sr-only">Instagram link</span>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Media/Press: <a href="mailto:press@hospitalcompare.com">press@hospitalcompare.com</a></p>
            <p>If you have any questions, <a href="mailto:hello@hospitalcompare.co.uk" class="col-turq">get in touch with us</a>. Also have a look at
                <a class="col-turq" href="/faqs">our FAQs</a></p>
        </div>
    </section>
@endsection
