<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="jquery-3.3.1"></script>
<script>
	$('#submit').click(function(){
   	if($('#option').val() == '1'){
   	alert('Input can not be left blank');}}

   	var option = document.getElementById('option').value;
	var opsi;
	if(option =='1'){
    opsi = document.getElementById('1').value;
	}
	else if(option =='2'){
    opsi = document.getElementById('1').value;
	}
	else {  	
	alert('Input can not be left blank');
	}  

document.getElementById('results').innerHTML = opsi;
</script>

<link rel="stylesheet" type="text/css" href="regis.css">
<script src="jquery-3.3.1"></script>
<div id="main">
	<div id="boxlogin">
				<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Contoh: sample@gmail.com">
    			</div>
  				<div class="form-group">
    			<label for="usernmae">Username</label>
    			<input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
    			</div>
				
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          <small id="emailHelp" class="form-text text-muted">Minimal 6 digit</small>
          </div>
        
				<div class="form-group">
    			<label for="nama">Nama</label>
    			<input type="text" class="form-control" id="nama" placeholder="Nama">
  				</div>

				
  				<div class="form-group">
    			<label for="kota">Kota</label>
    			<input type="text" class="form-control" id="kota" placeholder="Kota">
  				</div>
		
				<div class="form-group">
    			<label for="Alamat">Alamat</label>
    			<input type="text" class="form-control" id="alamat" placeholder="Alamat">
  				</div>
		
				<div class="form-group">
    			<label for="telp">Telepon</label>
    			<input type="text" class="form-control" id="cp" placeholder="Nomor telepon perusahaan">
  					
				<br><button type="submit" name="submit" id="submit">Daftar</button><br>
		</form>
	</div>
</div>
