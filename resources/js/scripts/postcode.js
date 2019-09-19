$(document).ready(function () {
    //POSTCODE Autocomplete
    // $('.postcode-autocomplete-container').hide();
    var $postcode_input = $('.home-postcode-parent #input_postcode')
    $postcode_input.on('input',function(e) {
        var postcode = $(this).val();
        $.ajax({
            url: 'api/getLocations/'+postcode,
            type: 'GET',
            headers: {
                'Authorization':  'Bearer mBu7IB6nuxh8RVzJ61f4',
            },
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: {},
            success: function (data) {
                // var json_obj = $.parseJSON(data);//parse JSON
                var ajaxBox = $(".home-postcode-parent .postcode-autocomplete-container .ajax-box");
                ajaxBox.empty(); // remove old options
                //Check if we have at least one result in our data
                if(!$.isEmptyObject(data.data.result)) {
                    $.each(data.data.result, function(key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        ajaxBox.append("<p class='postcode-item' >"+ obj.postcode +"</p>");
                    });
                    $('.postcode-autocomplete-container').show();
                } else {
                    alert('Invalid Postcode! Please try again.');
                    $postcode_input.val("");
                    $('.postcode-autocomplete-container').hide();
                }
            },
            error: function (data) {
                alert('Something went wrong! Please try again.')
            },
        });
    });

    $('.ajax-box').on('click', '.postcode-item', function(){
        var newPostcode = $(this).text();
        var parent      = $('.home-postcode-parent #input_postcode');
        var ajaxBox     = $('.postcode-autocomplete-container .ajax-box');
        parent.val(newPostcode);
        ajaxBox.empty();
        $('.postcode-autocomplete-container').hide();
    });

    //Hide first option tag value from displaying in select element options
    // $('.firstOption').hide();
});
