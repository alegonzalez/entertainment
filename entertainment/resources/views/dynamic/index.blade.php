@extends('layout.basic')
@section('content')
  <div id="content" class="col-md-8 col-md-offset-2">
    <div class="content-box">
      <!-- jQuery UI -->
      <script type="text/javascript" src="assets/js/jquery.ui.core.1.10.3.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.ui.widget.1.10.3.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.ui.mouse.1.10.3.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.ui.draggable.1.10.3.min.js"></script>

      <!-- wColorPicker -->
      <link rel="Stylesheet" type="text/css" href="assets/css/wColorPicker.min.css" />
      <script type="text/javascript" src="assets/js/wColorPicker.min.js"></script>

      <!-- wPaint -->
      <link rel="Stylesheet" type="text/css" href="assets/css/wPaint.min.css" />
      <script type="text/javascript" src="assets/js/wPaint.min.js"></script>
      <script type="text/javascript" src="assets/js/wPaint.menu.main.min.js"></script>
      <script type="text/javascript" src="assets/js/wPaint.menu.text.min.js"></script>
      <script type="text/javascript" src="assets/js/wPaint.menu.main.shapes.min.js"></script>
      <script type="text/javascript" src="assets/js/wPaint.menu.main.file.min.js"></script>

      <div id="wPaint" style="position:relative; width:500px; height:200px; background-color:#7a7a7a; margin:70px auto 20px auto;"></div>
      <center id="wPaint-img"></center>

      <script type="text/javascript">
      var images = [
        'assets/img/wPaint.png',
      ];
      function saveImg(image) {
        var _this = this;
        debugger;
        $.ajax({
          type: 'POST',
          url: 'assets/upload.php',
          data: {image: image},
          success: function (resp) {
            // internal function for displaying status messages in the canvas
            _this._displayStatus('Image saved successfully');
            // doesn't have to be json, can be anything
            // returned from server after upload as long
            // as it contains the path to the image url
            // or a base64 encoded png, either will work
            resp = $.parseJSON(resp);

            // update images array / object or whatever
            images.push(resp.img);

            // do something with the image
            $('#wPaint-img').attr('src', image);
          }
        });
      }
      function loadImgBg () {
        // internal function for displaying background images modal
        // where images is an array of images (base64 or url path)
        // NOTE: that if you can't see the bg image changing it's probably
        // becasue the foregroud image is not transparent.
        this._showFileModal('bg', images);
      }
      function loadImgFg () {

        // internal function for displaying foreground images modal
        // where images is an array of images (base64 or url path)
        this._showFileModal('fg', images);
      }
      // init wPaint
      $('#wPaint').wPaint({
        menuOffsetLeft: -35,
        menuOffsetTop: -50,
        saveImg: saveImg,
        loadImgBg: loadImgBg,
        loadImgFg: loadImgFg
      });
      </script>
    </div>
  </div>

@endsection
