<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('About Us', (isset($fields['about_us']['language'])? $fields['about_us']['language'] : array())) }}</td>
						<td>{{ $row->about_us}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mission Image', (isset($fields['mission_image']['language'])? $fields['mission_image']['language'] : array())) }}</td>
						<td>{{ $row->mission_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mission Details', (isset($fields['mission_details']['language'])? $fields['mission_details']['language'] : array())) }}</td>
						<td>{{ $row->mission_details}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vision Image', (isset($fields['vision_image']['language'])? $fields['vision_image']['language'] : array())) }}</td>
						<td>{{ $row->vision_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vision Details', (isset($fields['vision_details']['language'])? $fields['vision_details']['language'] : array())) }}</td>
						<td>{{ $row->vision_details}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Value Image', (isset($fields['value_image']['language'])? $fields['value_image']['language'] : array())) }}</td>
						<td>{{ $row->value_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Value Details', (isset($fields['value_details']['language'])? $fields['value_details']['language'] : array())) }}</td>
						<td>{{ $row->value_details}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Brand Image', (isset($fields['brand_image']['language'])? $fields['brand_image']['language'] : array())) }}</td>
						<td>{{ $row->brand_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Brand Details', (isset($fields['brand_details']['language'])? $fields['brand_details']['language'] : array())) }}</td>
						<td>{{ $row->brand_details}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image', (isset($fields['image']['language'])? $fields['image']['language'] : array())) }}</td>
						<td>{{ $row->image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:status:id:title') }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	