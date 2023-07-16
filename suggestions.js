$( function() {
    $( "#medicine-search" ).autocomplete({
    source: 'medicine_suggestions.php'
    });
});

$(document).ready(function() {
    // Form Submission Event
    $("form").submit(function(event) {
       event.preventDefault(); // Prevent default form submission

       // Get the form data
       var formData = $(this).serialize();

       $.ajax({
          url: "medicinesearch.php",
          type: "POST",
          data: formData,
          dataType: "html",
          success: function(response) {
             // Update the necessary elements on the page
             $("#medresult").html(response);
          }
       });
    });
 });