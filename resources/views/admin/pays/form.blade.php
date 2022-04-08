

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
                    <label for="iso">Iso : </label>
                    <input type="text" id="iso" name="iso" value="{{ (isset($object)?$object->iso:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="iso3">Iso3 : </label>
                    <input type="text" id="iso3" name="iso3" value="{{ (isset($object)?$object->iso3:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="iso_numeric">Iso_numeric : </label>
                    <input type="text" id="iso_numeric" name="iso_numeric" value="{{ (isset($object)?$object->iso_numeric:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="fips">Fips : </label>
                    <input type="text" id="fips" name="fips" value="{{ (isset($object)?$object->fips:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="country">Country : </label>
                    <input type="text" id="country" name="country" value="{{ (isset($object)?$object->country:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="capital">Capital : </label>
                    <input type="text" id="capital" name="capital" value="{{ (isset($object)?$object->capital:null) }}" class="form-control">
                </div>
            </div>        
        </div>
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
                    <label for="tld">Tld : </label>
                    <input type="text" id="tld" name="tld" value="{{ (isset($object)?$object->tld:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="currency">Currency : </label>
                    <input type="text" id="currency" name="currency" value="{{ (isset($object)?$object->currency:null) }}" class="form-control">
                </div>
            </div>        
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="neighbours">Neighbours : </label>
                    <input type="text" id="neighbours" name="neighbours" value="{{ (isset($object)?$object->neighbours:null) }}" class="form-control">
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
    
    <div style="margin-top:15px;"  class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
</div>






