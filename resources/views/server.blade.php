@extends('partials.master',['title'=>$title])
@section('content')
    <div class="col-lg-12">

        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>System Stuff</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>OS</td>
                        <td>Ubuntu 14.04 LTS (Trusty Tahr)</td>
                    </tr>
                    <tr>
                        <td>PHP Version</td>
                        <td><?php echo phpversion(); ?></td>
                    </tr>
                    <tr>
                        <td>Xdebug</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Ruby 2.2.x</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Vim</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Git</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>cURL</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Imagick</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Composer</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Beanstalkd</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Node</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>NPM</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>Database Stuff</h2>
                <table class="table table-responsive table-striped table-hover">
                    <?php

                    $mysql_exists = FALSE;
                    if (extension_loaded('mysql') or extension_loaded('mysqli')) :
                        $mysql_exists = TRUE;
                    endif;
                    $mysqli = new mysqli('localhost', 'root', 'root');
                    $mysql_running = TRUE;
                    if (mysqli_connect_errno()) {
                        $mysql_running = FALSE;
                    } else {
                        $mysql_version = $mysqli->server_info;
                    }
                    $mysqli->close();
                    ?>
                    <tr>
                        <td>MySQL is installed</td>
                        <td><i class="fa fa-<?php echo($mysql_exists ? 'check' : 'times'); ?>"></i></td>
                    </tr>

                    <tr>
                        <td>MySQL is connected</td>
                        <td><i class="fa fa-<?php echo($mysql_running ? 'check' : 'times'); ?>"></i></td>
                    </tr>
                    <tr>
                        <td>MySQL Version</td>
                        <td><?php echo($mysql_running ? $mysql_version : 'N/A'); ?></td>
                    </tr>


                    <?php
                    $psql_is_connected = FALSE;
                    $psql_conn = pg_connect('host=localhost port=5432 dbname=usterix user=root password=root');
                    if ($psql_conn) $psql_is_connected = TRUE;
                    $psql_version = pg_version($psql_conn)['client'];
                    pg_close($psql_conn);
                    ?>
                    <tr>
                        <td>PostgreSQL is installed</td>
                        <td><i class="fa fa-<?php echo($psql_is_connected ? 'check' : 'times'); ?>"></i></td>
                    </tr>
                    <tr>
                        <td>PostgreSQL is connected</td>
                        <td><i class="fa fa-<?php echo($psql_is_connected ? 'check' : 'times'); ?>"></i></td>
                    </tr>
                    <tr>
                        <td>PostgreSQL Version</td>
                        <td><?php echo($psql_version ? $psql_version : 'N/A'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>Caching stuff</h2>
                <table class="table table-responsive table-striped table-hover">
                    <?php
                    $redis = new Redis();
                    $redis->connect('127.0.0.1', 6379);
                    ?>
                    <tr>
                        <td>Redis</td>
                        <td><i class="fa fa-<?php echo($redis->ping() ? 'check' : 'times'); ?>"></i></td>
                    </tr>

                    <?php
                    $memcached_running = FALSE;
                    $memcached_version = FALSE;
                    $memcached_version = FALSE;
                    if (class_exists('Memcache')) :
                        $m = new Memcached();
                        if ($m->addServer('localhost', 11211)) {
                            $memcached_running = TRUE;
                            $memcached_version = $m->getVersion();
                            $memcached_version = current($memcached_version);
                        }
                    endif;
                    ?>
                    <tr>
                        <td>Memcached running</td>
                        <td><i class="fa fa-<?php echo($memcached_running ? 'check' : 'times'); ?>"></i></td>
                    </tr>
                    <tr>
                        <td>Memcached version</td>
                        <td><?php echo($memcached_version ? $memcached_version : 'N/A'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>Node/NPM Stuff</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>Grunt</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>Bower</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>Yeoman</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>Gulp</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>Browsersync</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>PM2</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>Laravel Stuff</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>Laravel Installer</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>Laravel Envoy</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>Blackfire Profiler</td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>MySQL Database Credentials</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>Hostname</td>
                        <td>localhost</td>
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
                        <td>Database</td>
                        <td>usterix</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>PostgreSQL Database Credentials</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>Hostname</td>
                        <td>localhost</td>
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
                        <td>Database</td>
                        <td>usterix</td>
                    </tr>
                    <tr>
                        <td>Port</td>
                        <td>5432</td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>Mailcatcher</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>Enable it first with</td>
                        <td>mailcatcher --http-ip=0.0.0.0</td>
                    </tr>
                    <tr>
                        <td>URL</td>
                        <td>http://10.200.17.38:1080</td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>SSH Credentials</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>SSH Host</td>
                        <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
                    </tr>
                    <tr>
                        <td>SSH User</td>
                        <td>vagrant</td>
                    </tr>
                    <tr>
                        <td>SSH Password</td>
                        <td>vagrant</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>All PHP Modules</h2>
                <table class="table table-responsive table-striped table-hover">
                    <?php
                    $modules = get_loaded_extensions();
                    asort($modules);
                    foreach ($modules as $extension) :
                    ?>
                    <tr>
                        <td><?php echo $extension; ?></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
@endsection
