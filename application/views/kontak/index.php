<style type="text/css">
  .body-kontak{
    background-image: url('assets/img/slider/ma.jpg');
    background-size: cover;
    color: #fff;
    margin-bottom: -20px;


  }
  .login{
    

  }

  .kontak .card-panel{
    background: rgba(0, 0, 0, .6);
  }
  .kontak label{
    font-size: 16px;
    color: #ccc;
  }

  .kontak input, .kontak textarea{
    font-size: 20px;
    color: #fff;
  }
  .kontak button:hover{
    padding: 0px 40px;
  }

</style>


<section>
<div class="body-kontak">
  <div class="row kontak">
    <div class="col s12 l4 offset-l4">
      <div class="card-panel hoverable">
        <h5 class="center">Silahkan isi Form</h5>

        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="name" id="name" required class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">drafts</i>
          <input type="email" name="email" id="email" required class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">phone</i>
          <input type="text" name="phone" id="phone">
          <label for="phone">Telephone</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="message" id="message" required class="materialize-textarea validate"></textarea>
          <label for="message">Message</label>
        </div>
        <div class="center-align">
          <button type="submit" class="btn orange">Kirim</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
</section>