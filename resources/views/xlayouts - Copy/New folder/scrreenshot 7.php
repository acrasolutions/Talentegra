scrreenshot 7
<div class="alert alert-info" style="padding: 5px;">
					<table class="table noBorderTable no-margin-bottom">
					<tbody><tr>
						<td><i class="fas fa-info-circle"></i></td>
						<td>This address is publicly visible. Please give your local area/society so students know your approximate location.</td>
					</tr>
					<tr class="color-red margin-top-10-">
						<td><i class="fas fa-skull-crossbones" style="width:20px;"></i></td>
						<td>For your safety, do not give the complete address.</td>
					</tr>
					</tbody></table>
                </div>

                scrreenshot 7


                <div class="singleColumnCenterChild">
            <form id="form" action="javascript:void(0);" method="POST" class="form-horizontal  margin-bottom-10" role="form">
                  

 

 
 



<!-- msg will be static and it will not hide -->







<!-- msg will be static and it will not hide automatically-->





<!-- msg will be static and it will not hide automatically-->


<!-- defining session based msg -->

<div class="margin-bottom-15"></div>
<div class="alert alert-success-dark alert-white rounded" id="saveAlert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
	<div class="icon"><i class="fas fa-check"></i></div>
	<!-- <strong>Success!</strong> --> Personal details updated 
</div>




 <!-- delete modal start -->	
<div class="modal small fade autoWidthModal wordBreak" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"> Confirm to delete </h4>
         </div>
         <div class="modal-body stripeBg">
         		<h5 class="modal-title"> Are you sure want to delete this record? </h5>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
             <button type="button" id="delModalBtn" class="btn btn-danger"> Delete </button>
         </div>
    </div>
  </div>
</div>
<!-- delete modal end -->


<div class="modal small fade autoWidthModal wordBreak" id="customErrorMsgModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" id="customErrorMsgTitle">  </h4>
            </div>
            <div class="modal-body stripeBg">
                <h5 class="modal-title" id="customErrorMsg">  </h5>
            </div>
            <div class="modal-footer">
                <button type="button" id="errorCloseBtn" class="btn-u btn-u-red" data-dismiss="modal"> Close </button>
            </div>
        </div>
    </div>
</div>

                <input type="hidden" name="" value="">

                <div class="">
                    <h2 class="headline-">Address <small class="display-inline-block">(Publicly visible)</small></h2>
                </div>
				
                
                <div class="clear-both"></div>
				<div class="alert alert-info" style="padding: 5px;">
					<table class="table noBorderTable no-margin-bottom">
					<tbody><tr>
						<td><i class="fas fa-info-circle"></i></td>
						<td>This address is publicly visible. Please give your local area/society so students know your approximate location.</td>
					</tr>
					<tr class="color-red margin-top-10-">
						<td><i class="fas fa-skull-crossbones" style="width:20px;"></i></td>
						<td>For your safety, do not give the complete address.</td>
					</tr>
					</tbody></table>
                </div>

                
                    
                        <input type="hidden" name="addRef" id="addRef" value="">
                    

                    <div class="form-group no-margin" id="area_div">
                        <label for="" class="control-label-">Location</label>
                        <div class="">
                            <input id="autocomplete" type="text" name="inputLocationName" class="form-control tooltips pac-target-input" placeholder="" value="" onfocus="geolocate()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Please select your location from the suggested options" autocomplete="off">
                            <div id="wrongLocationNameErrorDiv" class="" style="display: none;">
                            <span class="alert alert-danger-light " id="locationErrorMsg"> </span>
                        </div>
                            <p>Tip: Be as local as you can.</p>
                        </div>
                        
                    </div>
                    

                    <div class="form-group-" id="formattedAddressForUserAddressDiv" style="display: none">
                        <label for="" class="-control-label hidden-">Location</label>
                        <div class="col-sm-5- -padding-top-5">
                            <a href="javascript:void(0);" onclick="reloadPage();"> <span id="formattedAddressForUserAddress"></span> <i class="fas fa-pencil-alt color-blue"></i></a>
                        </div>
                    </div>

                    <div class="form-group hidden" id="address1_div">
                        <label for="" class="col-sm-3 control-label">Address line 1 <br class="hidden-xs">(optional)</label>
                        <div class="col-sm-5">
                        <textarea id="address_1" class="form-control resize-to-content format-text" name="address_1" rows="2" onkeyup="" style="resize: none;"></textarea>									</div>
                    </div>

                    <div class="form-group hidden" id="address2_div">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-5">
                        <textarea id="address_2" class="form-control resize-to-content format-text" name="address_2" rows="4" readonly="" style="resize: none;"></textarea>									</div>
                    </div>

                    <div class=" hidden margin-top-20" id="postal_code_div">
                        <label for="" class="col-sm-3- control-label-">Postal code</label>
                        <div class="col-sm-5-">
                            <input id="postal_code" type="text" name="postal_code" class="form-control tooltips" placeholder="" value="" onfocus="geolocate()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Enter your postal code only if you are sure it is correct.">										<a class="hidden" id="no_postal_code" href="" onclick="showAllFields(); noPostCode(); return false;">I don't have a Postal code</a>
                        </div>
                    </div>

                    <div class="form-group hidden">
                        <label for="" class="col-sm-3 control-label">Hidden Data</label>
                        <div class="col-sm-5">
                            Json from region: <textarea id="region_json" name="region_json" rows="4" cols="100" style="resize: none;"></textarea><br>
                            Json from postcode: <textarea id="postcode_json" name="postcode_json" rows="4" cols="100" style="resize: none;"></textarea><br>
                            Address json: <textarea id="address_json" name="address_json" rows="4" cols="100" style="resize: none;"></textarea><br>
                            Search Address: <textarea id="search_address" name="search_address" rows="4" cols="100" style="resize: none;"></textarea><br>
                            Distance in miles :<input id="post_region_distance" type="text" name="post_region_distance" value=""><br>
                            Postcode Lat: <input id="lat" type="text" name="lat" value=""><br>
                            Postcode lng: <input id="lng" type="text" name="lng" value=""><br>
                            Region Lat: <input id="region_lat" type="text" name="region_lat" value=""><br>
                            Region lng: <input id="region_lng" type="text" name="region_lng" value=""><br>
                            PlaceId : <input id="placeId" type="text" name="placeId">
                            CountryShortCode : <input id="countryShortCode" type="text" name="countryShortCode">
                            CountryName :<input id="countryName" type="text" name="countryName">
                            formattedAddress :<input id="formattedAddress" type="text" name="formattedAddress">
                            GoogleLocationResponseJson: <input type="hidden" name="googleLocationUIResponseJson" id="googleLocationUIResponseJson">

                        </div>
                    </div>

                    <div class="form-group hidden" id="city_div">
                        <label for="" class="col-sm-3 control-label">Town / City</label>
                        <div class="col-sm-5">
                        <input id="locality" type="text" name="town_city" class="form-control" placeholder="" value="" readonly="">
                        </div>
                    </div>


                    <div class="form-group no-margin">
                        <div class="col-sm-offset-3- col-sm-9-">
                            <input onclick="return isFormOk();" type="submit" value="Submit" id="btnSave" class="btn btn-primary hidden margin-top-20">
                            <img id="imageLoader" style="display: none;" src="/resources/assets/img/customImages/load.gif">
                        </div>
                    </div>

                
            </form>
            
            
            <!-- get the userLocation Grid -->
	        <div class="form-horizontal- margin-bottom-40">
	            
	        </div>
        </div>

       --------fukll scrn7-------------