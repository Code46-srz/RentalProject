   {{-- Modal used to display the property details in home page and in city view page --}}}
   <div class="modal" id="propertyModal" tabindex="-1">
       <div class="modal-dialog  modal-xl">
           <div class="modal-content">
               <div class="modal-header p-0">
                   <img id="modalLogo" src="https://macbuckets46.s3.us-west-2.amazonaws.com/system/willowLogoSmall.png"
                       alt="" srcset="" height="200" width="200">
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" id="customB"
                       data-bs-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>

   {{-- this modal will be used for the creation of new properties --}}
   <div class="modal" id="propertyCreate">
       <div class="modal-dialog  modal-xl">
           <div class="modal-content">
               <div class="modal-header p-0">
                   <img id="modalLogo" src="https://macbuckets46.s3.us-west-2.amazonaws.com/system/willowLogoSmall.png"
                       alt="" srcset="" height="200" width="200">
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="col-6">
                           <input type="text" class="form-control mb-3" placeholder="Address" aria-label="Address">
                           <input type="text" class="form-control mb-3" placeholder="Price" aria-label="Price">
                           <input type="text" class="form-control mb-3" placeholder="Sqft" aria-label="Sqft">
                           <input type="text" class="form-control mb-3" placeholder="type" aria-label="type">
                           <input type="text" class="form-control mb-3" placeholder="year built"
                               aria-label="year built">
                           <input type="text" class="form-control mb-3" placeholder="a/c type" aria-label="a/c type">
                           <input type="text" class="form-control mb-3" placeholder="number of carports"
                               aria-label="">
                           <input type="text" class="form-control mb-3" placeholder="residence type"
                               aria-label="residence type">
                           <input type="text" class="form-control mb-3" placeholder="HOA" aria-label="HOA">
                           <input type="text" class="form-control mb-3" placeholder="Overview" aria-label="Overview">




                       </div>
                       <div class="col-6">
                           <img src="https://macbuckets46.s3.us-west-2.amazonaws.com/system/image-break.png"
                               class="img-thumbnail mx-auto" alt="..."
                               style="width: 200px; height: 200px; object-fit: cover;" id="myImage"
                               onclick="triggerFileInput()">
                           <input type="file" class=" mx-auto" id="myFileInput" style="display: none">
                           <p>Exterior images</p>
                           <img src="..." class="img-thumbnail" alt="...">
                           <p>Interior images</p>
                           <img src="..." class="img-thumbnail" alt="...">
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" id="customB"
                       data-bs-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>

   {{-- this modal will be used for editing existing properties --}}
   <div class="modal" id="propertyEdit">
       <div class="modal-dialog  modal-xl">
           <div class="modal-content">
               <div class="modal-header p-0">
                   <img id="modalLogo"
                       src="https://macbuckets46.s3.us-west-2.amazonaws.com/system/willowLogoSmall.png" alt=""
                       srcset="" height="200" width="200">
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" id="customB"
                       data-bs-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>
