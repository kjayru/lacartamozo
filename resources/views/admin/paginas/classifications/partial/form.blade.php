            <form class="form-horizontal" id="fr-franchise" enctype="multipart/form-data" >
                  
                  <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo" value="PUT">
                        <input type="hidden" name="franchise_id" id="franchise_id" value="">

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="names">Nombre</label>  
                            <div class="col-md-8">
                            <input id="names" name="names" style="background-color: #e5e5e5;" type="text" placeholder="Nombre" class="form-control input-md">                        
                            </div> 
                        </div> 
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="names">Descripcion</label>  
                            <div class="col-md-8">
                            <input id="names" name="names" style="background-color: #e5e5e5;" type="text" placeholder="Descripcion" class="form-control input-md">                        
                            </div> 
                        </div> 
                        <img id='img-upload' class="img-responsive" style="padding: 15px; "/> 
                      </div>
                <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </form>