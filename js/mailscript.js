// <<<<----------------------------------
//     Method which send contact data
// <<<<----------------------------------
function submitForm() {
    // Form variables
    const name = $('#name');
    const tel = $('#tel');
    const email = $('#email');
    const assunto = $('#assunto');

    // Validation if is empty
    if (name.val() != "" && tel.val() != "" && email.val() != "" && assunto.val() != "") {

        // Change text button to spinner loader
        var anchor = document.getElementById('text-enviar');
        var att = document.createAttribute("style");
        att.value = "display:none;";
        anchor.setAttributeNode(att);
        $('#spinnermail').removeAttr("style");

        // Submit for with ajax
        $('#formEmail').submit(function (e) {


            e.preventDefault(); // avoid to execute the actual submit of the form.

            $.ajax({
                type: "POST",
                url: 'models/contact_model.php',
                data: $('#formEmail').serialize(),
                success: function (data) {
                    // Clean form and show message successful

                    $('#success').removeAttr("style");
                    // window.location.replace("http://localhost/mazedev/contacto.php")
                },
                error: function (data) {
                    // name.val() = ""
                    // email.val() = ""
                    // tel.val() = ""
                    // assunto.val() = ""
                    console.log("ocorreu um erro \n")
                    // return error message
                    $('#error').removeAttr("style");

                    var anchor = document.getElementById('spinnermail');
                    var att = document.createAttribute("style");
                    att.value = "display:none;";
                    anchor.setAttributeNode(att);
                    $('#text-enviar').removeAttr("style");
                }
            });
        });

    } else {
        $('#error').removeAttr("style");

        var anchor = document.getElementById('spinnermail');
        var att = document.createAttribute("style");
        att.value = "display:none;";
        anchor.setAttributeNode(att);
        $('#text-enviar').removeAttr("style");
    }
}

// <<<<-------------------------------------------
//     Method which send email for notifications
// <<<<-------------------------------------------

function submitEmail() {
    // Change text button to spinner loader
    var anchor = document.getElementById('text-enviar');
    var att = document.createAttribute("style");
    att.value = "display:none;";
    anchor.setAttributeNode(att);

    $('#spinnermail').removeAttr("style");

    // Variable
    var email = $('#emailsubmit');

    if (email.val() != "") {
        // e.preventDefault(); // avoid to execute the actual submit of the form.

        $.ajax({
            type: "POST",
            url: 'models/email_model.php',
            data: email.serialize(),
            success: function (data) {
                // show response from the php script
                session = "Menssage enviada com sucesso";
                $.post("index-pr.php", { session: session });
                window.location.replace("http://localhost/mazedev/index-pr.php")
                console.log(data)
            },
            error: function (data) {
                console.log("ocorreu um erro \n")
            }
        });
    } else {
        var anchorr = document.getElementById('spinnermail');
        var attt = document.createAttribute("style");
        attt.value = "display:none;";
        anchorr.setAttributeNode(attt);
        $('#text-enviar').removeAttr("style");
    }
}
