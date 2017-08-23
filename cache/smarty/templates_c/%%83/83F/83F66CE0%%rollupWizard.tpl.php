<?php /* Smarty version 2.6.11, created on 2017-08-23 14:42:55
         compiled from modules/ExpressionEngine/tpls/rollupWizard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/ExpressionEngine/tpls/rollupWizard.tpl', 20, false),array('function', 'sugar_translate', 'modules/ExpressionEngine/tpls/rollupWizard.tpl', 31, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
</script>
'; ?>

<table id="rollwiz_table">
    <tr>
        <td class="label">Type:</td>
        <td><?php echo smarty_function_html_options(array('name' => 'rmodule','id' => 'rollwiz_type','values' => $this->_tpl_vars['rollup_types'],'options' => $this->_tpl_vars['rollup_types'],'selected' => $this->_tpl_vars['rollupType']), $this);?>
</td>
    </tr><tr>
        <td class="label">Module:</td>
        <td><?php echo smarty_function_html_options(array('name' => 'rmodule','id' => 'rollwiz_rmodule','selected' => $this->_tpl_vars['selLink'],'values' => $this->_tpl_vars['rmodules'],'options' => $this->_tpl_vars['rmodules'],'onChange' => "SUGAR.expressions.updateRollupWizard(this.value, \$('#rollwiz_type').val())"), $this);?>
</td>
    </tr><tr>
        <td scope="label">Field:</td>
        <td><?php echo smarty_function_html_options(array('name' => 'rfield','id' => 'rollwiz_rfield','values' => $this->_tpl_vars['rfields'],'options' => $this->_tpl_vars['rfields'],'onChange' => "console.log(this)"), $this);?>
</td>
    </tr>
</table>
<div style="width:100%;text-align:right">
    <button class='button' name='selrf_cancelbtn' onclick="SUGAR.rollupWindow.hide()" >
        <?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_BTN_CANCEL'), $this);?>

    </button>
    <button class='button' name='selrf_insertbtn' onclick="SUGAR.expressions.insertRollup()" >
        <?php echo smarty_function_sugar_translate(array('module' => 'ModuleBuilder','label' => 'LBL_BTN_INSERT'), $this);?>

    </button>
</div>