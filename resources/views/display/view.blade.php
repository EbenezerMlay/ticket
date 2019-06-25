<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-tIcKet Tanzania Limited</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--Bootstrap------>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <!--animated css for animation------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
          <!--owl carousel for slides------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
        <!--font awesome for fonts------>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!---default style----->

         <!-- Custom CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">


         <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    </head>
    <body>

    
                   

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    </br>



                    </br>

                    @if('bus')

                    @foreach($bus as $bus)

                    Bus ID:  {{ $bus->id }}
                    </br>


                    Source:  {{ $bus->Route_from }}
                    </br>

                    Destination: {{$bus->Route_to}}
                    </br>

                    Availability: {{ $bus->Departure_Date }}
                    </br>

                    Make: {{ $bus->Departure_Time }}
                    </br>

                    Date: {{ $bus->Departure_Date }} 

                    @endforeach

                    @endif

                    <form method="POST" action="{{ url('/ticket/booked/'.$bus->id) }}">
                      {{ csrf_field() }}
                      <h4>Enter the Passenger Details</h4>
                      <label for="inputName">Name</label>
				        <input type="text" name="name" value = "{{ Auth::user()->name }}">
				        </br>
				        

				        </br>
						<label for="text" class="">email</label>
				        <input type="text" id="email" class="" placeholder="" name = "email"
				               	value = <?php if ((Auth::User()->email == "NULL")):
				        		else:  ?>"{{ Auth::User()->email }}"
				        			
				        		<?php endif ?>>

				        </br>
				        </br>
				        <label for="text" class="">Phone No.</label>
				        <input type="text" id="phone" class="" placeholder="" name = "phone"
				        	value = <?php if ((Auth::User()->phone == "0")):
				        		else:  ?>"{{ Auth::User()->phone }}"
				        			
				        		<?php endif ?>>

				        </br>
				        </br>

                        <label for="text" class="">Choose seats</label><br/>
                        <input type="checkbox" id="seats" class="" placeholder="" name = "seats" value="1">

                        <table border="0" cellpadding="0" cellspacing="6" width="98%" style="height: 601px">
