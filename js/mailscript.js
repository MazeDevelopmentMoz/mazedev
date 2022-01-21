
function submitForm() {

    const name = $('#name');
    const tel = $('#tel');
    const email = $('#email');
    const assunto = $('#assunto');

    if (name.val() != "" && tel.val() != "" && email.val() != "" && assunto.val() != "") {

        var anchor = document.getElementById('text-enviar');
        var att = document.createAttribute("style");
        att.value = "display:none;";
        anchor.setAttributeNode(att);


        $('#spinnermail').removeAttr("style");

        $('#formEmail').submit(function (e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            $.ajax({
                type: "POST",
                url: 'models/contact_model.php',
                data: $('#formEmail').serialize(),
                success: function (data) {
                    // show response from the php script
                    const email_success = "Menssage enviada com sucesso";
                    $.post("contacto.php", { session: email_success });

                    window.location.replace("http://localhost/mazedev/contacto.php")
                },
                error: function (data) {
                    console.log("ocorreu um erro \n")
                }
            });
        });

    }
}
