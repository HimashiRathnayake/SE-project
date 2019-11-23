<?php if(!isset($_SESSION["email"])){?>
    <div class="login-page">
    <div class="form" >
        <form class="login-form" method="post" action="<?php echo SITE_URL_BASE."/Login/logIn";?>">
        <input type="email" id="email" name="email" placeholder="Email" required/>
        <input type="password" id="password" name="password" placeholder="Password" required/>
    <div class="form-group col-md-8">
      
      <select id="inputState" class="form-control " name="accessLevel" required>
        <option>Public</option>
        <option>Police</option>
        <option>PoliceStation</option>
        <option>Admin</option>
      </select>
    </div>
        <button type="submit" id="submit" onclick="submit()">login</button>
        <p class="message">Not registered? <a href="http://localhost/crimereportSystem/public/Signup/index">Create an account</a></p>
        <span id="error"></span>
        </form>
    </div>
    </div>
</body>
<?php
}
else{?>
<div class="login-page">
    <div class="form" >
        <form class="login-form" method="post" action="<?php echo SITE_URL_BASE."/Login/logOut";?>">
    <div class="form-group col-md-8">
      
    </div>
    <button type="submit" id="submit" onclick="submit()">Sign Out</button>
        
        <span id="error"></span>
        </form>
    </div>
    </div>
</body>
<?php }?>