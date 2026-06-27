$(function() {
	
    $("input").jqBootstrapValidation({
		
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var ime = $("input#ime").val();
            var eposta = $("input#eposta").val();
            var sporocilo = $("textarea#sporocilo").val();
            var kolicina = $("input#kolicina").val();
			
            alert("test");
            $.ajax({
                url: "././mail/vstopnice.php",
                type: "POST",
                data: {
                    ime: ime,
                    eposta: eposta,
                    kolicina: kolicina,
                    sporocilo: sporocilo
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#uspesno_narocilo_vstopnic').html("<br><br><h3>Hvala za vaše naroèilo.</h3><br><p>Navodila za plaèilo so bila poslana na e-naslov: "+eposta+"</p><br><br><br><button type='button' class='btn btn-xl' data-dismiss='modal'>Nazaj</button>");
                    
                    //clear all fields
                    $('#narocilnicaVST').trigger("reset");
					
					//hide narocilnica
					$('#narocilnicaVST').hide();
					
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
