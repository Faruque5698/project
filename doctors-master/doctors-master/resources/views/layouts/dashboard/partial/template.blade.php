   <div class="template_boxes">
            <h3>Select Template</h3>
            <div class="box " >
                @foreach($templates as $template)
                <div class=" hover_image"id="hover">
                <a href="{{route('prescription',['id'=>$template->id])}}">
                    <img class="hover_image__img" src="{{asset('assets/frontend')}}/img/social-page-interface-user-profile-ui-mockup-vector-35404396.jpg" alt="">
                    <div class="image__overlay">
                        <div class="image__title" id="title">{{$template->template_name}}</div>
                        <p class="image__description" id="location">
                            {{$template->location}}
                        </p>
                    </div>
                </a>
                </div>
                @endforeach

            </div>
            <div class="btn add_btn">
                <a id="open"  data-bs-toggle="modal" data-bs-target="#exampleModal">>
                    + Create a New Template
                </a>
            </div>
        </div>
        <div class="template_boxes">
            <h3>Patients List</h3>
            <div class="btn add_btn">
                <a href="./patient_info.html">
                    View All Patient List
                </a>
            </div>
        </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Create Template</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form id="AddForm">
                       @csrf
                       <div class="mb-3">
                           <label class="form-label">Template Name</label>
                           <input type="text" class="form-control" name="template_name" required id="template_name" placeholder="Enter Template Name">
                       </div>
                       <div class="mb-3">
                           <label class="form-label">Template logo</label>
                           <input type="file" class="form-control" name="template_logo" required id="template_logo">
                       </div>
                       <div class="mb-3">
                           <label class="form-label">Location</label>
                           <input type="text" class="form-control"  name="location" required id="location" placeholder="Enter Location">
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
{{--               <div class="modal-footer">--}}
{{--                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                   <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--               </div>--}}
           </div>
       </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script>
       $(document).ready(function () {
           // fetchTemplate();
           function fetchTemplate(){
               $.ajax({
                   type:"GET",
                   // url:"/fetch-template",
                   dataType:"json",
                   success:function (response){
                       // console.log(response.employee);
                       // console.log(response.tempaltes)

                       $('#hover').html("");

                       $.each(response.template, function (key, template){
                           var $clone = $('#hover').clone().removeAttr('id');
                           $("#title").html(template.template_name)
                           $('#hover').html("a");
                           $clone.find('#title').text(template.template_name);
                           $clone.find('#location').text(template.location);
                           $('#title').html(template.template_name)

                           $('#location').html(template.location)

                           // $('#hover').append(" <a href='./pres.html'>" +
                           //     "<div class='image__overlay'>" +
                           //     "<img class='hover_image__img' src='/img/social-page-interface-user-profile-ui-mockup-vector-35404396.jpg'>"+
                           //     "<div class='image__overlay'>"+
                           //     "<div class='image__title' id='title'>"+template.template_name+"</div>"+
                           //     "<p class='image__description' id='location'>"+template.location+"</p>"+
                           //     "</div>" +
                           //     "</div>"+
                           // "</a>");
                       })

                   }
               })
           }


           $(document).on('submit', '#AddForm', function (e) {
               e.preventDefault();

               let formData = new FormData($('#AddForm')[0]);
               $.ajax({
                   type: "POST",
                   url: "/add_template",
                   data: formData,
                   contentType: false,
                   processData: false,
                   success: function (response) {
                       // alert(response.message);
                       if (response.status == 200) {
                           alert(response.message)
                           $('#AddForm').find('input').val('');
                           $('#exampleModal').modal('hide');
                           location.reload()
                           // fetchEmployee();
                       }
                   }
               })

           })
       })
   </script>
