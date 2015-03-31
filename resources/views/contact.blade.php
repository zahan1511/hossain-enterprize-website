@extends('layout')
@section('extralink')
@stop
@section('content')

<section class="panel statement light">
	<div class="content">
		<h1>Hossain Enterprize</h1>
		<p> Contact Us</p>
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
					
					<form class="form-horizontal">
						<fieldset>

							<!-- Form Name -->
							<legend style="text-align:center;">Email us</legend>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="textinput">Name :</label>  
								<div class="col-md-4">
									<input id="textinput" name="name" type="text" class="form-control input-md">
									
								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="textinput">Email :</label>  
								<div class="col-md-4">
									<input id="textinput" name="email" type="text" class="form-control input-md">
									  
								</div>
							</div>

							<!-- Textarea -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="textarea">Message :</label>
								<div class="col-md-4">                     
									<textarea class="form-control" id="textarea" name="message">
										
									</textarea>
								</div>
							</div>

							<!-- Button -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="singlebutton"></label>
								<div class="col-md-4">
									<button id="singlebutton" name="singlebutton" class="btn btn-primary">Send</button>
								</div>
							</div>

						</fieldset>
					</form>


				</div>
			</div>
		</div>

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
					<table class="table table-bordered " style="width:100%; ">
        <thead >
           
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
                <td>hello ijsandijas  iasjdosai</td>
                <td>salkfdp bnsaibsa iuasbdi hsabsau idbsaui iuasgi</td>
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
