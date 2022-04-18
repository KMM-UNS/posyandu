<div>
    <label class="radio">
        <input required="" type="radio" name="{{ $name }}" id="gizi-T" value="Gizi Terpenuhi" aria-required="true" class="valid" {{ old($name) == 'Gizi Terpenuhi' ? "checked" : (isset($selected) && $selected == 'Gizi Terpenuhi' ? "checked" : null ) }}>
        <span>Gizi Terpenuhi</span>
    </label>
    <label class="radio">
        <input required="" type="radio" name="{{ $name }}" id="gizi-TT" value="Gizi Tidak Terpenuhi" aria-required="true" class="valid" {{ old($name) == 'Gizi Tidak Terpenuhi' ? "checked" : (isset($selected) && $selected == 'Gizi Tidak Terpenuhi' ? "checked" : null ) }}>
        <span>Gizi Tidak Terpenuhi</span>
    </label>
</div>

