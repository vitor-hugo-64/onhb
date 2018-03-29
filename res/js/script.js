(( function ( w, d) {
	'use strict';

	var $form = d.querySelector("[data-js='form']");
	var $input = d.querySelectorAll("[data-js='input']");

	$input[0].focus();

	$form.addEventListener( 'submit', function (s) {
		for (var i = 0; i <= $input.length; i++) {
			if (!$input[i].value) {
				s.preventDefault();
				w.alert("Informe " + $input[i].placeholder);
				break;
			}
		}
	});

})( window, document))