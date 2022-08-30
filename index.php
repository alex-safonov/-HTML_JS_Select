<div>
  <div class="vol-settings__right-col" style="margin-bottom: 20px">
      <div class="input-wrapper w100">
          <input type="text" name="taskSubcategory" class="required">

          <select id="chooseTaskSubcategory" style="color: #949494; display: none;">
          <? foreach ($sections as $section): ?>
          <? if ($section['DEPTH_LEVEL'] == 1):?>

          <optgroup label="<?=$section['NAME']?>">

            <? foreach ($sections as $subcategory): ?>
              <? if (($subcategory ['DEPTH_LEVEL'] == 2) && ($subcategory ['IBLOCK_SECTION_ID'] == $section["ID"])):?>
                <option value="<?=$subcategory["ID"]?>"><?=$subcategory['NAME']?></option>
              <? endif; ?>
            <? endforeach; ?>
          </optgroup>							    

          <? endif; ?>
          <? endforeach; ?>
          </select>

          <div class="upper-input">Подкатегория</div>
          <i>*</i>
      </div>
  </div>
</div>

<script type="text/javascript">
$('select#chooseTaskSubcategory').on('change', function() {
$('input[name="task_subcategoryID"]').val(this.value);
$('input[name="task_subcategory"]').val($('select#chooseTaskSubcategory option:selected').text());
$('input[name="taskSubcategory"]').val($('select#chooseTaskSubcategory option:selected').text());
});
</script>
