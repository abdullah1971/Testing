<!--====================================
=            variable lists            =
=====================================-->


<?php
	
	//$final_image_path = base_url().'upload/video_generator/image/'.$user_id.'/'.$image_list[0]; 




?>

<!--====  End of variable lists  ====-->





<!--==================================
=            view section            =
===================================-->

<section class="content" style="padding: 0; margin: 0;">
    <div class="row">

      <input id="hidden_saved_image_list" type="hidden" name="" value="<?php foreach ($image_list as $single_image){

        echo "$single_image,";

      } ?>">

      <input id="hidden_user_id" type="hidden" name="" value="<?php echo $user_id; ?>">

    	<form id="title_and_audio_form" class="form-horizontal" action="/action_page_binary.asp" method="post" enctype="multipart/form-data">

          <div class="row">
            

            <div class="col-md-4" style="padding-left: 30px;">
              
              <div class="form-group">
                <label for="video_title" class="col-sm-3 control-label">Video Title</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="video_title" placeholder="Video Title">
                </div>
              </div>

            </div>

            <div class="col-md-4">
              
              <div class="form-group">
                <label for="audio_file" class="col-sm-3 control-label">Audio File</label>
                <!-- <label for="music"><?php echo $this->lang->line("Background Music")?></label> -->

                <div class="col-sm-8">
                  <!-- <input type="file" class="form-control" id="audio_file" placeholder="Audio File"> -->
                  
                   
                   <input type="text" name="music" location="music" class="form-control file-manager" placeholder="Choose background music from gallery"> 
                      <!-- <span><?php echo $this->lang->line("Choose background music from gallery")?></span>
                      <i><?php echo form_error('music'); ?></i>  -->
                  
                </div>
              </div>

            </div>

            <div class="col-md-3">
              
              <div class="form-group">
                <label for="audio_file" class="col-sm-3 control-label">Dimention</label>

                <div class="col-sm-8">

                    <select id="dimention_option" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" <?php
                         if($has_photo_in_directory != 0){

                            echo "disabled";
                         }
                      ?>>

                       

                      <?php  if($has_photo_in_directory != 0): ?>

                           <option selected="selected"><?php echo $image_width; ?> x <?php echo $image_height; ?></option>
                        
                      <?php else: ?>  

                          <option selected="selected">1920 x 1080</option>
                          <option>1080 x 1920</option>
                          <option>1280 x 720</option>
                          <option>720 x 1280</option>
                          <option>1024 x 576</option>
                          <option>576 x 1024</option>
                          <option>768 x 432</option>
                          <option>432 x 768</option>
                          <option>512 x 288</option>
                          <option>288 x 512</option>
                          <option>256 x 144</option>
                          <option>144 x 256</option>
                          
                      <?php endif; ?>  

                      
                    </select>


                                
                  <!-- <input type="text" class="form-control" id="audio_file" placeholder="Audio File"> -->
                </div>
              </div>

            </div>

            <div class="col-md-1">
              
              <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>

            </div>


          </div>
    	  
            
          <!--     <br>
              
            </div> -->
            
    	             
    	</form>

    	<div class="clearfix">
    		
    	</div>

        <div id="create_video_left_navigation_div" class="col-md-3">
            

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">



              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingOne"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="panel-title">
                    
                      Background Image
                    
                  </h4>
                </div>


                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div id="collapse_1_body" class="panel-body">
                    
                  	<div class="form-group">

                  	    <!-- <label for="background_image">Background Image</label> -->
                        <!-- <input type="file" class="form-control" id="background_image"> -->


                      <div class="input-file-container">  
                          <input class="input-file" id="background_image" type="file">
                          <label tabindex="0" for="background_image" class="input-file-trigger">Select a file...</label>
                      </div>
                      <p class="file-return"></p><br>

                        
                      <a class="btn btn-warning search_image_styling" data-toggle="modal" href='#search_modal' id="background_image_plugin_button"><i class="fa fa-photo"></i> <?php echo $this->lang->line("search & find image");?></a>


                  	</div>

                  </div>
                </div>

              </div>




              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingTwo"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4 class="panel-title">
                    
                      Foreground Image
                    
                  </h4>
                </div>


                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div id="collapse_2_body" class="panel-body">
                    

                  	<div class="form-group">

                  	    <label class="foreground_image_heading" for="foreground_image_1"><h5><b>Foreground Image 1</b></h5></label>

                        <div class="input-file-container">  
                            <input class="input-file" id="foreground_image_1" type="file">
                            <label tabindex="0" for="foreground_image_1" class="input-file-trigger">Select a file...</label>
                        </div>
                        <p class="file-return"></p><br>

                          
                        <a class="btn btn-warning search_image_styling" data-toggle="modal" href='#search_modal' id="background_image_plugin_button"><i class="fa fa-photo"></i> <?php echo $this->lang->line("search & find image");?></a>

                  	    

                  	</div> <hr>

                  	<div id="foreground_image_add_button_div" class="form-group">

                  	    <!-- <input type="file" class="form-control" id="foreground_image_1"> -->
                  	    <button type="" id="image_section_add_button" class="form-group btn btn-info pull-right">Add Another Image</button>

                  	</div>





                  </div>
                </div>

              </div>



              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingThree"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h4 class="panel-title">
                    
                      Foreground Text
                    
                  </h4>
                </div>


                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div id="collapse_3_body" class="panel-body">
                    
                    <div class="form-group" style="padding-left: 10px;">

                        <label for="foreground_text_1""><h5><b>Foreground Text 1</b></h5></label>

                        <input type="text" class="form-control" id="foreground_text_1"><br>

                        <div class="row" style="padding: 10px;">

                          <div class="col-md-6">
                            
                            <label for="foreground_text_1_font_size">Font Size</label>

                            <input type="number" class="form-control" id="foreground_text_1_font_size" min="0">

                          </div>

                          <div class="col-md-6">
                            
                            <label for="foreground_text_1_color">Color</label>

                            <input id="foreground_text_1_color" type="color" class="form-control">

                          </div>
 
                        </div>

                        <br>


                        <div class="row" style="padding: 10px;">

                          <div class="col-md-12">
                            
                            <label for="foreground_text_1_font_family">Font Family</label>

                            <select id="foreground_text_1_font_family" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">

                              <option>1920 x 1080</option>
                              <option>1080 x 1920</option>
                              <option>1280 x 720</option>
                              <option>720 x 1280</option>
                              <option selected>1024 x 576</option>
                              <option>576 x 1024</option>
                              <option>768 x 432</option>
                              <option>432 x 768</option>
                              <option>512 x 288</option>
                              <option>288 x 512</option>
                              <option>256 x 144</option>
                              <option>144 x 256</option>

                            </select>

                          </div>

                          
                        </div>

                    </div>

                    <div id="foreground_text_add_button_div" class="form-group">

                        <!-- <input type="file" class="form-control" id="foreground_text_1"> -->
                        <button type="" id="text_section_add_button" class="form-group btn btn-info pull-right">Add Another Image</button>

                    </div>

                  </div>
                </div>
              </div>


              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingFour"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <h4 class="panel-title">
                    
                      Image filters
                    
                  </h4>
                </div>


                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div id="collapse_3_body" class="panel-body">

                    <h4 class="alert-warning" style="margin-left: 7px; text-align: center;"> Please select image (by clicking) before applying effect </h4>

                    <div id="image_filter_div" class="row">

                      <div id="image_filter_crop_popover" class="col-md-4 single_image_filter_div">
                        <i title="Crop Image" class="fa fa-crop fa-5x" aria-hidden="true" style="padding-left: 8px;"></i>
                        <!-- <p>Crop</p> -->
                      </div>

                      <div id="image_filter_resize_popover" class="col-md-4 single_image_filter_div">
                        <i title="Resize Image" class="fa fa-expand fa-5x" aria-hidden="true" style="padding-left: 12px;"></i>
                        <!-- <i class="icon-repeat"></i> -->
                      </div>

                      <div id="image_filter_enhance_popover" class="col-md-4 single_image_filter_div">
                        <i title="Enhance Image" class="fa fa-adjust fa-5x" aria-hidden="true" style="padding-left: 12px;"></i>
                      </div>

                      <div id="image_filter_rotate_popover" class="col-md-4 single_image_filter_div">
                        <i title="Rotate Image" class="fa fa-repeat fa-5x" aria-hidden="true" style="padding-left: 14px;"></i>
                      </div>

                      <div id="image_filter_fill_popover" class="col-md-4 single_image_filter_div">
                        <i title="Fill with color" class="fa fa-eyedropper fa-5x" aria-hidden="true" style="padding-left: 7px;"></i>
                      </div>

                      <div id="image_filter_blur_popover" class="col-md-4 single_image_filter_div">
                        <i title="Blur Image" class="fa fa-tint fa-5x" aria-hidden="true" style="padding-left: 20px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


        </div>

        <div id="create_video_main_content_div" class="col-md-9">
            
          <div id="image_navigation_bar">
            

            <ul id="image_navigation_list" class="pagination pagination-lg pg-darkgrey" style="display: block;">

            </ul>


            <button id="delete_saved_image_button" type="" class="image_editing_buttons btn btn-danger">Delete</button>
            <button id="save_created_image_button" type="" class="image_editing_buttons btn btn-success">Save</button>
            <button id="download_created_image_button" type="" class="image_editing_buttons btn btn-info">Download</button>
            


          </div>

          <div id="canvas_container">
            
          </div>



        </div>
    </div>
