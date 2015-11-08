@extends('partials.master',['title'=>$title])
@section('content')
    <div class="col-lg-12">
        <div class="container">
            <h2 class="text-center">MySQL Database Access</h2>
            <h3>From your Application</h3>
            <p class="lead">These are the settings that work when connecting with PHP. You could technically create as
                many databases as you want.</p>
            <pre><code class="language-php">$connection = mysqli_connect('localhost', 'root', 'root', 'usterix');</code></pre>
            <table class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Database Name</td>
                        <td>usterix</td>
                    </tr>
                    <tr>
                        <td>Database User</td>
                        <td>root</td>
                    </tr>
                    <tr>
                        <td>Database Password</td>
                        <td>root</td>
                    </tr>
                    <tr>
                        <td>Database Host</td>
                        <td>localhost</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h3>From a Desktop Client</h3>
            <p class="lead">You'll need to download either <a href="http://www.sequelpro.com/">Sequel Pro</a> or <a
                        href="http://www.navicat.com/">Navicat</a> or some other desktop database client. Switching to
                one of these from phpMyAdmin will be a life changing experience so just do it already. After this,
                create a "new connection" and select SSH Forwarding and enter these parameters:</p>
            <p class="text-center">
                <img class="img-responsive img-thumbnail" src="{{asset('img/connection-screen.png')}}" alt="Connection Pic"/>
            </p>
            <table class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Database Name</td>
                        <td>(leave blank)</td>
                    </tr>
                    <tr>
                        <td>Database User</td>
                        <td>root</td>
                    </tr>
                    <tr>
                        <td>Database Password</td>
                        <td>root</td>
                    </tr>
                    <tr>
                        <td>Database Host</td>
                        <td>localhost</td>
                    </tr>
                    <tr>
                        <td>SSH Host</td>
                        <td>10.200.17.38</td>
                    </tr>
                    <tr>
                        <td>SSH User</td>
                        <td>vagrant</td>
                    </tr>
                    <tr>
                        <td>SSH Password</td>
                        <td>vagrant</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h2 class="text-center">PostgreSQL Access</h2>
            <table class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Database Name</td>
                        <td>usterix</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>root</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>root</td>
                    </tr>
                    <tr>
                        <td>Database Host</td>
                        <td>localhost</td>
                    </tr>
                    <tr>
                        <td>Port</td>
                        <td>5432</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
