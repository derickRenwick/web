<form class="form-element" id="resultspage_form">
    <div class="filter-parent {{ !empty($displayBlock) && ($displayBlock) || !empty($hc_errors) ? 'd-block' : '' }}">
        <div class="filter container">
            <div class="postcode-radius row">
                <div class="postcode-radius-child postcode col-12 col-md-4">
                    @include('components.basic.input', [
                        'placeholder' => 'Enter your postcode',
                        'validation' => 'maxlength=8',
                        'inputClassName' => 'inputClass',
                        'value' => !empty(Request::input('postcode')) && empty($hc_errors) ? Request::input('postcode') : '' ,
                        'name' => 'postcode',
                        'id' => 'input_postcode'])
                </div>
                <div class="postcode-radius-child radius col-12 col-md-6">
                    <div class="col-inner pr-3 d-flex flex-column flex-wrap flex-lg-row align-items-center h-100 position-relative">
                        @include('components.basic.range', [
                            'id'            => 'radiusProx',
                            'label'         => 'Within radius of:',
                            'placeholder'   => '',
                            'classTitle'    => '',
                            'labelClass'    => 'SofiaPro-SemiBold',
                            'value'         => !empty(Request::input('radius')) ? Request::input('radius') : 4,
                            'name'          => 'radius',
                            'step'          => 1])
                    </div>
                </div>
                <div class="postcode-radius-child col-2">
                    @include('components.basic.submit', ['classTitle' => 'btn btn-grad btn-blue btn-s d-block btn-submit-results', 'button' => 'Update Results'])
                </div>
            </div>
            <div class="select-proximity filter-section row">
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectClassName'       => 'w-100',
                        'showLabel'             => true,
                        'selectPicker'          => 'true',
                        'group'                 => true,
                        'groupName'             => 'procedures',
                        'placeholder'           => 'Treatment',
                        'options'               => $data['filters']['procedures'],
                        'suboptionClass'        => 'subprocedures',
                        'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                        'selectClass'           => 'select-picker highlight-search-dropdown',
                        'name'                  =>'procedure_id',
                        'labelClass'            => 'font-14 SofiaPro-Medium'
                    ])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         Surgery Type
                                     </p>
                                     <p>
                                         Select your treatment if known.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    {{--                            @include('components.basic.select', ['options' => [['id'=>1, 'name'=>'Choose your treatment'], ['id'=>2, 'name'=>'Choose your treatment']], 'selectClass' => 'results-page-select', 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'placeholder' => 'Waiting time', 'labelClass' => 'labelClass'])--}}
                    @include('components.basic.select', [
                        'selectClassName'       => 'w-100',
                        'showLabel'             => true,
                        'options'               => $data['filters']['waitingTimes'],
                        'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                        'selectClass'           => 'results-page-select highlight',
                        'placeholder'           =>'Waiting time',
                        'name'                  =>'waiting_time',
                        'labelClass'            => 'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'       => true,
                        'placement'         => 'top',
                        'size'              => 'large',
                        'html'              => 'true',
                        'trigger'           => 'focus',
                        'content'           => '<p class="bold mb-0">
                                         Waiting Time
                                     </p>
                                     <p>
                                         Select the waiting time most suitable for your needs.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    {{--                            @include('components.basic.select', ['options' => [['id'=>1, 'name'=>'Choose your treatment'], ['id'=>2, 'name'=>'Choose your treatment']], 'selectClass' => 'results-page-select', 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'placeholder' => 'NHS choices user rating', 'labelClass' => 'labelClass'])--}}
                    @include('components.basic.select', [
                        'selectClassName' => 'w-100',
                        'showLabel' => true,
                        'options' => $data['filters']['userRatings'],
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'results-page-select highlight',
                        'placeholder'=>'NHS User Rating',
                        'name'=>'user_rating',
                        'labelClass' => 'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         NHS User Rating
                                     </p>
                                     <p>
                                         Five star rating system based on feedback provided by users of the NHS (five stars being the best). Information is not available on some hospitals.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'showLabel' => true,
                        'options' => $data['filters']['qualityRatings'],
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'results-page-select highlight',
                        'placeholder'=>'Care Quality Rating',
                        'name'=>'quality_rating',
                        'labelClass' => 'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         Care Quality Rating
                                     </p>
                                     <p>
                                         The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', ['selectClassName' => 'w-100', 'showLabel' => true, 'options' => $data['filters']['hospitalTypes'], 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'selectClass' => 'results-page-select highlight', 'placeholder'=>'Hospital Type', 'name'=>'hospital_type', 'labelClass' => 'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         NHS or Private Hospitals
                                     </p>
                                     <p>
                                         Select which hospital type best suits your needs. Remember you can choose to have an NHS treatment at most private hospitals in England and Wales.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectClassName'       => 'w-100',
                        'showLabel'             => true,
                        'selectPicker'          => 'true',
                        'options'               => $data['filters']['policies'],
                        'suboptionClass'        => 'policies',
                        'group'                 => true,
                        'groupName'             => 'policies',
                        'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                        'selectClass'           => 'highlight-search-dropdown select-picker',
                        'placeholder'           => 'Insurance',
                        'name'                  => 'policy_id',
                        'labelClass'          => 'font-14 SofiaPro-Medium'
                    ])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         Insurance policy
                                     </p>
                                     <p>
                                         Select your insurance provider and policy type.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sort-parent" id="sort_parent">
        <div class="container">
            <div class="sort-bar row">
                <div class="show-section col-12 col-md-6 SofiaPro-Medium">
                    Showing {{$data['hospitals']->total()}} hospital(s) | Ordered
                    by {{ !empty(Request::input('sort_by')) ? \App\Helpers\Utils::sortBys[Request::input('sort_by')]['name'] : ((!empty(Request::input('postcode')) && empty($hc_errors[0]['postcode'])) ? 'Care Quality Rating & Distance' : 'Care Quality Rating & Waiting Time') }}
                </div>
                <div class="sort-section col-12 col-md-6 d-flex flex-wrap justify-content-end align-items-center">
                    @include('components.basic.button', [
                        'button'            => 'Filter Results',
                        'classTitle'        => 'btn btn-s btn-teal btn-grad btn-icon btn-arrow-down',
                        'id'                => 'show_filters',
                        'icon'              => 'fas fa-chevron-down'
                    ])
                    @include('components.basic.select', [
                        'showLabel' => true,
                        'options' => $data['sortBy'],
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'results-page-select select-sort-by SofiaPro-Medium font-16',
                        'selectClassName' => 'pl-3',
                        'placeholder'=>'Sort by:',
                        'name'=>'sort_by',
                        'labelClass' => 'sortLabel SofiaPro-Medium'])
                </div>
            </div>
        </div>
    </div>
</form>
