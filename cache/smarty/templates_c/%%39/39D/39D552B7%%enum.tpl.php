<?php /* Smarty version 2.6.11, created on 2017-08-23 14:31:32
         compiled from modules/DynamicFields/templates/Fields/Forms/enum.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/DynamicFields/templates/Fields/Forms/enum.tpl', 17, false),array('function', 'html_options', 'modules/DynamicFields/templates/Fields/Forms/enum.tpl', 20, false),)), $this); ?>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_DROP_DOWN_LIST'), $this);?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5 && empty ( $this->_tpl_vars['vardef']['function'] ) && ( ! isset ( $this->_tpl_vars['vardef']['studio']['field']['options'] ) || isTruthy ( $this->_tpl_vars['vardef']['studio']['field']['options'] ) )): ?>
		<?php echo smarty_function_html_options(array('name' => 'options','id' => 'options','selected' => $this->_tpl_vars['selected_dropdown'],'values' => $this->_tpl_vars['dropdowns'],'output' => $this->_tpl_vars['dropdowns'],'onChange' => "ModuleBuilder.dropdownChanged(this.value);"), $this); if (! $this->_tpl_vars['uneditable']): ?><br><input type='button' value='<?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_BTN_EDIT'), $this);?>
' class='button' onclick="ModuleBuilder.moduleDropDown(this.form.options.value, this.form.options.value);">&nbsp;<input type='button' value='<?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_BTN_ADD'), $this);?>
' class='button' onclick="ModuleBuilder.moduleDropDown('', this.form.name.value);"><?php endif; ?>
	<?php else: ?>
		<input type='hidden' name='options' value='<?php echo $this->_tpl_vars['selected_dropdown']; ?>
'><?php echo $this->_tpl_vars['selected_dropdown']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_DEFAULT_VALUE'), $this);?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5 && empty ( $this->_tpl_vars['vardef']['function'] )): ?>
		<?php echo smarty_function_html_options(array('name' => "default[]",'id' => "default[]",'selected' => $this->_tpl_vars['selected_options'],'options' => $this->_tpl_vars['default_dropdowns'],'multiple' => $this->_tpl_vars['multi']), $this);?>

	<?php else: ?>
		<input type='hidden' name='default[]' id='default[]' value='<?php echo $this->_tpl_vars['vardef']['default']; ?>
'><?php echo $this->_tpl_vars['vardef']['default']; ?>

	<?php endif; ?>
	</td>
</tr>
<?php if (empty ( $this->_tpl_vars['vardef']['readonly'] )): ?>
<tr>
	<td class='mbLBL' ><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_MASS_UPDATE'), $this);?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type="checkbox" id="massupdate"  name="massupdate" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['massupdate'] )): ?>checked<?php endif; ?>/>
	<?php else: ?>
		<input type="checkbox" id="massupdate"  name="massupdate" value="1" disabled <?php if (! empty ( $this->_tpl_vars['vardef']['massupdate'] )): ?>checked<?php endif; ?>/>
	<?php endif; ?>
	</td>
</tr>
<?php endif;  if (! $this->_tpl_vars['radio'] && ( ! isset ( $this->_tpl_vars['vardef']['studio']['field']['options'] ) || isTruthy ( $this->_tpl_vars['vardef']['studio']['field']['options'] ) )): ?>
<tr id='depTypeRow' class="toggleDep"><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_DEPENDENT'), $this);?>
:</td>
    <td>
        <select id="depTypeSelect" onchange="ModuleBuilder.toggleParent(this.value == 'parent'); ModuleBuilder.toggleDF(this.value == 'formula'); ">
            <option label="<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_NONE'), $this);?>
" value=""><?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_NONE'), $this);?>
</option>
            <?php if (! empty ( $this->_tpl_vars['module_dd_fields'] )): ?>
                <option label="<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_PARENT_DROPDOWN'), $this);?>
" value="parent"><?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_PARENT_DROPDOWN'), $this);?>
</option>
            <?php endif; ?>
            <option label="<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_FORMULA'), $this);?>
" value="formula"><?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_FORMULA'), $this);?>
</option>
        </select>
        <script>
			//For enums, don't use the formal dependent checkbox, use this dependency type selector
            $('#depCheckboxRow').hide();
            ModuleBuilder.toggleParent(<?php if (empty ( $this->_tpl_vars['vardef']['visibility_grid'] )): ?>false<?php else: ?>true<?php endif; ?>);
            <?php if (! empty ( $this->_tpl_vars['vardef']['visibility_grid'] )): ?>
                $('#depTypeSelect').val("parent");
            <?php elseif (! empty ( $this->_tpl_vars['vardef']['dependency'] )): ?>
                $('#depTypeSelect').val("formula");
            <?php endif; ?>
		</script>
                <input type="hidden" id="customTypeValidate" onchange="return ModuleBuilder.validateDD()" />
    </td>
</tr>
    <?php $this->_tpl_vars['visibility_grid'] = !is_array($this->_tpl_vars['vardef']['visibility_grid']) ? array() : $this->_tpl_vars['vardef']['visibility_grid']; ?>
<tr id='visGridRow' <?php if (empty ( $this->_tpl_vars['vardef']['visibility_grid'] )): ?>style="display:none"<?php endif; ?> class="toggleDep">
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_PARENT_DROPDOWN'), $this);?>
:</td>
	<td>
        <?php echo smarty_function_html_options(array('name' => 'parent_dd','id' => 'parent_dd','selected' => $this->_tpl_vars['vardef']['visibility_grid']['trigger'],'options' => $this->_tpl_vars['module_dd_fields']), $this);?>

        <?php $this->_tpl_vars['visgridJSON'] = empty($this->_tpl_vars['vardef']['visibility_grid']) ? "" : json_encode($this->_tpl_vars['vardef']['visibility_grid']) ?>
        <input type="hidden" name="visibility_grid" id="visibility_grid" value='<?php echo $this->_tpl_vars['visgridJSON']; ?>
'/>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
        <button onclick="ModuleBuilder.editVisibilityGrid('visibility_grid', YAHOO.util.Dom.get('parent_dd').value, YAHOO.util.Dom.get('options').value)">
            <?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_EDIT_VIS'), $this);?>

        </button>
	<?php endif; ?>
	</td>
</tr>
<?php endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>