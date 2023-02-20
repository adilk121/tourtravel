(function($, window){
  'use strict';

  $(document).ready(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor' );
  });
})(jQuery, window);