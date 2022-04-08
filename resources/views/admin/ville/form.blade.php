

<div class="container-fluid">
    
   
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="geonameid">Geonameid : </label>
                    <input type="text" id="geonameid" name="geonameid" value="{{ (isset($object)?$object->geonameid:null) }}" class="form-control">
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
                    <label for="asciiname">Asciiname : </label>
                    <input type="text" id="asciiname" name="asciiname" value="{{ (isset($object)?$object->asciiname:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="alternatenames">Alternatenames : </label>
                    <input type="text" id="alternatenames" name="alternatenames" value="{{ (isset($object)?$object->alternatenames:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="latitude">Latitude : </label>
                    <input type="text" id="latitude" name="latitude" value="{{ (isset($object)?$object->latitude:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="longitude">Longitude : </label>
                    <input type="text" id="longitude" name="longitude" value="{{ (isset($object)?$object->longitude:null) }}" class="form-control">
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
                    <label for="nb_search">Nb_search : </label>
                    <input type="text" id="nb_search" name="nb_search" value="{{ (isset($object)?$object->nb_search:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="weight">Weight : </label>
                    <input type="text" id="weight" name="weight" value="{{ (isset($object)?$object->weight:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="feature_class">Feature_class : </label>
                    <input type="text" id="feature_class" name="feature_class" value="{{ (isset($object)?$object->feature_class:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="feature_code">Feature_code : </label>
                    <input type="text" id="feature_code" name="feature_code" value="{{ (isset($object)?$object->feature_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="country_code">Country_code : </label>
                    <input type="text" id="country_code" name="country_code" value="{{ (isset($object)?$object->country_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="cc2">Cc2 : </label>
                    <input type="text" id="cc2" name="cc2" value="{{ (isset($object)?$object->cc2:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="admin1_code">Admin1_code : </label>
                    <input type="text" id="admin1_code" name="admin1_code" value="{{ (isset($object)?$object->admin1_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="admin2_code">Admin2_code : </label>
                    <input type="text" id="admin2_code" name="admin2_code" value="{{ (isset($object)?$object->admin2_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="admin3_code">Admin3_code : </label>
                    <input type="text" id="admin3_code" name="admin3_code" value="{{ (isset($object)?$object->admin3_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="admin4_code">Admin4_code : </label>
                    <input type="text" id="admin4_code" name="admin4_code" value="{{ (isset($object)?$object->admin4_code:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="population">Population : </label>
                    <input type="text" id="population" name="population" value="{{ (isset($object)?$object->population:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="dem">Dem : </label>
                    <input type="text" id="dem" name="dem" value="{{ (isset($object)?$object->dem:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="timezone">Timezone : </label>
                    <input type="text" id="timezone" name="timezone" value="{{ (isset($object)?$object->timezone:null) }}" class="form-control">
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






