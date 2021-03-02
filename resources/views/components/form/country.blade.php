@props(['name','type'=>'text','value'=>null,'module','placeholder'])

<div class="form-group">
    <label for="{{$module}}-{{$name}}">{{$placeholder}}</label>
    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="{{$module}}-{{$name}}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{$value}}">
     @error('{{$name}}')
     <div class="invalid-feedback">
     {{$errors->first('name')}}
    </div>
              @enderror
  </div>