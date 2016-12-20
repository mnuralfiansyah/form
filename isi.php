 <?php
SESSION_START();
require_once 'koneksi.php';
 ?>
<center>
<div class="row">
	<div class="col s4"></div>
	<div class="col s4">	  
	  <div class="progress">
		  <div class="determinate" style="width: <?php echo $status ; ?>%"></div>
	  </div>   <?php echo $status ; ?> % Dari Semua Pemilih
	</div> 
</div>
</center>
<!--
<div class="row">
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	
</div>    -->  

<div class="row">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >Presentase Pemilih Mr. A</div> 
	<div class="col s1" ></div>
	<div class="col s4" align="center" >Presentase Pemilih Mrs. B</div>
	<div class="col s1" ></div>
</div> 
<!--
<div class="row">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >Mr. A</div> 
	<div class="col s1" ></div>
	<div class="col s4" align="center" >Mrs. B</div>
	<div class="col s1" ></div>
</div>     -->    

<div class="row"  id="t">
	<div class="col s3" ></div>
	<div class="col s2"  align="center"><?php echo $kandidat1 ; ?>%</div> 
	<div class="col s3"  ></div>
	<div class="col s2"  align="center"><?php echo $kandidat2 ; ?>%</div> 
	<div class="col s2"></div>
</div> <!--
<div class="row">
	<div class="col s1" id="1">1</div>
	<div class="col s1" id="2">1</div>
	<div class="col s1" id="3">1</div>
	<div class="col s1" id="4">1</div>
	<div class="col s1" id="5">1</div>
	<div class="col s1" id="6">1</div>
	<div class="col s1" id="7">1</div>
	<div class="col s1" id="8">1</div>
	<div class="col s1" id="9">1</div>
	<div class="col s1" id="10">1</div>
	<div class="col s1" id="11">1</div>
	<div class="col s1" id="12">1</div>
</div>  -->
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" ><img style="width:50px; height:55px;" alt="2" src="2.jpg"/></div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" ><img style="width:50px; height:55px;" alt="1" src="1.jpg"/></div> 
	<div class="col s1"></div>
</div> 

<?php

if (empty($_SESSION['id']))
{ 
	if ($_SESSION['status']==2)
	{
		if (!empty($_SESSION['name']))
		{
?>	
<div class="row"  id="t">
	<div class="col s3" ></div>
	<div class="col s2"  align="center">
		<a class="btn-floating btn-large red" href="hasil.php?id=1">
			<i class="large material-icons">mode_edit</i>
		</a>
	</div> 
	<div class="col s3"  ></div>
	<div class="col s2" align="center">
		<a class="btn-floating btn-large red" href="hasil.php?id=2">
			<i class="large material-icons">mode_edit</i>
		</a> 
	</div> 
	<div class="col s2"></div>
</div>
<?php
		}
	}
}
?>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="left" >Visi</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="left" >Visi</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >" Menjadikan yang saya pimpin Menjadi lebih baik "</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >" melanjutkan program yang sudah ada dengan penambahan sedikit "</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="left" >Misi</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="left" >Misi</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >1. Memperbaharui yang sudah ada</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >1. Melanjutkan Program yang sudah ada</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >2. Memperbaharui yang sudah ada</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >2. Melanjutkan Program yang sudah ada</div> 
	<div class="col s1"></div>
</div>  
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >3. Memperbaharui yang sudah ada</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >3. Melanjutkan Program yang sudah ada</div> 
	<div class="col s1"></div>
</div>