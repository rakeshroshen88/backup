<?php include("header.php"); 

$prodid=$_REQUEST['id'];
$act=$_REQUEST['act'];
$errMsg='';
$makearr=array();
$makearr=getValuesArr( "countries", "countries_name","countries_name","", "" );

$db2=new DB();
if(isset($_POST['Submit']) and $_POST['Submit']=="Save")
	{
	$up=new UPLOAD();
$uploaddir1="../../destination/thumb/";
$uploaddir2="../../destination/medium/";
$uploaddir3="../../destination/";
$check_type="jpg|jpeg|gif|png";

if(empty($_REQUEST['cityname'])){
	$city=$_REQUEST['cityid'];
}else{
	$city=$_REQUEST['cityname'];
	
}
if($act=="edit")
	{

	if(!empty($_FILES['largeimage']['name']))
		{
		$largeimage=$up->upload_file($uploaddir3,"largeimage",true,true,0,$check_type);
				}else{
		$largeimage=$_REQUEST['image3'];
		}
	
	}else{
	
	$largeimage=$up->upload_file($uploaddir3,"largeimage",true,true,0,$check_type);
	
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////
$valid_formats = array("jpg", "png", "gif");
$max_file_size = 1024*100000; //100 kb
$path = "../../destination/"; // Upload directory
$count = 0;
 $_SESSION['picid']=uniqid();

	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
					$updatearrimg=array(
					 "item_id"=>$_SESSION["picid"],
					 "image"=>$name,
					 "userid"=>$_SESSION['SES_ADMIN_ID']
						);	
				$insidi=insertData($updatearrimg, $_TBL_DESIMAGE);
					
					
	            $count++; // Number of successfully uploaded file
	        }
	    }
	}




////////////////////////////////
$link = mysqli_connect("localhost", "iflex_iflexaccess", "pa@0lo~O=Ui3", "iflex_datahub");
$title = mysqli_real_escape_string($link, $_REQUEST['prodname']);
$prod_detail = mysqli_real_escape_string($link, $_REQUEST['prod_desc']);
$weither = mysqli_real_escape_string($link, $_REQUEST['weither']);
		
		$updatearr=array(	
					 "title"=>$title,	
					 "detail"=>$prod_detail,
					 "country"=>$_REQUEST['country'],	
					 "address"=>$_REQUEST['address'],	
					 "picture"=>$largeimage,					 
					 "place"=>$_REQUEST['place'],
					 "price"=>$_REQUEST['price'],
					  "type"=>$_REQUEST['type'],
					 "status"=>$_REQUEST['pstatus'],
					 "populor"=>$_REQUEST['populor'],
					  "rating"=>$_REQUEST['rating'],
					"weither"=>$weither,
					"cityid"=>$_REQUEST['cityname'],
					"stateid"=>$_REQUEST['state'],							
					"date"=>date('Y-m-d')
					 );
		
				//print_r($updatearr);
			if($act=="edit")
				{
					$whereClause=" id=".$_REQUEST['prodid'];
					updateData($updatearr, $_TBL_DESTINATION, $whereClause);
					$errMsg='<br><b>Update Successfully!</b><br>';
					if(isset($_SESSION["picid"]))
					{
					$db->query("update $_TBL_DESIMAGE set item_id=".$_REQUEST['id']." where item_id='".$_SESSION["picid"]."' and userid=".$_SESSION['SES_ADMIN_ID']);
					unset($_SESSION["picid"]);
					}else{
				$db->query("update $_TBL_DESIMAGE set item_id=".$_REQUEST['id']." where item_id='".$_REQUEST['id']."' and userid=".$_SESSION['SES_ADMIN_ID']);		
					}
					
				}elseif($act=="add"){
				
					$insid=insertData($updatearr, $_TBL_DESTINATION);
					$db->query("update $_TBL_DESIMAGE set item_id=".$insid." where item_id='".$_SESSION["picid"]."' and userid=".$_SESSION['SES_ADMIN_ID']);
					unset($_SESSION["picid"]);
					if($insid>0)
						{
							$errMsg='<br><b>Added Successfully!</b><br>';
							
							
							
						}else{
							$errMsg1='<br><b>Error!</b><br>';
						}
					
				}
			
			
			
			//}
	}
