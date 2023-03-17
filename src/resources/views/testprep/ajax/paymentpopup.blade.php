@php
    //dd($course_details);
    $totlaemi = 4;
    $emi  = $course_details->price / 4;
    $course_alias = "'".$course_details->alias."'";
    $courseDuration="'".$course_details->duration."'";

@endphp
<!-- Payment Success  Modal -->
<div id="paymentsuccess" class="modal fade  rgs-modal thankyouform">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
      </div>
      <div class="modal-body ">
        <form>
      
      
        <div class="bk-th-img"><img src="https://www.masterprep.in/img/confirmed-booking.gif" alt="Thank You"/> </div>
   <div class="pop-3-title text-center">Booking Confirmed!</div>
   
   
        <div class="confirm-tiem text-center  mb-3" ></div>  
      
    
      <div class="bk-thnk-desc">Our Advisor Will Contact you Shortly!</div>

        </form>
      </div>
    </div>
  </div>
</div>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="true">Full Payment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-emi-tab" data-bs-toggle="pill" data-bs-target="#pills-emi" type="button" role="tab" aria-controls="pills-emi" aria-selected="false">EMI </button>
                    </li>
            
                </ul>
    <div class="tab-content" id="pills-tabContent"><div class="tab-pane fade show active" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
  
  <div class="mp-payment col-md-9 mx-auto">
    <table class="table border-0">

  <tbody>
    <tr class="border-0">
      <td class="border-0  py-1">Course Fee</td>
      <th class="border-0  py-1">{{ $course_details->price }} </th>
      
    </tr>
    
     <tr class="border-top border-bottom">
      <th class="text-danger">Total</th>
      <th class="text-danger">{{ $course_details->price }}</th>
      
    </tr>
 
  </tbody>
</table>

 <button class="btn btn-success course-pay-now" onclick = "coursepaymet({{ $course_details->id }} , {{ $course_details->price }} , {{ $courseDuration }}, {{ $course_alias }})">Pay Now</button>
      
  </div>
  
  </div>
  <div class="tab-pane fade" id="pills-emi" role="tabpanel" aria-labelledby="pills-emi-tab">
      <div class="mp-payment col-md-9 mx-auto">
    <table class="table border-0">

  <tbody>
    <tr class="border-0">
      <td class="border-0  py-1">1st EMI </td>
      <th class="border-0  py-1">{{ $emi }}</th>
      
    </tr>
        <tr class="border-0">
      <td class="border-0  py-1">2nd EMI </td>
      <th class="border-0  py-1">{{ $emi }}</th>
      
    </tr>
    
        <tr class="border-0">
      <td class="border-0  py-1">3rd EMI </td>
      <th class="border-0  py-1">{{ $emi }}</th>
      
    </tr>
    
        <tr class="border-0">
      <td class="border-0  py-1">4th EMI </td>
      <th class="border-0  py-1">{{ $emi }}</th>
      
    </tr>
    
     <tr class="border-top border-bottom">
      <th class="text-danger">Total</th>
      <th class="text-danger">{{ $course_details->price }}</th>
      
    </tr>
 
  </tbody>
</table>



 <button  class="btn btn-success course-pay-now" onclick = "coursepaymet({{ $course_details->id }} ,  {{ $emi }}  , {{ $courseDuration }} , {{ $course_alias }})">Pay Now</button>
      
  </div>
      
      
  </div></div>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script type="text/javascript">
    
    function coursepaymet(course_id, price , duration , course_alias){
        
        // console.log(course_id);
       // var price = price * 100;
       //,'.$course[0]['alias'].',  '.$course[0]['duration'].'
        //  console.log('kfkdfjed');
        //  alert('abc');
        var options = {
        //   "key": "rzp_test_lmaPSOblfsFcqA",
        //   "key": "rzp_live_0m7MLEHPz6urqk",
           "key": "rzp_test_ROtj7x2XIrE4wU",
          
          "amount": price+'00', // 2000 paise = INR 20
        //   "name": "Masterprep",
          "name": "Canam Consultants Limited",
          "description": "IELTS Coaching Institute",
        //   "image": "https://demo.masterprep.in/prep/img/Masterprep Logo.png",
          "image": "https://demo.masterprep.in/prep/img/canam.jpg",
          "handler": function (response){
            console.log(response);
            $.ajaxSetup({
              headers: {
             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
          });
            $.ajax({
              //url: 'ajax/ajax.php',
              url: "{{ route('testprep.ajax.course_payment') }}",
              type: 'post',
              dataType: 'json',
              data: {
              razorpay_payment_id: response.razorpay_payment_id , coursefee : price ,cid : course_id , paid_amnt: 1 ,course_duration : duration
              }, 
              success: function (response) {
                console.log(response);
              //window.location.href = "payment-complete.php";
              
             
              $("#confirm-seat").modal("hide");
            $("#paymentsuccess").modal("show");
              }
              });

                  }
          } 
     console.log(options);
         
         var rzp1 = new Razorpay(options);
           rzp1.open(); 
         
         
    }
  </script>

