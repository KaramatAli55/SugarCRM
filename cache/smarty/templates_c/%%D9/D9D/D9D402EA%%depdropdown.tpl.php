<?php /* Smarty version 2.6.11, created on 2017-08-23 14:46:35
         compiled from modules/ModuleBuilder/tpls/depdropdown.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/ModuleBuilder/tpls/depdropdown.tpl', 15, false),array('function', 'sugar_image', 'modules/ModuleBuilder/tpls/depdropdown.tpl', 115, false),array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/depdropdown.tpl', 117, false),array('modifier', 'regex_replace', 'modules/ModuleBuilder/tpls/depdropdown.tpl', 148, false),)), $this); ?>

<?php $this->assign('id_filter_chars', "/[^A-Za-z0-9-_]/"); ?> <script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp1_jquery.js'), $this);?>
"></script>
<!-- Below Div must exist in order for IE7/8 to read the inline style declaration. Line should be removed for IE9+ -->
<div display="none">&nbsp;</div>
<style>
<?php echo '
#visGridWindow .yui-dt table, #visGridWindow .yui-dt td, .yui-dt tr th, #visGridWindow .yui-dt-liner {
	padding: 1px 0px 1px 0 !important
}

#visGridWindow tr.yui-dt-rec {
    border-left-width: 0px;
    border-right-width: 0px;
}

#visGridWindow tr td{
    vertical-align: top;
}

#visGridWindow ul.ddd_table{
    padding: 5px;
    margin: 0px 10px 10px 10px;
    border: solid 1px grey;
    background-color: #F8F8F8;
    min-width: 120px;
    min-height: 20px;
}

#visGridWindow ul.ddd_parent_option.valid {
    background-color: #E0F8E0;
}

#visGridWindow ul.ddd_parent_option.invalid {
    background-color: #F8E0E0;
}

#visGridWindow ul li {
    list-style-type: none;
    margin: 3px;
    padding: 2px;
    text-align: center;
    background: white;
    border-radius: 3px;
    color: black;
}

#visGridWindow ul li.title {
    font-weight: bold;
    font-size: 16px;
    float:left;
    top: -30px;
    position: relative;
}

#visGridWindow h3.title {
    margin-left: auto;
    margin-right: auto;
    width: 90%;
    font-weight: bold;
    text-align: center;
    color:black;
}

.dd_title{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    font-size: 18px;
}

.dd_help{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    margin-bottom: 10px;
}

.left_list {
    float:left;
    border-right: 1px solid grey;
    padding-right: 5px;
    height:542px;
}

#ddd_delete div {
    border: 1px solid white;
    border-radius: 5px;
    width:48px;
    height:48px;
    margin-left: auto;
    margin-right: auto;
}
#ddd_delete.drophover div{
    border-color: gray;
}

'; ?>

</style>
<div class="left_list">
    <div class="dd_title">
        <div id="ddd_delete">
            <div><?php echo smarty_function_sugar_image(array('name' => 'Delete','width' => 48,'height' => 48,'id' => 'ddd_delete'), $this);?>
</div>
        </div><br/>
        <?php echo smarty_function_sugar_translate(array('label' => 'LBL_AVAILABLE_OPTIONS','module' => 'ModuleBuilder'), $this);?>

    </div>
    <div style="max-height: 450px; overflow-y: auto; overflow-x: hidden">
        <ul id="childTable" style="float:left" class="ddd_table">
            <?php $_from = $this->_tpl_vars['child_list_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['label']):
?>
                <?php if ($this->_tpl_vars['val'] === ""): ?>
                    <?php $this->assign('val', '--blank--'); ?>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['label'] === ""): ?>
                    <?php $this->assign('label', '--blank--'); ?>
                <?php endif; ?>
                <li class="ui-state-default" val="<?php echo $this->_tpl_vars['val']; ?>
"><?php echo $this->_tpl_vars['label']; ?>
</li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
</div>
<div style="max-height: 510px; overflow-y: auto; overflow-x: hidden">
    <div class="dd_help" style="width:600px">
        <?php echo smarty_function_sugar_translate(array('label' => 'LBL_DEPENDENT_DROPDOWN_HELP','module' => 'ModuleBuilder'), $this);?>

    </div>
<table ><tr>
    <?php $_from = $this->_tpl_vars['parent_list_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['parentloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['parentloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['label']):
        $this->_foreach['parentloop']['iteration']++;
?>
        <?php if (($this->_foreach['parentloop']['iteration']-1) % 4 == 0 && ! ($this->_foreach['parentloop']['iteration'] <= 1)): ?>
            </tr><tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['val'] === ""): ?>
            <?php $this->assign('val', '--blank--'); ?>
            <?php $this->assign('label', '--blank--'); ?>
        <?php endif; ?>
        <td>
            <h3 class="title"><?php echo $this->_tpl_vars['label']; ?>
</h3>
            <ul id="ddd_<?php echo ((is_array($_tmp=$this->_tpl_vars['val'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, $this->_tpl_vars['id_filter_chars'], '_') : smarty_modifier_regex_replace($_tmp, $this->_tpl_vars['id_filter_chars'], '_')); ?>
_list" class="ddd_table ddd_parent_option" >
                <?php $_from = $this->_tpl_vars['mapping'][$this->_tpl_vars['val']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['parentElLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['parentElLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['iv'] => $this->_tpl_vars['il']):
        $this->_foreach['parentElLoop']['iteration']++;
?>
                    <li class="ui-state-default" val="<?php echo $this->_tpl_vars['il']; ?>
"><?php echo $this->_tpl_vars['iv'];  echo $this->_tpl_vars['il'];  echo $this->_tpl_vars['child_list_options'][$this->_tpl_vars['il']]; ?>
</li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </td>
    <?php endforeach; endif; unset($_from); ?>
    </tr></table>
</div>
<div style="position: absolute;right: 10px;bottom: 10px;">
    <button onclick="ModuleBuilder.visGridWindow.hide();">
        <?php echo smarty_function_sugar_translate(array('label' => 'LBL_BTN_CANCEL','module' => 'ModuleBuilder'), $this);?>

    </button>
    <button onclick="$('#visibility_grid').val($.toJSON(SUGAR.ddd.getMapping()));ModuleBuilder.visGridWindow.hide();">
    <?php echo smarty_function_sugar_translate(array('label' => 'LBL_BTN_SAVE','module' => 'ModuleBuilder'), $this);?>

    </button>
</div>
<?php echo '
<script type="text/javascript">
SUGAR.ddd = {};
SUGAR.util.doWhen("typeof($) != \'undefined\'", function()
{
    //Load the jQueryUI CSS
    $(\'<link>\', {

        rel: \'stylesheet\',
        type: \'text/css\',
        href: \'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css\'
    }).appendTo(\'head\');

    var mapping = { };
    '; ?>

    var parentOptions = <?php echo $this->_tpl_vars['parentOptions']; ?>
;
    var childOptions = <?php echo $this->_tpl_vars['childOptions']; ?>
;
    //Load from the field if its on the page
    var targetId = "<?php echo $_REQUEST['targetId']; ?>
";
    var idFilterChars = <?php echo $this->_tpl_vars['id_filter_chars']; ?>
g; // regex for keeping troublesome chars out of our id.
    <?php echo '
    if ($("#" + targetId).length > 0)
    {
        var data = $.parseJSON($("#" + targetId).val());
        if (data && data.values)
            mapping = data.values;
    }
    //Initialize the grids if mapping wasn\'t empty
    var p = $("#childTable");
    for(var i in mapping)
    {
        var vals = mapping[i];
        if (i === "") i = "--blank--";
        i = i.replace(idFilterChars, "_");
        var l = $("#ddd_" + i + "_list");
        for(var j = 0; j < vals.length; j++)
        {
            var v = vals[j] === "" ? "--blank--" : vals[j];
            var c  = p.children("li[val=\\"" + v + "\\"]");
            l.append(c.clone());
        }
    }

    //Disable text selection
    $("#visGridWindow").disableSelection();

    //Create a custom sortable list that prevents duplicate drops
    var listContainsItem = function(list, val)
    {
        var c = list.children(\'li[val="\' + val + \'"].original\').not("li.ui-sortable-helper, li:hidden");
        return c.length != 0;
    }

    $.widget("ui.sugardddlist", $.extend({}, $.ui.sortable.prototype, {
        //Override the rearrange function to prevent drags into the availible option list or duplicate options into a list
        _rearrange: function(event, i, a, hardRefresh) {
            if(i){
                //If the target list isn\'t empty and contains the value we are dragging, return.
                var val = this.currentItem.attr("val");
                var p = i.item.parent();
                if (p.attr("id") == "childTable" || (listContainsItem(p, val) && this.currentItem.parent()[0] != p[0]))
                    return true;
            }

            //Call the parent function
            return $.ui.sortable.prototype._rearrange.call(this, event, i, a, hardRefresh);
        }
    }));

    //Child table is the list of items available from the child dropdown on the left side.
    SUGAR.ddd.childTable =  $( "#childTable" ).sugardddlist({
        connectWith: ".ddd_table",
        scope: "ddd_table",
        type: "semi-dynamic", //Semi-dynamic will prevent reordering within this list
        // Prevent the list from automatically scrolling when an item is picked up and moved to
        // the top or bottom of one of the target lists.
        scroll: false,
        helper: function(ev, el){
            return el.clone().show();
        },
        placeholder: {
            element: function(el) {
                if (el[0].id == "ddd_delete")
                    return false;
                //for the child table, we don\'t hide the item, we just create a clone for dragging
                el.hide();
                SUGAR.ddd.oldPos = el.prev();
                return el.clone().removeClass("original");
            },
            update: function(ev, el) {
                if (!ev.mouseDelayMet && $(el.context).parent()[0] != el.parent()[0]){
                    $(el.context).show();
                    el.css( "opacity", "0.5" );
                }
                el.show();
            }
        },
        remove: function(event, ui) {
            if ($("ul.ddd_parent_option").hasClass(\'invalid\')) {
                $("ul.ddd_parent_option").removeClass("invalid");
                return;
            }
            $("ul.ddd_parent_option").removeClass("valid");
            //If the item is being removed, put a clone back in the original list.
            if (SUGAR.ddd.oldPos[0])
                SUGAR.ddd.oldPos.after(ui.item.clone());
            else {
                SUGAR.ddd.childTable.children().first().before(ui.item.clone());
            }
        },
        stop : function(){
            $("ul.ddd_parent_option").removeClass("valid invalid");
        }
    }).disableSelection();

    //Create a list for each option on the parent dropdown
    for (var i in parentOptions)
    {
        if (i == "") i = "--blank--";
        i = i.replace(idFilterChars, "_");
        $( "#ddd_" + i + "_list" ).sugardddlist({
            connectWith: ".ddd_table",
            scope: "ddd_table",
            helper: "clone",
            hoverClass: "hover",
            over: function(event, ui) {
                $("ul.ddd_parent_option").removeClass("valid invalid");
                if (listContainsItem($(this), $(ui.item).attr("val")))
                    $(this).addClass("invalid");
                else
                    $(this).addClass("valid");
            },
            placeholder: {
                element: function(el) {
                    //hide the original and create a clone for dragging
                    el.hide();
                    return el.clone().css( "opacity", "0.5" ).removeClass("original");
                },
                update: function(ev, el) {
                    el.show();
                }
            },
            stop : function(){
                $("ul.ddd_parent_option").removeClass("valid invalid");
            }
        }).disableSelection();
    }

    //Mark all the li\'s as originals so we can distinguish them from the placeholder clones
    $("ul.ddd_table li").addClass("original");

    //Turn the trash bin into a drop target for deleting items
    $("#ddd_delete").droppable({
        //accept: ".ddd_parent_option li",
        greedy: true,
        scope: "ddd_table",
        hoverClass: \'drophover\',
        drop: function (event, ui) {
            $("ul.ddd_parent_option").removeClass("valid invalid");
            var $ul = ui.draggable.parent("ul");
            if ($ul.sortable("instance")) {
                $ul.sortable("cancel");
            }
            if(ui.draggable.parent("ul.ddd_parent_option").length)
                ui.draggable.remove();
        }
    });

    var blank = "--blank--";
    //Get mapping is used to get the final output for saving to the vardefs
    SUGAR.ddd.getMapping = function()
    {
        var getlistValues = function(list)
        {
            var c = list.children();
            var ret = [];
            for(var i = 0; i < c.length; i++)
            {
                var v = $(c[i]).attr("val");
                if (v == blank)
                    v = "";
                ret.push(v);
            }
            return ret;
        }
        for (var i in parentOptions)
        {
            var k = i == "" ? blank : i.replace(idFilterChars, "_");
            mapping[i] = getlistValues($( "#ddd_" + k + "_list" ));
        }
        return {
            trigger: $("#parent_dd").val(),
            values : mapping
        };
    }
});
</script>
'; ?>