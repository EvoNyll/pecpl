(function ($) {

	"use strict";


	// =====================================================
	//      FILEPOND FILE UPLOAD
	// =====================================================

	// Register plugins
	FilePond.registerPlugin(
		FilePondPluginFileValidateSize,
		FilePondPluginFileValidateType
	);

	// Set default FilePond options
	FilePond.setOptions({

		// Maximum files
		maxFiles: 1,

		// Maximum allowed file size
		maxFileSize: '1MB',

		// Allowed file types
		acceptedFileTypes: ['image/png', 'image/jpeg', 'application/pdf', 'application/docx'],

		// Upload to this server end point
		server: 'php/'
	});

	// Turn a file input into a file pond
	FilePond.create(document.querySelector('input[type="file"]'));

	// =====================================================
	//      FORM INPUT VALIDATION
	// =====================================================
	$('#contactForm').parsley();

	$('#contactForm').parsley().on('field:success', function() { 
		$('ul.parsley-errors-list').not(':has(li)').remove();
	});

})(window.jQuery);