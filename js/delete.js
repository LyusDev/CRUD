$(document).ready(function () {
    
    $('.deletee').on('click', function () {
        var id = $(this).attr("data-id");

        $.ajax({
            url: "backend/delete.php",
            type: "POST",
            data: { id: id },
            cache: false,

        });
        alert("Producted is Deleted!");
        window.location.replace("index.php");

    });
});
