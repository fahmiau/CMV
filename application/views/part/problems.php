<div id="mySidenav" class="sidenav">
  <a href="<?php echo base_url("/home")?>" id="home">Home</a>
  <a href="#" id="problems">Problems</a>
  <a href="<?php echo base_url("/faq")?>" id="tc">FAQ</a>
  <a href="<?php echo base_url("/login")?>" id="login">Login</a>
</div>

<div>
  <ul class="clr">
    <li class="pusher"></li>
    <a id="categories" href="<?php echo base_url("/newprobs")?>">
      <li class="atas">
        <div>
          <img src="<?php echo base_url("style/img/problem1.jpg")?>" alt=""/>
          <h1>New</h1>
          <p>We will help you creating your new passport.</p>
        </div>
      </li>
    </a>

    <a id="categories" href="<?php echo base_url("/renew")?>">
      <li>
        <div>
          <img src="<?php echo base_url("style/img/problem2.jpg")?>" alt=""/>
          <h1>Re-New</h1>
          <p>Let's get your expired passport renewed.</p>
        </div>
      </li>
    </a>
    
    <a id="categories" href="<?php echo base_url("/lost")?>">
      <li class="bawah">
        <div>
          <img src="<?php echo base_url("style/img/problem3.jpg")?>" alt=""/>
          <h1>Lost</h1>
          <p>We will help you taking care of your lost passport.</p>
        </div>
      </li>
    </a>

    <a id="categories" href="<?php echo base_url("/faq")?>">
      <li class="bawah-kanan">
        <div>
          <img src="<?php echo base_url("style/img/problem4.jpg")?>" alt=""/>
          <h1>Others</h1>
          <p>Click here if you cannot find your problems.</p>
        </div>
      </li>
    </a>
  </ul>
</div>
</body>
</html>