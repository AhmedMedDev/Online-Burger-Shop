
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
            //Increase Counter
            $('#cart_counter').text( +$('#cart_counter').text() + 1)
            
        }else{
            alert('error')
        }
        },
    })

}


function Carttotal()
{
    var product_price = document.getElementsByClassName("productPrice");

    var product_quantity = document.getElementsByClassName("proQuan");

    var price = document.getElementById("totalPrice");

    var subTotal = document.getElementById('subTotalPrice');

    var totalPrice = 0;

    for (let index = 0; index < product_price.length ; index++) 
    {
        var proPrice = Number(product_price[index].getAttribute("price"))

        var proQuan = product_quantity[index].value

        totalPrice = totalPrice +  (proPrice * proQuan)
    }
    if(price)
    {
        price.innerHTML = '$' + totalPrice

        subTotal.innerHTML = '$' + totalPrice

        StoreTotalPrice()
    }

    return totalPrice;
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

                $('#totalPrice').text( Carttotal() - ( $(`#cart_price_${cart_id}`).text() * $(`#quan${cart_id}`).val()) )

                AddDollerSign()

                $('#subTotalPrice').text( $('#totalPrice').text() )

            }
       },
       error: function (data) {}
    })
}

function IncreaseCart(cart_id,product_price)
{
    var quantity = $(`#quan${cart_id}`).val();

    $.ajax({
        method : "PUT",
        url : `cart/${cart_id}`,
        data  : {
            quantity : Number(quantity) + 1
        },
        cache:false,
        success: function (data) {},
        error: function (data) {}
    })

    Update_Total_price('+',product_price)

}

function DecreaseCart(cart_id,product_price)
{
    var quantity = $(`#quan${cart_id}`).val();

    if (quantity == 1) return

    $.ajax({
        method : "PUT",
        url : `cart/${cart_id}`,
        data  : {
            quantity : Number(quantity) - 1
        },
        cache:false,
        success : function (data) {},
        error : function (data) {}
    })

    Update_Total_price('-',product_price)
}

function Update_Total_price(operation,product_price)
{

    if(operation == '+')
        $('#totalPrice').text( Carttotal()  + product_price )
    else
        $('#totalPrice').text( Carttotal() - product_price )

    AddDollerSign()

    $('#subTotalPrice').text( $('#totalPrice').text() )

    StoreTotalPrice()
}

function AddDollerSign()
{
    document.getElementById('totalPrice').innerHTML = `$${document.getElementById('totalPrice').innerHTML}`
}

function StoreTotalPrice()
{
    var Total_Price = $(`#totalPrice`).text();

    localStorage.setItem("total_price", Total_Price )
}

if(document.getElementsByClassName('total_price')[0])
{
    document.getElementsByClassName('total_price')[0].innerHTML = localStorage.getItem('total_price')

    document.getElementsByClassName('total_price')[1].innerHTML = localStorage.getItem('total_price')
    
    document.getElementsByClassName('total_price')[2].setAttribute('value',localStorage.getItem('total_price'))
}

function AddToFavorite(product_id,user_id)
{
    $.ajax({
        method : "POST",
        url  : "favorite",
        data  : {product_id : product_id, user_id : user_id },
        cache:false,
        success: function (data) {
        if(data.message == 'success')
        {
            Toast.fire({
                icon: 'success',
                title: 'Has Been Added To The Favorite'
            })
            
        }else{
            alert('error')
        }
        },
    })

}

function DeleteFavorite(cart_id) 
{
    $.ajax({
        method : "DELETE",
        url  : `favorite/${cart_id}`,
        data  : {},
        cache:false,
        success: function (data) {
            if(data)
            {
                $(`#favorite${cart_id}`).fadeOut(600,function () {
                    $(`#favorite${cart_id}`).remove();
                });

            }
       },
       error: function (data) {}
    })
}

function AddAddreass()
{
    $(this).html('Sending..');

    var formData = new FormData($('#AddAddress')[0]);

     $.ajax({
       type: "POST",
       url: "address",
       data: formData,
       processData:false,
       contentType : false,
       cache:false,
       success: function (data) {

           if(data.status === true)
           {
                $('#AddAddress').trigger("reset");

                PushNewAddress(data.data)

           }

       },
       error: function (data) {
           console.log('Error:', data);
           $(this).html('Error');
       }
   });

}

function PushNewAddress(data)
{

    $('.address .AddressTableBody').append(`
            <div class="col-sm-6  " id="address${data.id}">
                <div class="card">
                    <div class="card-header card-header-text card-header-primary">
                        <div class="card-text">
                        <h4 class="card-title">${data.name}</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form> 
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Country / Region *</label>
                                        <input type="text" class="form-control" id="country" name="country" value="${data.country}">
                                    </div>
            
                                    <div class="form-group">
                                        <label class="bmd-label-static">House Number and Street Name *</label>
                                        <input type="text" class="form-control" id="street" name="street" value="${data.street}">
                                    </div>
            
                                    <div class="form-group">
                                        <label class="bmd-label-static">Town / City *</label>
                                        <input type="text" class="form-control" id="city" name="city" value="${data.city}">
                                    </div>
            
                                    <div class="form-group">
                                        <label class="bmd-label-static">Enter Postcode of Country *</label>
                                        <input type="text" class="form-control" id="postcode" name="postcode" value="${data.postcode}">
                                    </div>
            
                                    <div class="form-group">
                                        <label class="bmd-label-static">Enter Your Phone *</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="${data.phone}">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Order notes (optional)</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="order_notes" value="${data.order_notes}"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-success pull-right ml-2"> Update </button>
                            <button type="submit" class="btn btn-danger pull-right"> Delete </button>
                            <div class="clearfix"></div>

                        </form>
                        </div>
                </div>
            </div>
    `)

}
