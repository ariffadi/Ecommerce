<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('global/login')}}/style.css">
    <link rel="stylesheet" href="{{asset('global/login')}}/alert.css">
    <title>Login</title>
</head>

<body>
    @if($errors->any())
    <div class="alert-container" id="danger-alert">
        <span class="close-btn" onclick="closeAlert()">&times;</span>
        @foreach($errors->all() as $item)
        <h5>Error:{{$item}}</h5>
        @endforeach
    </div>
    @endif
    <div class="container" id="container">

        <div class="form-container sign-in">
            <form action="/login/create" method="post">
                @csrf
                <h4>Silahkan Isi Data Diri Anda</h4>
                <div>
                    <label for="name"></label>
                    <input type="text" name="name" value="{{Session::get('name')}}" placeholder="Name">
                </div>
                <div>
                    <label for="email"></label>
                    <input type="text" name="email" value="{{old ('email')}}" placeholder="email">
                </div>
                <div>
                    <label for="Hp"></label>
                    <input type="text" name="Hp" placeholder="Nomor Handphone">
                </div>
                <div>
                    <label for="password"></label>
                    <input type="text" name="password" placeholder="Password">
                </div>
                <a href="login/create"><button type="submit" name="submit">Sign Up</button></a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>

                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('global/login')}}/script.js"></script>
    <script src="{{asset('global/login')}}/alert.js"></script>
</body>

</html>