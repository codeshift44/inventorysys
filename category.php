<?php include("inc/header.php");?>
<?php include("inc/config.php");?>
<?php include("inc/topnav.php");?>
<?php include("inc/sidebar_layout.php");?>


<div id="main_content">
  <main>
  <div class="container-fluid">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item active" aria-current="page">
      <div class="h4">Category</div>
    </li>
  </ol>
</nav>
   
    <div class="row my-3">
    <div class=" col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header">Add category</div>
          <div class="card-body">
          <form id="cate_form" method="POST">
          <div class="row">
          <div class="col">
            <input type="text"  name="cate_name" class="form-control" autocomplete="off" placeholder="category">
          </div>
          <div class="col">
             <input type="text" name="cate_status" class="form-control" autocomplete="off" placeholder="status">
          </div>
        </div>
          <button class="btn btn-primary my-3">ADD</button>
          <div class="text-center my-2">
            <div class="text-danger" id="error-message"></div>
          <div class="text-success" id="success-message"></div>
          </div>
        </form>
          </div>
        </div>
      </div>
      
        <div class=" col-lg-12 col-md-12 my-2">
        <div class="card">
          <div class="card-header">Latest category</div>
          <div class="card-body">
            <div id="show_data"></div>
            
            <div class="text-center">
              
            </div>  
          </div>
        
      </div>
      </div>
      
    </div>
  </div>
  </main>
</div>

<div class="modal" tabindex="-1" id="catemodal'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" id="close-btn">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    
  function loadData(){
      $.ajax({
      url: "show_category.php",
      type: "POST",
     
      cache : false,
      success: function(data){
        $("#show_data").html(data);
      }
    });
    }
    loadData();
   
    
  

  $("#cate_form").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: "add_category.php",
      type: "POST",
      data: formData,
      contentType: false,
      processData : false,
      success: function(data){
         
        if(data == 3){
          $("#error-message").html("fill all fields").slideDown();
          $("#success-message").slideUp();
        }else if(data == 2){
          $("#error-message").html("category all ready exits").slideDown();
          $("#success-message").slideUp();
        }else if(data == 0){
          loadData();
          $("#success-message").html("category added successful").slideDown();
          $("#error-message").hide();
        }else{
          $("#error-message").html("somthing went wrong please retry");
          $("#success-message").hide();
        }
        
        

      
        
      }


       

    });

  });

  // delete 

  $(document).on("click",".delete_btn", function(){
      if(confirm("Do you really want to delete this record ?")){
        var studentId = $(this).data("id");
        var element = this;

        $.ajax({
          url: "cate_delete.php",
          type : "POST",
          data : {id : studentId},
          success : function(data){
            loadData();
              
          }
        });
      }
    });

      //Show Modal Box
      $(document).on("click",".edit_btn", function(){
      $(".modal").show();
      var studentId = $(this).data("eid");

      // $.ajax({
      //   url: "load-update-form.php",
      //   type: "POST",
      //   data: {id: studentId },
      //   success: function(data) {
      //     $("#modal-form table").html(data);
      //   }
      // })
    });

    //Hide Modal Box
    $("#close-btn").on("click",function(){
      $(".modal").hide();
    });


 
});
</script>
<script src="js/bootstrap.bundle.min.js" ></script>
<script src="js/main.js"></script>
</body>
</html>