$(document).ready(function() {
    $(".dropdown-item").click(function(e) {
        e.preventDefault();
        var selectedLang = $(this).data("lang");

        $.ajax({
            type: "POST",
            url: "language_cfg.php",
            data: { lang: selectedLang },
            success: function(response) {
                location.reload();
            },
            error: function(error) {
                console.error("Error updating language", error);
            }
        });
    });
});
