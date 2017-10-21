<!-- Modal -->
<div class="modal fade" id="book_now_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="order-form">
            <form action="" method="post" id="contact_form">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h6>حجز طاولتك الآن</h6>
                <div class="alert alert-success send-result" role="alert">شكرا لك، يتم إرسال رسالتك.</div>
                <input type="text" name="name" id="uname" class="booking-input" placeholder="الاسم">
                <input type="text" name="number" id="unumber" class="booking-input" placeholder="رقم الهاتف">
                <input type="text" name="date" id="udate" class="booking-input date-picker2" placeholder="تاريخ الحجز">
                <select class="booking-select" name="person" id="uperson">
                    <option value="">عدد الحاضرين</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <button type="submit" class="booking-submit">احجز</button>
            </form>
            <script type="text/javascript">
                $('.date-picker2').datepicker({
                    autoclose: true,
                    todayHighlight: true
                });

                jQuery(function($){
                    $("#contact_form").validate({
                        // if valid, post data via AJAX
                        submitHandler: function(form) {
                            $.post("send.php", { uname: $("#uname").val(), unumber: $("#unumber").val(), udate: $("#udate").val(), uperson: $("#uperson").val() }, function(data) {
                                $('.send-result').html(data);
                                $('.send-result').fadeIn(1000);
                                $('.send-result').slideUp(3000);
                                $("#contact_form")[0].reset()

                            });
                        },
                        // all fields are required
                        rules: {
                            name: {
                                required: true
                            },
                            number: {
                                required: true
                            },
                            person: {
                                required: true
                            },
                            date: {
                                required: true,
                                date: true
                            }
                        },
                        messages: {
                            name : "هذه الخانة مطلوبه.",
                            number : "هذه الخانة مطلوبه.", 
                            person : "هذه الخانة مطلوبه.", 
                            date: {
                                required : "هذه الخانة مطلوبه.",
                                date  : "الرجاء إدخال التاريخ"
                            }
                        }
                    });
                });
                
                
            </script>
        </div>
      </div>
      
    </div>
  </div>
</div>