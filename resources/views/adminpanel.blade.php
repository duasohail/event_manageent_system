@include('cdn')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Panel</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('cssFiles/adminpanel.css')}}">
    </head>
    <body class="bg-dark">
        <div class="container-fluid text-white">
            <div class="row py-1 bg-primary text-center">
                <div class="col"><h3>Admin Panel</h3></div>
            </div>

            <div class="row justify-content-center bg-dark py-1 mb-4">
                <div class="col-12 text-center">
                    <button class="btn btn-sm btn-primary my-1" id="user" value="" name="">USERS LIST</button>
                    <button class="btn btn-sm btn-primary my-1" id="org" value="" name="">ORGANIZERS LIST</button>
                    <button class="btn btn-sm btn-primary my-1" id="evnt" value="" name="">EVENTS LIST</button>
                </div>
            </div>

            <div class="row justify-content-center bg-dark py-2" id="userdata">
                <div class="col-12 text-center">
                    <h2 class="text-center text-white">USERS LIST</h2>
                    <hr>
                    <div class="table-responsive">
                    <table class="table table-dark table-striped text-white">
                        <thead>
                            <tr>
                                <th>S/NO</th>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>user1</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>user2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>user2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>user2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>user2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
            <div class="row justify-content-center bg-dark py-2" id="orgdata">
                <div class="col-12 text-center">
                <h2 class="text-center text-white">ORGANIZERS LIST</h2>
                    <hr>
                    <div class="table-responsive">
                    <table class="table table-dark table-striped text-white">
                        <thead>
                            <tr>
                                <th>S/NO</th>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Org1</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>org2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>org2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>org2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>org2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
            <div class="row justify-content-center bg-dark py-2" id="evntdata">
                <div class="col-12 text-center">
                <h2 class="text-center text-white">EVENTS LIST</h2>
                    <hr>
                    <div class="table-responsive">
                    <table class="table table-dark table-striped text-white">
                        <thead>
                            <tr>
                                <th>S/NO</th>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>evnt1</td>
                            <td>John</td>
                            <td>john@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>evnt2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>evnt2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>evnt2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>evnt2</td>
                            <td>marry</td>
                            <td>marry@gmail.com</td>
                            <td><button class="btn btn-sm btn-danger" value="">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>

        </div>
    </body>

<!--JQUERY HERE-->
<script>
$(document).ready(function(){
    $("#userdata").show();
    $("#orgdata").hide();
    $("#evntdata").hide();
    
  $("#user").click(function(){
    $("#userdata").show();
    $("#orgdata").hide();
    $("#evntdata").hide();
  });
  $("#org").click(function(){
    $("#userdata").hide();
    $("#orgdata").show();
    $("#evntdata").hide();
  });
  $("#evnt").click(function(){
    $("#userdata").hide();
    $("#orgdata").hide();
    $("#evntdata").show();
  });
 
});
</script>
</html>


