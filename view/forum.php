<h1 class="mt-5">Wiss Form</h1>
        
        	<form method="get" action="?">
  				<input type="hidden" name="page" value="forum">
  				<input type="hidden" name="action" value="add">
  				<input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Neuer Eintrag" style="margin-left: 80%;">
			<form>
  				<fieldset>
  					<div class="form-group">
   	 				<legend id="legende">Eintrag</legend>
    				<label id="Vorname">Vorname</label>
    				<label id="Nachname">Nachname</label>
    				<label id="Daetimepicker"></label><br>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur. 
    				</textarea><br>
					<a href="eintrag.php" id="Antwort">Antwort</a>
					</div>  
</fieldset>
<fieldset>
  					<div class="form-group">
   	 				<legend id="legende">Antwort</legend>
    				<label id="Vorname">Vorname</label>
    				<label id="Nachname">Nachname</label>
    				<label id="Daetimepicker"></label><br>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur.
    				</textarea><br>
					<a href="eintrag.php" id="Antwort">Antwort</a>
					</div>  
  </fieldset>
<fieldset>
  					<div class="form-group">
    				<label id="Vorname">Vorname</label>
    				<label id="Nachname">Nachname</label>
    				<div id="time"></div><br>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur.
    				</textarea><br>
					<a href="eintrag.php" id="Antwort">Antwort</a>
					</div>  
  </fieldset>


<script language="javascript" type="text/javascript">
   var time = new Date();
   document.write(d.getDate()+"."+d.getMonth()+"."+(d.getYear()+2000));
 </script>