<div class="page-wrapper">
        <h1>Thank you for booking!</h1>
        <a class="btn trigger" href="#">Details</a>
      </div>
      
      <!-- Modal -->
      <div class="modal-wrapper">
        <div class="modal">
          <div class="head">
            <a class="btn-close trigger" href="#">
              <i class="fa fa-times" aria-hidden="true"></i>
            </a>
          </div>
          <div class="content">
              <div class="thank-you">
                 
                <button class="print" type="button" titlt = "print screen" alt="print screen" onclick="window.print();"target="_blank" style="cursor:pointer;">Print</button>
              </div>
                
              </div>
          </div>
        </div>
      </div>
</body>

<script>
    $( document ).ready(function() {
  $('.trigger').on('click', function() {
     $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur-it');
     return false;
  });
});
</script>