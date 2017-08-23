<?php /* Smarty version 2.6.11, created on 2017-08-23 14:31:53
         compiled from modules/ModuleBuilder/tpls/MBModule/dropdown.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/ModuleBuilder/tpls/MBModule/dropdown.tpl', 15, false),array('function', 'sugar_csrf_form_token', 'modules/ModuleBuilder/tpls/MBModule/dropdown.tpl', 19, false),array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/MBModule/dropdown.tpl', 38, false),array('function', 'html_options', 'modules/ModuleBuilder/tpls/MBModule/dropdown.tpl', 66, false),array('modifier', 'intval', 'modules/ModuleBuilder/tpls/MBModule/dropdown.tpl', 33, false),array('modifier', 'escape', 'modules/ModuleBuilder/tpls/MBModule/dropdown.tpl', 104, false),)), $this); ?>
<div>
    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/tpls/ListEditor.css'), $this);?>
"></link>
    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/ModuleBuilder/tpls/MBModule/dropdown.css'), $this);?>
"></link>
    <form name='dropdown_form' onsubmit="return false">
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

        <input type='hidden' name='module' value='ModuleBuilder'>
        <input type='hidden' name='action' value='<?php echo $this->_tpl_vars['action']; ?>
'>
        <input type='hidden' name='to_pdf' value='true'>
        <input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['module_name']; ?>
'>
        <input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['package_name']; ?>
'>
        <input type='hidden' id='list_value' name='list_value' value=''>
                <?php if (( $this->_tpl_vars['fromNewField'] )): ?>
            <input type='hidden' name='is_new' value='1'>
        <?php endif; ?>
        <?php if (( $this->_tpl_vars['refreshTree'] )): ?>
            <input type='hidden' name='refreshTree' value='1'>
        <?php endif; ?>
        <input type="hidden" name="new" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['new'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
        <table>
            <tr>
                <td colspan='2'>
                    <input id="saveBtn" type='button' class='button' onclick='SimpleList.handleSave()'
                           value='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_BUTTON_LABEL'), $this);?>
'>
                    <input type='button' class='button' onclick='SimpleList.undo()'
                           value='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BTN_UNDO'), $this);?>
'>
                    <input type='button' class='button' onclick='SimpleList.redo()'
                           value='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BTN_REDO'), $this);?>
'>
                    <input type='button' class='button' name='cancel' value='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BTN_CANCEL'), $this);?>
'
                           onclick='ModuleBuilder.tabPanel.get("activeTab").close()'>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <hr/>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <span class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DROPDOWN_TITLE_NAME'), $this);?>
:&nbsp;</span>
                    <?php if (! $this->_tpl_vars['new']): ?>
                        <input type='hidden' id='dropdown_name' name='dropdown_name'
                               value='<?php echo $this->_tpl_vars['dropdown_name']; ?>
'><?php echo $this->_tpl_vars['dropdown_name']; ?>

                    <?php else: ?>
                        <input type='text' id='dropdown_name' name='dropdown_name' value=<?php echo $this->_tpl_vars['dropdown_name']; ?>
>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" class='mbLBLL'>
                    <?php echo smarty_function_sugar_translate(array('label' => 'LBL_DROPDOWN_LANGUAGE'), $this);?>
:&nbsp;
                    <?php echo smarty_function_html_options(array('name' => 'dropdown_lang','options' => $this->_tpl_vars['available_languages'],'selected' => $this->_tpl_vars['selected_lang'],'onchange' => 'this.form.action.value="dropdown";ModuleBuilder.handleSave("dropdown_form")'), $this);?>

                </td>
            </tr>
            <tr>
                <td colspan="3" style='padding-top:10px;' class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DROPDOWN_ITEMS'), $this);?>
:
                </td>
            </tr>
            <tr>
                <td colspan="2"><b><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DROPDOWN_ITEM_NAME'), $this);?>
</b><span
                            class='fieldValue'>[<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DROPDOWN_ITEM_LABEL'), $this);?>
]<span>
                </td>
                <td style="text-align: right">
                    <input type='button' class='button' value='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BTN_SORT_ASCENDING'), $this);?>
'
                           onclick='SimpleList.sortAscending()'>
                    <input type='button' class='button' value='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BTN_SORT_DESCENDING'), $this);?>
'
                           onclick='SimpleList.sortDescending()'>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <ul id="ul1" class="listContainer">
                        <?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['val']):
?>
                            <?php if (( $this->_tpl_vars['name'] === "" )): ?>
                                <?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BLANK'), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('name', ob_get_contents());ob_end_clean(); ?>
                                <?php $this->assign('val', $this->_tpl_vars['name']); ?>
                                <?php $this->assign('is_blank', true); ?>
                            <?php else: ?>
                                <?php $this->assign('is_blank', false); ?>
                            <?php endif; ?>
                            <li class="draggable" id="<?php echo $this->_tpl_vars['name']; ?>
">
                                <table width='100%'>
                                    <tr>
                                        <td class="first">
                                            <?php if ($this->_tpl_vars['is_blank']): ?>
                                                <?php echo $this->_tpl_vars['val']; ?>

                                            <?php else: ?>
                                                <b><?php echo $this->_tpl_vars['name']; ?>
</b>
                                            <?php endif; ?>
                                            <input id='value_<?php echo $this->_tpl_vars['name']; ?>
' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['val'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' type='hidden'>
			               <span class='fieldValue' id='span_<?php echo $this->_tpl_vars['name']; ?>
'>[<?php echo $this->_tpl_vars['val']; ?>
]</span>
			               <span class='fieldValue' id='span_edit_<?php echo $this->_tpl_vars['name']; ?>
' style='display:none'>
			                   <input type='text' id='input_<?php echo $this->_tpl_vars['name']; ?>
' value="<?php echo $this->_tpl_vars['val']; ?>
"
                                      onBlur='SimpleList.setDropDownValue("<?php echo $this->_tpl_vars['name']; ?>
", this.value, true)'>
			               </span>
                                        </td>
                                        <td align='right'>
                                            <a href='javascript:void(0)'
                                               onclick='SimpleList.editDropDownValue("<?php echo $this->_tpl_vars['name']; ?>
", true)'>
                                                <?php echo $this->_tpl_vars['editImage']; ?>
</a>
                                            &nbsp;
                                            <a href='javascript:void(0)'
                                               onclick='SimpleList.deleteDropDownValue("<?php echo $this->_tpl_vars['name']; ?>
", true)'>
                                                <?php echo $this->_tpl_vars['deleteImage']; ?>
</a>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <table width='100%'>
                        <tr>
                            <td class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DROPDOWN_ITEM_NAME'), $this);?>
:</td>
                            <td class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DROPDOWN_ITEM_LABEL'), $this);?>
:</td>
                        </tr>
                        <tr>
                            <td><input type='text' id='drop_name' name='drop_name' maxlength='100'></td>
                            <td><input type='text' id='drop_value' name='drop_value'></td>
                            <td><input type='button' id='dropdownaddbtn'
                                       value='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_BUTTON'), $this);?>
' class='button'>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
    <?php echo '
    <script>
        addForm(\'dropdown_form\');
        addToValidate(\'dropdown_form\', \'dropdown_name\', \'DBName\', false, SUGAR.language.get("ModuleBuilder", "LBL_JS_VALIDATE_NAME"));
        addToValidate(\'dropdown_form\', \'drop_value\', \'varchar\', false, SUGAR.language.get("ModuleBuilder", "LBL_JS_VALIDATE_LABEL"));
        eval(';  echo $this->_tpl_vars['ul_list'];  echo ');
        SimpleList.name = '; ?>
'<?php echo $this->_tpl_vars['dropdown_name']; ?>
'<?php echo ';
        SimpleList.requiredOptions = ';  echo $this->_tpl_vars['required_items'];  echo ';
        SimpleList.ul_list = list;
        SimpleList.init('; ?>
'<?php echo $this->_tpl_vars['editImage']; ?>
'<?php echo ', '; ?>
'<?php echo $this->_tpl_vars['deleteImage']; ?>
'<?php echo ');
        ModuleBuilder.helpSetup(\'dropdowns\', \'editdropdown\');

        var addListenerFields = [\'drop_name\', \'drop_value\']
        YAHOO.util.Event.addListener(addListenerFields, "keydown", function (e) {
            if (e.keyCode == 13) {
                YAHOO.util.Event.stopEvent(e);
            }
        });

    </script>
    <script>// Bug in FF4 where it doesn\'t run the last script. Remove when the bug is fixed.</script>
    '; ?>

</div>
