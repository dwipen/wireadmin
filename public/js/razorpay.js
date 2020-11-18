window.addEventListener('DOMContentLoaded', () => {

  Livewire.on('payWithRazorpay', order => {
       order.handler = function(resp){
         resp.order_id = order.id;
         Livewire.emit('showLoading');
         Livewire.emit('razorpaySuccess', resp);
       }

       var api = new Razorpay(order);

       api.on('payment.failed', function(resp){
          resp.error.order_id = order.id;
          Livewire.emit('razorpayFailed', resp.error);
          Livewire.emit('showLoading');
       });

      api.open();
  });

});
