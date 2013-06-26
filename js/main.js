/**
 * @author kari.eve.trace@gmail.com	
 * @since 2013-06-26
 */

// global jQ functions
/**
 *Ajax call that accepts numerous paramaters via the options object.
 *@author kari.eve.trace@gmail.com, David Eddy
 *@since 2013-06-26
 *@param object options [required] Js object formatted for ajax reqest
 *@return promise object || variable data formats
 */
$.fn.loadData = function(options) { 
    var data = null;

    // Default settings if not passed, set.
    if (typeof options.async        == 'undefined') {options.async = true;}
    if (typeof options.cache        == 'undefined') {options.cache = true;}
    // Data
    if (typeof options.post_type    == 'undefined') {options.post_type      = 'POST';}
    if (typeof options.return_data  == 'undefined') {options.return_data    = 'json';}

    // Finally the meat...
    return $.ajax({
        async:  options.async,
        cache:  options.cache,
        data:   options.data,
        type:   options.post_type,
        url:    options.url,
        success: function(data) {
            //return as JSON if requested - does not work with promise objects!
            if (options.return_data == undefined || options.return_data == false || options.return_data === 'json') {
                data = jQuery.parseJSON(data);
            }

            /**
             *This is awesome! If 'success_callback_method' is set; it is used as the jQ method index and is called.
             *@author kari.eve.trace@gmail.com, deddy, PatrikAkerstrand
             *@source: http://stackoverflow.com/questions/912596/how-to-turn-a-string-into-a-javascript-function-call
             */
            if (options.success_callback_method) {
                var fn = window[options.success_callback_method];
                if(typeof fn === 'function') {
                    fn(data);
                }
            }

            return data;
        },
        error: function(error) {
            //if an error occures, lets know about it.
            console.log('Error during ajax request. '+error.response);
            return false;
        },
        complete: function() {

            //if a method to call on complete is specificed.
            //todo refactor this to its own method so we can call it from any $jQ object.
            if (options.complete_callback_method) {
                var fn = window[options.complete_callback_method];
                if(typeof fn === 'function') {
                    fn(data);
                }
            }

            return true;
        }
    });

    return true;
}



// Global HTML element actions
$(".resetForm").on("click", function( event ){
	// Remove validation labels
	$("label.validInput").remove();
	$("label.invalidInput").remove();

	// Remove validation classes
	$("input").removeClass('validInput');
	$("input").removeClass('invalidInput');
});



// Main $().ready() block.
$().ready(function() {

	var options = new Object();
	options.url = "./core/core.php";

	$("#processEVEAPI").on("click", function( event ){

	    console.log('starting validation');
	    
	    $("#eveAPIForm").validate({
	    	errorClass: "invalidInput",
	    	validClass: "validInput",
	        rules: {
	            keyID: {
	                required: true,
	                number: true,
	                minlength: 1
	            },
	            vCode: {
	                required: true,
	                alphanumeric: true,
	                minlength: 5
	            }
	        },
	        messages: {
	            keyID: {
	                required: "Please provide a valid keyID",
	                number: "keyID must be numeric",
	                minlength: "keyID must be numeric"
	            },
	            vCode: {
	                required: "Please provide a valid vCode",
	                alphanumeric: "vCode must be alpha-numeric only",
	                minlength: "Your vCode must be at least 64 characters long"
	            }
	        },
			submitHandler: function(form) {
				// do other stuff for a valid form
				//form.submit();
				console.log('Submitted');

				options.data = $("form#stepOne").serialize();
				console.log(options);

				$().loadData(options);
			},
	    });
	});

	console.log("$().ready");
});
