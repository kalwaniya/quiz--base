 <!DOCTYPE html>
<html>
<head>
        <title></title>
       <link rel ="stylesheet" type="text/css" href="bootstrap.css">
       
</head>
<body>
           <div class="container">
                <br><h1 class="text-center text-success">Welcome to Quiz World</h1><br>
                    <div class ="row">
                            <div class "col-lg-6">
                                <div class="card">
                               <h2 class="text-center card-header">login form</h2>
                                <form action="validation.php" method="post">
                                    <div class="form-group">
                                        <label>username</label>
                                         <input type="text" name="user" class="form-control">
                                    </div>
                                   <!--  <div class="form-group">
                                            <label> EmailAddress:<label><br><br>
                                             <input type="text" name="email" size="150" class="form-control">
                                     </div>-->
                                        
                                     <div class="form-group">
                                        <label>password</label>
                                         <input type="Password" name="password" class="form-control">
                                     </div>
                                   <button type="submit" class "btn btn-primary">Login</button>

                                </form>
                                </div>
                                    </div>
                             <div class "col-lg-6">
                                <div class="card">
                               <h2 class="text-center card-header">Registration form</h2>
                                <form action="registration.php" method="post"> 
                                       <!--<div class="form-group">
                                            <label>EmailAddress:<label><br><br>
                                             <input type="text" name="email" size="150" class="form-control">
                                       </div>-->
                                    
                                    <div class="form-group">
                                        <label>username</label>
                                         <input type="text" name="user" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>password</label>
                                         <input type="Password" name="password" class="form-control">
                                   </div>
                                   <button type="submit"class "btn btn-primary">Register</button>

                                </form>
                                </div>
                             </div>
                            
                    </div>

            </div>
</body>
</html> 
