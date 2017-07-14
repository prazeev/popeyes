$(function() {
	$('#map').locationpicker({
    	location: {
        	latitude: 44.314844,
        	longitude: -85.602364
    	},
		enableAutocomplete: true,
    	inputBinding: {
        	latitudeInput: $('[name=latitude]'),
        	longitudeInput: $('[name=longitude]'),
        	locationNameInput: $('#location')
    	},
    	zoom: 12
	});
});