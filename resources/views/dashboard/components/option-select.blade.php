{{-- 'published', 'not_published', 'in_review' --}}
<option value="not_published">No publicado</option>
<option value="published" {{ $val == 'published'? 'selected="selected"': '' }}>Publicado</option>
<option value="in_review" {{ $val == 'in_review'? 'selected="selected"': '' }}>En revisión</option>