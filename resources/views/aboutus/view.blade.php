@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('aboutus/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('aboutus?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('aboutus/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('aboutus/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
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
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
