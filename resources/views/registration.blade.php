<!DOCTYPE html>
<html>
<head>
<title>Registration Form - Tutsmake.com</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
 
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container" style="border;border-style :solid ;border-color: grey; padding-top: 140px;padding-bottom : 140px;background-color: #c8d6e5;">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4" style="text-align: center">Daftar Sekarang!</h3>
               <form action="{{url('post-registration')}}" method="POST" id="regForm">
                 {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="text" id="inputName" name="name" class="form-control" placeholder="Username" autofocus>
                  <label for="inputName">name</label>
 
                  @if ($errors->has('name'))
                  <span class="error">{{ $errors->first('name') }}</span>
                  @endif       
 
                </div> 
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email " >
                  <label for="inputEmail">Email </label>
 
                  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif    
                </div> 
 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                   
                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                </div>
 
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Daftar</button>
                <div class="text-center">Sudah punya account?
                  <a class="small" href="{{url('login')}}">Login sekarang</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>