    <?php include ("./header.php"); ?>
    

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Advanced Plugins</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Advanced Plugins</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Select 2
                                    <a class="btn btn-xs btn-default m-l-5" href="https://select2.github.io/" target="_blank">Official site</a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="form-group">
                                    <label class="form-control-label">Single select</label>
                                    <select class="form-control select2_style1">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Multiple select</label>
                                    <select class="form-control select2_style2" multiple="">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">With Placeholder & allow clear</label>
                                    <select class="form-control select2_demo_2">
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Data picker
                                    <a class="btn btn-default btn-xs" href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">Official site</a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="form-group" id="date_1">
                                    <label class="font-normal"></label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="04/12/2017">
                                    </div>
                                </div>
                                <div class="form-group" id="date_2">
                                    <label class="font-normal">One Year view</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="07/11/2017">
                                    </div>
                                </div>
                                <div class="form-group" id="date_3">
                                    <label class="font-normal">Decade view</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="08/12/2017">
                                    </div>
                                </div>
                                <div class="form-group" id="date_4">
                                    <label class="font-normal">Month select</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="06/12/2017">
                                    </div>
                                </div>
                                <div class="form-group" id="date_5">
                                    <label class="font-normal">Range select</label>
                                    <div class="input-daterange input-group" id="datepicker">
                                        <input class="input-sm form-control" type="text" name="start" value="04/12/2017">
                                        <span class="input-group-addon p-l-10 p-r-10">to</span>
                                        <input class="input-sm form-control" type="text" name="end" value="08/17/2018">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Inline</label>
                                    <div id="date_6" data-date-format="mm/dd/yyyy"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Timepicker
                                    <a class="btn btn-default btn-xs" href="https://jdewit.github.io/bootstrap-timepicker/" target="_blank">Official site</a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="input-group bootstrap-timepicker timepicker" data-autoclose="true">
                                    <input class="form-control" type="text">
                                    <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">jQuery MiniColors
                                    <a class="btn btn-default btn-xs" href="http://labs.abeautifulsite.net/jquery-minicolors/" target="_blank">Official site</a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="form-group">
                                    <label>Hue (default)</label>
                                    <input class="form-control minicolors" type="text" data-control="hue" value="#F75A5F">
                                </div>
                                <div class="form-group">
                                    <label>Saturation</label>
                                    <input class="form-control minicolors" type="text" data-control="saturation" value="#18C5A9">
                                </div>
                                <div class="form-group">
                                    <label>Brightness</label>
                                    <input class="form-control minicolors" type="text" data-control="brightness" value="#F39C12">
                                </div>
                                <div class="form-group">
                                    <label>Wheel</label>
                                    <input class="form-control minicolors" type="text" data-control="wheel" value="#23B7E5">
                                </div>
                                <div class="form-group">
                                    <label>Hidden input</label>
                                    <input class="form-control minicolors" type="hidden" value="#3498DB">
                                </div>
                                <div class="form-group">
                                    <label>RGB</label>
                                    <input class="form-control minicolors" type="text" data-format="rgb" value="rgb(33, 147, 58)">
                                </div>
                                <div class="form-group">
                                    <label>RGBA</label>
                                    <input class="form-control minicolors" type="text" data-format="rgb" data-opacity="0.50" value="rgba(52, 64, 158, 0.5)">
                                </div>
                                <div class="form-group">
                                    <label>Swatches</label>
                                    <input class="form-control minicolors" type="text" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|#0ff" value="#17e8c9">
                                </div>
                                <div class="form-group">
                                    <label>Swatches and opacity</label>
                                    <input class="form-control minicolors" type="text" data-format="rgb" data-opacity="0.50" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)" value="rgba(14, 206, 235, .5)">
                                </div>
                                <div class="form-group">
                                    <label>bottom right</label>
                                    <input class="form-control minicolors" type="text" data-position="bottom right" value="#6654a8">
                                </div>
                                <p>Valid positions include <code>bottom left</code>, <code>bottom right</code>, <code>top left</code>, and <code>top right</code>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Knob - Dial
                                    <a class="btn btn-xs btn-default m-l-5" href="https://github.com/aterrien/jQuery-Knob" target="_blank">Official site</a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="row">
                                    <div class="col-sm-4 m-b-20">
                                        <input class="dial" value="45" data-width="85" data-height="85" type="text">
                                    </div>
                                    <div class="col-sm-4 m-b-20">
                                        <input class="dial" value="550" data-width="85" data-height="85" data-thickness=".2" data-fgcolor="#18C5A9" data-min="-1000" data-max="1000" data-step="10" data-displayprevious="true" type="text">
                                    </div>
                                    <div class="col-sm-4 m-b-20">
                                        <input class="dial" value="20" data-width="85" data-height="85" data-fgcolor="#f75a5f" data-cursor="true" data-thicknessx=".3" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 m-b-20">
                                        <input class="dial" value="45" data-width="85" data-height="85" data-fgcolor="#F39C12" data-angleoffset="90" type="text">
                                    </div>
                                    <div class="col-sm-4 m-b-20">
                                        <input class="dial" value="10.4" data-width="85" data-height="85" data-fgcolor="#2CC4CB" data-step=".1" data-min="-100" data-displayprevious="true" type="text">
                                    </div>
                                    <div class="col-sm-4 m-b-20">
                                        <input class="dial" value="42" data-width="85" data-height="85" data-fgcolor="#f75a5f" data-angleoffset="-125" data-anglearc="250" data-rotation="anticlockwise" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 m-b-20 text-center">
                                        <input class="dial" value="0" data-width="110" data-height="110" data-thickness=".2" data-fgcolor="#18C5A9" data-max="500" data-min="-500" data-displayprevious="true" type="text">
                                    </div>
                                    <div class="col-sm-6 m-b-20 text-center">
                                        <input class="dial" value="22.6" data-width="110" data-height="110" data-fgcolor="#2CC4CB" data-step=".1" data-min="-100" data-displayprevious="true" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                        <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                        <div class="wrap-1">
                            <div class="wrap-2">
                                <div>
                                    <img src="./assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                                </div>
                                <div class="color-white" style="margin-left:40px;">
                                    <h1 class="font-bold">ADMINCA</h1>
                                    <p class="font-16">Save your time, choose the best</p>
                                    <ul class="list-unstyled">
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                        <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                                    </ul>
                                </div>
                            </div>
                            <div style="flex:1;">
                                <div class="d-flex justify-content-end wrap-3">
                                    <div class="adminca-banner-b m-r-20">
                                        <img src="./assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                                    <div class="adminca-banner-b m-r-10">
                                        <img src="./assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                                </div>
                                <div class="dev-img">
                                    <img src="./assets/img/adminca-banner/sprite.png" />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            
            <?php include ("./footer.php"); ?>