

@props(['name','value'=>''])
<x-form.input-wrapper>
<x-form.label :name="$name"/>
<textarea id="body" class="form-control" name="{{$name}}" cols="30" rows="10">{{old($name,$value)}}</textarea>
<x-error name="{{$name}}"/>
</x-form.input-wrapper>
