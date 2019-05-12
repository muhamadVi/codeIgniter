<style type="text/css">
  .body-login{
    background-image: url('assets/img/slider/ma.jpg');
    background-size: cover;
    color: #fff;
    margin-bottom: -20px;


  }
  .login{
    

  }

  .login .card{
    background: rgba(0, 0, 0, .6);
  }
  .login label{
    font-size: 16px;
    color: #ccc;
  }

  .login input{
    font-size: 20px;
    color: #fff;
  }
  .login button:hover{
    padding: 0px 40px;
  }

</style>


<section>
<div class="body-login">
  <div class="row login">
    <div class="col s12 l4 offset-l4">
      <div class="card hoverable">


        <div class="card-action green white-text">
          <h3>Login Form</h3>
        </div>



        <form method="POST">
          <div class="card-content">
            <div class="form-field">
              <label for="username">Username</label>
              <input type="text" name="username" id="username">
            </div><br>

            <div class="form-field">
              <label for="password">Password</label>
              <input type="password" name="password" id="password">
            </div><br>

            <div class="form-field">
              <label>
                <input type="checkbox"  />
                <span>Remember me</span>
              </label>
            </div><br>

            <div class="form-field center-align">
              <button name="masuk" type="submit" class="btn-large orange">Login</button>
            </div>

            

            <?php if (isset($data['pesan'])) {
              echo $data['pesan'];
            
            } ?>
          </div>
        </form>
          <br>
        
        </div>
      </div>
    </div>
  </div>
</div>
</section>


