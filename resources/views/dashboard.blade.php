@extends('partials.master',['title'=>$title])
@section('content')
    <div class="col-lg-12 page-content">
        <div class="container">
            <h2 class="text-center">Welcome!</h2>
            <p class="lead">This is the home site of the Usterix development environment. This is based on the Scotch
                box but is customized to serve our needs.</p> <p class="lead"> Visit the sites tab to view all the active dev sites and
                also to create new development sites.
            </p>
            <p class="lead">The server section lists a ton of information about this server including all of the packages that are included and php modules that are configured</p>
            <p class="lead">The Logins section shows all the logins for the server itself and the logins for all the databse engines</p>
        </div>
    </div>
@endsection