$db1=new DB();
if(!empty($prodid))
	{
		$sql="SELECT * FROM $_TBL_DESTINATION WHERE id=$prodid";
		$db->query($sql)or die($db->error());
		$row=$db->fetchArray();	
	}
?>
<div class="app-heading-container app-heading-bordered bottom">

                        <ul class="breadcrumb">

                            <li><a href="#">Dashboard</a></li>

                            <li><a href="#">Destination</a></li>

                            <li class="active">Add/edit</li>

                        </ul>

                    </div>

    <style>
	.form-group:last-child {
    margin-bottom: 15px !important;
}
	</style>                

                    <!-- START PAGE CONTAINER -->

    <div class="page_container">

                    <div class="container">

                                                   

                       <div class="row"> 
				<?php if(!empty($errMsg)){?>
                        <div class="col-md-12">                                          

                                    <div class="alert alert-success alert-icon-block alert-dismissible" role="alert">

                                        <div class="alert-icon">

                                            <span class="icon-checkmark-circle"></span> 

                                        </div>

                                        <strong>Success!</strong> <?=$errMsg?> 

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>

                                    </div>                                           

                                </div>

					<?php } ?>

<?php if(!empty($errMsg1)){?>
                        <div class="col-md-12">                                          

                                    <div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">

                                        <div class="alert-icon">

                                            <span class="icon-checkmark-circle"></span> 

                                        </div>

                                        <strong>Error!</strong> <?=$errMsg1?> 

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>

                                    </div>                                           

                                </div>

					<?php } ?>
                       <div  class="col-sm-12 verticle_tabs"> 

        <div class="col-xs-12">

            <!-- Tab panes -->
				<form name="frmprod"  method="post" action=""  enctype="multipart/form-data">
						
						<input type="hidden" name="prodid" value="<?=$row['id']?>" />
						<input type="hidden" name="act" value="<?=$act?>" />
						<input type="hidden" name="cityid" value="<?=$row['cityid']?>" />
						<input type="hidden" name="image3" value="<?=$row['picture']?>" />
						<input type="hidden" name="extraoption1" id="extraoption1" value="" />
						<input type="hidden" name="extraoption2" id="extraoption2" value="" />
							   <div class="tab-content">

                <div class="tab-pane active" id="home">

                    <div class="add_produ">

                         <!-- RECENT ACTIVITY -->

                                <div class="block block-condensed">

                                     <div class="app-heading app-heading-small">                                

                                        <div class="title">

                                            <h2>Basic Information</h2>

                                          

                                        </div>                                

                                    </div>

                                    <div class="block-content margin-bottom-0">

                                         
 <div class="row" >
													<div class="form-group col-md-4">
                                        <label class="col-md-12 control-label" for="name"> Country<span class="required">*</span></label>
                                        <div class="col-md-12">
										<select name="country" id="country" class="form-control state" required>
															<option value="0">Select Country</option>
															<?php $country_id=$row[ 'country']; $sqlcon="SELECT * FROM countries order by countries_id" ; $db->query($sqlcon)or die($db->error()); if($db->numRows()>0){ while($row11=$db->fetchArray()){ ?>
															<option value="<?=$row11['countries_id']?>" <?php if($row11[ 'countries_id']==$country_id){ echo "selected"; }?>>
																<?=$row11[ 'countries_name']?>
															</option>
															<?php }} ?>
														</select>
                                      
                                        </div><br>
                                    </div>
									
									
								
