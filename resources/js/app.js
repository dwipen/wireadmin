require('./bootstrap');
import Swal from 'sweetalert2';
require('js-loading-overlay');
require('@ffegu/livewire-features');

window.Swal = Swal
window.Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
