<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('./assets/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Inscription à la plateforme</h1>
        </div>
        <div >
            <form class="form" method="post"  action="{{ route('auth.save') }}">
                @csrf
                    <div class="form-control">
                        <label for="">Username :</label>
                        <input type=""  name="username" id="username" placeholder="Enter Username"  requcired >
                    </div>                                    

                    <div class="form-control">
                        <label for="">Email :</label>
                        <input type="email"  name="email" id="email" placeholder="Enter Email" requcired>
                    </div>
                    
                    
                    <div class="form-control">
                        <label for="">Password:</label>
                        <input type="password"  name="mdp" id="mdp" placeholder="Enter password"  requcired>
                    </div>

                    <div class="form-control">
                        <label for="">Confirm password:</label>
                        <input type="password"  name="mdp" id="mdp" placeholder="Confirm password" requcired>
                    </div>
                    
                    
                         <button class="form-button"  type="submit"> <i class="fas fa-user-plus"></i> S'inscrire</button> 
                         <p class="">Avez-vous déjà un compte?<a href="{{route('auth.login')}}">Connexion</a></p>     
            </form>
            
        </div>
    </div>
</body>
</html>