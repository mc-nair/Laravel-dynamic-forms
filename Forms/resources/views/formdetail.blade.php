<h1></h1>
<div>

<form action="{{route('createquestions',['id'=>$result['id']])}}">
    <input type="hidden" name="formid" value="{{$result['id']}}" >
    <input type="submit" class="btn btn-primary" value="create question types">
</form>
</div>