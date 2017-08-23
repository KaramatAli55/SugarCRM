<?php /* Smarty version 2.6.11, created on 2017-08-23 12:34:48
         compiled from modules/ExpressionEngine/tpls/formulaBuilder.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'modules/ExpressionEngine/tpls/formulaBuilder.tpl', 15, false),array('function', 'sugar_translate', 'modules/ExpressionEngine/tpls/formulaBuilder.tpl', 20, false),array('function', 'sugar_image', 'modules/ExpressionEngine/tpls/formulaBuilder.tpl', 23, false),array('function', 'sugar_getjspath', 'modules/ExpressionEngine/tpls/formulaBuilder.tpl', 44, false),)), $this); ?>
<table width="100%" id="formulaBuilder">
	<tr style=""><td colspan=3 style="border-bottom:1px solid #AAA; padding-bottom:2px;">
		<textarea type="text" name="formulaInput" id="formulaInput" style="width:490px;height:120px;position: relative;z-index:50"><?php echo ((is_array($_tmp=$this->_tpl_vars['formula'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
</textarea>
	</td></tr>
	<tr id="fb_browse_row">
		<td id="functionsList" width="200">
            <input id="formulaFuncSearch" style="width:200px" class="empty"
			    value="<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_SEARCH_FUNCS'), $this);?>
"/>
            <span class="id-ff multiple"><button id="formulaFuncClear" class="button"
                onclick="var i = Dom.get('formulaFuncSearch'); i.value='';i.onkeyup();i.focus()">
            	<?php echo smarty_function_sugar_image(array('image' => "id-ff-clear.png",'name' => "id-ff-clear",'height' => '14','width' => '14'), $this);?>

			</button><div id="funcSearchResults"></div></span>
            <div id="functionsGrid"></div>
        </td>
		<td id="fieldsList" width="200">
			<input id="formulaFieldsSearch" style="width:200px" class="empty"
			     value="<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_SEARCH_FIELDS'), $this);?>
"/>
			<span class="id-ff multiple"><button id="formulaFieldClear" class="button"
			    onclick="var i=Dom.get('formulaFieldsSearch'); i.value='';i.onkeyup();i.focus()">
		      <?php echo smarty_function_sugar_image(array('image' => "id-ff-clear.png",'name' => "id-ff-clear",'height' => '14','width' => '14'), $this);?>

			</button><div id="fieldSearchResults"></div></span>
			<div id="fieldsGrid"></div>
		</td>
	</tr>
</table>
<div style="width:100%;text-align:right">
<input type='button' class='button' name='formulacancelbtn' value='<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_BTN_CANCEL'), $this);?>
'
	onclick="SUGAR.expressions.closeFormulaBuilder()" >
<input type='button' class='button' name='fomulaSaveButton' id="fomulaSaveButton" value='<?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_BTN_SAVE'), $this);?>
'
	onclick="if(SUGAR.expressions.saveCurrentExpression('<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['target'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['returnType'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html', 'UTF-8') : smarty_modifier_escape($_tmp, 'html', 'UTF-8')); ?>
'))SUGAR.expressions.closeFormulaBuilder()">
</div>
<script src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ExpressionEngine/javascript/formulaBuilder.js'), $this);?>
"></script>
<script type="text/javascript">
ModuleBuilder.addToHead("<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ExpressionEngine/tpls/formulaBuilder.css'), $this);?>
", "css");
ModuleBuilder.addToHead("<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/jquery/markitup/skins/simple/style.css'), $this);?>
", "css");
<?php echo '
var FBLoader = new YAHOO.util.YUILoader({
    require : ["formulabuilder"],
    loadOptional: true,
    skin: { base: \'blank\', defaultSkin: \'\' },
    onSuccess: function(){SUGAR.expressions.initFormulaBuilder()},
    allowRollup: true,
    base: "include/javascript/yui/build/"
});
FBLoader.addModule({
    name :"formulabuilder",
    type : "js",
    fullpath: "';  echo smarty_function_sugar_getjspath(array('file' => 'modules/ExpressionEngine/javascript/formulaBuilder.js'), $this); echo '",
    varName: "SUGAR.expressions.initFormulaBuilder",
    requires: ["layout", "element"]
});
'; ?>

var fieldsArray = <?php echo $this->_tpl_vars['Field_Array']; ?>
;
var returnType = '<?php echo ((is_array($_tmp=$this->_tpl_vars['returnType'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
FBLoader.insert();
</script>