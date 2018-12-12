<div class="bg" style="background-image: url('<?php echo base_url()?>style/img/backgroundmain.jpg') " >
<div class="bg-item">
<div class="row no-gutters bg">

      <div class="col-md-6">
      <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
      body { font-family: tahoma; font-size: 80%; }
      th { color: #008; }
      td { text-align: center; }
      #sunday { color: #cc0000; }
      #today { background-color: #bebebe; color: #fff; font-weight: bold; }
    </style>
    <script language="javascript" type="text/javascript">
      var dateTime = dateTime || {
        getMonthLastDay : function(year, month) {
          for (var i = 29; i < 33; i++) {
            if (new Date(year, month, i).getMonth() != month) return --i;
          }
        },
        
        getRawCalendar : function() {
          var arr = [], cur, i;
          with (new Date()) {
            cur = new Date(getFullYear(), getMonth(), 1).getDay();
            if (cur != 0) {
              for (i = 1; i <= cur; i++) arr.push(' ');
            }
            
            for (i = 1; i <= this.getMonthLastDay(getFullYear(), getMonth()); i++) {
              arr.push(i);
            }

            return arr;
          }
        },
        
        getToday : function() {
          return (new Date()).getDate();
        }
      }
    </script>
  </head>
  <body>
    <table>
      <tr>
        <th id='sunday'>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
      </tr>
      <script language="javascript" type="text/javascript">
        var i, j, row, raw = dateTime.getRawCalendar();
        for (i = 0; i <= raw.length; i += 7) {
          row = raw.slice(i, i + 7);
          document.write('<tr>');
          for (j = 0; j < row.length; j++) {
            row[j] == dateTime.getToday() ? document.write('<td id="today">' +
                row[j] + '</td>') : document.write('<td>' + row[j] + '</td>');
          }
          document.write('</tr>');
        }
      </script>
    </table>
  </body>
      </div>
      <div class="col-md-6">

        <!-- buat judul -->
        <div class="col-md-12">
          <div class="row no-gutters" >
            <div class="judul">BOOQ</div>
          </div>
        </div>
        <br>
        <!-- buat desc -->
        <div class="col-md-12">
          <div class="row no-gutters">BooQ is a website to make your job on taking care of your passport easier.<br> 
            You can adjust your queue with your schedule.<br>
            It makes your time more efficient.<br>
            Go book your queue now!<br>
            <a class="get-started-button buttongs" href="<?php echo base_url("/problems")?>"><span>GET STARTED</span></a>
          </div>
        </div>        
</div>
</div>
</div>