</section>







<!--====  End of view section  ====-->
	





<!--===================================
=            style section            =
====================================-->

<style type="text/css" media="screen">
    
    #create_video_left_navigation_div{

        padding: 0;
        background: #1a2226;
        height: 80vh;
        overflow: auto;
    }

    #title_and_audio_form{

      background: #ecf0f5;
      padding-top: 20px;

    }


    .panel-group .panel{

      border-radius: 0px;
    }


    .panel-group .panel+.panel {

          margin-top: 0px;
    }


    .panel-heading{


      text-align: center;
      padding-top: 25px;
    }


    #image_navigation_bar{

      margin-left: -15px;
      margin-top: -20px;

    }



    .image_editing_buttons{

      padding: 13px 17px;
      margin-right: -4px;
    }



    #canvas_container{

      width: 130vh;
      overflow-x: auto;
      overflow-y: auto;
      margin-left: -15px;
    }

    
    /* file upload input style */

    .search_image_styling{

      margin-left: 25%;
    }

    .foreground_image_heading{

      font-style: italic;
      text-decoration: underline;
      margin-left: 35%;
    }

    .input-file-container {
      position: relative;
      width: 225px;
      margin-left: 18%;
    } 
    .js .input-file-trigger {
      display: block;
      padding: 14px 45px;
      background: #39D2B4;
      color: #fff;
      font-size: 1em;
      transition: all .4s;
      cursor: pointer;
      text-align: center;
    }
    .js .input-file {
      position: absolute;
      top: 0; left: 0;
      width: 225px;
      opacity: 0;
      padding: 14px 0;
      cursor: pointer;
    }
    .js .input-file:hover + .input-file-trigger,
    .js .input-file:focus + .input-file-trigger,
    .js .input-file-trigger:hover,
    .js .input-file-trigger:focus {
      background: #34495E;
      color: #39D2B4;
    }

    .file-return {
      margin: 0;
    }
    .file-return:not(:empty) {
      margin: 1em 0;
    }
    .js .file-return {
      font-style: italic;
      font-size: .9em;
      font-weight: bold;
    }
    .js .file-return:not(:empty):before {
      content: "Selected file: ";
      font-style: normal;
      font-weight: normal;
    }






    /* Useless styles, just for demo styles */

    
    .txtcenter {
      margin-top: 4em;
      font-size: .9em;
      text-align: center;
      color: #aaa;
    }
    .copy {
      margin-top: 2em;
    }
    .copy a {
      text-decoration: none;
      color: #1ABC9C;
    }



    /* for image filter */
    #image_filter_div{

      margin: 20px 20px;
    }

    .single_image_filter_div{

      padding: 15px 10px 15px;
    }

    .single_image_filter_div:hover{

      background: gray;
    }

    .imageFilterRadioIntendtion{

      margin-left: 15px;
    }

    /*.popover-content {
      height: 400px;
      overflow: auto;
     }*/


     .scrollbar
     {
      margin-left: 30px;
      float: left;
      height: 300px;
      width: 65px;
      background: #F5F5F5;
      overflow-y: scroll;
      margin-bottom: 25px;
     }


     /*
      *  STYLE 2
      */

     #style-2::-webkit-scrollbar-track
     {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      border-radius: 10px;
      background-color: #F5F5F5;
     }

     #style-2::-webkit-scrollbar
     {
      width: 12px;
      background-color: #F5F5F5;
     }

     #style-2::-webkit-scrollbar-thumb
     {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #555;
     }



</style>

<!--====  End of style section  ====-->




<!--====================================
=            script section            =
=====================================-->

