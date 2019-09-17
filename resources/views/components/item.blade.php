<section class="sort-categories">
    <div class="sort-categories-inner container">
        <div class="sort-categories-section-1">
            <div class="sort-categories-item">
                <img alt="Image of {{ $title }}" src="{{ $itemImg }}">
                <div class="{{$NHSClass}}"><p>{{$fundedText}}</p></div>
                @includeWhen(!empty($specialOffers), 'components.basic.specialofferslide', ['class' => 'default'])
                {{--                    <span class="btn btn-green-plus btn-block toggle-special-offer"></span>--}}
                <span class="d-none" id="item_hospital_url_{{$id}}">{{$d['url']}}</span>
            </div>
            <div class="sort-categories-item">
                <p class="sort-item-title SofiaPro-SemiBold" id="item_name_{{$id}}">
                    {{$title}}
                </p>
                <p class="sort-item-location">{{$location}}, {{ trim($town, ', ') }}</p>
                @include('components.basic.modalbutton', [
                    'hrefValue'         => '#',
                    'classTitle'        => 'find-link',
                    'button'            => 'Find on map',
                    'modalTarget'       => '#hc_modal_map',
                    'latitude'          => $latitude,
                    'longitude'         => $longitude,
                    'address'           => '<strong>' . $title . '</strong>' . '<br>' . $location . '<br>' . trim($town, ', ') . '<br>' . $county . '<br>' . $postcode,
                    'image'             => 'images/alder-1.png'
                ])
                {{--                TODO: reintroduce consultant button when we have this data --}}
                {{--                @if(!empty($specialOffers))--}}
                {{--                    <div class="btn-area" style="margin-top: 10px">--}}
                {{--                        @include('components.basic.button', ['classTitle' => 'btn btn-xs btn-teal btn-icon btn-consultant btn-plus', 'button' => 'Consultants'])--}}
                {{--                    </div>--}}
                {{--                @endif--}}
            </div>
        </div>
        <div class="sort-categories-section-2">
            {{-- CQC rating  --}}
            <div class="sort-categories-section-2__child">
                <p @includeWhen(empty($qualityRating), 'components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => 'Currently no data available for this hospital'])>
                    {!! !empty($qualityRating) ? $qualityRating : "<a class='btn-link'>No data</a>" !!}
                </p>
                <span class="d-none" id="item_quality_rating_{{$id}}">{!! $qualityRating !!}</span>

            </div>
            {{-- Waiting time --}}
            <div class="sort-categories-section-2__child flex-column">
                <p @includeWhen(empty($waitTime), 'components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => 'Currently no data available for this hospital'])>
                    {!! !empty($waitTime) ? $waitTime : "<a class='btn-link'>No data</a>" !!}
                </p>
                @if($NHSClass == 'private-hospital')
                    <span>
                        Click for<br>
                        @include('components.basic.modalbutton', [
                                'hrefValue'         => $url,
                                'hospitalTitle'     => $title,
                                'modalTarget'       => '#hc_modal_enquire_private',
                                'classTitle'        => 'text-link enquire-times',
                                'target'            => 'blank',
                                'modalText'         => 'Information for waiting time enquiry',
                                'button'            => 'waiting time enquiry'])
                    </span>
                @endif
                <span class="d-none" id="item_waiting_time_{{$id}}">{{$waitTime}}</span>
            </div>
            {{-- End waiting time --}}
            <div class="sort-categories-section-2__child">
                <p @include('components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => !empty($d['rating']['avg_user_rating']) ? '
                        <p><span class="mr-2">Food rating</span>
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                        </p>
                        <p><span class="mr-2">Food rating</span>
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                        </p>
                        <p><span class="mr-2">Food rating</span>
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                            <img src="images/icons/star.svg" alt="Whole Star">
                        </p>' : 'Currently no data available<br>for this hospital'])>
                    {!! html_entity_decode($stars) !!}
                </p>
                <span class="d-none" id="item_user_rating_{{$id}}">{!! $userRating !!}</span>
            </div>
            {{-- % operations cancelled --}}
            <div class="sort-categories-section-2__child">
                <p
                    @include('components.basic.popover', [
                    'trigger' => 'hover',
                    'html'    => 'true',
                    'content' => !empty($opCancelled) ? 'National average<br> is 3.35%' : 'Currently no data available<br>for this hopsital'])>
                    {!! !empty($opCancelled) ? $opCancelled : "<a class='btn-link'>No data</a>" !!}
                </p>
                <span class="d-none" id="item_op_cancelled_{{$id}}">{!! $opCancelled !!}</span>
            </div>
            {{-- Friends and family --}}
            <div class="sort-categories-section-2__child">
                <p class="m-0"
                    @include('components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => !empty($FFRating) ? 'National average<br>is 98.85%' : 'Currently no data available<br>for this hospital'])>
                    {!! !empty($FFRating) ? $FFRating : "<a class='btn-link'>No data</a>" !!}
                </p>
                <span class="d-none" id="item_ff_rating_{{$id}}">{!! $FFRating !!}</span>
            </div>
            {{-- NHS funded work  --}}
            <div class="sort-categories-section-2__child">
                <p>
                    {!! ($NHSClass == 'nhs-hospital') || ($NHSClass == 'private-hospital') && !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? "<img src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='images/icons/dash-black.svg' alt='Dash icon'>" !!}
                </p>
                <span class="d-none" id="item_nhs_funded_{{$id}}">{!! $NHSFunded !!}</span>
            </div>
            <div class="sort-categories-section-2__child flex-column">
                <p>
                    {!! !empty($privateSelfPay) ? "<img src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='images/icons/dash-black.svg' alt='Dash icon'>"  !!}
                </p>
                @if($NHSClass == 'private-hospital')
                    <span>
                        Click for<br>
                        @include('components.basic.modalbutton', [
                                'hrefValue'         => $url,
                                'hospitalTitle'     => $title,
                                'modalTarget'       => '#hc_modal_enquire_private',
                                'classTitle'        => 'text-link enquire-prices',
                                'target'            => 'blank',
                                'modalText'         => 'This is the text about prices',
                                'button'            => 'prices'])
                    </span>
                @endif
                <span class="d-none" id="item_nhs_private_pay_{{$id}}">{!! $privateSelfPay !!}</span>
            </div>
        </div>
        <div class="sort-categories-section-3 d-flex flex-column justify-content-center">
            <div class="btn-area btn-area-upper d-flex align-items-center justify-content-between"
                 @if(!empty($specialOffers) ) style="padding-bottom: 10px" @endif>
                <span class="d-none" id="item_hospital_type_class_{{$id}}">{!! $NHSClass !!}</span>
                @if($NHSClass == 'private-hospital')
                    @include('components.basic.modalbutton', [
                    'hospitalType'      => $NHSClass,
                    'hrefValue'         => $url,
                    'hospitalTitle'     => $title,
                    'modalTarget'       => '#hc_modal_enquire_private',
                    'classTitle'        => 'btn btn-icon btn-enquire btn-blue enquiry mr-2 btn-block',
                    'target'            => 'blank',
                    'button'            => $btnText,
                    'id'                => 'enquire_'.$id])
                @elseif($NHSClass == 'nhs-hospital')
                    @include('components.basic.modalbutton', [
                    'hospitalType'      => $NHSClass,
                    'hrefValue'         => $url,
                    'hospitalTitle'     => $title,
                    'hospitalUrl'       => $d['url'],
                    'classTitle'        => 'btn btn-icon btn-blue btn-enquire enquiry mr-2 btn-block',
                    'button'            => $btnText,
                    'modalTarget'       => '#hc_modal_enquire_nhs',
                    'id'                => 'enquire_'.$id])
                @endif
                @include('components.basic.button', [
                    'classTitle' => 'btn btn-green-outline compare btn-block mt-0',
                    'button' => '', 'icon' => '',
                    'id' => $id])
            </div>
            @if(!empty($specialOffers))
                <div class="btn-area btn-area-lower">
                    @include('components.basic.button', [
                    'classTitle'        => 'toggle-special-offer btn btn-block btn-icon btn-pink btn-special-offer btn-plus',
                    'button'            => 'Special Offers'])
                </div>
            @endif
        </div>
    </div>
</section>
