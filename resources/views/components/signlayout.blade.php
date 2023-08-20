<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body class="bg-image">
<header>
        <nav class="inline-navbar">
 <ul> 
        <div class="logo"></div>
        <div class="sis">
            <span class="yellow">Ex</span>
            <span class="White">Sis</span>
            <span class="yellow">Slip</span>
            </nav>
        </div>
        <nav class="yellow-navbar">
</ul>

</header>
    <div class="container">
        @yield('content')
    </div>
</body>


</html>
<style>
    
.inline-navbar {
    z-index: 1;
    background-color: rgba(13,62,32,0.98);
    background-image: linear-gradient(to right, rgba(13,62,32,0.98), rgba(2,28,2,.98));
    width: calc(100% - 0%);
    height: 100px;
    display: flex;
    top: 0;
    position: static;

    
}

.yellow-navbar{
    background-color: rgba(254,192,57);
    height: 30px;
    margin-top: 0px;

}

.bg-image {
    background-image: url('bg.png'); /* Update this path */
    background-repeat: no-repeat fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    width: calc(100% - 0%);
    /* Add more styles as needed */
}



.logo {
    background-image: url(usjr_trans.png);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 1px;
    position: absolute;
    height: 120px;
    width: 140px;
    z-index: 1;
    padding: 5px;


}

.sis {
    display: flex;
    font-size: larger;
    align-items: center;
    /* background-color: rgba(13,62,32,0.98); */
    padding: 40px 150px;

}

.sis .yellow {
    color: #FFD700; /* Yellow color */
    font-weight: bold;
    padding: 5px;
    font-size: xx-large;
}

.sis .White {
    color: whitesmoke; /* White color */
    font-weight: bold;
    padding: 0px;
    font-size: large;

}

.navigation a {
    color: white; /* White color for links */
    text-decoration: none;
    padding: 10p 200px;
    margin-left: 10px;
}

.navigation a:hover {
    text-decoration: none; /* Underline on hover */
    display: flex;
    align-items: center;
    padding: 10px 100px;
}
</style>

