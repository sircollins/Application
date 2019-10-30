<div class="tab-pane" id="enrollment">
    <div class="row">
        <h4 class="info-text"> Enrollment Options.</h4>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">dns</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Enrollment Type</label>
                <select name="enrol_type" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="Day_Scholar"> Day Scholar </option>
                    <option value="Boarder"> Boarder </option>
                </select>
            </div>
        </div>
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">location_on</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">School Branch</label>
                <select name="school_branch" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="Midrand">TaalNET Midrand </option>
                    <option value="Randburg">TaalNET Randburg </option>
                    <option value="Kempton_Park">TaalNET Kempton Park </option>
                    <option value="Roodepoort">TaalNET Roodepoort </option>
                    <option value="Hazyview">TaalNET Hazyview </option>
                    <option value="Turffontein">TaalNET Johannesburg - Turffontein </option>
                    <option value="Germiston">TaalNET Germiston - Buela Park </option>
                    <option value="New_Havard">TaalNET New Havard College </option>
                    <option value="Pretoria">TaalNET Pretoria </option>
                    <option value="Glendale">TaalNET Zim Glendale </option>
                    <option value="Eastview">TaalNET Zim Eastview </option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">date_range</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Start Year</label>
                <select name="startyear" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
            </div>
        </div>
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">school</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Previous School</label>
                <input name="previous_school" type="text" class="form-control">
            </div>
        </div>
    </div>
</div>