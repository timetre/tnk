$( document ).ready(function() {
	$('#tnk_bundle_blogbundle_article_submit').hide();
	$('#tnk_bundle_blogbundle_categorie_submit').hide();
	$('#tnk_bundle_blogbundle_presse_submit').hide();

	$('.datePicker').datepicker({
		'format': 'dd/mm/yyyy'
	});

	$('.datePicker').datepicker({
		'format': 'dd/mm/yyyy'
	});

	CKFinder.setupCKEditor( null, '/ckfinder/' ) ;
});