<tbody><tr>
                <td valign="top" width="50%" style="height: 170px"  >
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="height: 618px">
                    <tbody>
                    <tr>
                      
                    </tr>
                    <tr>
                      <td >
						<div align="center">
						<table style="width: 95%; height: 481px" class="style20" bordercolor="#000000" cellspacing="1" border="2">
							<tbody>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[1];?>">
								<strong>&nbsp;1&nbsp;<input type="checkbox" name="seat[]" value="1"><?php $status;?>
								</strong></td>
							<td rowspan="10" bordercolor="#000000" style="width: 137px" >
							&nbsp;</td>
							<td bordercolor="#000000" style="width: 128px" bgcolor="<?php echo $set[2];?>">
							<strong>&nbsp;2&nbsp;&nbsp; <input type="checkbox" name="seat[]" value="2"></strong></td>
							<td style="width: 130px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[3];?>" >
							<strong>&nbsp;3 <input type="checkbox" name="seat[]" value="3"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[6];?>" >
								<strong>&nbsp;6<input type="checkbox" name="seat[]" value="6"></strong></td>
								<td bordercolor="#000000" style="width: 128px" bgcolor="<?php echo $set[5];?>" >
								<strong>&nbsp;5<input type="checkbox" name="seat[]" value="5"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000"   bgcolor="<?php echo $set[4];?>"   >
								<strong>&nbsp;4<input type="checkbox" name="seat[]" value="4"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000"  bgcolor="<?php echo $set[7];?>" >
								<strong>&nbsp;7 <input type="checkbox" name="seat[]" value="7"></strong></td>
								<td bordercolor="#000000" style="width: 128px"  bgcolor="<?php echo $set[8];?>"   >
								<strong>&nbsp;8 <input type="checkbox" name="seat[]" value="8"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000"  bgcolor="<?php echo $set[9];?>"    >
								<strong>&nbsp;9 <input type="checkbox" name="seat[]" value="9"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000"  bgcolor="<?php echo $set[12];?>"    >
								<strong>&nbsp;12 <input type="checkbox" name="seat[]" value="12"></strong></td>
								<td bordercolor="#000000" style="width: 128px"  bgcolor="<?php echo $set[11];?>" >
								<strong>&nbsp;11 <input type="checkbox" name="seat[]" value="11"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[10];?>" >
								<strong>&nbsp;10 <input type="checkbox" name="seat[]" value="10"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000"  bgcolor="<?php echo $set[13];?>" >
								<strong>&nbsp;13 <input type="checkbox" name="seat[]" value="13"></strong></td>
								<td bordercolor="#000000" style="width: 128px" bgcolor="<?php echo $set[14];?>" >
								<strong>&nbsp;14 <input type="checkbox" name="seat[]" value="14"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000"   bgcolor="<?php echo $set[15];?>"   >
								<strong>&nbsp;15 <input type="checkbox" name="seat[]" value="15"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[16];?>"  >
								<strong>&nbsp;16 <input type="checkbox" name="seat[]" value="16"></strong></td>
								<td bordercolor="#000000" style="width: 128px" bgcolor="<?php echo $set[17];?>" >
								<strong>&nbsp;17 <input type="checkbox"  name="seat[]" value="17"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[18];?>" >
								<strong>&nbsp;18 <input type="checkbox"  name="seat[]" value="18"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[19];?>" >
								<strong>&nbsp;19 <input type="checkbox" name="seat[]" value="19"></strong></td>
								<td bordercolor="#000000" style="width: 128px" bgcolor="<?php echo $set[20];?>" >
								<strong>&nbsp;20 <input type="checkbox" name="seat[]" value="20"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[21];?>" >
								<strong>&nbsp;21 <input type="checkbox" name="seat[]" value="21"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000"  bgcolor="<?php echo $set[24];?>" >
								<strong>&nbsp;24 <input type="checkbox" name="seat[]" value="24"></strong></td>
								<td bordercolor="#000000" style="width: 128px"  bgcolor="<?php echo $set[23];?>"   >
								<strong>&nbsp;23 <input type="checkbox" name="seat[]" value="23"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[22];?>" >
								<strong>&nbsp;22 <input type="checkbox" name="seat[]" value="22"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[25];?>"  >
								<strong>&nbsp;25 <input type="checkbox" name="seat[]" value="25"></strong></td>
								<td bordercolor="#000000" style="width: 128px" bgcolor="<?php echo $set[26];?>" >
								<strong>&nbsp;26 <input type="checkbox" name="seat[]" value="26"></strong></td>
								<td style="width: 130px; height: 40px" bordercolor="#000000" bgcolor="<?php echo $set[27];?>" >
								<strong>&nbsp;27 <input type="checkbox" name="seat[]" value="27"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 42px" bordercolor="#000000" bgcolor="<?php echo $set[30];?>"  >
								<strong>&nbsp;30 <input type="checkbox" name="seat[]" value="30"></strong></td>
								<td bordercolor="#000000" style="width: 128px; height: 42px" bgcolor="<?php echo $set[29];?>" >
								<strong>&nbsp;29 <input type="checkbox" name="seat[]" value="29"></strong></td>
								<td style="width: 130px; height: 42px" bordercolor="#000000" bgcolor="<?php echo $set[28];?>">
								<strong>&nbsp;28 <input type="checkbox" name="seat[]" value="28"></strong></td>
							</tr>
							<tr>
								<td style="width: 150px; height: 43px" bordercolor="#000000" bgcolor="<?php echo $set[31];?>">
								<strong>&nbsp;31 <input type="checkbox" name="seat[]" value="31"></strong></td>
								<td style="width: 137px; height: 43px" bordercolor="#000000" bgcolor="<?php echo $set[32];?>" >
								&nbsp;
								<strong>32 <input type="checkbox" name="seat[]" value="32"></strong></td>
								<td bordercolor="#000000" style="width: 128px; height: 43px;" bgcolor="<?php echo $set[33];?>"  >
								<strong>&nbsp;33 <input type="checkbox" name="seat[]" value="33"></strong></td>
								<td style="width: 130px; height: 43px" bordercolor="#000000" bgcolor="<?php echo $set[34];?>"  >
								<strong>&nbsp;34 <input type="checkbox" name="seat[]" value="34"></strong></td>
							</tr>
						</table>

                        </br>
                        </br>
				        	
				        
                      <button class="btn btn-lg btn-primary" type="submit">Confirm</button>
                    </form>
                    </br>


                   

            
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">Online Booking</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12 text-center text-danger">
            <h1>Seat Reservation &amp; Ticketing</h1>
        </div>
        <div class="col-lg-12 text-muted text-center">
            Select number of passengers and click on 'Select Seats' button to continue.
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">Name</label>
            </div>
            <div>
                <input id="txtName" placeholder="Enter Your Name"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">ID No.</label>
            </div>
            <div>
                <input id="identification" placeholder="Identification number"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblMovie">Phone No.</label>
            </div>
            <div>
                <input id="phoneNo" placeholder="Phone number"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div>
                <label id="lblSeatsNo">Number of seats:</label>
            </div>
            <div>
                <select id="ddlSeats">
                    <option value="select">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row text-center">
        <div class="col-lg-12">
            <button id="btnSelectSeats" class="btn btn-primary" disabled="disabled">Select Seats</button>
        </div>
    </div>
    <div class="row" id="seatsReserve">
        <div id="seatsDiagram" class="col-lg-offset-2 col-lg-6" >
            <table class="tblSeats">
                <tbody>
                <tr>
                    <td class="seatRow">A</td>
                    <td><div class="seatDiv"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">B</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">M</td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">C</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">D</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <!--<tr>
                    <td class="seatRow">C</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">B</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>
                <tr>
                    <td class="seatRow">A</td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seatDiv red"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="empty"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                    <td><div class="seat"></div></td>
                </tr>-->
                <tr>
                    <td class="seatRow"></td>
                    <td><div class="empty">1</div></td>
                    <td><div class="empty">2</div></td>
                    <td><div class="empty">3</div></td>
                    <td><div class="empty">4</div></td>
                    <td><div class="empty">5</div></td>
                    <td><div class="empty">6</div></td>
                    <td><div class="empty">7</div></td>
                    <td><div class="empty">8</div></td>
                    <td><div class="empty">9</div></td>
                    <td><div class="empty">10</div></td>
                    <td><div class="empty">11</div></td>
                    <td><div class="empty">12</div></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12">
            <p class="text-center screen">Screen</p>
        </div>
        <div class="col-lg-1 col-lg-offset-2">
            <div class="seatDiv white"></div>
        </div>
        <div class="col-lg-2">
            <p>Available Seat</p>
        </div>
        <div class="col-lg-1">
            <div class="seatDiv green"></div>
        </div>
        <div class="col-lg-2">
            <p>Selected Seat</p>
        </div>
        <div class="col-lg-1">
            <div class="seatDiv red"></div>
        </div>
        <div class="col-lg-2">
            <p>Unavailable Seat</p>
        </div>

        <div class="col-lg-12">
            <p><b class="text-uppercase">Selected Seats:</b></p>
            <p class="selectedSeatsList text-primary"></p>
        </div>
        <div class="row text-center">
            <div class="col-lg-12">
                <button id="btnReserve" class="btn btn-primary" disabled="disabled">Make Reservation</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="tblReserve col-lg-4 col-lg-offset-4">
            <table class="tblReserve">
                <tbody>
                <th>Name</th>
                <th>ID Number</th>
                <th>Phone Number</th>
                <th>No. of seats</th>
                <th>Seats Number(s)</th>
                <th>Cost</th>
                </tbody>
            </table>
            <div class="row text-center" style="margin-top: 10px;">
                <div class="col-lg-12">
                    <p>Pay <script type="text/javascript">reservedUser.count</script>x 700</p>
                    <a href="#" id="payForSeat" class="btn btn-primary">Proceed To Payment</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-offset-1">

        </div>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Clint Arianda</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>

        </div><!---
            <div class="social-networks">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="www.facebook.com/mastech" class="facebook"><i class="fa fa-facebook-official"></i></a>
                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
            </div>-->
        <div class="footer-copyright">
            <p>©Copyright <?php echo date('Y')?> ® online bus ticket  |   All Rights Reserved   |   Powered by BIT student</p>
        </div>
    </footer>
                    
                </div>
            </div>
        </div>
    </div>
