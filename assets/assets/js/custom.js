document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    var modal = document.getElementById("customModal");

    // Get the button that opens the modal
    var openModalBtn = document.getElementById("openModal");

    // Get the <span> element that closes the modal
    var closeModalBtn = modal.querySelector(".custom-close");

    // When the user clicks on the link, open the modal
    openModalBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default link behavior
        modal.style.display = "block";
    });

    // When the user clicks on <span> (x), close the modal
    closeModalBtn.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});


    $(document).ready(function () {
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            
            var formData = new FormData(this);

            
            $.ajax({
                url: 'https://vranceacurata.workmyweb.ro/handle_form.php', 
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.success) {
                        $('#responseMessage').html(
                            '<div class="alert alert-success">' + response.message + '</div>'
                        );
                        $('#contactForm')[0].reset();
                        $('#contactForm').removeClass('was-validated');
                    } else {
                        $('#responseMessage').html(
                            '<div class="alert alert-danger">' + response.message + '</div>'
                        );
                    }
                },
                error: function (xhr) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'A apărut o eroare.';
                    $('#responseMessage').html(
                        '<div class="alert alert-danger">' + errorMessage + '</div>'
                    );
                },
            });
        });
    });

