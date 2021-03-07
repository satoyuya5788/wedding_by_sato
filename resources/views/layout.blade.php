<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>八芳園～招待状～</title>

  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/one-page-wonder.min.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/index') }}" rel="stylesheet"> -->

  <script type="text/javascript" src="{{ asset('js/jquery.textAnimation.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.textAnimation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.fittext.js') }}"></script>

</head>
<style>
.clearfix {
	content: "";
	display: block;
	clear: both;
}
.harf-input {
    width: 48%;
    float:left;
}
.one-third-input {
    width: 30%;
    float:left;
}
.harf-post-input {
    width: 42%;
    float:left;
}
input::placeholder {
   font-size: 1em;
   color: red;
}
.main-msg {
    font-size:6em;
    color:#FF66FF; 
    font-family: 'shippori mincho b1', serif;
}
.form-control::placeholder{
  color: #cccccc;
}

.event-msg {
    font-size:3em;
    color:#CC3366; 
    font-family: 'shippori mincho b1', serif;
}
.event-msg-1 {
    font-size:2em;
    color:#CC3399; 
    font-family: 'shippori mincho b1', serif;
}
.content-msg {
    font-family: 'shippori mincho b1', serif;
}
.register-msg {
    color:#9999FF; 
    font-family: 'shippori mincho b1', serif;
}
.strong-msg {
    font-size:1.5em;
}
.bg-content {
    background-color: #f6f3f0;
}
.radius {
    border-radius: 50px;
}

.example {
  position: relative;
  opacity: 0.7;
  }

.example p {
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  margin:0;
  padding:0;
  /*文字の装飾は省略*/
  }

.example img {
  width: 100%;
  }

  p {
  width:100%;
  margin: 0 auto;
  font-family: 'Shippori Mincho B1', serif;
  font-style: oblique;
  font-weight: 100;
  font-variant-ligatures: normal;
  font-size: 2rem;
  letter-spacing: 1px;
}
  th,td {
    text-align:center;
}
ul {
  list-style: none;
}
.gradation{
  background: linear-gradient(#E6FFE9, white);
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.gradation_reverse{
  background: linear-gradient(white, #E6FFE9);
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

body {
    width: 0 auto;
    font-family: 'shippori mincho b1', serif;
}

  </style>

    <script>
        $(function() {
            $('#image-main').hide().fadeIn(2000);
            $('.one').hide().fadeIn(3000);
            $('.two').hide().fadeIn(4000);
        });
    </script>
  


<body>
    <header>
    @include('header')
    </header>
    <br>
    <div class="container">
    @yield('content')
    </div>
    <footer class="footer bg-dark  fixed-bottom">
    @include('footer')
    </footer>
</body>
</html>