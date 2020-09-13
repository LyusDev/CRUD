$(document).ready(function () {

    $('.deletee').on('click', function () {
        var id = $(this).attr("data-id");

   
           var confirmDel = confirm("Product will be deleted!");

            if ( confirmDel) {
                $.ajax({
                    url: "backend/delete.php",
                    type: "POST",
                    data: { id: id },
                    cache: false,

                });
                alert("Product is Deleted!");
                window.location.replace("index.php");
            } else {
                window.location.replace("index.php");
            }
        

       



    });
});
