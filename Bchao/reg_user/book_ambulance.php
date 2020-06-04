<?php 
include 'reg_header.php';
include 'reg_menu.php';
?>
<section class="call_for_ambulance">

    <div class="container col-md-12">
        <div class="row">
            <div class="book">
                <h2>Book Your ambulance</h2>
                    <br>
                 <h4>Please provide the following information to book an ambulance. Ensure that your mobile number is correct. Our support will reach you as soon as possible.</h4>
            </div>    
                    <div class="book_form col-md-6">
                    <form action="book_ambulance.php.php" class="navbar-form" role="search">
                        <div class="input-group">
                            <label>Date: </label>
                            <input type="date" class="form-control" placeholder="" name="search">
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>Name: </label>
                            <input type="text" class="form-control" placeholder="name..." name="search">
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>Mobile: </label>
                            <input type="text" class="form-control" placeholder="Mpbile number" name="search">
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>Patient location: </label>
                            <input type="text" class="form-control" placeholder="Location" name="search">
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>Destination : </label>
                            <input type="text" class="form-control" placeholder="Destination" name="search">
                        </div>
                        <br><br>
                        <div class="">
                            <label>Emergency Type: </label>
                            <br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Accident<br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Heart attack<br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Brain stroke<br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Pregnancy<br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Breathing<br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Others<br>
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>Age : </label>
                            <input type="number" min="0" max="99" class="form-control" placeholder="0" name="search">
                        </div>
                        <br><br>
                         <div class="">
                            <label>Gender: </label>
                            <br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Male<br>
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Female<br>
                            
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Book Now</button>
                    </form>
                    



              </div>
        </div>
    </div>

</section>
<?php include '../user_footer.php';?>
