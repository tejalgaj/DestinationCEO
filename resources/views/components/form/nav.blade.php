<nav aria-label="breadcrumb" class="mt-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item {{ Request::is('user-detail')?'active':''}}"><a href="{{route('user-detail.index')}}">Personal Details</a></li>
      <li class="breadcrumb-item {{ Request::is('education')?'active':''}}"><a href="{{route('education.index')}}">Education</a></li>
      <li class="breadcrumb-item {{ Request::is('experience')?'active':''}}"><a href="{{route('experience.index')}}">Work Experience</a></li>
      <li class="breadcrumb-item {{ Request::is('additional-experience')?'active':''}}"><a href="{{route('additional-experience.index')}}">Additional Experience</a></li>
      <li class="breadcrumb-item {{ Request::is('skills')?'active':''}}"><a href="{{route('skills.index')}}">Skills</a></li>
      
    </ol>
  </nav>