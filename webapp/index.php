<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Octank Travel</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="./favicon.png" type="image/png">
    <link rel="shortcut icon" href="./favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>Travel with Octank</h1>
        <p>Get ready to set sail with the highest rated travel site availble on the internet </p>
        <div>
            <img src="/images/travel-world.jpg" alt="travel-world" />
        </div>
    </section>

    <section class="instructions">
        <h3> Book Travel </h3>
        <div>
            <img src="/images/trip.png" alt="trip" />
        </div>
        <h3> Check Reservation </h3>
        <div>
            <img src="/images/reservation.png" alt="reservation" />
        </div>
        <h3> Cancel Reservation </h3>
        <div>
            <img src="/images/cancel.png" alt="cancel" />
        </div>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
