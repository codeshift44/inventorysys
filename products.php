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
      <div class="h4">  Product</div>
    </li>
  </ol>
</nav>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Product
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <input type="text" class="form-control" name="product_name" placeholder="product name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="product_id" placeholder="product name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="product_cate" placeholder="product name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="product_name" placeholder="product name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="product_name" placeholder="product name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="product_name" placeholder="product name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="product_name" placeholder="product name" autocomplete="off" required>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

   
    <div class="row my-3">
    
    
        <div class=" col-lg-12 col-md-12 my-2">
        <div class="card">
          <div class="card-header">products

          </div>
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



<!-- <script src="js/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script type="text/javascript">

//   $(document).ready(function(){
    
//   function loadData(){
//       $.ajax({
//       url: "show_subcategory.php",
//       type: "POST",
     
//       cache : false,
//       success: function(data){
//         $("#show_data").html(data);
//       }
//     });
//     }
//     loadData();
   
    
  

//   $("#subcate_form").on("submit", function(e){
//     e.preventDefault();
//     var formData = new FormData(this);

//     $.ajax({
//       url: "add_subcategory.php",
//       type: "POST",
//       data: formData,
//       contentType: false,
//       processData : false,
//       success: function(data){
         
//         if(data == 3){
//           $("#error-message").html("fill all fields").slideDown();
//           $("#success-message").slideUp();
//         }else if(data == 2){
//           $("#error-message").html("subcategory all ready exits").slideDown();
//           $("#success-message").slideUp();
//         }else if(data == 0){
//           loadData();
//           $("#success-message").html("subcategory added successful").slideDown();
//           $("#error-message").hide();
//         }else{
//           $("#error-message").html("somthing went wrong please retry");
//           $("#success-message").hide();
//         }
        
//         $("#subcate_form").trigger("reset");
//         $("#success-message").hide();
//         $("#error-message").hide();


      
        
//       }


       

//     });

//   });

//   // delete 

//   $(document).on("click",".delete_btn", function(){
//       if(confirm("Do you really want to delete this record ?")){
//         var studentId = $(this).data("id");
//         var element = this;

//         $.ajax({
//           url: "subcategory_delete.php",
//           type : "POST",
//           data : {id : studentId},
//           success : function(data){
//             loadData();
              
//           }
//         });
//       }
//     });

//       //Show Modal Box
//       $(document).on("click",".edit_btn", function(){
//       $(".modal").slideDown();
//       var studentId = $(this).data("eid");

//        $.ajax({
//         url: "cate_update.php",
//         type: "POST",
//          data: {id: studentId },
//          success: function(data) {
//           $(".modal table").html(data);
//         }
//       })
//     });

//     //Hide Modal Box
//     $("#close-btn").on("click", function(){
//       $(".modal").slideUp();
//     });

//     $(document).on("click","#edit-submit", function(){
//         var cateId = $("#edit-id").val();
//         var name = $("#edit-name").val();
//         var status = $("#edit-status").val();

//         $.ajax({
//           url: "cate_update.config.php",
//           type : "POST",
//           data : {id: cateId, name: name, cateStatus: status},
//           success: function(data) {
//             if(data == 1){
//               $(".modal").hide();
              
//               loadData();
//             }
//           }
//         })
//       });


 
// });
</script>

<script src="js/bootstrap.bundle.min.js"></script>



</body>
</html>