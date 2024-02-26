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
        <div class="form-container sign-up">
            <form action="/login/form" method="post">
                <h4>Silahkan Isi Data Diri Anda</h4>
                <div>
                    <label for="name"></label>
                    <input type="text" placeholder="Name">
                </div>
                <div>
                    <label for="email"></label>
                    <input type="text" placeholder="email">
                </div>
                <div>
                    <label for="Hp"></label>
                    <input type="text" placeholder="Nomor Handphone">
                </div>
                <div>
                    <label for="password"></label>
                    <input type="text" placeholder="Password">
                </div>

                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="/login/form" method="post">
                @csrf
                <h1>Sign In</h1>
                <div>
                    <label for="email"></label>
                    <input type="email" value="{{old ('email')}}" name="email" placeholder="email">
                </div>
                <div>
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password">

                </div>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <a href="login/register"><button class="hidden" id="register">Sign Up</button></a>
                    <a href="admin/login"><button class="" id="">Panel Admin</button></a>
                </div>

            </div>
        </div>
    </div>

    <script src="{{asset('global/login')}}/script.js"></script>
    <script src="{{asset('global/login')}}/alert.js"></script>
</body>

</html>
