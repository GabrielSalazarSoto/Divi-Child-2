var myLibraryObject;

(function($) {
    "use strict";

    myLibraryObject = {
        someFunction: function() {
            // code which uses php_vars.home and php_vars.pleaseWaitLabel
            console.log("hola");
            console.log(php_vars.pleaseWaitLabel);
        }
    }
}(jQuery));