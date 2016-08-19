$('#cbhandelaar').on('click', function() {
    if($('#cbhandelaar').prop('checked')) {
        $('#handelaar_tekst').html('<br>U dient een aanvraag in om als handelaar geregistreerd te worden.<br><br>Totdat deze aanvraag wordt goedgekeurd, blijft uw account onder de status particulier.');
        $('.input_btw').show();
    }
    else {
        $('#handelaar_tekst').html('');
        $('.input_btw').hide();
    }
});


$('#registerform').submit(function(e) {
    // If handelaar is checked and btw nummer is too short or not filled in
    if($('#cbhandelaar').prop('checked')) {
        if($('#btw').val().length < 13) {
            e.preventDefault();
            $('#btw_errormsg').html('Gelieve een geldig btw-nummer in te geven');
        }
    }
});
