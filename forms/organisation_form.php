<!-- Input Rows For organisation name and country where organisation is located-->
                          <div class="row m-4">
                            <div class="form-group col-lg-6">
                              <label for="organisation_name">Organisation Name</label>
                              <input type="text" name="organisation_name" class="form-control" id="organisation_name" >
                              <div id="organisation_name_error"></div>
                            </div>
                            <div class="form-group col-lg-6 mt-3 mt-lg-0">
                              <label for="organisation_country">Country Where Organisation Is Located</label>
                              <select name="organisation_country" class="form-control" id="organisation_country" >
                                <option selected="selected"> -- Choose Country --</option>
                                <option value="USA">USA</option>
                                <option value="Nigeria">Nigeria</option>
                              </select>
                              <div id="organisation_country_error"></div>
                            </div>
                          </div>
                   <!-- End of row for organisation name and country where organisation is located-->

              <!-- Input Rows For role in organisation and state-->
                <div class="row m-4">
                  <div class="form-group col-lg-6">
                    <label for="organisation_state">State Where Organisation Is Located</label>
                    <select name="organisation_state" class="form-control" id="organisation_state" >
                      <option selected="selected" value="">-- Choose State --</option>
                      <option value="Lagos">Lagos</option>
                    </select>
                    <div id="organisation_state_error"></div>

                    <!-- Other state if not Nigeria -->
                    <input type="text" name="organisation_other_state" id="organisation_other_state"  class="form-control" style="display:none;">
                    <div id="organisation_other_state_error"></div>
                    <!-- End of other state -->
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="role_in_organisation">Role In Organisation</label>
                    <input type="text" name="role_in_organisation" class="form-control" id="role_in_organisation" >
                    <div id="role_in_organisation_error"></div>
                  </div>
                  
                </div>  
                <!-- End of input rows for role in organisation and state-->


 <!-- Input Rows For brief and address-->
                <div class="row m-4">
                  <!-- Brief -->
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <label for="brief">Give A Brief About Your Organisation</label>
                    <textarea rows="5" name="brief" class="form-control" id="brief"></textarea>
                    <div id="brief_error"></div>
                  </div>
                  <!-- End of brief -->
                  <!-- Address -->
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <label for="organisation_address
                    ">Address Where Organisation Is Located</label>
                    <textarea rows="5" name="organisation_address" class="form-control" id="organisation_address" ></textarea>
                    <div id="organisation_address_error"></div>
                  </div>
                  <!-- End of Address -->
                </div>
                <!-- End of input rows for brief and address-->

                