<script>
													jQuery(document).on("click", ".submit ", function(e){		/* var a=$('#tinymce').contents().find('body').text();	 */	var country = $("#country").val();		var state = $("#state").val();		var food_type = $("#food_type").val();	 if(country=='' || country==0){ 		$( "#country" ).focus();		alert('Select country!');		return false;	   }	   if(state=='' || state==0){ 		$( "#state" ).focus();		alert('Select State!');		return false;	   }	    if(food_type=='' || food_type==0){ 		$( "#food_type" ).focus();		alert('Select Food Type!');		return false;	   }	   	   	   var editorContent = tinyMCE.get('prod_desc').getContent();if (editorContent == ''){   $( "#prod_desc" ).focus();		alert('Fill Discription!');		return false;}var st=$('input[name="pstatus"]:checked').val();if (st == ''){  		alert('Select Status');		return false;}/* else{	 alert('hoqq');    // Editor contains a value} */	    /* if(prod_desc=='' || prod_desc==0){ 		$( "#prod_desc" ).focus();		alert('Description!');		//return false;	   } */	});
												</script>
											      <div class="form-group col-md-4" id="showstate">
													
<?php $stateid=$row['stateid'];
if(!empty($stateid)){
 $sqlstate="SELECT * FROM state WHERE country_id=".$row['country'];

$db->query($sqlstate)or die($db->error());
 if($db->numRows()>0){
 ?>
  <label class="col-md-12 control-label" for="name"> State<span class="required">*</span></label>
 <div class="col-md-12">
		 <select  name="state" id="state" class="form-control state" required>
         <option value="0">Select State</option>
		 <?php
			while($row1=$db->fetchArray()){		  
		 ?>
			<option value="<?=$row1['id']?>" <?php if($row1['id']==$stateid){ echo "selected"; }?> ><?=$row1['name']?></option>
        <?php }?>
		</select>
		</div><br/>

 <?php } } ?>
                                       
													</div>
                                                        
                                                   <div class="form-group col-md-4" id="showcity">
<?php
		$city=$row['cityid'];
  if(!empty($city)){
  $sql1="SELECT * FROM cities WHERE state_id='$stateid'";
  $db1->query($sql1)or die($db1->error());?>
		 <label class="col-md-12 control-label" for="name"> Select City</label>
          <div class="col-md-12">
		 <select  name="cityname" id="cityname"  class="form-control">
                        <option>Select city</option><?php
		while($row1=$db1->fetchArray()){
		  
		?>
		
                        <option value="<?=$row1['id']?>" <?php if($row1['id']==$city){ echo "selected"; }?>><?=$row1['name']?></option>
                  <?php }?>
				   </select>
  </div>
  <?php }?>
                                       
													</div>
                                                        
													
													</div>
										
													<div class="row" >
									<div class="form-group col-md-6">
                                        <label class="col-md-12 control-label" for="name"> Title <span class="required">*</span></label>
                                        <div class="col-md-12">
                                        <input name="prodname" type="text" class="form-control" value="<?=$row['title']?>" required/>  
                                        </div>
                                    </div>
									
									<div class="form-group col-md-6">
                                        <label class="col-md-12 control-label" for="name"> Max Price:</label>
                                        <div class="col-md-12">
                                        <input name="price" type="nubber" class="form-control" value="<?=$row['price']?>"/>  
                                        </div>
                                    </div>
									</div>
									
