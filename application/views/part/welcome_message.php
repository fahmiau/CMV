<div id="mySidenav" class="sidenav">
  <a href="<?php echo base_url("/home")?>" id="home">Home</a>
  <a href="#" id="problems">Problems</a>
  <a href="<?php echo base_url("/terms")?>" id="tc">Terms</a>
  <a href="<?php echo base_url("/login")?>" id="login">Login</a>
</div>

<center>
<div class="box-terms">
  <h1>Frequently Asked Question</h1>
  <br>
  <br>
  <br>

  <button onclick="muncul(event)">Pertanyaan yang pertama</button>    
    <div class="answer" style="display:none">
      ini jawabannya
    </div>

</div>

</center>
<script>
  function muncul(event) {
    console.log(event);
    const x = document.querySelector(".answer");
    
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
</script>
