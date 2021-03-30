  <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 mb-3">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ (request()->segment(1) == 'user-detail')?'active':''}}">
          <a class="nav-link" href="{{route('user-detail.index')}}">Personal Details</a>
        </li>
        <li class="nav-item {{ (request()->segment(1)== 'education')?'active':''}} ">
          <a class="nav-link {{ ($userDetailstatus < 1)?'disabled':''}}" href="{{route('education.index')}}" >Education</a>
        </li>
        <li class="nav-item {{ (request()->segment(1)== 'experience')?'active':''}}">
          <a class="nav-link {{ ($userDetailstatus < 1 || $educationStatus < 1)?'disabled':''}}" href="{{route('experience.index')}}" >Work Experience</a>
        </li>
        <li class="nav-item {{ (request()->segment(1)== 'technical-experience')?'active':''}}">
          <a class="nav-link {{ ($userDetailstatus < 1 || $educationStatus < 1)?'disabled':''}}" href="{{route('technical-experience.index')}}">Technical Experience</a>
        </li>
        <?php $value = session('resume_selected_template', 'default') ?>
      @if ($value=="Resume Template 2")
        <li class="nav-item {{ (request()->segment(1)== 'highlight')?'active':''}}">
          <a class="nav-link {{ ($userDetailstatus < 1 || $educationStatus < 1 || $experiencesStatus < 1)?'disabled':''}}" href="{{route('highlight.index')}} " >HighLights</a>
        </li>
        @endif
        <li class="nav-item {{ (request()->segment(1)== 'additional-experience')?'active':''}}">
          <a class="nav-link {{ ($userDetailstatus < 1 || $educationStatus < 1 || $experiencesStatus < 1 || ($value=="Resume Template 2" && $highlightStatus < 1))?'disabled':''}}" href="{{route('additional-experience.index')}}">Additional Experience</a>
        </li>
        <li class="nav-item {{ (request()->segment(1)== 'skills')?'active':''}}">
          <a class="nav-link {{ ($userDetailstatus < 1 || $educationStatus < 1 || $experiencesStatus < 1 || ($value=="Resume Template 2" && $highlightStatus < 1))?'disabled':''}}" href="{{route('skills.index')}}" >Skills</a>
        </li>
      </ul>
    </div>
  </nav>
   {{-- {{$userDetailstatus}}
  {{$educationStatus}}
  {{$experiencesStatus}}
  {{$skillStatus}}
  {{$additionalExperienceStatus}}
  {{$technicalExperienceStatus}}
  {{$highlightStatus}}  --}}