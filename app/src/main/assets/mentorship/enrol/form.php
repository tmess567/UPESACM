
<?php 
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	if(!empty($_POST['name']))	 
 {
	 if(!empty($_POST['email']))
	 {
		 if(!empty($_POST['branch']))
		 {
			 if(!empty($_POST['subject']))
			 
			 $con=mysqli_connect('http://upesacm.org','upesacmo_addme','acm@123','upesacmo_final') or die("Sorry Couldn't Connect To Database");
$query="CREATE TABLE mentorship(name varchar(100),email varchar(100),branch varchar(100),subject varchar(100) )";
 
echo "Thankyou for your response!";
$sql=mysqli_query($con,$query);
 $name=$_POST['name'];
 $email=$_POST['email'];
 $branch=$_POST['branch'];
 $subjects=$_POST['subject'];
 

	$subjects=$_POST['subject'];
		
	foreach($subjects as $subject){
		
		$query1="INSERT INTO mentorship(name,email,branch,subject) VALUES(`$name`,`$email`,`$branch`,`$subject`)";
		$sql=mysqli_query($con,$query1);
		
		$receiver= $_POST['email'];
		$subj = "Applied For Mentorship Subject !";
        $text = "Hello Sir! You have received this mail because you have applied for "." ".$subject." "." as a Mentorship Subject ";
        mail($receiver,$subj,$text);
		
		if($subject=="Data Mining"||$subject=="Data Warehousing"||$subject=="Operation Research"||$subject=="Business Intelligence")
		{
			$to = "ayushchandel13@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
		}
		if($subject=="Design And Analysis Of Algorithms"){
			
			$to = "yash.businessanalyst@gmail.com,anshuman1605@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
		}
	
	if($subject=="C Language")
	{
		$to = "mayank29ecom@gmail.com,simrandhamija30@gmail.com,deepankur797@gmail.com,rastogi.priyanshi1011@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);	}
	if($subject=="Data Structure Using C")
		{
		$to = "anshuman1605@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);	}
 if($subject=="HTML")	{
	 $to = "mayank29ecom@gmail.com,anshuman1605@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 
 if($subject=="CSS"){
	 $to = "simrandhamija30@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="PHP"){
	 $to = "anshuman1605@gmail.com,deepankur797@gmail.com,singhyash383@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Web Designing"){
	 $to = "sumeidh@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Web Development"){
	 $to = "tiwari.Shubham.54@hotmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from); }
 if($subject=="Web Services"){
	 $to = "manjari.dhoundiyal@hotmail.com,tiwari.Shubham.54@hotmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Event Management"){
	 $to = "mayank29ecom@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Pressure And Time"){
	 $to = "mayank29ecom@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Smart Study"){
	 $to = "mayank29ecom@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Ethical Hacking"){
	 $to = "sumeidh@gmail.com,sharma.avi14@stu.upes.ac.in";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
if($subject=="Designing"){
	 $to = "sumeidh@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Video Editing"){
	 $to = "sumeidh@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Internet Marketing/SEO"){
	 $to = "sumeidh@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Java"){
	 $to = "anshuman1605@gmail.com,rastogi.priyanshi1011@gmail.com,yash.shubh.sri@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Graphic Designing"||$subject=="Gaming"||$subject=="Music"){
	 $to = "aneeshtigga@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="GIS"){
	 $to = "manjari.dhoundiyal@hotmail.com,tiwari.Shubham.54@hotmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Geoserver"){
	 $to = "manjari.dhoundiyal@hotmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Refining/Petrochemical"){
	 $to = "manjari.dhoundiyal@hotmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="OOPS"){
	 $to = "manjari.dhoundiyal@hotmail.com,tiwari.Shubham.54@hotmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Presentation Skills"){
	 $to = "singhyash383@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Article Writing"){
	 $to = "singhyash383@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Public Speaking"){
	 $to = "sharma.avi14@stu.upes.ac.in";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Speaking Skills"){
	 $to = "rastogi.priyanshi1011@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Database Management"){
	 $to = "samikshas53@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Statics"){
	 $to = "samikshas53@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Problem Solving"){
	 $to = "samikshas53@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from); }

 if($subject=="Hadoop"){
	 $to = "yash.shubh.sri@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";

$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Python"){
	 $to = "yash.shubh.sri@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="General Life Philosophy"){
	 $to = "yash.shubh.sri@gmail.com";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Adobe After Effects"){
	 $to = "sharma.avi14@stu.upes.ac.in";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 if($subject=="Adobe Photoshop"){
	 $to = "sharma.avi14@stu.upes.ac.in";
$sub = "Applied For Mentorship Subject !";
$txt = "Hello Sir! You have received this mail because"." ".$_POST['name']." ".
" has chosen your specialised subject that is ".$subject." "." as a Mentorship Subject ";
$from = "From: ".$_POST['email'] . "\r\n" ;
mail($to,$sub,$txt,$from);
 }
 
	}
   
   }
	 }
 }
}
$con->close();
?>