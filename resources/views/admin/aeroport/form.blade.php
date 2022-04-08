

<div class="container-fluid">
    
   
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="ident">Ident : </label>
                    <input type="text" id="ident" name="ident" value="{{ (isset($object)?$object->ident:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="type">Type : </label>
                    <input type="text" id="type" name="type" value="{{ (isset($object)?$object->type:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name : </label>
                    <input type="text" id="name" name="name" value="{{ (isset($object)?$object->name:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name_bis">Name_bis : </label>
                    <input type="text" id="name_bis" name="name_bis" value="{{ (isset($object)?$object->name_bis:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="lat">Lat : </label>
                    <input type="text" id="lat" name="lat" value="{{ (isset($object)?$object->lat:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="lng">Lng : </label>
                    <input type="text" id="lng" name="lng" value="{{ (isset($object)?$object->lng:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="geo_point">Geo_point : </label>
                    <input type="text" id="geo_point" name="geo_point" value="{{ (isset($object)?$object->geo_point:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="elevation_ft">Elevation_ft : </label>
                    <input type="text" id="elevation_ft" name="elevation_ft" value="{{ (isset($object)?$object->elevation_ft:null) }}" class="form-control">
                </div>
            </div>        
        </div> -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="continent">Continent : </label>
                    <input type="text" id="continent" name="continent" value="{{ (isset($object)?$object->continent:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="iso_country">Iso_country : </label>
                    <input type="text" id="iso_country" name="iso_country" value="{{ (isset($object)?$object->iso_country:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="iso_region">Iso_region : </label>
                    <input type="text" id="iso_region" name="iso_region" value="{{ (isset($object)?$object->iso_region:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="municipalite">Municipalite : </label>
                    <input type="text" id="municipalite" name="municipalite" value="{{ (isset($object)?$object->municipalite:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="scheduled_service">Scheduled_service : </label>
                    <input type="text" id="scheduled_service" name="scheduled_service" value="{{ (isset($object)?$object->scheduled_service:null) }}" class="form-control">
                </div>
            </div>        
        </div> -->
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="gps_code">Gps_code : </label>
                    <input type="text" id="gps_code" name="gps_code" value="{{ (isset($object)?$object->gps_code:null) }}" class="form-control">
                </div>
            </div>        
        </div> -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="iata_code">Iata_code : </label>
                    <input type="text" id="iata_code" name="iata_code" value="{{ (isset($object)?$object->iata_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="local_code">Local_code : </label>
                    <input type="text" id="local_code" name="local_code" value="{{ (isset($object)?$object->local_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nb_search">Nb_search : </label>
                    <input type="text" id="nb_search" name="nb_search" value="{{ (isset($object)?$object->nb_search:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nb_reservation">Nb_reservation : </label>
                    <input type="text" id="nb_reservation" name="nb_reservation" value="{{ (isset($object)?$object->nb_reservation:null) }}" class="form-control">
                </div>
            </div>        
        </div>
    
    <div style="margin-top:15px;"  class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
</div>






