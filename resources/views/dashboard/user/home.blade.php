<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="mt-5">Dashboard</h2>
            <div class="col-md-5">
              @if (Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>   
              @endif

              <table class="table table-responsive">
                  <thead>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                      <td>{{Auth::guard('web')->user()->name}}</td>
                      <td>{{Auth::guard('web')->user()->email}}</td>
                      <td>
                        <a href="{{route('user.logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{route('user.logout')}}" method="POST">
                            @csrf
                        </form>
                     </td>
                  </tbody>

              </table>

              
              
                

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>