require('./bootstrap');



import Swal from 'sweetalert2'
window.Swal = Swal;

window.Toast = Swal.mixin({

    toast: true,
    position: 'bottom-start',
    showConfirmButton: false,
    timer: 1000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})


const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success m-2 deleteButton',
    cancelButton: 'btn btn-danger m-2 cancelButton'
  },
  buttonsStyling: false
})

window.swalWithBootstrapButtons = swalWithBootstrapButtons