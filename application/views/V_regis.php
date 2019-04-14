<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="margin-top: 178px">
    <div class="card " style="width: 748px;height: 551px; border-radius: 8px;border-width: 2px;font-family: roboto;margin: auto">
    <div class="card-body" style="margin: 15px; float: left;width: 440px">
        <div class="" style=""><img style="width: 101px; height: 74px;" src="http://logosvg.com/wp-content/uploads/2016/08/Google_logo-1.png"></div>
        <div class="text-left" style="font-size: 24px">Create your Google Account</div>
         <div class="form-group" style="margin-top: 20px; margin-bottom: 30px">
             <div class="row">
            <input style="height: 34px;width: 174px; margin-left: 14px"type="text" class="form-control" id="FirstName"placeholder="First name">
            <input style="height: 34px;width: 174px; margin-left: 14px"type="text" class="form-control" id="FirstName"placeholder="Last name">
             </div>
        </div>
        <input style="width: 364px; height: 32px" type="email" class="form-control" id="InputEmail1" placeholder="Username">
        <div style="font-size: 13px; margin-top: 3px">  You can use letters, numbers & periods </div>
        <a href="" class="" style=" font-size: 15px; margin-top: 8px"> Use my current email address instead</a>    
        <div style="margin-top: 24px; margin-bottom: 8px" class="row">
            <input style="height: 34px;width: 150px; margin-left: 14px"type="password" class="form-control" id="Pass"placeholder="Password">
            <input style="height: 34px;width: 150px; margin-left: 14px"type="password" class="form-control" id="Conf"placeholder="Confirm">
             <div style="width: 48px; margin: auto"><img src="https://img.icons8.com/material-outlined/24/000000/hide.png"></div>
        </div>
        <div style="font-size: 13px; margin: 3px; width: 338px">  Use 8 or more characters with a mix of letters, numbers & symbols </div>
        
            <div style="margin-top: 50px;">
                 <a href="<?php echo base_url('C_signin/index') ?>" class="font-weight-bold" style=""> Sign in instead</a>  
                 <button type="submit" class="btn btn-primary float-right" style="width: 92px">Next</button>
            </div>
        </div>
    </div>
    </div> 
    
</body>
</html>