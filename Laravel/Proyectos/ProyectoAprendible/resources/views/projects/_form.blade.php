@csrf
<label>
    Titulo del proyecto<br>
    <input type="text" name="title" value="{{ old('title',  $project->title ) }}">
</label>
<br>
<label>
    Descripción del proyecto<br>
    <textarea name="Description">{{ old('Description',  $project->Description) }}</textarea>
</label>
<br>
<button>{{ $btnText }}</button>
<br>