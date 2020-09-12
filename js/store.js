
$(document).ready(function () {

    $('#save').on('click', function () {

        var prod_name = $('#prod_name').val();
        var prod_price = $('#prod_price').val();
        var prod_desc = $('#prod_desc').val();
        if (prod_name != "" && prod_price != "" && prod_desc != "") {
            $.ajax({
                url: "backend/store.php",
                type: "POST",
                data: {
                    prod_name: prod_name,
                    prod_price: prod_price,
                    prod_desc: prod_desc
                },
                cache: false,
                success: function () {
                    alert("Product is Added!");
                    window.location.replace("index.php");
                }
            });

        }
        else {
            alert('Please fill all the fields !');
        }

    });
});