<br>
									<div class="row" >
									
									</div>
									<div class="row" >
									<div class="form-group col-md-6">
                                        <label class="col-md-12 control-label" for="name"> Address:</label>
                                        <div class="col-md-12">
                                        <input name="address" type="text" class="form-control" value="<?=$row['address']?>"/>  
                                        </div>
                                    </div>
									
									<div class="form-group col-md-6">
                                        <label class="col-md-12 control-label" for="name"> Landmark :</label>
                                        <div class="col-md-12">
                                         <input name="place" type="text" class="form-control" value="<?=$row['place']?>"/>
                                        </div>
                                    </div>
									</div>
								
								   	<div class="row" >
								 <div class="form-group col-md-6">
                                        <label class="col-md-12 control-label" for="name">Star Rating:(0-5):</label>
                                        <div class="col-md-12">
                        <select id="rating" name="rating" class="form-control" >
                        <option value='0' <?php if($row['rating'] == 0){ echo 'selected'; } ?>>Select Rating</option>
						<option value='1' <?php if($row['rating'] == 1){ echo 'selected'; } ?>>1 Star Rating</option>
						<option value='2' <?php if($row['rating'] == 2){ echo 'selected'; } ?>>2 Star Rating</option>
						<option value='3' <?php if($row['rating'] == 3){ echo 'selected'; } ?>>3 Star Rating</option>
						<option value='4' <?php if($row['rating'] == 4){ echo 'selected'; } ?>>4 Star Rating</option>
						<option value='5' <?php if($row['rating'] == 5){ echo 'selected'; } ?>>5 Star Rating</option>
						 </select>
                                        </div>
                                    </div>
									
									
										<div class="form-group col-md-6">
                                        <div class="col-md-12" for="price">Adventure Type</div>
                                        <div class="col-md-12">
											<select class="form-control" name="type" id="type" >
                                                <option value="Adventure Type">Adventure Type</option>
                                                <option value="Ice Adventure Vacations">Ice Adventure Vacations</option>
                                                <option value="National Park">National Park</option>
                                                <option value="Adult Vacations">Adult Vacations</option>
                                            </select>
                                        </div>
                                    </div>
								</div>
								
								
								
									
									<div class="row" >
							   <div class="form-group col-md-6">
                                        <label class="col-md-12 control-label" for="weither"> weither</label>
                                        <div class="col-md-12">
                                      <textarea name="weither" cols="50" rows="5" class="editor-base" ><?=$row['weither']?></textarea>
                                        </div>
                                    </div>
							   
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12 control-label" for="name"> Description</label>
                                        <div class="col-md-12">
                                      <textarea name="prod_desc" cols="50" rows="5" class="editor-base" ><?=$row['detail']?></textarea>
                                        </div>
                                    </div>
												
                      </div>


<div class="row">
<div class="form-group col-md-6">
        									<label class="col-md-12 control-label"> Image</label>
        									<div class="col-md-12">
                                                <input type="file" name="largeimage" id="largeimage"><span style="color:#FF0000;">(jpg, gif, png)</span>  <?php if($row['picture']){?><a href="javascript:void(0)" onclick="javascript:window.open('../hotelimage.php?img=<?=$row['picture']?>','imgid','height=510,width=660,toolbars=no,left=150,top=200');">View Image</a><?php }?>
        									 
        									</div>
        								</div>

  <div class="form-group col-md-6">
        									<label class="col-md-12 control-label"> Multiple Image:</label>
        									<div class="col-md-12">
                                                  <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" /><span style="color:#FF0000;">(jpg, gif, png)</span> 
        									 
        									</div>
        								</div>
  </div>
                                         <div class="row">
										 	<div class="form-group col-md-6">
                									<label class="col-md-12 control-label"> Status</label>
                									<div class="col-md-12">
                                                       
                    								
                    									<div class="radio">
                    										<label>
                    												<input name="pstatus" type="radio" value="1"<?php if($row['status']=="1"){echo " checked";}?>/>Active
						
                    										</label>
                    									</div>
                    									<div class="radio">
                    										<label>
                    											<input name="pstatus" type="radio" value="0"<?php if($row['status']=="0"){echo " checked";}?>/>Deactive
                    										</label>
                    									</div>
														</div> </div>
										 	<div class="form-group col-md-6">
                									<label class="col-md-12 control-label"> populor</label>
                									<div class="col-md-12">
                                                       
                    								
                    									<div class="radio">
                    										<label>
                    												<input name="populor" type="radio" value="1"<?php if($row['populor']=="1"){echo " checked";}?>/>Yes
						
                    										</label>
                    									</div>
                    									<div class="radio">
                    										<label>
                    											<input name="populor" type="radio" value="0"<?php if($row['populor']=="0"){echo " checked";}?>/>No
                    										</label>
                    									</div>
														</div> </div></div>

 <div class="row">
