<!DOCTYPE html>

<html>

    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({  google: {    families: ["Droid Sans:400,700","PT Serif:400,400italic,700,700italic"]  }});</script>

        <meta charset="utf-8">

    	<title><?php echo $has_paid ? "Payment Successful" : "Offline Payment"; ?></title>
    	<meta name="description" content="Payment Successfully Made">
        <meta name='viewport' content='initial-scale=1.0' />
    	<meta name="author" content="UoA Web Development & Consulting Club members">

        <link type='text/css' rel='stylesheet' href='<?php echo base_url(); ?>assets/css/ConfirmationStyle.css' />
    </head>

    <body>
        <div class="centre-page">

            <br />
            <image id="green-tick" src="<?php echo base_url(); ?>assets/images/Green-Confirmation-Tick.jfif"<?php echo $has_paid ? "" : "style='filter: grayscale(1); -webkit-filter: grayscale(1)'"; ?> />

            <h1>
                <?php echo $has_paid ? "Paid!" : "Submitted!"; ?>
            </h1>

            <P>Thank you for signing up to our first event this semester!</p>
            <p><b>Location:</b> Orange Pool club &ndash; 9 City Road, Auckland CBD</p>
            <p><b>Time:</b> Thursday 14th March, 6:30 – 8:00 PM</p>
            <p>We have sent an email to <b><?php echo $email; ?></b> for your reference</p>
            <br />

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.4051599491463!2d174.76121601515302!3d-36.856719779936945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47e6230ebb97%3A0x8b3552d2d249693b!2s9%20City%20Road%2C%20Auckland%20CBD%2C%20Auckland%201010!5e0!3m2!1sen!2snz!4v1585956603835!5m2!1sen!2snz" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



        </div>

    </body>

</html>
