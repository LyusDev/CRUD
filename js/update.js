$(document).ready(function () {
    $(function () {
        $('#updateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); /*Button that triggered the modal*/
            var id = button.data('id');
            var prod_name = button.data('prod_name');
            var prod_price = button.data('prod_price');
            var prod_desc = button.data('prod_desc');
            var modal = $(this);
            modal.find('#up_prod_name').val(prod_name);
            modal.find('#up_prod_price').val(prod_price);
            modal.find('#up_prod_desc').val(prod_desc);
            modal.find('#id_modal').val(id);


        });
    });
    $('.updatee').on("click", function () {

        var id = $('#id_modal').val();

        $.ajax({
            url: 'backend/update.php',
            type: 'POST',
            data: {
                id: id,
                prod_name: $('#up_prod_name').val(),
                prod_price: $('#up_prod_price').val(),
                prod_desc: $('#up_prod_desc').val(),
            },
            cache: false,
            success: function () {
                alert("Product is Updated!");
                window.location.replace("index.php");
            }
        });


    });
});