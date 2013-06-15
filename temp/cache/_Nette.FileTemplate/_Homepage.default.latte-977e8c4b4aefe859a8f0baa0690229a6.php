<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.80647100 1371282137";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"D:\wamp\www\Autop_new\app\templates\Homepage\default.latte";i:2;i:1371282133;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: D:\wamp\www\Autop_new\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd9pngqoggk')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb1a61f91c52_content')) { function _lb1a61f91c52_content($_l, $_args) { extract($_args)
;call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
<?php $iterations = 0; foreach ($users as $user): ?>
    <tr>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($user->id, ENT_NOQUOTES) ?></td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($user->email, ENT_NOQUOTES) ?></td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($user->password, ENT_NOQUOTES) ?></td>
    </tr>
<?php $iterations++; endforeach ?>
</tbody>
</table>

<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb7e38668f44_title')) { function _lb7e38668f44_title($_l, $_args) { extract($_args)
?><h1>Users</h1>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 