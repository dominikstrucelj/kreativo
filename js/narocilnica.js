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
            var naslov = $("input#naslov").val();
            var posta = $("input#posta").val();
            var eposta = $("input#eposta").val();
            var sporocilo = $("textarea#sporocilo").val();
            var kolicina = $("input#kolicina").val();
			var novice="0";
			
			if (document.getElementById('novice').checked) {
				novice="1";
			}
			
			
            
            $.ajax({
                url: "././mail/narocilnica.php",
                type: "POST",
                data: {
                    ime: ime,
                    naslov: naslov,
                    posta: posta,
                    eposta: eposta,
                    kolicina: kolicina,
					novice:novice,
                    sporocilo: sporocilo
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#uspesno_narocilo').html("<br><br><h3>Hvala za vaše naročilo.</h3><br><p>Potrdilo o naročilu je bilo poslano na e-naslov: "+eposta+"</p><br><br><br><button type='button' class='btn btn-xl' data-dismiss='modal'>Nazaj</button>");
                    
                    //clear all fields
                    $('#narocilnicaCD').trigger("reset");
					
					//hide narocilnica
					$('#narocilnicaCD').hide();
					
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
