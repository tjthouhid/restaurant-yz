<!-- Modal -->
<div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
       
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
  	jQuery(function($){
  		var ifrm='<iframe width="560" height="315" src="https://www.youtube.com/embed/t1TFxLFUi_0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
  		$('#video_modal').on('shown.bs.modal', function (e) {
  		  var dis=$(this);
  		  dis.find(".modal-body").html(ifrm);
  		})
  		$('#video_modal').on('hidden.bs.modal', function () {
  		    var dis=$(this);
  		    dis.find(".modal-body").html("");
  		});  
  	})
  	
  </script>
</div>