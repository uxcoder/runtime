<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ?????????????????????????????????????????????????? -->
    <meta charset="utf-8">
    <title>test</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ?????????????????????????????????????????????????? -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    ?????????????????????????????????????????????????? -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{$smarty.const.URL_PUBLIC}/css/normalize.css"/>
    <link rel="stylesheet" href="{$smarty.const.URL_PUBLIC}/css/skeleton.css"/>
    <link rel="stylesheet" href="{$smarty.const.URL_PUBLIC}/css/custom.css"/>

    <link rel="icon" type="image/png" href="{$smarty.const.URL_PUBLIC}/images/favicon.png">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{$smarty.const.URL_PUBLIC}/js/menu.js"></script>



</head>
<body>


<header id="menuheader">
    <div class="menucontainer">
        <h1>runtime</h1>
        <nav id="menunav">
            <ul>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="admin">Admin</a></li>
                <li><a href="plan">Plan</a></li>
                {if $authorized}
                    <li><a href="logout">Logout</a></li>
                {else}
                    <li><a href="login">Login</a></li>
                {/if}
            </ul>
        </nav>
    </div>
</header>





