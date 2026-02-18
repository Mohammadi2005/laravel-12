<div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
    <label class="required">{{$label}}</label>
    <input type="text" name="{{$name}}" class="form-control"
           placeholder="{{$placeholder}}"
           {{ $attributes->merge(['class' => 'p-2']) }}
    >
</div>