<script type="text/javascript">


  document.querySelector("html").classList.add('js');

  var fileInput  = document.querySelector( ".input-file" ),  
      button     = document.querySelector( ".input-file-trigger" ),
      the_return = document.querySelector(".file-return");
        
  button.addEventListener( "keydown", function( event ) {  
      if ( event.keyCode == 13 || event.keyCode == 32 ) {  
          fileInput.focus();  
      }  
  });
  button.addEventListener( "click", function( event ) {
     fileInput.focus();
     return false;
  });  
  fileInput.addEventListener( "change", function( event ) {  
      the_return.innerHTML = this.value;  
  });  


  /*----------  variable lists  ----------*/
  
  var canvas_height = 576;
  var canvas_width = 1024;
  var foreground_image_number = 1;
  var foreground_text_number = 1;

  var saved_image_list = [];
  var navigation_image_no;

  var stage;
  var layer;


  var konva_background_image;

  var konva_foreground_image_1;
  var konva_foreground_image_2;
  var konva_foreground_image_3;
  var konva_foreground_image_4;
  var konva_foreground_image_5;

  var konva_foreground_text_1;
  var konva_foreground_text_2;
  var konva_foreground_text_3;
  var konva_foreground_text_4;
  var konva_foreground_text_5;


  var layer_child_number = 0;
  var layer_child = [];
  layer_child["foreground_image"] = [];


  var content_number = [];    // this is for preventing from creating 2 things with same indicator

  content_number['background_image'] = 1;

  content_number['foreground_image_1'] = 1;
  content_number['foreground_image_2'] = 1;
  content_number['foreground_image_3'] = 1;
  content_number['foreground_image_4'] = 1;
  content_number['foreground_image_5'] = 1;

  content_number['foreground_text_1'] = 1;
  content_number['foreground_text_2'] = 1;
  content_number['foreground_text_3'] = 1;
  content_number['foreground_text_4'] = 1;
  content_number['foreground_text_5'] = 1;


  var layer_child_number = 0;
  var layer_child = [];  // this is for setting layer child number of which type and which number file 
  var base_url = "<?php echo base_url(); ?>";


  var plugin_image_name;
  var plugin_image_number;
  var plugin_image_source;

  var image_filter_name = [];
  var image_filter_value = [];

  var current_selected_image;





  /*----------  functions definations  ----------*/
  
  function check_and_set_image_src(){

    
    

    // check if there are image for this navigation
    var temp = navigation_image_no - 1;
    temp = temp.toString();
    var has_image = saved_image_list.indexOf(temp);
    

    

    if(has_image != -1){

      
      layer.destroyChildren();    
      layer.draw();

      var temp_image_list = $("#hidden_saved_image_list").val();

      var image_list = temp_image_list.split(',');
      
      
      

      var user_id = $("#hidden_user_id").val();
      user_id = parseInt(user_id);

      var image_path = window.location.origin + '/video_generator/upload/video_generator/image/' + user_id + '/' + image_list[has_image];

      konva_background_image.src = image_path;
      
      $("#background_image").prop('disabled', true);

      
      var temp_layer_child = [];
      temp_layer_child[0] = layer_child_number++;
      layer_child['background_image'] = temp_layer_child;

      layer.draw();

      
    }
    else{

      
          

      /*var layer_child_num = Konva.Collection.toCollection(layer.children).length;
      while(layer_child_num--){

        layer.destroyChildren();
        layer.draw();
        console.log(layer_child_num);
      }*/


      layer.destroyChildren();
      $("#background_image").prop('disabled', false);
      
      layer.draw();



      
    }


  }

 
  /*----------  reset content_number array  ----------*/
  function reset_content_number_array(){

    content_number['background_image'] = 1;

    content_number['foreground_image_1'] = 1;
    content_number['foreground_image_2'] = 1;
    content_number['foreground_image_3'] = 1;
    content_number['foreground_image_4'] = 1;
    content_number['foreground_image_5'] = 1;

    content_number['foreground_text_1'] = 1;
    content_number['foreground_text_2'] = 1;
    content_number['foreground_text_3'] = 1;
    content_number['foreground_text_4'] = 1;
    content_number['foreground_text_5'] = 1;

  }


  /*----------  data url to blob  ----------*/
  // function dataURItoBlob(dataURI) {
  //   // convert base64 to raw binary data held in a string
  //   // doesn't handle URLEncoded DataURIs - see SO answer #6850276 for code that does this
  //   var byteString = atob(dataURI.split(',')[1]);

  //   // separate out the mime component
  //   var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0]

  //   // write the bytes of the string to an ArrayBuffer
  //   var ab = new ArrayBuffer(byteString.length);

  //   // create a view into the buffer
  //   var ia = new Uint8Array(ab);

  //   // set the bytes of the buffer to the correct values
  //   for (var i = 0; i < byteString.length; i++) {
  //       ia[i] = byteString.charCodeAt(i);
  //   }

  //   // write the ArrayBuffer to a blob, and you're done
  //   var blob = new Blob([ab], {type: mimeString});
  //   return blob;

  // }

  function dataURLtoBlob(dataurl) {

      var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
          bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
      while(n--){
          u8arr[n] = bstr.charCodeAt(n);
      }
      return new Blob([u8arr], {type:mime});
  }


  function upload_file_from_user(file_type, file_number, files){


    if (files === undefined) {

      console.log("working");
      console.log(plugin_image_source);

      var enc = window.btoa(plugin_image_source);
      enc = "data:image/jpg;base64,"+enc;
      // console.log(plugin_image_source);
      // return;
      var temp = dataURLtoBlob(enc);
      temp = URL.createObjectURL(temp);
      console.log(temp);

      temp = plugin_image_source;
      var shapeObj;

    }
    else{

      var file = files[0];
      console.log(file);
      var temp = URL.createObjectURL(file);
      console.log(temp);
      var shapeObj;
      
    }


    if (layer_child['foreground_image'] === undefined) {

      layer_child['foreground_image'] = [];
    }


    

    var xval, yval, dragVal, hightVal, widthVal;

    var content_number_index; 
    var image_name;

    /* set x , y & draggable value of the shape object  */

    if(file_type == "background_image"){

      xval = 0;
      yval = 0;

      dragVal = false;

      hightVal = canvas_height;
      widthVal = canvas_width;

      content_number_index = 'background_image';
      image_name = "background_image 0";

      if(content_number[content_number_index]){

        konva_background_image = new Image();
        
        var temp_layer_child = [];
        temp_layer_child[0] = layer_child_number++;
        layer_child['background_image'] = temp_layer_child;

      }

      
      shapeObj = konva_background_image;

      content_number_index = 'background_image';




    }
    else if(file_type = "foreground_image"){

      xval = 250;
      yval = 250;

      dragVal = true;

      hightVal = 500;
      widthVal = 400;


      if(file_number == 1){

        content_number_index = 'foreground_image_1';
        image_name = "foreground_image 1";

        if(content_number[content_number_index]){

          konva_foreground_image_1 = new Image();
          layer_child['foreground_image'][1] = layer_child_number++;

          
        }

        shapeObj = konva_foreground_image_1;


      }
      else if(file_number == 2){

        content_number_index = 'foreground_image_2';
        image_name = "foreground_image 2";

        if(content_number[content_number_index]){

          konva_foreground_image_2 = new Image();
          layer_child['foreground_image'][2] = layer_child_number++;
          

        }

        shapeObj = konva_foreground_image_2;


      }
      else if(file_number == 3){

        content_number_index = 'foreground_image_3';
        image_name = "foreground_image 3";

        if(content_number[content_number_index]){

          konva_foreground_image_3 = new Image();
          layer_child['foreground_image'][3] = layer_child_number++;
          
        }

        shapeObj = konva_foreground_image_3;


      }
      else if(file_number == 4){

        content_number_index = 'foreground_image_4';
        image_name = "foreground_image 4";

        if(content_number[content_number_index]){

          konva_foreground_image_4 = new Image();
          layer_child['foreground_image'][4] = layer_child_number++;
          
        }

        shapeObj = konva_foreground_image_4;


      }
      else if(file_number == 5){

        content_number_index = 'foreground_image_5';
        image_name = "foreground_image 5";

        if(content_number[content_number_index]){

          konva_foreground_image_5 = new Image();
          layer_child['foreground_image'][5] = layer_child_number++;
          
        }

        shapeObj = konva_foreground_image_5;


      }
      
      
    }




    shapeObj.onload = function() {

      if(content_number[content_number_index] > 0){

        

        var new_image = new Konva.Image({
          x: xval,
          y: yval,
          image: shapeObj,
          name: image_name,
          width: widthVal,
          height: hightVal,
          draggable: dragVal
        });



        new_image.on('click', function() {
          
          var image_signature = new_image.name();
          var image_info = image_signature.split(" ");

          current_selected_image = layer_child[image_info[0]][image_info[1]];

        });

        
        layer.add(new_image);
        stage.add(layer);

        content_number[content_number_index]--;

      }
      else{

        shapeObj.src = temp;
        layer.draw();
      }

    };

    shapeObj.src = temp;

  }



  function get_text_from_user(text_number, textVal){

    //content_number[content_number_index]

    var xval = 100;
    var yval = 100;

    var content_number_index;

    if(text_number == 1){


      content_number_index = "foreground_text_1";

      if(content_number[content_number_index] > 0){

        konva_foreground_text_1 = new Konva.Text({

          x: xval,
          y: yval,
          text: textVal,
          fontSize: 20,
          fontFamily: 'Calibri',
          draggable: true
        });

        layer.add(konva_foreground_text_1);

        content_number[content_number_index]--;

        var temp_layer_child = [];
        temp_layer_child[1] = layer_child_number++;
        layer_child['foreground_text'] = temp_layer_child;

      }
      else{

        konva_foreground_text_1.text(textVal);
      }


      layer.draw();
    }
    else if(text_number == 2){


      content_number_index = "foreground_text_2";

      if(content_number[content_number_index] > 0){

        konva_foreground_text_2 = new Konva.Text({

          x: xval,
          y: yval,
          text: textVal,
          fontSize: 20,
          fontFamily: 'Calibri',
          draggable: true
        });

        layer.add(konva_foreground_text_2);

        content_number[content_number_index]--;


        var temp_layer_child = [];
        temp_layer_child[2] = layer_child_number++;
        layer_child['foreground_text'] = temp_layer_child;

      }
      else{

        konva_foreground_text_2.text(textVal);
      }

      layer.draw();
    }
    else if(text_number == 3){


      content_number_index = "foreground_text_3";

      if(content_number[content_number_index] > 0){

        konva_foreground_text_3 = new Konva.Text({

          x: xval,
          y: yval,
          text: textVal,
          fontSize: 20,
          fontFamily: 'Calibri',
          draggable: true
        });

        layer.add(konva_foreground_text_3);

        content_number[content_number_index]--;



        var temp_layer_child = [];
        temp_layer_child[3] = layer_child_number++;
        layer_child['foreground_text'] = temp_layer_child;

      }
      else{

        konva_foreground_text_3.text(textVal);
      }


      layer.draw();
    }
    else if(text_number == 4){


      content_number_index = "foreground_text_4";

      if(content_number[content_number_index] > 0){

        konva_foreground_text_4 = new Konva.Text({

          x: xval,
          y: yval,
          text: textVal,
          fontSize: 20,
          fontFamily: 'Calibri',
          draggable: true
        });

        layer.add(konva_foreground_text_4);

        content_number[content_number_index]--;


        var temp_layer_child = [];
        temp_layer_child[4] = layer_child_number++;
        layer_child['foreground_text'] = temp_layer_child;

      }
      else{

        konva_foreground_text_4.text(textVal);
      }


      layer.draw();
    }
    else if(text_number == 5){


      content_number_index = "foreground_text_5";

      if(content_number[content_number_index] > 0){

        konva_foreground_text_5 = new Konva.Text({

          x: xval,
          y: yval,
          text: textVal,
          fontSize: 20,
          fontFamily: 'Calibri',
          draggable: true
        });

        layer.add(konva_foreground_text_5);

        content_number[content_number_index]--;


        var temp_layer_child = [];
        temp_layer_child[5] = layer_child_number++;
        layer_child['foreground_text'] = temp_layer_child;

      }
      else{

        konva_foreground_text_5.text(textVal);
      }


      layer.draw();
    }


  }







  /*----------  image adding button action  ----------*/
  $("#image_section_add_button").on('click', function() {

      if(foreground_image_number >=5){

        alert('You can not add more than 5 images');

      }
      else{

        foreground_image_number++;
                
        var text = '<hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);"><div class="form-group"><label class="foreground_image_heading" for="foreground_image_' + foreground_image_number + '"><h5><b>Foreground Image ' + foreground_image_number + '</b></h5></label><div class="input-file-container"><input class="input-file" id="foreground_image_' + foreground_image_number + '" type="file"><label tabindex="0" for="foreground_image_' + foreground_image_number + '" class="input-file-trigger">Select a file...</label></div><p class="file-return"></p><br><a class="btn btn-warning search_image_styling" data-toggle="modal" href="#search_modal" id="foreground_image_' + foreground_image_number + '_plugin_button"><i class="fa fa-photo"></i><?php echo $this->lang->line("search & find image");?></a></div> <hr>';

        

        //$("foreground_image_add_").insertBefore("#foreground_image_add_button_div");

        $("#foreground_image_add_button_div").before(text);

      }


      
              
  });



  /*----------  text adding button action  ----------*/
  $("#text_section_add_button").on('click', function(){

    if(foreground_text_number >= 5){

      alert('you can not add more than 5 text');

    }
    else{

      foreground_text_number++;

      var text = '<hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);"><div class="form-group" style="padding-left: 10px;"><label for="foreground_text_1"><h5><b>Foreground Text ' + foreground_text_number + '</b></h5></label><input type="text" class="form-control" id="foreground_text_' + foreground_text_number + '"><br><div class="row" style="padding: 10px;"><div class="col-md-6"><label for="foreground_text_' + foreground_text_number + '_font_size">Font Size</label><input type="number" class="form-control" id="foreground_text_' + foreground_text_number + '_font_size" min="0"></div><div class="col-md-6"><label for="foreground_text_' + foreground_text_number + '_color">Color</label><input id="foreground_text_' + foreground_text_number + '_color" type="color" class="form-control"></div></div><br><div class="row" style="padding: 10px;"><div class="col-md-12"><label for="foreground_text_' + foreground_text_number + '_font_family">Font Family</label><select id="foreground_text_' + foreground_text_number + '_font_family" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true"><option selected="selected">1920 x 1080</option><option>1080 x 1920</option><option>1280 x 720</option><option>720 x 1280</option><option>1024 x 576</option><option>576 x 1024</option><option>768 x 432</option><option>432 x 768</option><option>512 x 288</option><option>288 x 512</option><option>256 x 144</option><option>144 x 256</option></select></div></div></div>';


      $("#foreground_text_add_button_div").before(text);

    }

  });


  /*----------  delete file  ----------*/
  
  $(document.body).on('click', '#delete_saved_image_button', function() {
    
    $.ajax({
      url: base_url + 'video_generator/DeleteImageFormUser',
      type: 'POST',
      data: {image_num: (navigation_image_no - 1)},
    })
    .done(function() {

      // layer.draw();
      check_and_set_image_src();
      $("#background_image").prop('disabled', false);
      alert("Image has been deleted");      
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    

  });


  /*----------  save button  ----------*/

  $(document.body).on('click','#save_created_image_button',function(){

    

    var dataURL = stage.toDataURL();
    alert(dataURL);
    console.log(layer.children);
    alert(dataURL);

    //var newDataURL = resizedataURL(dataURL, canvas_width, canvas_height);

    
    
    $.ajax({
      url: base_url + 'video_generator/SaveImageFromUser',
      type: 'POST',
      
      data: {base64String: dataURL, image_name: navigation_image_no, width: canvas_width, height: canvas_height},
    })
    .done(function(data) {

      var temp = navigation_image_no - 1;

      temp = temp.toString();
      saved_image_list.push(temp);
      // console.log(saved_image_list);
      
      temp = parseInt(temp);
      temp = temp + ".jpg,";

      var hidden_input_value = $("#hidden_saved_image_list").val();
      hidden_input_value = hidden_input_value + temp;

      $("#hidden_saved_image_list").val(hidden_input_value);

      // saved_image_list.splice(0, 0, temp);
      // image_list.splice(0, 0, temp);

      
      
      

      alert("Image has saved successfully");


    })
    .fail(function() {
      console.log("error");
    })

  });


  /*----------  download button  ----------*/

  /*$(document.body).on('click','#download_created_image_button',function(){


    var dataURL = stage.toDataURL();
    //console.log(dataURL);
    downloadURI(dataURL, 'hfhg.png');

  });*/




     function downloadURI(uri, name) {

        
         var link = document.createElement("a");
         link.download = name;
         link.href = uri;
         document.body.appendChild(link);
         link.click();
         document.body.removeChild(link);
         delete link;
     }

     document.getElementById('download_created_image_button').addEventListener('click', function () {

        

         
         var dataURL = stage.toDataURL();

        //alert(dataURL);
        //console.log(dataURL);

        

        downloadURI(dataURL, 'stage.png');

         /*setTimeout(function() {

          console.log(dataURL);


          }, 1000);*/

         //downloadURI(dataURL, 'stage.png');


     }, false);

  



  /*----------  background image on upload  ----------*/
  $("#background_image").on('change', function(){

      upload_file_from_user("background_image", 0, this.files);

  });

  $("#background_image_plugin_button").on('click', function() {
    
      plugin_image_name = "background_image";
      plugin_image_number = 0;
      plugin_image_source = "";
  });




  /*=========================================
  =            foreground image             =
  =========================================*/
  
  
    /*----------  foreground image on upload  ----------*/
    $("#foreground_image_1").on('change', function(){

        upload_file_from_user("foreground_image", 1, this.files);
    });

    $(document.body).on('change','#foreground_image_2',function(){

      upload_file_from_user("foreground_image", 2, this.files);
    });
    
    $(document.body).on('change','#foreground_image_3',function(){

      upload_file_from_user("foreground_image", 3, this.files);
    });

    $(document.body).on('change','#foreground_image_4',function(){

      upload_file_from_user("foreground_image", 4, this.files);
    });

    $(document.body).on('change','#foreground_image_5',function(){

      upload_file_from_user("foreground_image", 5, this.files);
    });




    /*----------  foreground image height on change  ----------*/
    $("#foreground_image_1_height").on('keyup', function(){


        var height_val = $("#foreground_image_1_height").val();

        var child_num = layer_child['foreground_image'][1];
        


        if(typeof child_num !== 'undefined'){


          layer.children[child_num].setAttr('height', height_val);
          layer.draw();
        }

        
    });

    $(document.body).on('keyup','#foreground_image_2_height',function(){

      
        var height_val = $("#foreground_image_2_height").val();
        var child_num = layer_child['foreground_image'][2];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('height', height_val);
          layer.draw();
        }

        
    });
    
    $(document.body).on('keyup','#foreground_image_3_height',function(){

      
        var height_val = $("#foreground_image_3_height").val();
        var child_num = layer_child['foreground_image'][3];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('height', height_val);
          layer.draw();
        }

        
    });

    $(document.body).on('keyup','#foreground_image_4_height',function(){

      
        var height_val = $("#foreground_image_4_height").val();
        var child_num = layer_child['foreground_image'][4];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('height', height_val);
          layer.draw();
        }

        
    });

    $(document.body).on('keyup','#foreground_image_5_height',function(){

      
        var height_val = $("#foreground_image_5_height").val();
        var child_num = layer_child['foreground_image'][5];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('height', height_val);
          layer.draw();
        }

        
    });





    /*----------  foreground image width on change  ----------*/
    $("#foreground_image_1_width").on('keyup', function(){


        var width_val = $("#foreground_image_1_width").val();
        var child_num = layer_child['foreground_image'][1];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('width', width_val);
          layer.draw();
        }

        
    });

    $(document.body).on('keyup','#foreground_image_2_width',function(){

      
        var width_val = $("#foreground_image_2_width").val();
        var child_num = layer_child['foreground_image'][2];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('width', width_val);
          layer.draw();
        }

        
    });
    
    $(document.body).on('keyup','#foreground_image_3_width',function(){

      
        var width_val = $("#foreground_image_3_width").val();
        var child_num = layer_child['foreground_image'][3];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('width', width_val);
          layer.draw();
        }

        
    });

    $(document.body).on('keyup','#foreground_image_4_width',function(){

      
        var width_val = $("#foreground_image_4_width").val();
        var child_num = layer_child['foreground_image'][4];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('width', width_val);
          layer.draw();
        }

        
    });

    $(document.body).on('keyup','#foreground_image_5_width',function(){

      
        var width_val = $("#foreground_image_5_width").val();
        var child_num = layer_child['foreground_image'][5];

        if(typeof child_num !== 'undefined'){

          layer.children[child_num].setAttr('width', width_val);
          layer.draw();
        }

        
    });
  
  /*=====  End of foreground image   ======*/
  


  

  /*=======================================
  =            foreground text            =
  =======================================*/
  
  
    /*----------  foreground text on change  ----------*/
    $("#foreground_text_1").on('keyup', function(){

        var text = $("#foreground_text_1").val();
        get_text_from_user(1, text);
    });

    $(document.body).on('keyup','#foreground_text_2',function(){

      var text = $("#foreground_text_2").val();
      get_text_from_user(2, text);
    });
    
    $(document.body).on('keyup','#foreground_text_3',function(){

      var text = $("#foreground_text_3").val();
      get_text_from_user(3, text);
    });

    $(document.body).on('keyup','#foreground_text_4',function(){

      var text = $("#foreground_text_4").val();
      get_text_from_user(4, text);
    });

    $(document.body).on('keyup','#foreground_text_5',function(){

      var text = $("#foreground_text_5").val();
      get_text_from_user(5, text);
    });




    /*----------  foreground text font size  ----------*/
    $("#foreground_text_1_font_size").on('keyup', function(){

      var temp_font_size = $("#foreground_text_1_font_size").val();

      konva_foreground_text_1.fontSize(temp_font_size);
      layer.draw();
    });

    $(document.body).on('keyup','#foreground_text_2_font_size',function(){

      var temp_font_size = $("#foreground_text_2_font_size").val();

      konva_foreground_text_2.fontSize(temp_font_size);
      layer.draw();
    });
    
    $(document.body).on('keyup','#foreground_text_3_font_size',function(){

      var temp_font_size = $("#foreground_text_3_font_size").val();

      konva_foreground_text_3.fontSize(temp_font_size);
      layer.draw();
    });

    $(document.body).on('keyup','#foreground_text_4_font_size',function(){

      var temp_font_size = $("#foreground_text_4_font_size").val();

      konva_foreground_text_4.fontSize(temp_font_size);
      layer.draw();
    });

    $(document.body).on('keyup','#foreground_text_5_font_size',function(){

      var temp_font_size = $("#foreground_text_5_font_size").val();

      konva_foreground_text_5.fontSize(temp_font_size);
      layer.draw();
    });





    /*----------  foreground text color  ----------*/
    $("#foreground_text_1_color").on('change', function(){

      var temp_color = $("#foreground_text_1_color").val();

      

      konva_foreground_text_1.fill(temp_color);
      layer.draw();
    });

    $(document.body).on('change','#foreground_text_2_color',function(){

      var temp_color = $("#foreground_text_2_color").val();

      konva_foreground_text_2.fill(temp_color);
      layer.draw();
    });
    
    $(document.body).on('change','#foreground_text_3_color',function(){

      var temp_color = $("#foreground_text_3_color").val();

      konva_foreground_text_3.fill(temp_color);
      layer.draw();
    });

    $(document.body).on('change','#foreground_text_4_color',function(){

      var temp_color = $("#foreground_text_4_color").val();

      konva_foreground_text_4.fill(temp_color);
      layer.draw();
    });

    $(document.body).on('change','#foreground_text_5_color',function(){

      var temp_color = $("#foreground_text_5_color").val();

      konva_foreground_text_5.fill(temp_color);
      layer.draw();
    });
  
  /*=====  End of foreground text  ======*/
  







  
  


  /*----------  dimention selection and value  ----------*/

  /* on load*/
  $(window).load(function(){

      
      /* to set dimention */
      var dimention_string = $("#dimention_option").val();
      

      var dimentions = dimention_string.split("x");
      dimentions[0] = parseInt(dimentions[0]);
      dimentions[1] = parseInt(dimentions[1]);

      canvas_width = dimentions[0];
      canvas_height = dimentions[1]; 
      



      
      /* to set saved image list */

      var image_list_string = $("#hidden_saved_image_list").val();
      // console.log($("#hidden_saved_image_list").val());

      var temp_image_list_string = image_list_string;

      for(var i = 0; i < 10; i++)
        temp_image_list_string = temp_image_list_string.replace(".jpg", "");
      
      

      var image_list_array = temp_image_list_string.split(",");
      image_list_array.splice(-1,1);

      saved_image_list = image_list_array;
      //console.log(saved_image_list);

      


      /* check if there are image for this navigation and set src  */
      check_and_set_image_src();



      /* set the canvas div height & width  */
      /*$("#canvas_container").css('height', canvas_height);*/
      /*$("#canvas_container").css('width', canvas_width);*/

      // console.log("something");

      stage.height(canvas_height);
      stage.width(canvas_width);

  });

  /* on change*/
  $("#dimention_option").on('change', function(){

      

      var dimention_string = $("#dimention_option").val();

      var dimentions = dimention_string.split("x");
      dimentions[0] = parseInt(dimentions[0]);
      dimentions[1] = parseInt(dimentions[1]);

      canvas_width = dimentions[0]
      canvas_height = dimentions[1];

      

  });




  /*----------  stage creating  ----------*/
  
  stage = new Konva.Stage({
          container: 'canvas_container',
          
        });

  /*----------  layer creating  ----------*/
  layer = new Konva.Layer();
  stage.add(layer);


  /*----------  create background image using konva js  ----------*/
  konva_background_image = new Image();
  konva_background_image.onload = function() {

    var new_image = new Konva.Image({
      x: 0,
      y: 0,
      image: konva_background_image,
      name: 'background_image 0',
      width: canvas_width,
      height: canvas_height
    });

    new_image.on('click', function() {
      
      var image_signature = new_image.name();
      var image_info = image_signature.split(" ");

      current_selected_image = layer_child[image_info[0]][parseInt(image_info[1])];

    });

    // add the shape to the layer
    layer.add(new_image);

    // add the layer to the stage
    stage.add(layer);
  };



  


  /*----------  pagination plugin  ----------*/
  $('#image_navigation_list').twbsPagination({
          totalPages: 10,
          visiblePages: 10,
          onPageClick: function (event, page) {

              navigation_image_no = page;
              layer_child_number = 0;

              /* check if there are image for this navigation and set src  */
              check_and_set_image_src();

              /* reset content number array in every page navigation */
              reset_content_number_array();

              
          }
      });


