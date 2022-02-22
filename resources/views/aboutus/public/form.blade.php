

		 {!! Form::open(array('url'=>'aboutus', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> About Us</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="About Us" class=" control-label col-md-4 text-left"> About Us </label>
										<div class="col-md-6">
										  <textarea name='about_us' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['about_us'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mission Image" class=" control-label col-md-4 text-left"> Mission Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="mission_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="mission_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["mission_image"],"/uploads/images/about") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mission Details" class=" control-label col-md-4 text-left"> Mission Details </label>
										<div class="col-md-6">
										  <textarea name='mission_details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['mission_details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vision Image" class=" control-label col-md-4 text-left"> Vision Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="vision_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="vision_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["vision_image"],"/uploads/images/about") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vision Details" class=" control-label col-md-4 text-left"> Vision Details </label>
										<div class="col-md-6">
										  <textarea name='vision_details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['vision_details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Value Image" class=" control-label col-md-4 text-left"> Value Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="value_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="value_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["value_image"],"/uploads/images/about") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Value Details" class=" control-label col-md-4 text-left"> Value Details </label>
										<div class="col-md-6">
										  <textarea name='value_details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['value_details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Brand Image" class=" control-label col-md-4 text-left"> Brand Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="brand_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="brand_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["brand_image"],"/uploads/images/about") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Brand Details" class=" control-label col-md-4 text-left"> Brand Details </label>
										<div class="col-md-6">
										  <textarea name='brand_details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['brand_details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["image"],"/uploads/images/about") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  <select name='status' rows='5' id='status' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#status").jCombo("{!! url('aboutus/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
