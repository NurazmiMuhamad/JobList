<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Profile Tabs - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    h1{
      text-align: center;
    }
    input[type=text], select{
  width: 100%;
  padding: 7px 15px;
  margin: 6px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
textarea{
    border-radius: 5px;
    width: 100%;
  padding: 7px 15px;
  margin: 6px 0;
}
textarea[type=description]:required {
  box-shadow: none;
  outline: none;
  border-width: 2px;
}

textarea[type=description]:required:invalid {
  border-color: #C00000;
}
textarea[type=description]:required:valid {
  border-color: blue;
}
label[for=description]{
  font-size: 17px;
}
section{
  height: 700px;
}


  </style>


</head>

<h1>Company Form</h1>

<br>
<section>
  

<div class="container bootstrap snippet">

    	<div>   
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="/company" method="post" id="registrationForm">
                    @csrf
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Position title</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Creative Art Designer" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="nature"><h4>Job Nature</h4></label>
                            <select id="nature" name="nature">
                              <option value="full_time">Full-Time</option>
                              <option value="part_time">Part-Time</option>
                              
                            </select>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-2">
                              <label for="currency"><h4>Currency</h4></label>
                            <select id="Currency" name="Currency">
                              <option value="idr">IDR</option>
                              <option value="dollar">Dollar</option>  
                              <option value="euro">Euro</option>                      
                            </select>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-4">
                             <label for="payment"><h4>Payment</h4></label>
                              <input type="text" class="form-control" name="payment" id="payment" placeholder="100.000" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="text" class="form-control" name="location" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                              
                          </div>
                      </div>
                        
                      
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="kodepos"><h4>Kode Pos</h4></label>
                              <input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="Kode Pos" title="enter yur password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class=".col-xs-7 .col-sm-6 .col-lg-8">
                            <label for="description">Tell Us More About Your Project</label>
                               <textarea type="description" id="description" rows = "5" cols = "100" name = "description" required> Describe Your Project Here...</textarea>
                          </div>
                      </div>
                    
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
            
              
             
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  </section>
                                                      
<script type="text/javascript">
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
</body>
</html>
