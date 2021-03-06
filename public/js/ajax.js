
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
            if(data.status)
            {
                Toast.fire({
                    icon: 'success',
                    title: 'Has Been Added To The Cart'
                })
                //Increase Counter
                $('#cart_counter').text( +$('#cart_counter').text() + 1)
                
            }
        },
        error: function (data) {
            console.log('Error:', data);
            Swal.fire(
            'Oops...',
            'Something went wrong!',
            'error'
            )
        }
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
        success: function (data) {
            if (data.status)
            {
                Update_Total_price('+',product_price)
            }
        },
        error: function (data) {}
    })


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
        success : function (data) {
            if (data.status)
            {
                Update_Total_price('-',product_price)
            }
        },
        error : function (data) {}
    })
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
    
    document.getElementsByClassName('total_price')[2].setAttribute('value',localStorage.getItem('total_price').substring(1))
}

function AddToFavorite(product_id,user_id)
{
    $.ajax({
        method : "POST",
        url  : "favorite",
        data  : {product_id : product_id, user_id : user_id },
        cache:false,
        success: function (data) {
            if(data.status)
            {
                Toast.fire({
                    icon: 'success',
                    title: 'Has Been Added To The Favorite'
                })
                
            }
        },
        error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
        }
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
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
                $(`#favorite${cart_id}`).fadeOut(600,function () {
                    $(`#favorite${cart_id}`).remove();
                });

            }
       },
       error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
       }
    })
}

function AddAddreass()
{
    var formData = new FormData($('#AddAddress')[0]);

     $.ajax({
       type: "POST",
       url: "address",
       data: formData,
       processData:false,
       contentType : false,
       cache:false,
       success: function (data) {

           if(data.status)
           {
                Toast.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })

                $('#AddAddress').trigger("reset");

                PushNewAddress(data.data)
           }

       },
       error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
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
                        <form id="formAddress${data.id}" class="formAddress"> 
                            <div class="row justify-content-center">
                                <div class="col-md-10">

                                    <div class="form-group">
                                        <label class="bmd-label-static">House Number and Street Name *</label>
                                        <input type="text" class="form-control "  name="street" value="${data.country}" disabled>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="bmd-label-static">Town / City *</label>
                                        <input type="text" class="form-control "  name="city" value="${data.street}" disabled>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="bmd-label-static">Enter Postcode of Country *</label>
                                        <input type="text" class="form-control "  name="postcode" value="${data.city}" disabled>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="bmd-label-static">Enter Your Phone *</label>
                                        <input type="text" class="form-control "  name="phone" value="${data.postcode}" disabled>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Order notes (optional)</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="order_notes" value="${data.phone}"></textarea>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="clearfix"></div>

                        </form>
                        <button type="submit" class="btn btn-default pull-right ml-2 UpdateAddress hidden" id="UpdateAddress${data.id}" onclick="UpdateAddress(${data.id})"> Update </button>
                        <button type="submit" class="btn btn-info pull-right ml-2 EditAddress" id="EditAddress${data.id}" address-id="${data.id}"> Edit </button>
                        <button type="submit" class="btn btn-danger pull-right" onclick="ConfirmDeleteAddress(${data.id})"> Delete </button>
                        
                        </div>
                </div>
            </div>
    `)

}

function ConfirmDeleteAddress(address_id)
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
        DeleteAddress(address_id)
    } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
        )
    }
    })
}


function DeleteAddress(address_id)
{
    $.ajax({
        method : "DELETE",
        url  : `address/${address_id}`,
        data  : {},
        cache:false,
        success: function (data) {
            if(data)
            {
                $(`#address${address_id}`).fadeOut(600,function () {
                    $(`#address${address_id}`).remove();
                });

            }
       },
       error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
       }
    })

}

$('.EditAddress').on("click",function(){

    $(this).siblings('.UpdateAddress').show()

    $(this).hide()

    $(`#formAddress${this.getAttribute("address-id")} input`).prop("disabled", false);
})


function UpdateAddress(address_id)
{
    var formData = new FormData($(`#formAddress${address_id}`)[0]);

     $.ajax({
         type: "PATCH",
         url: `address/${address_id}`,
         data: {
             name : formData.get('name'),
             country : formData.get('country'),
             street : formData.get('street'),
             city : formData.get('city'),
             postcode : formData.get('postcode'),
             phone : formData.get('phone'),
             order_notes : formData.get('order_notes'),
         },
         cache:false,
         success: function (data) {

             if(data.status)
             {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
                $(`#formAddress${address_id} input`).prop("disabled", true)
                $(`#address${address_id} .UpdateAddress`).hide()
                $(`#address${address_id} .EditAddress`).show()
             }

         },
         error: function (data) {
             console.log('Error:', data);
             Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
              )
            //  $(`#formAddress${address_id}`).next("#UpdateAddress").html('Error');
         }
     });

    
}


$('.formAddress input').on("change",function(){
    // var formData = new FormData( $( $(this).parents(".formAddress") )[0] )
     $(this).parents(".formAddress").next("#UpdateAddress").removeClass("btn-default").addClass("btn-success")
})


  function UpdateProfile(user_id)
{
    var formData = new FormData( $(`#profileEditForm`)[0] );

     $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: `http://127.0.0.1:8000/profile/${user_id}`,
        data: formData,
        processData: false,
        contentType: false,
        cache:false,
        success: function (data) {

            if(data.status)
            {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
            }

        },
        error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
        }
     });

    
}

function DeleteUser(user_id)
{
    $.ajax({
        method : "DELETE",
        url  : `user/${user_id}`,
        data  : {},
        cache:false,
        success: function (data) {
            if(data)
            {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
                $(`#user${user_id}`).fadeOut(600,function () {
                    $(`#user${user_id}`).remove();
                });

            }
       },
       error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
       }
    })
}

function AddProduct()
{
    var formData = new FormData($('#addProductForm')[0]);

    $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: `http://127.0.0.1:8000/product`,
        data: formData,
        processData:false,
        contentType : false,
        cache:false,
        success: function (data) {
 
            if(data.status)
            {
                 Toast.fire({
                     position: 'top-end',
                     icon: 'success',
                     title: 'Your work has been saved',
                     showConfirmButton: false,
                     timer: 1500
                 })
 
                 $('#addProductForm').trigger("reset");
 
            }
 
        },
        error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
        }
    });
}


function AddOffer()
{
    var formData = new FormData($('#makeOfferForm')[0]);
    
    var percent = document.getElementsByClassName('percentageInput')[0].value
    
    formData.set('percentage',percent);

    $.ajax({
        type: "POST",
        url: `http://127.0.0.1:8000/offer`,
        data: formData,
        processData:false,
        contentType : false,
        cache:false,    
        success: function (data) {
 
            if(data.status)
            {
                 Toast.fire({
                     position: 'top-end',
                     icon: 'success',
                     title: 'Your work has been saved',
                     showConfirmButton: false,
                     timer: 1500
                 })
 
                 $('#makeOfferForm').trigger("reset");
            }
        },
        error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
        }
    });

}
