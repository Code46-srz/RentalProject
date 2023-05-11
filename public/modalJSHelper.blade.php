<div id="PageSpinner" class="position-fixed" style="text-align:center; padding-top: 50px">
    <div id="PageSpinnerMessage" style="font-weight: bold"> Loading... </div><br />
    <div class="spinner-grow text-muted"></div>
    <div class="spinner-grow text-primary"></div>
    <div class="spinner-grow text-success"></div>
    <div class="spinner-grow text-info"></div>
    <div class="spinner-grow text-warning"></div><br />
    <div class="spinner-grow text-danger"></div>
    <div class="spinner-grow text-secondary"></div>
    <div class="spinner-grow text-dark"></div>
    <div class="spinner-grow text-light"></div>
    <div class="spinner-grow text-muted"></div>
</div>

<div id="PageFade" class="position-fixed"></div>

  <!--Global modal START-->
  <div class="modal fade" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="globalModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" id="globalModalDialog">
        <div class="modal-content" id="globalModalContent">
            <div class="modal-header bg-secondary text-white" style="-webkit-border-radius: 0px !important;-moz-border-radius: 0px !important;border-radius: 0px !important;">
                <h5 class="modal-title" id="globalModalTitle"></h5>
                <div style="float: right">
                    <span id="globalModalTitleRight"></span>
                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                        <span style="font-size:20px; color: white">
                            <i class="fa-solid fa-rectangle-xmark"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div id="globalModalBody" class="tab-content p-3" style="min-height:auto;text-align: left;">

            </div>

            <div class="alert alert-danger alert-dismissible fade show" id="auth-error-message" style="display:none;">

            </div>

            <div class="modal-footer" id="globalModalFooter">
            </div>
        </div>
    </div>
</div>
<!--Global modal END-->

<!--Global modal 2 START-->
<div class="modal fade" id="globalModal2" tabindex="-1" role="dialog" aria-labelledby="globalModal2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" id="globalModal2Dialog">
        <div class="modal-content" id="globalModal2Content">
            <div class="modal-header bg-secondary text-white" style="-webkit-border-radius: 0px !important;-moz-border-radius: 0px !important;border-radius: 0px !important;">
                <h5 class="modal-title" id="globalModal2Title"></h5>
                <div style="float: right">
                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                        <span style="font-size:20px; color: white">
                            <i class="fa-solid fa-rectangle-xmark"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div id="globalModal2Body" class="tab-content p-3" style="min-height:auto;text-align: left;">

            </div>

            <div class="alert alert-danger alert-dismissible fade show" id="auth-error-message" style="display:none;">

            </div>

            <div class="modal-footer" id="globalModal2Footer">
            </div>
        </div>
    </div>
</div>
<!--Global modal 2 END-->