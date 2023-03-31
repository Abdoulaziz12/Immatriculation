<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('./assets/style.css')}}">

   
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Connexion à la plateforme</h1>
        </div>
        <div >
            <form class="form" method="post"  action="">
                    

                    <div class="form-control">
                        <label for="">Email :</label>
                        <input type="email"  name="email" id="email" placeholder="Enter email"   requcired>
                    </div>
                    
                    
                    <div class="form-control">
                        <label for="">Mot de passe :</label>
                        <input type="password"  name="mdp" id="mdp" placeholder="Enter password"  requcired>
                    </div>
                    
                    <button class="form-button" type="submit"> <i class="fas fa-user-plus"></i> Connexion</button><br>
                    <p class="">Vous n'avez pas de compte?<a href="{{route('auth.register')}}">Inscription</a></p>      
            </form>
        </div>
    </div>
    <br>
    
           
</body>
</html>