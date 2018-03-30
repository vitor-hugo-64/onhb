(( function ( w, d) {
	'use strict';

	var $form = d.querySelector("[data-js='form']");
	var $input = d.querySelectorAll("[data-js='input']");

	var status = (w.location.href).charAt((w.location.href).length-1);

	if (status == 1) {
		$('#modalSuccess').modal();
	} else if (status == 2) {
		$('#modalError').modal();
	}

	$form.addEventListener( 'submit', function (s) {
		for (var i = 0; i <= $input.length; i++) {
			if (!$input[i].value) {
				s.preventDefault();
				w.alert("Informe " + $input[i].placeholder);
				$input[i].focus();
				break;
			}
		}

	});

})( window, document))