</div>
 
                
            
        
</section>


</div>
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/script.js') }}" defer></script>

 <footer id="myFooter">
        <div class="container">
            <div style="text-align:left;" class="row">
                    <div style="text-align:left;text-transform:uppercase;" class="col-sm-3 myCols">
                            <div id="logo-footer"><a href=""><img src="{{asset('images/logo.png')}}" id="logo-image"></a></div>    
                        </div>
                <div style="text-align:left;text-transform:uppercase;" class="col-sm-3 myCols">
                    <h5>Address</h5>
                    <ul style="font-size:12px;" > <li>Head office,</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i>&nbsp;Shabaan Robert Street</li>
                        <li><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;Opposite National Museum</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; P. O. Box 3918, Dar-es-Salaam,</li><li> <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Tanzania</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;mail:<a href="mailto:info@ticket.co.tz">info@ticket.co.tz</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Mobile:<a href="tel:+255784843475">&nbsp;+255(0) 784 843 475</a></li>
                        <li style="margin-left:60px;"><a href="tel:+255713123138">+255(0) 713 123 138</a></li>
                    </ul>
                </div>
                <div  style="text-align:left;" class="col-sm-3 myCols">
                    <h5 style="text-transform:uppercase;">USEFUL LINKS</h5>
                    <ul>
                        <li><a href="https://www.sumatra.go.tz/">Surface and Marine Transport Regulatory Authority (SUMATRA)</a></li>
                    </ul>
                </div>
                <div style="text-align:left;text-transform:uppercase;" class="col-sm-3 myCols">
                    <h5>Subscribe</h5>
                    <ul >
                  
                    </ul>
                </div>
               
                
            </div>
    </body>
</html>