<div class="form-group">
<label class="col-md-2 control-label"></label>
<div class="col-md-10">                								
 <tr>
<td ></td>                                                
 <?php	if($act=="edit")
	{

		 $sql2="SELECT * FROM $_TBL_DESIMAGE WHERE item_id=".$_REQUEST['id'];
		$db2->query($sql2)or die($db2->error());
			
	
	}?>   
    <?php if($db2->numRows()>0)	
	{
		$inum=0;		
		while($imagerow=$db2->fetchArray()){
			
			if($inum>3){				
			echo $newtr='</tr><tr><td>';
			$inum=0;
			}else{$newtr='<td>';}
		
?>
 <?=$newtr?><span id='<?=$imagerow['id']?>'>
 <img src="<?=$_SITE_PATH?>destination/<?=$imagerow['image']?>" style="width:100px; height:100px;" /><a href="javascript:void(0)" id="submit1" atr="<?=$imagerow['id']?>" onClick="deleteFile('<?=$imagerow['id']?>');">Delete</a></span></td>
  
<?php $inum=($inum+1); }
 
 } 
 
?>
	

</td>
</tr>	                                     	
</div>                                      
</div>



   </div>

                                <!-- END RECENT -->

<p></p>

                    </div>

                </div>
<p></p>
             

            </div>



             <div class="block ">                            

                             

                            <p class="text-right">

                                <button class="btn btn-default btn-icon-fixed"><span class="icon-menu-circle"></span> Cancel</button>

                                <!--<button class="btn btn-success btn-icon-fixed"><span class="icon-arrow-up-circle"></span> Save</button>-->

<input name="Submit" type="submit" class="btn btn-success btn-icon-fixed" value="Save"  />
                               

                            </p>

                             

                        </div>

</form>

        </div>



       



        <div class="clearfix"></div>

    </div>                 

</div>



                        

                    </div> <!-- END PAGE CONTAINER -->

    </div> 
<!--<script type="text/javascript" src="https://orangestate.ng/js/sweetalert2@8.js"></script>                  
-->
<?php include("footer.php") ?>


<script>
jQuery(document).on("change","#country",function(){
var str=$(this).val();
	var social_AjaxURL='//iflex.ng/admin/pages/ajstate.php';
        var dataString ="cid=" + str ;
        $.ajax({
            url: social_AjaxURL,
            async: true,
            cache: false,
			type: 'POST',
			data: dataString,
            success: function(response){
            
                if(response != 0){
                   $('#showstate').html(response);
                }else{
                
                }
            },
        });
});

jQuery(document).on("change","#state",function(){
var str=$(this).val();
	var social_AjaxURL='//iflex.ng/admin/pages/ajcity.php';
        var dataString ="sid=" + str ;
        $.ajax({
            url: social_AjaxURL,
            async: true,
            cache: false,
			type: 'POST',
			data: dataString,
            success: function(response){
            
                if(response != 0){
                   $('#showcity').html(response);
                }else{
                
                }
            },
        });
});


</script>
													  

	
	
	
	
	
	

	
	
		<script language="javascript">


function deleteFile(id)
{
	var aurl="//iflex.ng/admin/pages/desdelete-file.php";
	 var dataString ="imageid=" + id ;
        $.ajax({
            url: aurl,
            async: true,
            cache: false,
			type: 'POST',
			data: dataString,
            success: function(response){
            
                if(response != 0){
                  $("#"+id).hide();	
                }else{
                
                }
            },
        });

}
	</script>


	