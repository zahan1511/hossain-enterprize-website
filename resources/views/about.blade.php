@extends('layout')
@section('extralink')
@stop
@section('content')
<section class="panel statement light">
	<div class="content">
		<h1>Hossain Enterprize</h1>
		<p> About Us</p>
		<div class="browser-window">
			<div class="top-bar">
				<div class="circles">
					<div class="circle circle-red"></div>
					<div class="circle circle-yellow"></div>
					<div class="circle circle-green"></div>
				</div>
			</div>	

			<div class="window-content">
				<div >
					<p class="lead">Hossain Enterprise is a Jute product Export House. The Company was established in the year 1978 & located in Bangladesh. It possesses futuristic outlook & dedicated in export of Bangladesh origin all kinds of Jute products.</p>

					<p class="lead">Here it is to be mentioned traditionally natural fiber Jute is widely produced in Bangladesh & all kinds of Jute products produced by Bangladesh are familiar all over the world since long.</p>

					<p class="lead"> Hossain Enterprise is an Export House having group of technically sound & highly qualified young energetic professionals who posses lot of experience & knowledge about 100% natural biodegradable Eco-friendly Jute products and it’s  international standard packing & shipment procedure; as well as very much cautious and careful about the expectation of our valued overseas Buyers.</p>

					<p class="lead"><strong> Mission:</strong> Our mission is to provide superior services & to ensure quality through proper checking of raw material quality, process survey & close supervision from starting point of production to shipment for maintaining international standards at all level. Close supervision & strict checking about Quality, Quantity and Packing during PSI. Reduce of production lead time & timely shipment. Finally supply of the products with entire satisfaction of the Buyers.</p>

					<p class="lead"><strong>Values: </strong>No compromise with the quality. Sincere & honest relation with the Buyers. All honorable Buyers are considered as fountain of our job and partner of our business.</p>

					<p class="lead"><strong>Vision:</strong> Trustworthy long-term business relation with all of our Buyers.</p>

				</div>
			</div>
		</div>
		<table class="table table-bordered" style="background:#FFFFFF">
        <thead>
            <tr>
                <th>Topic</th>
                <th>Information</th>  
            </tr>
        </thead>
        <tbody>

        @foreach($abouts as $about)


            <tr>
                <td>{{$about->topic}}</td>
                <td>{{$about->info}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
	</div>
</section>
@stop
