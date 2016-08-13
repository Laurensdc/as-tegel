$('#cbhandelaar').on('click', function() {
    if($('#cbhandelaar').prop('checked')) {
        $('#handelaar_tekst').html('U dient een aanvraag in om als handelaar geregistreerd te worden.');
        $('.input_btw').show();
    }
    else {
        $('#handelaar_tekst').html('');
        $('.input_btw').hide();
    }
});