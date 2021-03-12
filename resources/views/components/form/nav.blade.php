<nav aria-label="breadcrumb" class="mt-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item {{ (request()->segment(1) == 'user-detail')?'active':''}}"><a href="{{route('user-detail.index')}}">Personal Details</a></li>
      <li class="breadcrumb-item {{ (request()->segment(1)== 'education')?'active':''}}"><a href="{{route('education.index')}}">Education</a></li>
      <li class="breadcrumb-item {{ (request()->segment(1)== 'experience')?'active':''}}"><a href="{{route('experience.index')}}">Work Experience</a></li>
      <li class="breadcrumb-item {{ (request()->segment(1)== 'technical-experience')?'active':''}}"><a href="{{route('technical-experience.index')}}">Technical Experience</a></li>

      <?php $value = session('resume_selected_template', 'default') ?>
      @if ($value=="Resume Template 2")
      <li class="breadcrumb-item {{ (request()->segment(1)== 'highlight')?'active':''}}"><a href="{{route('highlight.index')}}">HighLights</a></li>
      @endif
      
      <li class="breadcrumb-item {{ (request()->segment(1)== 'additional-experience')?'active':''}}"><a href="{{route('additional-experience.index')}}">Additional Experience</a></li>
      <li class="breadcrumb-item {{ (request()->segment(1)== 'skills')?'active':''}}"><a href="{{route('skills.index')}}">Skills</a></li>
      
    </ol>
  </nav>