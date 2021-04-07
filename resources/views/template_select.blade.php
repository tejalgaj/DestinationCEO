@extends('layouts.app')

@section('main-content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<main id="main">
   <section id="about" class="about">
        <div class="container" data-aos="fade-up">
    
          <div class="section-title">
            <h2>Build your resume in minutes</h2>
            
            <p>Start by choosing a template</p>
          </div>
    
          <div class="album py-5">
            <div class="container">
    
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('/') }}/resume_images/Resume_Example - 1Pg-page0001.jpg" alt="Card image cap" height="408px" width="294px">
                    <div class="card-body">
                      <p class="card-text">Resume Template 1</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary template_preview" data-toggle="modal" data-target="#exampleModal">Select Template</button>
                         
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('/') }}/resume_images/Standard Resume template-page0001.jpg" alt="Card image cap" height="408px" width="294px" >
                    <div class="card-body">
                        <p class="card-text">Resume Template 2</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary template_preview" data-toggle="modal" data-target="#exampleModal">Select Template</button>
                          
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
               
            </div>
          </div>
          </section>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img class="resume_preview_modal" width="100%" height="100%" src="{{ URL::to('/') }}/resume_images/Resume_Example - 1Pg-page0001.jpg" alt="Resume Preview">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary use-template-button">Use This Template</button>
                </div>
              </div>
            </div>
          </div>
        
      </div>
</main>
<script type="text/javascript">
jQuery('.template_preview').click(function(){
    let resume_description = jQuery(this).closest('.card-body').find('.card-text').text();
    let resume_url = jQuery(this).closest('.col-md-4').find('.card-img-top').attr("src");
    jQuery('#exampleModalLabel').text(resume_description);
    jQuery('.resume_preview_modal').attr('src',resume_url);

});

jQuery('.use-template-button').click(function(){
   let template_id = jQuery('#exampleModalLabel').text();

$.ajax({
        url: "/set-selected-template",
        type: "POST",
        data: {
          "_token": "{{ csrf_token() }}",
          "template_title": template_id,
          
        },
        success: function(response) {
            if(response.code == 200) {
              window.location = "/user-detail";
            }
        },
        error: function(response) {
          console.log(response.responseJSON);
        }
      });
});



</script>
@endsection