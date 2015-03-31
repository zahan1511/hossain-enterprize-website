@extends('layout')
@section('extralink')
@stop
@section('content')
<section class="panel statement light" style="width:100%; padding:0px; margin:0 0 0;">
	<div class="content">

	<h1>Products</h1>
         <p>{{$id}}</p>
<div class="browser-window" style="width:90%;height:auto">
	<div class="window-content" style="width:100% ; display:inline-block;margin:0 auto;height:auto">
	<ul class="nav nav-tabs">
	<li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle" class="active">Catalog <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Inbox</a></li>
            <li><a href="#">Drafts</a></li>
            <li><a href="#">Sent Items</a></li>
            <li class="divider"></li>
            <li><a href="#">Trash</a></li>
        </ul>
    </li>
    <li ><a href="#">About</a></li>
    <li><a href="#">Service</a></li>
    
</ul>



<div class="browser-window" style="width:100%">
			<div class="top-bar">
				<div class="circles">
					<div class="circle circle-red"></div>
					<div class="circle circle-yellow"></div>
					<div class="circle circle-green"></div>
				</div>
			</div>	

			<div class="window-content" style="width:100% ; display:block;margin:0 auto;">
					
					


           			<table class="table table-bordered " style="width:90%; ">
       
        <tbody>
            <tr>
     
                <td>@foreach($aboutgoods as $aboutgoods)

					<p class="lead">{{$aboutgoods->about}}</p>

           			@endforeach</td>
            </tr>
         
        
       
        </tbody>
    </table>

           			<h2 style="text-align:center">Bangladesh {{$id}} at a glance</h2>


           			<table class="table table-bordered " style="width:90%; ">
        <thead >
            <tr>
                <th style="text-align:center;">Topic</th>
                <th style="text-align:center;">Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Payment of L/C </td>
                <td>At sight as per negotiating bank's instruction.</td>
            </tr>
            <tr>
                <td>L/C Available with/by </td>
                <td>Credit is available with any bank in Bangladesh by negotiation at sight.</td>
            </tr>
            <tr>
                <td>Type of Documentary Credit</td>
                <td>Irrevocable and transferable.</td>
            </tr>
            <tr>
                <td>Partial Shipment and Trans Shipment</td>
                <td>Allowed</td>
            </tr>
            <tr>
                <td>B/L Clause</td>
                <td>Full set clean on board original bill of lading issued unto the order of negotiating bank and endorsed by the same bank in favor of L/C opening bank</td>
            </tr>
            <tr>
                <td>Presentation of Documents</td>
                <td>21 days from the date of bill of lading</td>
            </tr>
            <tr>
                <td>Presentation of Documents</td>
                <td>L/C must be subject to UCPDC 1993 revision ICC publication no 500</td>
            </tr>
            <tr>
                <td>T/T PAYMENT </td>
                <td> 70% IN ADVANCE AND BALANCE 30% AFTER RECEIVING FAX OR EMAIL COPY OF B/L.</td>
            </tr>
        
       
        </tbody>
    </table>

			</div>
		


		</div>
	
	</div>

















	</div>
</section>
@stop
