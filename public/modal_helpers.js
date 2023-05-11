
/**------------------------------------------------------------------------
 *                           Global modal code below
 *------------------------------------------------------------------------**/

 function loadGlobalModal(title, body, size = '', footer = null) {
    var modalContainer = $('#globalModalDialog');
    var modalTitle = $('#globalModalTitle');
  
    modalContainer.removeClass().addClass("modal-dialog");
    switch (size) {
      case 'sm':
        modalContainer.addClass("modal-sm");
        break;
      case 'lg':
        modalContainer.addClass("modal-lg");
        break;
      case 'xl':
        modalContainer.addClass("modal-xl");
        break;
      case 'xxl':
        modalContainer.addClass('modal-xxl');
      case 'fullscreen':
      case 'fs':
          modalContainer.addClass('modal-fullscreen');
    }
    modalTitle.html(title)
      .parent().show(); //this line will show
  
    document.getElementById("globalModalBody").innerHTML = body;
    loadGlobalModalFooter(footer);
    $('#globalModalTitleRight').html('');
  }
  
  function loadGlobalModalFooter(footer) {
    var modalFooter = $('#globalModalFooter');
    modalFooter.show();
    if (footer === null) { // show default 'close' button
      var defaultCloseButton = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
      modalFooter.html(defaultCloseButton);
    }
    else if (footer === '') {
      modalFooter.hide();
    } else {
      modalFooter.html(footer);
    }
  }
  
  function hideGlobalModalHeader() {
    $('#globalModalTitle').parent().hide();
  
  
  }
  
  function showGlobalModal(isShow = true) {
  //   console.log('attempting to show modal');
    var visibility;
    if (isShow) {
      visibility = 'show';
    } else {
      visibility = 'hide';
    }
    $('#globalModal').modal(visibility);
  }
  
  function hideGlobalModal() {
    $('#globalModalTitle').html('');
    $('#globalModalBody').html('');
    $('#globalModalFooter').html('');
    $('#globalModal').modal('hide');
  
  }

  
  /**------------------------------------------------------------------------
   *                           Global modal 2 code below
   *------------------------------------------------------------------------**/
  
  /*
  * Loads the second global modal, right over the first one.
  * There is an optional options object that takes:
  *   title:      <String>
  *   body:       <String>
  *   size:       'sm'|'lg'|'xl'
  *   centered:   true|false
  */
  function loadGlobalModal2(options , body, size = '', footer = null, show = false) {
  
    var modalContainer = $('#globalModal2Dialog');
    modalContainer.removeClass().addClass('modal-dialog')
    var modalTitle = $('#globalModal2Title');
    var modalBody = $('#globalModal2Body');
  
    //Support for either object or parameters by converting parameters to object
    if(typeof options === 'string'){
      var options = { 'title': options, 'size': size, 'body': body, 'footer': footer };
  
    }
  
  
    //read from object
  
    if (options.title !== undefined) {
      modalTitle.html(options.title);
    }
    if (options.body !== undefined) {
      modalBody.html(options.body);
    }
  
    if (options.size !== undefined) {
      let size = options.size;
      switch (size) {
        case 'sm':
          modalContainer.addClass("modal-sm");
          break;
        case 'lg':
          modalContainer.addClass("modal-lg");
          break;
        case 'xl':
          modalContainer.addClass("modal-xl");
          break;
      }
    }
    if (options.centered !== undefined && options.centered) {
      modalContainer.addClass("modal-dialog-centered");
    }
    modalTitle.parent().removeClass().addClass('modal-header text-white');
    if (options.headerTheme !== undefined) {
      modalTitle.parent().addClass('bg-' + options.headerTheme);
    }
    else modalTitle.parent().addClass('bg-secondary');
    if(show){
      showGlobalModal2();
    }
  
    loadGlobalModal2Footer(options.footer);
  }
  
  function loadGlobalModal2Footer(footer) {
    var modalFooter = $('#globalModal2Footer');
    modalFooter.show();
    if (footer == null) { // show default 'close' button
      var defaultCloseButton = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
      modalFooter.html(defaultCloseButton);
    }
    else if (footer === '--none') {
      modalFooter.hide();
    } else {
      modalFooter.html(footer);
    }
  }
  
  function showGlobalModal2() {
    $('#globalModal2').modal('show');
    $('#globalModal').append("<div id='modalbackdrop' class='modal-backdrop fade show'></div>");
    $('#globalModal2').on('hidden.bs.modal', function () {
      $('#modalbackdrop').remove()
    });
  }
  
  function hideGlobalModal2() {
    $('#globalModal2Title').html('');
    $('#globalModal2Body').html('');
    $('#globalModal2Footer').html('');
    $('#globalModal2').modal('hide');
  }

 
  
  function openLoadingSpinner(message = 'Loading...') {
    document.getElementById('PageSpinnerMessage').innerHTML = message;
    document.getElementById('PageSpinner').style.display = 'block';
    document.getElementById('PageFade').style.display = 'block';
  }
  
  function closeLoadingSpinner() {
    document.getElementById('PageSpinner').style.display = 'none';
    document.getElementById('PageFade').style.display = 'none';
  }
  
  function openLoadingSpinnerIn(element, padding = '25px') {
  
  
    spinner = `<div id="NestedSpinner" style="text-align:center; padding: ${padding};">${spinnerHtml}</div>`;
    element.children().hide();
    element.append(spinner);
  }
  
  function closeLoadingSpinnerIn(element) {
    element.find('#NestedSpinner').remove();
    element.children().show();
  }

  /**
   *  USE Like:
   *     $('#auth-modal-body').html(getSpinner());
   */
  function getSpinner() {
    return spinnerHtml;
  }
  
  let spinnerHtml = `<div class="spinner-grow text-primary" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-secondary" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-success" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-danger" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-light" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-dark" role="status">
  <span class="sr-only">Loading...</span>
  </div>`;