/*
    File: magic.js

    This plugin file contains all of the core methods for MagicPHP utilizing the jQuery library.
    This library is dependent on the inclusion of the jQuery 2.x library in the web application. jQuery can
    be accessed by visiting http://jquery.com/download/.

    There core function is defined as magic with options set for default values.
    Individual methods are defined in addition as functions assigned .

 */

(function ( $ ) {

    $.fn.magic = function() {
        // Initialize the plugin
        console.log('magic');
    };

    // Define alert function
    $.fn.magicAlert = function( text ) {
        return alert(text);
    };

    $.fn.magicAlertDialog = function ( title,text, button) {
        // Update to use jQuery UI and tell this function to accept title, text, and button parameters.
    };

    // Define assign function
    $.fn.magicAssign = function( elementId, data ) {
        var element = jQuery('#' + elementId);
        if( typeof elementId == undefined) {
            debug('assign','Element is undefined');
        }
        else if (elementId == null) {
            debug('assign','Element is null');
        }
        else {
            jQuery('#' + elementId).html(data);
        }
    };

	// Define callFunction function
	$.fn.magicCallFunction = function ( functionName, formValues ){
		$.ajax({
	      type: "POST",
	      dataType: "json",
		  contentType: "application/json",
		  url: "../../private/functions/" + functionName + ".php", 
	      data: formValues,
	      async: false,
	      success: function(data) {
        	// do something
      	  }
   		});
    	return false;
	};
	
    // Define getFormValues function
    $.fn.magicGetFormValues = function( formId ) {
        return jQuery(formId).serializeArray();
    };

    // Define private functions here
    function debug( functionName, error) {
        console.log('MagicPHP Error: ' + functionName + error);
    }

})( jQuery);