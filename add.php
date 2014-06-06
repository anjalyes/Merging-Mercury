<html>
<head>
	<title>Add Movie</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body>
	<div id="head"></div>
	<form action="addmov.php" class="basic-grey" method="post">
		<label>
			<span>Add Movie: </span>
			<input type="text" name="name" size="7"><br>
		</label>
		<label>
			<span>Tags: </span>
			<input type="text" name="tags" size="7"><br>
		</label>
		<label>
			<span>Movie Description: </span>
			<textarea></textarea><br>
		</label>
		<label>
			<span>Cover Img: </span>
			<input type="file" name="pic" accept="image/*"></input><br>
		</label>
		<label>
			<span>Poster Img: </span>
			<input type="file" name="poster" accept="image/*"></input><br>
		</label>
		<label>
			<span>Rating: </span>
			<input type="text" name="rate" size="7"><br>
		</label>
		<label>
			<span>Genre: </span>
			<input type="checkbox" name="comedy" value="comedy">Comedy<br>
    		<input type="checkbox" name="drama" value="drama">Drama<br>	
		</label>
		<label>	
			<span>Year: </span>
			<select name="birthyear">
 			<option value="2014">2014</option>
		    <option value="2013">2013</option>
			<option value="2012">2012</option>
		    <option value="2011">2011</option>
		    <option value="2010">2010</option>
		    <option value="2009">2009</option>
		    <option value="2008">2008</option>		
 		   	<option value="2007">2007</option>
		    <option value="2006">2006</option>
		    <option value="2005">2005</option>
		    <option value="2004">2004</option>
		    <option value="2003">2003</option>
		    <option value="2002">2002</option>
		    <option value="2001">2001</option>
		    <option value="2000">2000</option>
		    <option value="1999">1999</option>
		    <option value="1998">1998</option>
		    <option value="1997">1997</option>
		    <option value="1996">1996</option>
		    <option value="1995">1995</option>
		    <option value="1994">1994</option>
		    <option value="1993">1993</option>
		    <option value="1992">1992</option>
		    <option value="1991">1991</option>
		    <option value="1990">1990</option>
      		</select>
      	</label>
      	<input type="submit" value="Submit">
</form>
<div id="footer">&copy; Copyright by Xincoz Labs 2014 </div>
</body>		