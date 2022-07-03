<div>
    <label class="radio">
        <input required="" type="radio" name="{{ $name }}" id="y" value="Ya" aria-required="true" class="valid" {{ old($name) == 'Ya' ? "checked" : (isset($selected) && $selected == 'Ya' ? "checked" : null ) }}>
        <span>Ya</span>
    </label>
    <label class="radio">
        <input required="" type="radio" name="{{ $name }}" id="t" value="Tidak" aria-required="true" class="valid" {{ old($name) == 'Tidak' ? "checked" : (isset($selected) && $selected == 'Tidak' ? "checked" : null ) }}>
        <span>Tidak</span>
    </label>
</div>