</script>

<!--====  End of script section  ====-->



<!--=====================================================
=            script section for image filter            =
======================================================-->

  <script type="text/javascript">

    var image_filter = [];
    image_filter[0] = [];
    image_filter[1] = [];
    image_filter[2] = [];
    image_filter[3] = [];
    image_filter[4] = [];
    image_filter[5] = [];

    var rotation_count = [];
    rotation_count[0] = 1;
    rotation_count[1] = 1;
    rotation_count[2] = 1;
    rotation_count[3] = 1;
    rotation_count[4] = 1;
    rotation_count[5] = 1;

    /*----------  update filter array  ----------*/
    
    function UpdateFilterArray(filter, status) {
      
      current_selected_image = parseInt(current_selected_image);

      // first check if this filter exists in current image or not
      var temp_arr = image_filter[current_selected_image];

      var actual_filter;

      if (filter == "Blur") 
        actual_filter = Konva.Filters.Blur;  
      else if (filter == "Brightness")
        actual_filter = Konva.Filters.Brighten;
      else if (filter == "Grayscale")
        actual_filter = Konva.Filters.Grayscale;
      else if (filter == "Sepia")
        actual_filter = Konva.Filters.Sepia;
      else if (filter == "Noise")
        actual_filter = Konva.Filters.Noise;
      else if (filter == "Mask")
        actual_filter = Konva.Filters.Mask;
      else if (filter == "RGBA")
        actual_filter = Konva.Filters.RGBA;


      if(temp_arr.indexOf(actual_filter) == -1){

        if(status == "undo")
          return;

        image_filter[current_selected_image].push(actual_filter);

      }
      else{

        if(status == "undo"){

          var index = temp_arr.indexOf(actual_filter);
          temp_arr.splice(index, 1);

        }
      }
      // console.log(temp_arr.length);
    }





    /*----------  add and change filter from user input  ----------*/
    
    function addFilterWithImage(filter_name, filter_value, type) {

      
      /*----------  static filter  ----------*/
      
      if(filter_name == "height"){

        if(parseInt(current_selected_image) == 0){
          alert("You can not change background image's height");
          return;
        }

        layer.children[parseInt(current_selected_image)].setAttr('height', filter_value);
        layer.draw();
      }
      else if(filter_name == "width"){

        if(parseInt(current_selected_image) == 0){
          alert("You can not change background image's width");
          return;
        }

        layer.children[parseInt(current_selected_image)].setAttr('width', filter_value);
        layer.draw();
      }
      else if(filter_name == "rotate"){

        if(parseInt(current_selected_image) == 0){
          alert("You can not rotate background image");
          return;
        }

        current_selected_image = parseInt(current_selected_image);
        var temp_image = layer.children[current_selected_image];

        temp_image.offsetX(temp_image.width() / 2);
        temp_image.offsetY(temp_image.height() / 2);

        if(rotation_count[current_selected_image]){

          temp_image.x(temp_image.x() + temp_image.width() / 2);
          temp_image.y(temp_image.y() + temp_image.height() / 2);
          
          rotation_count[current_selected_image]--;
        }



 
        layer.children[current_selected_image].rotation(filter_value);
        layer.draw();
      }
      else if(filter_name == "fill_color"){

        console.log(filter_value);

        current_selected_image = parseInt(current_selected_image);
        var temp_image = layer.children[current_selected_image];

        temp_image.fill(filter_value);
        temp_image.draw();
      }
      else{

        if (filter_name == "Blur") {

          UpdateFilterArray(filter_name);

          layer.children[current_selected_image].cache();
          layer.children[current_selected_image].filters(image_filter[current_selected_image]);
          layer.children[current_selected_image].blurRadius(parseInt(filter_value));
          layer.draw();

        }
        else if(filter_name == "Brightness"){

          UpdateFilterArray(filter_name);

          layer.children[current_selected_image].cache();
          layer.children[current_selected_image].filters(image_filter[current_selected_image]);
          layer.children[current_selected_image].brightness(filter_value);
          layer.draw();
        }
        else if(filter_name == "Noise"){

          UpdateFilterArray(filter_name);

          layer.children[current_selected_image].cache();
          layer.children[current_selected_image].filters(image_filter[current_selected_image]);
          layer.children[current_selected_image].noise(filter_value);
          layer.draw();
        }
        else if(filter_name == "Mask"){

          UpdateFilterArray(filter_name);

          layer.children[current_selected_image].cache();
          layer.children[current_selected_image].filters(image_filter[current_selected_image]);
          layer.children[current_selected_image].threshold(filter_value);
          layer.draw();
        }
        else if(filter_name == "RGBA"){

          UpdateFilterArray(filter_name);

          layer.children[current_selected_image].cache();
          layer.children[current_selected_image].filters(image_filter[current_selected_image]);

          if(type == "red")
            layer.children[current_selected_image].red(filter_value);
          else if(type == "green")
            layer.children[current_selected_image].green(filter_value);
          else if(type == "blue")
            layer.children[current_selected_image].blue(filter_value);
          else if(type == "alpha")
            layer.children[current_selected_image].alpha(filter_value);


          layer.draw();
        }
        else if(filter_name == "Grayscale"){

          UpdateFilterArray(filter_name, filter_value);

          layer.children[current_selected_image].cache();
          layer.children[current_selected_image].filters(image_filter[current_selected_image]);

          layer.draw();
        }
        else if(filter_name == "Sepia"){

          UpdateFilterArray(filter_name, filter_value);

          layer.children[current_selected_image].cache();
          layer.children[current_selected_image].filters(image_filter[current_selected_image]);

          layer.draw();
        }


      }


    }


    
    
    /*----------  crop image  ----------*/    
    var crop_title = "<b><h4 style='text-align:center;'>Crop Image</h4></b>";
    var crop_content = '<h4>Position</h4><div class="form-group"><input id="imageFilter_crop_xVal" style="margin-left: 15px; text-align: center;" type="number" placeholder="X position"><br><br><input id="imageFilter_crop_yVal" style="margin-left: 15px; text-align: center;" type="number" placeholder="Y position"></div><hr><h4>Size</h4><div class="form-group"><input id="imageFilter_crop_width" style="margin-left: 15px; text-align: center;" type="number" placeholder="Width"><br><br><input id="imageFilter_crop_height" style="margin-left: 15px; text-align: center;" type="number" placeholder="height"></div><hr>';

    $("#image_filter_crop_popover").popover({trigger: 'click', placement: 'right', animation: true, html: true, title: crop_title, content: crop_content });


    /*----------  resize image  ----------*/
    var resize_title = "<b><h4 style='text-align:center;'>Adjust Image Height & Width</h4></b>";
    var resize_content = '<div class="form-group"><label for="imageFilter_resize_height">Height</label><input id="imageFilter_resize_height" style="margin-left: 15px; text-align: center;" type="number" value = "20" placeholder="Height"></div><div class="form-group"><label for="imageFilter_resize_width">Width&nbsp;</label><input id="imageFilter_resize_width" style="margin-left: 15px; text-align: center;" type="number" placeholder="Width"></div>';

    $("#image_filter_resize_popover").popover({trigger: 'click', placement: 'top', animation: true, html: true, title: resize_title, content: resize_content });

    $(document.body).on('keyup','#imageFilter_resize_height',function(){

      addFilterWithImage("height", $("#imageFilter_resize_height").val());
    });

    $(document.body).on('keyup','#imageFilter_resize_width',function(){

      addFilterWithImage("width", $("#imageFilter_resize_width").val());
    });


    /*----------  enhance image  ----------*/
    var enhance_title = "<b><h4 style='text-align: center;'>Enhance Image</h4></b>";
    var enhance_content = '<div id="style-2" style="padding: 0 10px;width: 200px; height: 400px; overflow-x: scroll;"><h4>Brightness</h4><div class="form-group"><input id="imageFilter_enhance_brightness" style="margin-left: 15px; text-align: center;" type="range"  min="-100" max="100" value="0" step="1"></div><hr><h4>GrayScale</h4><div class="form-group" style="margin-left: 15px;"><input id="grayOption1" type="radio" name="grayScale" value="apply"> <label for="grayOption1">Apply</label>&nbsp;&nbsp;&nbsp;<input id="grayOption2" type="radio" name="grayScale" value="undo"> <label for="grayOption2">Undo</label></div><hr><h4>Sapia</h4><div class="form-group" style="margin-left: 15px;"><input id="sapiaOption1" type="radio" name="sapia" value="apply"> <label for="sapiaOption1">Apply</label>&nbsp;&nbsp;&nbsp;<input id="sapiaOption2" type="radio" name="sapia" value="undo"> <label for="sapiaOption2">Undo</label></div><hr><h4>Noise</h4><div class="form-group"><input id="imageFilter_enhance_noise" style="margin-left: 15px; text-align: center;" type="range"  min="0" max="100" value="0" step="1"></div><hr><h4>Mask</h4><div class="form-group"><input id="imageFilter_enhance_mask" style="margin-left: 15px; text-align: center;" type="range"  min="0" max="1000" value="0" step="1"></div><hr><h4>RGBA</h4><div class="form-group"><h5 style="margin-left: 5px;">Red</h5><input id="imageFilter_enhance_red" style="margin-left: 15px; text-align: center;" type="range"  min="0" max="255" value="0" step="1"><h5 style="margin-left: 5px;">Green</h5><input id="imageFilter_enhance_green" style="margin-left: 15px; text-align: center;" type="range"  min="0" max="255" value="0" step="1"><h5 style="margin-left: 5px;">Blue</h5><input id="imageFilter_enhance_blue" style="margin-left: 15px; text-align: center;" type="range"  min="0" max="255" value="0" step="1"><h5 style="margin-left: 5px;">Alpha</h5><input id="imageFilter_enhance_alpha" style="margin-left: 15px; text-align: center;" type="range"  min="0" max="100" value="0" step="1"></div><hr></div>';

    $("#image_filter_enhance_popover").popover({trigger: 'click', placement: 'left', animation: true, html: true, title: enhance_title, content: enhance_content });

    
    $(document.body).on('change','#imageFilter_enhance_brightness',function(){

      addFilterWithImage("Brightness", $("#imageFilter_enhance_brightness").val()/100);
    });

    $(document.body).on('change','#imageFilter_enhance_noise',function(){

      addFilterWithImage("Noise", $("#imageFilter_enhance_noise").val()/100);
    });

    $(document.body).on('change','#imageFilter_enhance_mask',function(){

      addFilterWithImage("Mask", $("#imageFilter_enhance_mask").val());
    });

    $(document.body).on('change','#imageFilter_enhance_red',function(){

      addFilterWithImage("RGBA", $("#imageFilter_enhance_red").val(), "red");
    });

    $(document.body).on('change','#imageFilter_enhance_green',function(){

      addFilterWithImage("RGBA", $("#imageFilter_enhance_green").val(), "green");
    });

    $(document.body).on('change','#imageFilter_enhance_blue',function(){

      addFilterWithImage("RGBA", $("#imageFilter_enhance_blue").val(), "blue");
    });

    $(document.body).on('change','#imageFilter_enhance_alpha',function(){

      addFilterWithImage("RGBA", $("#imageFilter_enhance_alpha").val()/100, "alpha");
    });



    $(document.body).on('click','input[name="grayScale"]',function(){

      addFilterWithImage("Grayscale", $('input[name="grayScale"]:checked').val());
    });

    $(document.body).on('click','input[name="sapia"]',function(){

      addFilterWithImage("Sepia", $('input[name="sapia"]:checked').val());
    });

    /*----------  rotate image  ----------*/
    var rotate_title = "<b><h4 style='text-align:center;'>Rotate Image</h4></b>";
    var rotate_content = '<div class="form-group"><label for="imageFilter_rotate_amount">Rotation Degree</label><input id="imageFilter_rotate_amount" style="margin-left: 15px; text-align: center;" type="number" value = "20" placeholder="Rotate Degree"></div>';

    $("#image_filter_rotate_popover").popover({trigger: 'click', placement: 'right', animation: true, html: true, title: rotate_title, content: rotate_content });
    
    $(document.body).on('keyup','#imageFilter_rotate_amount',function(){

      addFilterWithImage("rotate", $("#imageFilter_rotate_amount").val());
    });


    /*----------  fill image with color  ----------*/
    var color_title = "<b><h4 style='text-align:center;'>Fill Image With Color</h4></b>";
    var color_content = '<div class="form-group"><label for="imageFilter_fill_color">Color</label><input id="imageFilter_fill_color" style="margin-left: 15px; width: 150px;" type="color"></div>';

    $("#image_filter_fill_popover").popover({trigger: 'click', placement: 'top', animation: true, html: true, title: color_title, content: color_content });

    $(document.body).on('change','#imageFilter_fill_color',function(){

      addFilterWithImage("fill_color", $("#imageFilter_fill_color").val());
    });


    /*----------  blur image  ----------*/
    var blur_title = "<b><h4 style='text-align:center;'>Blur Image</h4></b>";
    var blur_content = '<div style="margin-left: 50px;"><div class="form-group"><label for="imageFilter_blur_amount">Blur Amount</label><input id="imageFilter_blur_amount" style="margin-left: 15px; text-align: center;" type="number" value = "20" placeholder="Blur Amount"></div></div>';

    $("#image_filter_blur_popover").popover({trigger: 'click', placement: 'left', animation: true, html: true, title: blur_title, content: blur_content });

    $(document.body).on('keyup','#imageFilter_blur_amount',function(){

      addFilterWithImage("Blur", $("#imageFilter_blur_amount").val());
    });


  </script>

