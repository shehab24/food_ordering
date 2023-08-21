<div class="footer-area black-bg-2 pt-70">
            <div class="footer-bottom-area border-top-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <div class="copyright">
                                <p>Copyright © <a href="#">Billy.</a> . All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5">
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                    <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/sweetalert.min.js"></script>
<?php
if(isset($_SESSION["login"])){ ?>
 <script>
     function show_all_cart(){
        jQuery.ajax({
		url:"show_all_cart.php",
        type:'post',
		success:function(result){
            var data=jQuery.parseJSON(result);
            // $("#cart_count").html(data.total_cart);
            // $("#bill_box").html("৳"+data.total_bil);
            // $("#show_total").html("৳"+data.total_bil);
          
			if(data.total_cart==0){
                swal("Sorry", "Your cart is empty", "warning");
                $("#cart_content").addClass("d-none");
               
              
			}else{
                $("#cart_content").removeClass("d-none");
            }
		}
	});
     }
      
      var cart_count=$("#cart_count").html();
 function cart_func(id){
     var qty=$("#qty_select_"+id).val();
     
    
    
if(qty=="Qty"){
    swal("Sorry!", "Please select Quantity", "warning");
}else{
	jQuery.ajax({
		url:"cart_core.php",
		type:'post',
		data:jQuery('#frmProfile_'+id).serialize(),
		success:function(result){
            var data=jQuery.parseJSON(result);
            $("#cart_count").html(data.total_cart);
            $("#bill_box").html("৳"+data.total_bil);
            $("#show_total").html("৳"+data.total_bil);
           var html='<li class="single-shopping-cart" id="cart_list_'+data.dish_id+'"><div class="shopping-cart-img"><a href="#"><img style="width:82px;" alt="" src="admin/upload/'+data.image_name+'"></a> </div> <div class="shopping-cart-title"><h4><a href="#">'+data.dish_name+'</a></h4> <h6>Qty:'+data.qty+'</h6><span >৳'+data.subtotal+'</span></div><div class="shopping-cart-delete" onclick="delete_cart('+data.dish_id+')" ><a href="#"><i class="ion ion-close"></i></a></div></li>';
           $("#append").append(html);
			if(data.status=='success'){
				swal("Success Message", data.msg, "success");
			}else if(data.status=="error"){
                swal("Error", data.msg, "error");
            }else if(data.status=="info"){
                swal("Sorry", data.msg, "info");
            }
		}
	});

}

 }
 
 function delete_cart(id){
	jQuery.ajax({
		url:"cart_delete_core.php",
		type:'post',
		data:'dish_id='+id,
		success:function(result){
            var data=jQuery.parseJSON(result);
          if(data.status=="success"){
              $("#cart_list_"+id).remove();
              $("#view_cart_list_"+id).remove();
              $("#cart_count").html(data.total_cart);
            $("#bill_box").html("৳"+data.total_bil);
            $("#show_total").html("৳"+data.total_bil);
          }
        }
 })
 }

function des(id){
    var val=$("#up_val_"+id).val();
    var dish_price=$("#dish_price_"+id).val();
    var type="minus";
	jQuery.ajax({
		url:'cart_update.php',
		type:'post',
		data:'value='+val+'&dish_id='+id+'&type='+type+'&dish_price='+dish_price,
        success:function(result){
            var data=jQuery.parseJSON(result);
            if(data.status=="success"){
                $("#subtotal_"+id).html("৳"+data.subtotal);
                $("#bill_box").html("৳"+data.total_bil);
            $("#show_total").html("৳"+data.total_bil);
                swal("Congratulation!", "Cart updated seccessfully", "success");
            }

        }
    });

}
function asc(id){
    var val=$("#up_val_"+id).val();
    var dish_price=$("#dish_price_"+id).val();
    var type="plus";
	jQuery.ajax({
		url:'cart_update.php',
		type:'post',
		data:'value='+val+'&dish_id='+id+'&type='+type+'&dish_price='+dish_price,
        success:function(result){
            var data=jQuery.parseJSON(result);
            if(data.status=="success"){
                $("#subtotal_"+id).html("৳"+data.subtotal);
                $("#bill_box").html("৳"+data.total_bil);
            $("#show_total").html("৳"+data.total_bil);
                swal("Congratulation!", "Cart updated seccessfully", "success");
            }
   
        }
    });
}

function delete_order_item(id){
var sure= confirm("Are you sure?");
var order_id=$("#delete_order_item_"+id).val();
var type="order_item";
if(sure==true){
    jQuery.ajax({
		url:'delete_order_item.php',
		type:'post',
		data:'value='+order_id+'&type='+type,
        success:function(result){
            if(result=="success"){
                $("#order_row_"+id).remove();

            }
   
        }
    });
}

return sure;
}

 </script>

 
<?php }else{  ?>

<script>
      function show_all_cart(){
        swal("Sorry!", "You have to login first!", "error");
        $("#cart_content").addClass("d-none");
     }
function cart_func(){
   swal("Sorry!", "You can,t add ,You have to login first!", "error");
}
        
</script>


<?php  }

?>

    </body>

<!-- Mirrored from demo.hasthemes.com/billy-preview/billy/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 19:15:26 GMT -->
</html>
