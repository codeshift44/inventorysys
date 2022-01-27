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
      <div class="h4"> Sub Category</div>
    </li>
  </ol>
</nav>



   
    <div class="row my-3">
    <div class=" col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header">Add Sub category</div>
          <div class="card-body">
          <form id="subcate_form" method="POST">
          <div class="row">
          <div class="col">
            <input type="text"  name="subcate_name" class="form-control" autocomplete="off" placeholder="sub category">
          </div>
          <div class="col">
             <input type="text" name="subcate_status" class="form-control" autocomplete="off" placeholder="status">
          </div>
          <div class="col">
            <select name="category" id="" class="form-control">
                <?php 
                $sql = "SELECT * FROM invensys_category";
                $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
                if(mysqli_num_rows($result) > 0 ){
                   
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <option value="<?php echo $row['cate_name'];?>"><?php echo $row['cate_name'];?></option>


                    <?php
                                
                  }
                }
                
                ?>
                
            </select>

        </div>
            </div>
         
         <div class="row">
         <div class="col">
         <div class="text-center my-2">
          <button class="btn btn-primary my-3">ADD</button>
            <div class="text-danger" id="error-message"></div>
          <div class="text-success" id="success-message"></div>
          </div>
         </div>
         </div>
         
          
          
        </form>
          </div>
        </div>
      </div>
    
        <div class=" col-lg-12 col-md-12 my-2">
        <div class="card">
          <div class="card-header">Latest  Sub category</div>
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



<script src="js/jquery.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    
  function loadData(){
      $.ajax({
      url: "show_subcategory.php",
      type: "POST",
     
      cache : false,
      success: function(data){
        $("#show_data").html(data);
      }
    });
    }
    loadData();
   
    
  

  $("#subcate_form").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: "add_subcategory.php",
      type: "POST",
      data: formData,
      contentType: false,
      processData : false,
      success: function(data){
         
        if(data == 3){
          $("#error-message").html("fill all fields").slideDown();
          $("#success-message").slideUp();
        }else if(data == 2){
          $("#error-message").html("subcategory all ready exits").slideDown();
          $("#success-message").slideUp();
        }else if(data == 0){
          loadData();
          $("#success-message").html("subcategory added successful").slideDown();
          $("#error-message").hide();
        }else{
          $("#error-message").html("somthing went wrong please retry");
          $("#success-message").hide();
        }
        
        $("#subcate_form").trigger("reset");
        $("#success-message").hide();
        $("#error-message").hide();


      
        
      }


       

    });

  });

  // delete 

  $(document).on("click",".delete_btn", function(){
      if(confirm("Do you really want to delete this record ?")){
        var studentId = $(this).data("id");
        var element = this;

        $.ajax({
          url: "subcategory_delete.php",
          type : "POST",
          data : {id : studentId},
          success : function(data){
            loadData();
              
          }
        });
      }
    });

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


 
});
</script>

<script src="js/bootstrap.bundle.min.js"></script>



</body>
</html>