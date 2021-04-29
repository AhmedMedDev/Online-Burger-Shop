
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function AddToCart(product_id,user_id)
{
     $.ajax({
         method : "POST",
         url  : "cart",
         data  : {product_id : product_id, user_id : user_id },
         cache:false,
         success: function (data) {
            if(data.message == 'success')
            {
                Toast.fire({
                    icon: 'success',
                    title: 'Has Been Added To The Cart'
                })
            }
         },
     })

}


function Carttotal()
{
    var product_price = document.getElementsByClassName("productPrice");

    var price = document.getElementById("totalPrice");

    var totalPrice = 0;

    for (let index = 0; index < product_price.length; index++) 
        totalPrice = totalPrice +  Number(product_price[index].getAttribute("price"))

    price.innerHTML = totalPrice

}

function DecreaseCarttotal(DeletedPrice)
{
    $('#totalPrice').text( Number($('#totalPrice').text()) - DeletedPrice )
}


function ConfirmDelete(cart_id)
{
    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
        )
        DeleteCart(cart_id)
    } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
        )
    }
    })
}


function DeleteCart(cart_id) 
{
    $.ajax({
        method : "DELETE",
        url  : `cart/${cart_id}`,
        data  : {},
        cache:false,
        success: function (data) {
            if(data)
            {
                $(`#cart${cart_id}`).slideUp(600,function () {
                    $(`#cart${cart_id}`).remove();

                });
                
                DecreaseCarttotal($(`#cart_price_${cart_id}`).text())
            }
       },
       error: function (data) {}
    })


}

Carttotal()