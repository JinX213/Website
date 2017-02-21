$(function() {
    ///////////////////////////////////////////////
    // Feedback nehmen
    ///////////////////////////////////////////////

    // Toggle Feedback nehmen solution when
    // button is clicked

    // https://www.w3schools.com/jquery/jquery_ref_selectors.asp
    $('#fn-button').click(function() {
      // http://api.jquery.com/toggle/
      $('#fn-aufgabe2-worked-example').toggle();
    })

    $("#loesung-lisa-button").click(function() {
        $("#loesung-lisa").show();
    });
    $("#loesung-nadja-button").click(function() {
        $("#loesung-nadja").show();
    });
    $("#loesung-roland-button").click(function() {
        $("#loesung-roland").show();
    });

});





$(document).ready(function() {
    $("#website_content_wrapper").load("./pages/home.html");
});