<!--====  End of script section for image filter  ====-->



<!-- <div class="clearfix">
	
</div> -->
<!-- <img src="<?php echo $final_image_path; ?>" alt="" style="height: 500px; width: 400px;"> -->






<script type="text/javascript">
  $(document.body).on('click','#pixbay_submit',function(){  
    var pixbay_query=$("#pixbay_query").val();
    var pixbay_category=$("#pixbay_category").val();
    if(pixbay_query=="")
    {
      alert("<?php echo $this->lang->line('please type a keyword.');?>");
      return false;
    }
    $("#pixbay_img_container").html('');
    $("#pixbay_load_more_container").addClass('hidden');
    var loading = '<img src="<?php echo base_url();?>assets/pre-loader/Surrounded segments.gif" class="center-block">';
    $("#pixbay_img_loading").html(loading);

    $.ajax({
      type:'POST' ,
      url: base_url+"imgclick/pixbay_api",
      data: {pixbay_query: pixbay_query,pixbay_category:pixbay_category},    
      dataType: 'JSON',    
      success:function(response)
      { 
        $("#pixbay_img_container").html(response.content);
        if(response.status=='1') 
        {
          $("#pixbay_load_more_container").removeClass('hidden');
          $("#pixbay_load_more").attr('data-page',response.next_page);
        }
        else $("#pixbay_load_more_container").addClass('hidden');
        $("#pixbay_img_loading").html('');
      }

    });
  });

  $(document.body).on('click','#pixbay_load_more',function(){  
    var pixbay_query=$("#pixbay_query").val();
    var pixbay_category=$("#pixbay_category").val();
    var page=$("#pixbay_load_more").attr('data-page');
    if(pixbay_query=="")
    {
      alert("<?php echo $this->lang->line('please type a keyword.');?>");
      return false;
    }

    var loading = '<img src="<?php echo base_url();?>assets/pre-loader/Surrounded segments.gif" class="center-block">';
    $("#pixbay_img_loading").html(loading);

    $.ajax({
      type:'POST' ,
      url: base_url+"imgclick/pixbay_api",
      data: {pixbay_query: pixbay_query,pixbay_category:pixbay_category,page:page},    
      dataType: 'JSON',    
      success:function(response)
      { 
        $(response.content).appendTo("#pixbay_img_container");
        if(response.status=='1') 
        {
          $("#pixbay_load_more_container").removeClass('hidden');
          $("#pixbay_load_more").attr('data-page',response.next_page);
        }
        else $("#pixbay_load_more_container").addClass('hidden');
        $("#pixbay_img_loading").html('');
      }

    });
  });

  $(document.body).on('click','#unsplash_submit',function(){  
    var unsplash_query=$("#unsplash_query").val();
    if(unsplash_query=="")
    {
      alert("<?php echo $this->lang->line('please type a keyword.');?>");
      return false;
    }
    $("#unsplash_img_container").html('');
    $("#unsplash_load_more_container").addClass('hidden');
    var loading = '<img src="<?php echo base_url();?>assets/pre-loader/Surrounded segments.gif" class="center-block">';
    $("#unsplash_img_loading").html(loading);

    $.ajax({
      type:'POST' ,
      url: base_url+"imgclick/unsplash_api",
      data: {unsplash_query: unsplash_query},    
      dataType: 'JSON',    
      success:function(response)
      { 
        $("#unsplash_img_container").html(response.content);
        if(response.status=='1') 
        {
          $("#unsplash_load_more_container").removeClass('hidden');
          $("#unsplash_load_more").attr('data-page',response.next_page);
        }
        else $("#unsplash_load_more_container").addClass('hidden');
        $("#unsplash_img_loading").html('');
      }

    });
  });

  $(document.body).on('click','#unsplash_load_more',function(){  
    var unsplash_query=$("#unsplash_query").val();
    var page=$("#unsplash_load_more").attr('data-page');
    if(unsplash_query=="")
    {
      alert("<?php echo $this->lang->line('please type a keyword.');?>");
      return false;
    }

    var loading = '<img src="<?php echo base_url();?>assets/pre-loader/Surrounded segments.gif" class="center-block">';
    $("#unsplash_img_loading").html(loading);

    $.ajax({
      type:'POST' ,
      url: base_url+"imgclick/unsplash_api",
      data: {unsplash_query: unsplash_query,page:page},    
      dataType: 'JSON',    
      success:function(response)
      { 
        $(response.content).appendTo("#unsplash_img_container");
        if(response.status=='1') 
        {
          $("#unsplash_load_more_container").removeClass('hidden');
          $("#unsplash_load_more").attr('data-page',response.next_page);
        }
        else $("#unsplash_load_more_container").addClass('hidden');
        $("#unsplash_img_loading").html('');
      }

    });
  });

  $(document.body).on('click','#youzign_submit',function(){  
    $("#youzign_img_container").html('');
    $("#youzign_load_more_container").addClass('hidden');
    var loading = '<img src="<?php echo base_url();?>assets/pre-loader/Surrounded segments.gif" class="center-block">';
    $("#youzign_img_loading").html(loading);

    $.ajax({
      type:'POST' ,
      url: base_url+"imgclick/youzign_api",
      dataType: 'JSON',    
      success:function(response)
      { 
        $("#youzign_img_container").html(response.content);
        if(response.status=='1') 
        {
          $("#youzign_load_more_container").removeClass('hidden');
          $("#youzign_load_more").attr('data-page',response.next_page);
        }
        else $("#youzign_load_more_container").addClass('hidden');
        $("#youzign_img_loading").html('');
      }

    });
  });

  $(document.body).on('click','#youzign_load_more',function(){  

    var page=$("#youzign_load_more").attr('data-page');

    var loading = '<img src="<?php echo base_url();?>assets/pre-loader/Surrounded segments.gif" class="center-block">';
    $("#youzign_img_loading").html(loading);

    $.ajax({
      type:'POST' ,
      url: base_url+"imgclick/youzign_api",
      data: {page:page},   
      dataType: 'JSON',    
      success:function(response)
      { 
        $(response.content).appendTo("#youzign_img_container");
        if(response.status=='1') 
        {
          $("#youzign_load_more_container").removeClass('hidden');
          $("#youzign_load_more").attr('data-page',response.next_page);
        }
        else $("#youzign_load_more_container").addClass('hidden');
        $("#youzign_img_loading").html('');
      }

    });
  });

  $(document.body).on('click','.select-me',function(){  
    var source=$(this).attr('data-url');
    var img_src=$(this).attr('img-src');
    $("#downloading-image").removeClass('hidden'); 

     $.ajax({
       type:'POST' ,
       url: base_url+"imgclick/save_image_api",
       data: {source: source,img_src:img_src},    
       dataType: 'JSON',    
       success:function(response)
       { 
          $("#downloading-image").addClass('hidden'); 
          if(response.status=='1')
          {
            plugin_image_source = response.content;
            upload_file_from_user(plugin_image_name, plugin_image_number);
            $("#search_modal").modal('hide');
          }
          else
          alert(response.content);
       }

    }); 

  }); 


  $j("document").ready(function(){
    $('#pixbay_query').keyup(function(e){
      if(e.keyCode == 13)
      {
        $("#pixbay_submit").trigger("click");
      }
    });
    $('#pixbay_category').change(function(e){
      if($("#pixbay_query").val()!="")
      {
        $("#pixbay_submit").trigger("click");
      }
    });
    $('#unsplash_query').keyup(function(e){
      if(e.keyCode == 13)
      {
        $("#unsplash_submit").trigger("click");
      }
    });
  });
