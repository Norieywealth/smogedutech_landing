     <!-- Input Rows For school name and country where school is located-->
                          <div class="row m-4">
                            <div class="form-group col-lg-6">
                              <label for="school_name">School Name</label>
                              <input type="text" name="school_name" class="form-control" id="school_name" >
                              <div id="school_name_error"></div>
                            </div>
                            <div class="form-group col-lg-6 mt-3 mt-lg-0">
                              <label for="school_country">Country Where School Is Located</label>
                              <select name="school_country" class="form-control" id="school_country" >
                                <option selected="selected" value=""> -- Choose Country --</option>
                                <option value="USA">USA</option>
                                <option value="Nigeria">Nigeria</option>
                              </select>
                              <div id="school_country_error"></div>
                            </div>
                          </div>
                   <!-- End of row for school name and country where school is located-->

                    <!-- Input Rows For state and address-->
                <div class="row m-4">
                  <div class="form-group col-lg-6">
                    <label for="school_state">State Where School Is Located</label>
                    <select name="school_state" class="form-control" id="school_state" >
                      <option selected="selected" value="">-- Choose State --</option>
                      <option value="Lagos">Lagos</option>
                    </select>
                    <div id="school_state_error"></div>

                    <!-- Other state if not Nigeria -->
                    <input type="text" name="school_other_state" id="school_other_state" class="form-control" style="display:none;">
                    <div id="school_other_state_error"></div>
                    <!-- End of other state -->
                  </div>
                  <!-- Address -->
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <label for="school_address">Address Where School Is Located</label>
                    <textarea rows="5" name="school_address" class="form-control" id="school_address" ></textarea>
                    <div id="school_address_error"></div>
                  </div>
                  <!-- End of Address -->
                </div>
                <!-- End of input rows for state and address-->

                 <!-- Input Rows For role in school and population-->
                <div class="row m-4">
                  <div class="form-group col-lg-6">
                    <label for="role_in_school">Role In School</label>
                    <input type="text" name="role_in_school" class="form-control" id="role_in_school" >
                    <div id="role_in_school_error"></div>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <label for="school_population">Population</label>
                    <select name="school_population" class="form-control" id="school_population">
                      <option selected="selected" value=""> -- Choose Population --</option>
                      <option value="100 - 250">100 - 250</option>
                      <option value="251 - 300">251 - 300</option>
                      <option value="Above 300">Above 300</option>
                    </select>
                    <div id="school_population_error"></div>
                  </div>
                </div>
                <!-- End of input rows for role in school and population-->

                <!-- Input Rows For is Stem-->
                <div class="row m-4">
                  
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <label for="is_stem">Do You Have An Existing STEM Program Running In Your School?</label>
                    <select name="is_stem" class="form-control" id="is_stem">
                      <option selected="selected" value=""> -- Choose Answer --</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                    <div id="is_stem_error"></div>
                  </div>
                </div>
                <!-- End of input rows for is Stem? -->