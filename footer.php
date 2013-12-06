<footer id="footer-strip">
  <p>&copy;2014 Grizzard Communications Group&nbsp;&nbsp;|&nbsp;&nbsp;Confidential and for the sole use of Grizzard Salvation Army clients.</p>
</footer>

  <!-- Bootstrap core JavaScript
    ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script src="js/jquery.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/holder.js"></script> 
  <script>
		$(document).ready(function(){
      var d=new Date();   
      var m=new Array();
      m[0]="JAN";
      m[1]="FEB";
      m[2]="MAR";
      m[3]="APR";
      m[4]="MAY";
      m[5]="JUN";
      m[6]="JUL";
      m[7]="AUG";
      m[8]="SEP";
      m[9]="OCT";
      m[10]="NOV";
      m[11]="DEC";
      var month = m[d.getMonth()];
      var date = d.getDate();
      $('#displayMonth').html(month);
      $('#displayDate').html(date);
      
      /* code to determine greeting (not currently used)
      
      var morning = "Good morning, ";
      var afternoon = "Good afternoon, ";
      var evening = "Good evening, ";
      var errortime = "Greetings, ";
      var time = d.getHours();      
      if (time < 12) {
        $('#greeting').html(morning);
      }
      else if (time >= 12 && time <= 17) {
        $('#greeting').html(afternoon);
      }
      else if (time > 17 && time <= 24) {
        $('#greeting').html(evening);
      }
      else {
        $('#greeting').html(errortime);
      }*/
      
			$('.carousel').carousel({
				interval: 3500,
			  wrap: true
			});
		});
	</script>
  </body>
</html>
