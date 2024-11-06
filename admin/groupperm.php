<?php
/*-----------引入檔案區--------------*/
$GLOBALS['xoopsOption']['template_main'] = 'tad_timeline_admin.tpl';
require_once __DIR__ . '/header.php';
require_once dirname(__DIR__) . '/function.php';
require_once XOOPS_ROOT_PATH . '/Frameworks/art/functions.php';
require_once XOOPS_ROOT_PATH . '/Frameworks/art/functions.admin.php';
require_once XOOPS_ROOT_PATH . '/class/xoopsform/grouppermform.php';

//取得本模組編號
$module_id = $xoopsModule->getVar('mid');

//頁面標題
$perm_page_title = _MA_TADTIMELI_PERM_TITLE;

//取得分類編號及標題
//權限項目陣列（編號超級重要！設定後，以後切勿隨便亂改。）
$item_list = [
    '1' => _MA_TADTIMELI_EDIT_EVENT,
];

//頁面標題
$perm_page_title = _MA_TADTIMELI_PERM_TITLE;

//權限名稱（請設定一個英文名稱，一般用模組名稱即可）
$perm_name = 'tad_timeline';

//權限描述
$perm_desc = _MA_TADTIMELI_PERM_DESC;

//建立XOOPS權限表單
$formi = new \XoopsGroupPermForm($perm_page_title, $module_id, $perm_name, $perm_desc, null, false);

//將權限項目設進表單中
foreach ($item_list as $item_id => $item_name) {
    $formi->addItem($item_id, $item_name);
}

echo $formi->render();
$xoopsTpl->assign('now_op', 'tad_timeline_groupperm');
require_once __DIR__ . '/footer.php';
