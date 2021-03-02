@props(['name','type'=>'text','value'=>null,'module'])

<div class="form-group">
                <label for="{{$module}}-{{$name}}">{{ucfirst($name)}}</label>
                <input type="{{$type}}" class="form-control" id="{{$module}}-employer" placeholder="{{ucfirst($name)}}" name="{{$name}}" value="{{$value}}">
              </div>