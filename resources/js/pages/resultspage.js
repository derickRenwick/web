$(document).ready(function() {

    //Add a delay of 10 ms because rendering is not instant for the new dropdown ( and it's acting weird, sometimes it works and sometimes it doesn't without the delay)
    setTimeout( function() {
            //Change the background color of the selectbox when an option with a value different than 0 is selected
            $('.results-page .results-page-select.highlight option[value!="0"]:selected').parent().css('background-color', '#ececec');
            $('.results-page .highlight-search-dropdown option[value!="0"]:selected').parent().next().css('background-color', '#ececec');
        }, 200);

    //On click event for the sorting ( to submit without clicking the submit button )
    $('.results-page .select-sort-by').change(function(){
        $('.results-page .btn-submit-results').click();
    });

    //Sorting asc/desc when the arrows are clicked
    $(document).on("click touchend", ".sort-categories-menu .sort-arrow", function () {
        //Get all the classes from the element
        var elementClasses = $(this).attr('class');
        //Get the actual target class
        var explodedClasses = elementClasses.split(' ');
        var targetClass = explodedClasses[1];
        //Get the direction (asc/desc)
        var direction = explodedClasses[2];
        //Change the sort order by clicking the dropdown
        changeSortBy(targetClass, direction);
    });

    //Toggling the Special Offers tabs
    $('.special-offer-tab .special-offer-header').on('click', function (e) {
        $(this).parents('.special-offer-tab')
            .toggleClass('open')
            .find('.special-offer-body').slideToggle();
    });

    /**
     * Selects an option from the Sort By dropdown and triggers the `change` event
     *
     * @param target
     * @param direction
     */
    function changeSortBy(target, direction) {
        var optionTarget = '';

        if(target === "sort-waiting-time") {
            if(direction === 'asc')
                optionTarget = $('.results-page .select-sort-by #sort_by_4');
            else
                optionTarget = $('.results-page .select-sort-by #sort_by_3');

        } else if(target === "sort-user-rating") {
            if(direction === 'asc')
                optionTarget = $('.results-page .select-sort-by #sort_by_6');
            else
                optionTarget = $('.results-page .select-sort-by #sort_by_5');
        } else if(target === "sort-op-cancelled") {
            if(direction === 'asc')
                optionTarget = $('.results-page .select-sort-by #sort_by_8');
            else
                optionTarget = $('.results-page .select-sort-by #sort_by_7');
        } else if(target === "sort-care-quality-rating") {
            if(direction === 'asc')
                optionTarget = $('.results-page .select-sort-by #sort_by_10');
            else
                optionTarget = $('.results-page .select-sort-by #sort_by_9');
        } else if(target === "sort-ff-rating") {
            if(direction === 'asc')
                optionTarget = $('.results-page .select-sort-by #sort_by_12');
            else
                optionTarget = $('.results-page .select-sort-by #sort_by_11');
        } else if(target === "sort-nhs-funded") {
            if(direction === 'asc')
                optionTarget = $('.results-page .select-sort-by #sort_by_14');
            else
                optionTarget = $('.results-page .select-sort-by #sort_by_13');
        } else if(target === "sort-self-pay") {
            if(direction === 'asc')
                optionTarget = $('.results-page .select-sort-by #sort_by_16');
            else
                optionTarget = $('.results-page .select-sort-by #sort_by_15');
        }
        //Check if we have an actual value
        if(optionTarget === '')
            return false;

        optionTarget.prop('selected', true);
        optionTarget.trigger('change');
    }

    /**
     * Retrieves the new URL with the given Param + value
     *
     * @param key
     * @param value
     * @returns {string}
     */
    function updateQueryStringParam(key, value) {
        var baseUrl = [location.protocol, '//', location.host, location.pathname].join(''),
            urlQueryString = document.location.search,
            newParam = key + '=' + value,
            params = '?' + newParam;

        // If the "search" string exists, then build params from it
        if (urlQueryString) {
            keyRegex = new RegExp('([\?&])' + key + '[^&]*');

            // If param exists already, update it
            if (urlQueryString.match(keyRegex) !== null) {
                params = urlQueryString.replace(keyRegex, "$1" + newParam);
            } else { // Otherwise, add it to end of query string
                params = urlQueryString + '&' + newParam;
            }
        }
        return baseUrl + params;
    }

    //Refresh the page with the Private Hospitals filter ( for the Enquiry modal of Private hospitals )
    $(document).on("click", ".results-page .change-url", function(event) {
        window.location.href = updateQueryStringParam('hospital_type', 1);
    });



});