</script>









<div class="modal fade" id="search_modal" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog  modal-lg" style="width:90%">
    <div class="modal-content">
      <div class="hidden hidden-xs hidden-sm" id="downloading-image" style="position: absolute;top:7px;right:30px;z-index: 10000;"><?php echo $this->lang->line('please wait'); ?><img src="<?php echo base_url('assets/pre-loader/Fading squares2.gif');?>" class="center-block"></div>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-search"></i> <?php echo $this->lang->line("Search Image");?></h4>
      </div>
      <div class="modal-body" style="max-height: 600px;overflow: auto;">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#pixabay">Pixabay</a></li>
          <li><a data-toggle="tab" href="#unsplash">Unsplash</a></li>
          <li><a data-toggle="tab" href="#youzign">Youzign</a></li>
        </ul>

        <div class="tab-content">
          <div class="clearfix"></div>
          <div id="pixabay" class="tab-pane fade in active">
            <div class="form-group col-xs-12 col-md-7" style="padding:0 5px 0 0">
            <input class="form-control" name="pixbay_query" id="pixbay_query" type="text" placeholder="<?php echo $this->lang->line("search keyword"); ?> | <?php echo $this->lang->line('example: office'); ?>" > 
          </div>
          <div class="form-group col-xs-12 col-md-3">
            <?php $pixbay_category_options=array(''=>$this->lang->line('any category'),'fashion'=>'fashion','nature'=>'nature','backgrounds'=>'backgrounds','science'=>'science','education'=>'education','people'=>'people','feelings'=>'feelings','religion'=>'religion','health'=>'health','places'=>'places','animals'=>'animals','industry'=>'industry','food'=>'food','computer'=>'computer','sports'=>'sports','transportation'=>'transportation','travel'=>'travel','buildings'=>'buildings','business'=>'business','music'=>'music');?>
            <?php echo form_dropdown('pixbay_category', $pixbay_category_options, '','class="form-control" id="pixbay_category"'); ?>
          </div>
          <div class="form-group col-xs-12 col-md-2" style="padding:0 0 0 5px">
            <a id="pixbay_submit" class="btn btn-primary" style="padding-top:9px; padding-bottom: 9px;"><i class="fa fa-search"></i> <?php echo $this->lang->line("pixbay search");?></a>
          </div>
          <div class="clearfix"></div>
              <div id="pixbay_img_container" class="row"></div>
              <div id="pixbay_img_loading"></div>
              <div id="pixbay_load_more_container" class="hidden"><a class="btn btn-warning btn-lg" data-page="1" id="pixbay_load_more"><i class="fa fa-photo"></i> <?php echo $this->lang->line("load more images");?></a></div>
              <br/><br/><a href="https://pixabay.com" target="_BLANK"><img src="https://pixabay.com/static/img/logo.png" class="img-responsive pull-right" style="max-width:100px;"></a><br/>         
          </div>

          <div id="unsplash" class="tab-pane fade">
            <div class="form-group col-xs-12 col-md-10" style="padding:0 5px 0 0">
            <input class="form-control" name="unsplash_query" id="unsplash_query" type="text" placeholder="<?php echo $this->lang->line("search keyword"); ?> | <?php echo $this->lang->line('example: office'); ?>" > 
          </div>
          <div class="form-group col-xs-12 col-md-2" style="padding:0 0 0 5px">
            <a id="unsplash_submit" class="btn btn-primary" style="padding-top:9px; padding-bottom: 9px;"><i class="fa fa-search"></i> <?php echo $this->lang->line("unsplash search");?></a>
          </div>
          <div class="clearfix"></div>

            <div id="unsplash_img_container" class="row"></div>
              <div id="unsplash_img_loading"></div>
            <div id="unsplash_load_more_container" class="hidden"><a class="btn btn-warning btn-lg" data-page="1" id="unsplash_load_more"><i class="fa fa-photo"></i> <?php echo $this->lang->line("load more images");?></a></div>
            <br/><br/><a href="https://unsplash.com?utm_source=<?php echo $this->config->item('product_short_name');?>&utm_medium=referral&utm_campaign=api-credit" target="_BLANK" class="pull-right"><?php echo $this->lang->line("photos from");?> <b style="font-size: 16px;"><!-- <i class="fa fa-camera"></i> --> Unsplash</b></a><br/>
          </div>
          <div id="youzign" class="tab-pane fade">
            <div class="form-group col-xs-12 col-md-2" style="padding:0 0 0 5px">
            <a id="youzign_submit" class="btn btn-primary" style="padding-top:9px; padding-bottom: 9px;"><i class="fa fa-search"></i> <?php echo $this->lang->line("show youzign images");?></a>
          </div>
          <div class="clearfix"></div>

            <div id="youzign_img_container" class="row"></div>
              <div id="youzign_img_loading"></div>
            <div id="youzign_load_more_container" class="hidden"><a class="btn btn-warning btn-lg" data-page="1" id="youzign_load_more"><i class="fa fa-photo"></i> <?php echo $this->lang->line("load more images");?></a></div>
            <br/><br/><a href="https://www.youzign.com" target="_BLANK"><img class="img-responsive pull-right" style="max-width:100px;background:#333;padding:7px 10px" src="https://files.readme.io/tY1BfFToSSaP3oxRdKQ2_youzign-logo-2-01.png"></a><div class="clearfix"></div><br/>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line("close");?></button>
      </div>
    </div>
  </div>
</div>