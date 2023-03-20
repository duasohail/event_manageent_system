@include('cdn')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('cssFiles/signup.css')}}">
    </head>
    <body>
        <h3 class="text-center bg-primary py-2 text-white">Evenet Management System </h3>
        <div class="wrapper">
            <form class="R_form py-4 px-5 text-white" action="" method="">
                <h2 class="text-center pb-3">Registration</h2>
                    <div class="mb-3">
                            <select class="form-select" name="role" required>
                                <option selected>Registered As</option>
                                <option value="Organizer">Organizer</option>
                                <option value="User">User</option>
                            </select>
                        
                    </div>
                    <div class="mb-3">
                            <input class="form-control" type="text" name="name" placeholder="Name" required>
                        
                    </div>
                    <div class="mb-3">
                            <input class="form-control" type="text" name="email" placeholder="Email" required>
                        
                    </div>
                    <div class="mb-3">
                            <input class="form-control" type="text" name="password" placeholder="Password" required>
                            <div id="passwordHelpBlock" class="form-text text-white">
                                Your password must be 8 characters long.
                            </div>
                        
                    </div>
                    <div class="text-center pt-2">
                        <button class="btn btn-primary btn" value="Register" name="Register">Submit</button>

                    </div>
            </form>

            
        </div>
        <div class="text-center"><a class="text-center text-white " href="/signin">Already Have An Account?</a></div>
        
    </body>
</html>
