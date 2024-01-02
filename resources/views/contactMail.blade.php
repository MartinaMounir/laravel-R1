<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>contact form</title>
</head>

<body>




    <div class="container">
        <h2>contact</h2>
        <form id="form-id"   method="post" action="#">

            <div class="form-group">
                <label for="Title">Your name:</label>
                    <input type="text" id="Name" name="Name" placeholder="Enter Name" class="form-control" required>

            </div>

            <div class="form-group">
                <label for="Email">Your email address</label>

                    <input type="email" id="Email" name="Email" class="form-control" required>

            </div>
            <div class="form-group">
                <label for="subject">Your subject</label>

                <input type="subject" id="subject" name="subject" class="form-control" required>

            </div>
            <div class="form-group">
                <label for="Message" >Your message</label>
                    <textarea id="Message" name="Message" class="form-control" rows="6" maxlength="3000" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>



        </form>
    </div>



</body>
</html>
