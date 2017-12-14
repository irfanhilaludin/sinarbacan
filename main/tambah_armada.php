<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Tambah Armada</div>
                      		  			</div>
	<div class="content-box-large box-with-header">
<a href="?page=data_armada" class="btn btn-success">Data Armada</a>
					</div>
                    
		  		</div>
                
		  	</div>

                
<div class="content-box-large">
                  <br />
                  <form class="form-horizontal input_mask" action="insert_armada.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Polisi
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="nopol" id="1" placeholder="Nomor Polisi" >
                </div>
                </div>
                                    <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Volume Muat
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
<select name="vol">
<option value="5 KL"> 5 KL </option>
<option value="8 KL"> 8 KL </option>
<option value="10 KL"> 10 KL </option>
<option value="16 KL"> 16 KL </option>
<option value="24 KL"> 24 KL </option>
<option value="32 KL"> 32 KL </option>

 </select>
                </div>
                </div>
                
                
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="reset" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>