<input
    id="{{empty($id)? '' : $id}}"
    class="{{empty($className)? '' : $className}}"
    type="text"
    placeholder="{{$placeholder}}"
    value="{{$value}}"
    name="{{$name}}"
    {{!empty($validation) ? $validation : ''}}
/>
