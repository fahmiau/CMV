<div id="mySidenav" class="sidenav">
  <a href="<?php echo base_url("/home")?>" id="home">Home</a>
  <a href="<?php echo base_url("/problems")?>" id="problems">Problems</a>
  <a href="#" id="tc">FAQ</a>
  <a href="<?php echo base_url("/login")?>" id="login">Login</a>
</div>

<center>
<div class="box-terms">
  <h1 style="text-align:center;">Frequently Asked Question</h1>
  <br>
  <br>
  <br>

  <button onclick="muncul(value)" value="1">Pertanyaan yang pertama</button>    
    <div class="answer" id="1" style="display:none">
      ini jawabannya
    </div>

  <button onclick="muncul(value)" value="2">Pertanyaan yang kedua</button>    
    <div class="answer" id="2" style="display:none">
      ini jawabannya
    </div>
    
  <button onclick="muncul(value)" value="3">Pertanyaan yang ketiga</button>    
    <div class="answer" id="3" style="display:none">
      ini jawabannya
    </div>

</div>
</center>
<script>
  function muncul(i) {
    const x = document.getElementById(i);
    
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
</script>
