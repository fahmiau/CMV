    <div class="split left">
      <div class="left">
        <img src="<?php echo base_url("style/img/passport.png")?>">
      </div>
    </div>
    <center>
    <div class="split right">
      <div class="right">
        <head>
            <title>Sign Up Form</title><br>
            <h1><b>BOOK YOUR QUEUE</b></h1><br>
            <h2><b>Sign Up!</b></h2><br>
            <h3><i>Please fill out the registration form</i></h3>
        </head>
        <form action="<?php echo base_url('Signup/tambah_aksi')?>" method="POST">
         <table>
          <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname"><br></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname"><br></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input type="text" name="username"><br></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="email"><br></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="address"><br></td>
          </tr>
          <tr>
            <td>Phone Number</td>
            <td><input type="text" name="no_hp"><br></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="password"><br></td>
          </tr>
          <tr>
            <td>Repeat Password</td>
            <td><input type="text" name="repassword"><br></td>
          </tr>
        </table>
          <div class="clearfix">
              <button type="reset" class="cancelbtn">Reset</button>
              <button type="submit" name="signup" class="cancelbtn">Sign Up</button>
          </div>          
    </center>
        
        </form>
      </div>
    </div>