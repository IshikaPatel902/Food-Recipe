
<html>
<head>
    <title>Contact Form</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
	body{
    margin: 0;
    padding: 0;
    
     background-image: url('blog.jpeg');  
     background-size: cover;
     background-position: center;
     box-sizind: border-box;
     font-family: sans-serif;     
}  

label{
color:white;
}    
	h1{
    padding-top: 10px;
    color:white;
}
#message{
    width:1120px;
    height:200px;
}

    </style>
</head>
<body>
    <div class="container">
       <h1>Contact Me</h1><br><br><br> 
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        
    </div>
        </form>
    </div>
</body>
</html>
