<?php return array (
  '50dcc548a35aa7bc50baaab8150bc98f' => 
  array (
    'criteria' => 
    array (
      'name' => 'easycomm',
    ),
    'object' => 
    array (
      'name' => 'easycomm',
      'path' => '{core_path}components/easycomm/',
      'assets_path' => '{base_path}_easyComm/assets/components/easycomm/',
    ),
  ),
  '7c0e5466c4ab32e07a2bd193c5080142' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_show_templates',
    ),
    'object' => 
    array (
      'key' => 'ec_show_templates',
      'value' => '*',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  'b788f84089a8ea329d2378db6ae7f52b' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_show_resources',
    ),
    'object' => 
    array (
      'key' => 'ec_show_resources',
      'value' => '*',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  'bbbfccb3d3254a78e7e1524069702c7a' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_frontend_css',
    ),
    'object' => 
    array (
      'key' => 'ec_frontend_css',
      'value' => '[[+cssUrl]]web/ec.default.css',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  '44ed69e1ff16cf170efcba8131869156' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_frontend_js',
    ),
    'object' => 
    array (
      'key' => 'ec_frontend_js',
      'value' => '[[+jsUrl]]web/ec.default.js',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  'bb918fac2160c154afbe8b42e9441994' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_thread_grid_fields',
    ),
    'object' => 
    array (
      'key' => 'ec_thread_grid_fields',
      'value' => 'id,resource,name,title,count,rating_simple,rating_wilson',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  '35afc7b6064695322d29feb2a8971212' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_thread_window_fields',
    ),
    'object' => 
    array (
      'key' => 'ec_thread_window_fields',
      'value' => 'resource,name,title,rating_simple,rating_wilson',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  'b75fb6c517254b17b29f926397b7fc7b' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_message_grid_fields',
    ),
    'object' => 
    array (
      'key' => 'ec_message_grid_fields',
      'value' => 'id,resource_pagetitle,thread_name,subject,date,user_name,user_email,user_contacts,rating,text,reply_author,reply_text,ip',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  '70c9994c773235b0baedd96fd759440b' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_message_window_layout',
    ),
    'object' => 
    array (
      'key' => 'ec_message_window_layout',
      'value' => '{"main": {"name": "main","columns": {"column0":["user_name","user_email"],"column1":["date","user_contacts"]},"fields": ["subject","rating","text","published"]},"reply":{"name": "reply", "columns": {}, "fields": ["reply_author","reply_text","notify","notify_date"]},"settings":{"name": "settings", "columns": {}, "fields": [ "thread","ip","extended"]}}',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  'f88b5fadb6750ea09d8b1d7b9669f5ac' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_auto_reply_author',
    ),
    'object' => 
    array (
      'key' => 'ec_auto_reply_author',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => NULL,
    ),
  ),
  '182be5d534736559b5543f357385c950' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_notify_user',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_notify_user',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  '1e8ac1cecc8d056194da5dbb8d359cd0' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_notify_manager',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_notify_manager',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  '40d7fcd88d167b113329e80b7a74aeb6' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_new_subject_manager',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_new_subject_manager',
      'value' => 'Новое сообщение на сайте [[++site_url]]',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  'eea9b680b5830b9684f38c7fe4e77361' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_new_subject_user',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_new_subject_user',
      'value' => 'Вы оставили сообщение на сайте [[++site_url]]',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  'eb90ece8df374e3ed01217b44d1eb35f' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_update_subject_user',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_update_subject_user',
      'value' => 'Уведомление о вашем сообщении на сайте [[++site_url]]',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  'aad7d35c0c8ab72483067e36d77ccb66' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_manager',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_manager',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  'bb3d5a665b9a508ea9831cbebfd86988' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_from',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_from',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  '088d7b9e341573fec4b6b07550c5bb6c' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_from_name',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_from_name',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => NULL,
    ),
  ),
  '6c5e16da1e169fc421f4a5b6bd92119c' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_rating_max',
    ),
    'object' => 
    array (
      'key' => 'ec_rating_max',
      'value' => '5',
      'xtype' => 'numberfield',
      'namespace' => 'easycomm',
      'area' => 'ec_rating',
      'editedon' => NULL,
    ),
  ),
  '83c3ced975ef7b2b4cd1355bcc918e35' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_rating_wilson_confidence',
    ),
    'object' => 
    array (
      'key' => 'ec_rating_wilson_confidence',
      'value' => '1.6',
      'xtype' => 'numberfield',
      'namespace' => 'easycomm',
      'area' => 'ec_rating',
      'editedon' => NULL,
    ),
  ),
  '609411f2d094af778630d22167ea4627' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_rating_visual_editor',
    ),
    'object' => 
    array (
      'key' => 'ec_rating_visual_editor',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_rating',
      'editedon' => NULL,
    ),
  ),
  'bf58f2847183e6cf9ec0671e0655ed0b' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_gravatar_size',
    ),
    'object' => 
    array (
      'key' => 'ec_gravatar_size',
      'value' => '50',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_gravatar',
      'editedon' => NULL,
    ),
  ),
  '7ca4d1234eb6c0253bc0b8e193b2f8f4' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_gravatar_default',
    ),
    'object' => 
    array (
      'key' => 'ec_gravatar_default',
      'value' => '[[++site_url]]assets/components/easycomm/img/web/avatar-simple.png',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_gravatar',
      'editedon' => NULL,
    ),
  ),
  'cfe66d18acea45872ffd8a9cd82427a3' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_captcha_enable',
    ),
    'object' => 
    array (
      'key' => 'ec_captcha_enable',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_antispam',
      'editedon' => NULL,
    ),
  ),
  '8a124a4ea834dc36677546891dbea933' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_recaptcha2_api',
    ),
    'object' => 
    array (
      'key' => 'ec_recaptcha2_api',
      'value' => 'https://www.google.com/recaptcha/api.js?onload=easyCommReCaptchaCallback&render=explicit&hl=[[+cultureKey]]',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_antispam',
      'editedon' => NULL,
    ),
  ),
  '11223bcac7617fb6ece6a25b6469edeb' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_recaptcha2_site_key',
    ),
    'object' => 
    array (
      'key' => 'ec_recaptcha2_site_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_antispam',
      'editedon' => NULL,
    ),
  ),
  'fda5ade68242c4026f086abd87bc7909' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_recaptcha2_secret_key',
    ),
    'object' => 
    array (
      'key' => 'ec_recaptcha2_secret_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_antispam',
      'editedon' => NULL,
    ),
  ),
  '0f5259e5b5c5560e13bacf40a23ce1e0' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcThreadRemove',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '9842950d80112d64bf35ebe537bf9267' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnEcThreadRemove',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'c4ed404cead1462b75035167e15be44b' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageSave',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageSave',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'af55b213db21b0140730f77823a93648' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageSave',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageSave',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'ddc18d496735d358a9c3a49c2fa2ddfa' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessagePublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessagePublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '1ec2c583c27e344ec1ef00c302511701' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessagePublish',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessagePublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '0fef248a96916ff97273d4c494d10201' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageUnpublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '3ab3db901f9a49988a0c63799d3b7199' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageUnpublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '108c8df5a02325edd26dace6dea604f9' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageDelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '6007e0f39fe1dab34ab38dff4652eaec' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageDelete',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageDelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '6059603a80c5bcac460c16e3fcc4b1a9' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageUndelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'f0e6b78171e9abe4c97c9acad406adf8' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageUndelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'ec959c69340ad8f6e70fcd3ffcadbc9b' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageRemove',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '7981b5d9840e72cdb93f44a859e03c64' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageRemove',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageRemove',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'bd7462f2cf5dc2ffce300cc88dc625b4' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'easycomm',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 1,
      'namespace' => 'easycomm',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'easycomm:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  'f4c39f64c2da840baaba4da43b885251' => 
  array (
    'criteria' => 
    array (
      'text' => 'easyComm',
    ),
    'object' => 
    array (
      'text' => 'easyComm',
      'parent' => 'components',
      'action' => '1',
      'description' => 'ec_menu_desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  'b5f9a4463450d3e53b31117dd88adb7e' => 
  array (
    'criteria' => 
    array (
      'category' => 'easyComm',
    ),
    'object' => 
    array (
      'id' => 1,
      'parent' => 0,
      'category' => 'easyComm',
      'rank' => 0,
    ),
  ),
  '9aad44a11c3a928633b528a1a38e6656' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecMessages.Row',
    ),
    'object' => 
    array (
      'id' => 1,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecMessages.Row',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '<div id="ec-[[+thread_name]]-message-[[+id]]" class="ec-message">
    <p><strong>[[+user_name]]</strong><span class="ec-message__date"> [[+date:dateAgo]]</span></p>
    <div class="ec-stars">
        <span class="rating-[[+rating]]"></span>
    </div>
    <p>[[+text]]</p>
    [[+reply_text]]
</div>

<!--ec_reply_text <div class="ec-message__reply">[[+reply_author]]<p>[[+reply_text]]</p></div>-->
<!--ec_reply_author <p><strong>[[+reply_author]]</strong></p>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_messages_row.tpl',
      'content' => '<div id="ec-[[+thread_name]]-message-[[+id]]" class="ec-message">
    <p><strong>[[+user_name]]</strong><span class="ec-message__date"> [[+date:dateAgo]]</span></p>
    <div class="ec-stars">
        <span class="rating-[[+rating]]"></span>
    </div>
    <p>[[+text]]</p>
    [[+reply_text]]
</div>

<!--ec_reply_text <div class="ec-message__reply">[[+reply_author]]<p>[[+reply_text]]</p></div>-->
<!--ec_reply_author <p><strong>[[+reply_author]]</strong></p>-->',
    ),
  ),
  '93a02b47a83a0caeb3d6986044e8e01b' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '<h2>[[%ec_fe_message_add]]</h2>
<form class="form well ec-form" method="post" role="form" id="ec-form-[[+fid]]" data-fid="[[+fid]]" action="">
    <input type="hidden" name="thread" value="[[+thread]]">

    <div class="form-group ec-antispam">
        <label for="ec-[[+antispam_field]]-[[+fid]]" class="control-label">[[%ec_fe_message_antismap]]</label>
        <input type="text" name="[[+antispam_field]]" class="form-control" id="ec-[[+antispam_field]]-[[+fid]]" value="" />
    </div>

    <div class="form-group">
        <label for="ec-user_name-[[+fid]]" class="control-label">[[%ec_fe_message_user_name]]</label>
        <input type="text" name="user_name" class="form-control" id="ec-user_name-[[+fid]]" value="[[+user_name]]" />
        <span class="ec-error help-block" id="ec-user_name-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_email-[[+fid]]" class="control-label">[[%ec_fe_message_user_email]]</label>
        <input type="text" name="user_email" class="form-control" id="ec-user_email-[[+fid]]" value="[[+user_email]]" />
        <span class="ec-error help-block" id="ec-user_email-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_contacts-[[+fid]]" class="control-label">[[%ec_fe_message_user_contacts]]</label>
        <input type="text" name="user_contacts" class="form-control" id="ec-user_contacts-[[+fid]]" value="[[+user_contacts]]" />
        <span class="ec-error help-block" id="ec-user_contacts-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-subject-[[+fid]]" class="control-label">[[%ec_fe_message_subject]]</label>
        <input type="text" name="subject" class="form-control" id="ec-subject-[[+fid]]" value="[[+subject]]" />
        <span class="ec-error help-block" id="ec-subject-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-rating-[[+fid]]" class="control-label">[[%ec_fe_message_rating]]</label>
        <input type="hidden" name="rating" id="ec-rating-[[+fid]]" value="[[+rating]]" />
        <div class="ec-rating ec-clearfix" data-storage-id="ec-rating-[[+fid]]">
            <div class="ec-rating-stars">
                <span data-rating="1" data-description="[[%ec_fe_message_rating_1]]"></span>
                <span data-rating="2" data-description="[[%ec_fe_message_rating_2]]"></span>
                <span data-rating="3" data-description="[[%ec_fe_message_rating_3]]"></span>
                <span data-rating="4" data-description="[[%ec_fe_message_rating_4]]"></span>
                <span data-rating="5" data-description="[[%ec_fe_message_rating_5]]"></span>
            </div>
            <div class="ec-rating-description">[[%ec_fe_message_rating_0]]</div>
        </div>
        <span class="ec-error help-block" id="ec-rating-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-text-[[+fid]]" class="control-label">[[%ec_fe_message_text]]</label>
        <textarea type="text" name="text" class="form-control" rows="5" id="ec-text-[[+fid]]">[[+text]]</textarea>
        <span class="ec-error help-block" id="ec-text-error-[[+fid]]"></span>
    </div>

    [[+recaptcha]]

    <div class="form-actions">
        <input type="submit" class="btn btn-primary" name="send" value="[[%ec_fe_send]]" />
    </div>
</form>
<div id="ec-form-success-[[+fid]]"></div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form.tpl',
      'content' => '<h2>[[%ec_fe_message_add]]</h2>
<form class="form well ec-form" method="post" role="form" id="ec-form-[[+fid]]" data-fid="[[+fid]]" action="">
    <input type="hidden" name="thread" value="[[+thread]]">

    <div class="form-group ec-antispam">
        <label for="ec-[[+antispam_field]]-[[+fid]]" class="control-label">[[%ec_fe_message_antismap]]</label>
        <input type="text" name="[[+antispam_field]]" class="form-control" id="ec-[[+antispam_field]]-[[+fid]]" value="" />
    </div>

    <div class="form-group">
        <label for="ec-user_name-[[+fid]]" class="control-label">[[%ec_fe_message_user_name]]</label>
        <input type="text" name="user_name" class="form-control" id="ec-user_name-[[+fid]]" value="[[+user_name]]" />
        <span class="ec-error help-block" id="ec-user_name-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_email-[[+fid]]" class="control-label">[[%ec_fe_message_user_email]]</label>
        <input type="text" name="user_email" class="form-control" id="ec-user_email-[[+fid]]" value="[[+user_email]]" />
        <span class="ec-error help-block" id="ec-user_email-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_contacts-[[+fid]]" class="control-label">[[%ec_fe_message_user_contacts]]</label>
        <input type="text" name="user_contacts" class="form-control" id="ec-user_contacts-[[+fid]]" value="[[+user_contacts]]" />
        <span class="ec-error help-block" id="ec-user_contacts-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-subject-[[+fid]]" class="control-label">[[%ec_fe_message_subject]]</label>
        <input type="text" name="subject" class="form-control" id="ec-subject-[[+fid]]" value="[[+subject]]" />
        <span class="ec-error help-block" id="ec-subject-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-rating-[[+fid]]" class="control-label">[[%ec_fe_message_rating]]</label>
        <input type="hidden" name="rating" id="ec-rating-[[+fid]]" value="[[+rating]]" />
        <div class="ec-rating ec-clearfix" data-storage-id="ec-rating-[[+fid]]">
            <div class="ec-rating-stars">
                <span data-rating="1" data-description="[[%ec_fe_message_rating_1]]"></span>
                <span data-rating="2" data-description="[[%ec_fe_message_rating_2]]"></span>
                <span data-rating="3" data-description="[[%ec_fe_message_rating_3]]"></span>
                <span data-rating="4" data-description="[[%ec_fe_message_rating_4]]"></span>
                <span data-rating="5" data-description="[[%ec_fe_message_rating_5]]"></span>
            </div>
            <div class="ec-rating-description">[[%ec_fe_message_rating_0]]</div>
        </div>
        <span class="ec-error help-block" id="ec-rating-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-text-[[+fid]]" class="control-label">[[%ec_fe_message_text]]</label>
        <textarea type="text" name="text" class="form-control" rows="5" id="ec-text-[[+fid]]">[[+text]]</textarea>
        <span class="ec-error help-block" id="ec-text-error-[[+fid]]"></span>
    </div>

    [[+recaptcha]]

    <div class="form-actions">
        <input type="submit" class="btn btn-primary" name="send" value="[[%ec_fe_send]]" />
    </div>
</form>
<div id="ec-form-success-[[+fid]]"></div>',
    ),
  ),
  'b8603193c2ded2f33e112679e61f8314' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.ReCaptcha',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.ReCaptcha',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '<div class="form-group">
    <div class="ec-captcha" id="ec-captcha-[[+fid]]"></div>
    <span class="ec-error help-block" id="ec-captcha-error-[[+fid]]"></span>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_recaptcha.tpl',
      'content' => '<div class="form-group">
    <div class="ec-captcha" id="ec-captcha-[[+fid]]"></div>
    <span class="ec-error help-block" id="ec-captcha-error-[[+fid]]"></span>
</div>',
    ),
  ),
  '0144c236f15341a78149a2b285f4af00' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.Success',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.Success',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '<div class="alert alert-success" role="alert">
    [[%ec_fe_send_success]]
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_success.tpl',
      'content' => '<div class="alert alert-success" role="alert">
    [[%ec_fe_send_success]]
</div>',
    ),
  ),
  '4f53b1022a612de7f8cd653e0a7c730b' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.New.Email.User',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.New.Email.User',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставили сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Ваше сообщение будет опубликовано после проверки администратором.
<br />
<br />
С уважением, [[++site_name]].',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_new_email_user.tpl',
      'content' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставили сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Ваше сообщение будет опубликовано после проверки администратором.
<br />
<br />
С уважением, [[++site_name]].',
    ),
  ),
  '522ab4521ae6f18a7dfd9692f55755be' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.New.Email.Manager',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.New.Email.Manager',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => 'На сайте [[++site_url]] было оставлено новое сообщение:
<br />
<br />
Автор: <span style="font-weight: bold">[[+user_name]]</span>
<br/>
Электронная почта: <span style="font-weight: bold">[[+user_email]]</span>
<br/>
Контактная информация: <span style="font-weight: bold">[[+user_contacts]]</span>
<br/>
<br/>
Тема сообщения: <span style="font-weight: bold">[[+subject]]</span>
<br/>
Оценка: <span style="font-weight: bold">[[+rating]]</span>
<br/>
Текст сообщения:
<br/>
<br/>
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Сообщение было оставлено на странице <a target="_blank" href="[[~[[+resource_id]]?scheme=`full`]]">[[+resource_pagetitle]]</a>
<br />
<br />
<a target="_blank" href="[[+site_manager_url]]?a=resource/update&id=[[+resource_id]]">Опубликовать или ответить на сообщение &gt;</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_new_email_manager.tpl',
      'content' => 'На сайте [[++site_url]] было оставлено новое сообщение:
<br />
<br />
Автор: <span style="font-weight: bold">[[+user_name]]</span>
<br/>
Электронная почта: <span style="font-weight: bold">[[+user_email]]</span>
<br/>
Контактная информация: <span style="font-weight: bold">[[+user_contacts]]</span>
<br/>
<br/>
Тема сообщения: <span style="font-weight: bold">[[+subject]]</span>
<br/>
Оценка: <span style="font-weight: bold">[[+rating]]</span>
<br/>
Текст сообщения:
<br/>
<br/>
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Сообщение было оставлено на странице <a target="_blank" href="[[~[[+resource_id]]?scheme=`full`]]">[[+resource_pagetitle]]</a>
<br />
<br />
<a target="_blank" href="[[+site_manager_url]]?a=resource/update&id=[[+resource_id]]">Опубликовать или ответить на сообщение &gt;</a>',
    ),
  ),
  '40f687c54b82e32dd4a363152b792b10' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.Update.Email.User',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.Update.Email.User',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставляли сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
[[+no_reply_and_published]][[+reply_and_published]][[+reply_and_not_published]]
<br />
<br />
С уважением, [[++site_name]].

<!--ec_no_reply_and_published
Ваше сообщение было опубликовано. Вы можете его просмотреть <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
<br />
Ваше сообщение с ответом на него опубликовано <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_not_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
-->

<!--ec_reply_author <span style="font-weight:bold;">[[+reply_author]]</span> ответил на ваше сообщение:-->
<!--ec_!reply_author На ваше сообщение дан ответ:-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_update_email_user.tpl',
      'content' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставляли сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
[[+no_reply_and_published]][[+reply_and_published]][[+reply_and_not_published]]
<br />
<br />
С уважением, [[++site_name]].

<!--ec_no_reply_and_published
Ваше сообщение было опубликовано. Вы можете его просмотреть <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
<br />
Ваше сообщение с ответом на него опубликовано <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_not_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
-->

<!--ec_reply_author <span style="font-weight:bold;">[[+reply_author]]</span> ответил на ваше сообщение:-->
<!--ec_!reply_author На ваше сообщение дан ответ:-->',
    ),
  ),
  '6017e2d04c631b90c4549ec378310439' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecThreadRating',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecThreadRating',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '<div class="ec-stars" title="[[+rating_wilson]]">
    <span style="width: [[+rating_wilson_percent]]%"></span>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_thread_rating.tpl',
      'content' => '<div class="ec-stars" title="[[+rating_wilson]]">
    <span style="width: [[+rating_wilson_percent]]%"></span>
</div>',
    ),
  ),
  '7168ff116c8993143e13fa48b661966b' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecMessages',
    ),
    'object' => 
    array (
      'id' => 1,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecMessages',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$fastMode = !empty($fastMode);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';
$resourceClass = \'modResource\';
// Query conditions
$select = array(
    $class => $modx->getSelectColumns($class, $class),
    $threadClass => $modx->getSelectColumns($threadClass, \'Thread\', \'thread_\'),
);
$innerJoin = array($threadClass => array(\'alias\' => \'Thread\', \'on\' => "`$class`.`thread` = `Thread`.`id`"));
$leftJoin = array();

if(!empty($resourceFields)) {
    $resourceFields = array_merge(array(\'id\', \'pagetitle\'), explode(",", $resourceFields));
    $resourceFields = array_map("trim", $resourceFields);

    $select[$resourceClass] = $modx->getSelectColumns($resourceClass, \'Resource\', \'resource_\', $resourceFields);
    $leftJoin[$resourceClass] = array(\'alias\' => \'Resource\', \'on\' => "`Thread`.`resource` = `Resource`.`id`");
}


$where = array();
if(count($threads) == 1) {
    $where[\'`Thread`.`name`\'] = $threads[0];
}
if(count($threads) > 1) {
    $where[\'`Thread`.`name`:IN\'] = $threads;
}

// Filter by message ids
$messages = $modx->getOption(\'messages\', $scriptProperties, \'\');
if(!empty($messages)) {
    $messages = explode(",", $messages);
    $messages = array_map("trim", $messages);
    $messages = array_map("intval", $messages);
    if(!empty($messages)) {
        $where[$class.\'.`id`:IN\'] = $messages;
    }
}

if(empty($showUnpublished)) {
    $where[$class.\'.published\'] = 1;
}

if(empty($showDeleted)) {
    $where[$class.\'.deleted\'] = 0;
}

if(!empty($subject)) {
    $where[$class.\'.subject\'] = $subject;
}

// Add custom parameters
foreach (array(\'where\',\'leftJoin\',\'innerJoin\',\'select\',\'groupby\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $modx->fromJSON($scriptProperties[$v]);
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    //\'loadModels\' => \'easyComm\',
    \'disableConditions\' => true,
    \'where\' => $modx->toJSON($where),
    \'select\' => $modx->toJSON($select),
    \'innerJoin\' => $modx->toJSON($innerJoin),
    \'leftJoin\' => $modx->toJSON($leftJoin),
    //\'groupby\' => $class.\'.id\',
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'ec_\'
);


// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);


$rows = $pdoFetch->run();

/* @var $tmpChunk modChunk */
$tmpChunk = $modx->newObject(\'modChunk\', array(\'name\' => "tmp-".uniqid()));
$tmpChunk->setCacheable(false);
$gravatarDefault = $tmpChunk->process(null, $modx->getOption(\'ec_gravatar_default\'));

$gravatarSize = $modx->getOption(\'ec_gravatar_size\', null, 50);

$output = array();
$idx = $pdoFetch->idx;
foreach($rows as $row) {
    $row[\'idx\'] = $idx++;
    $row[\'text_raw\'] = $row[\'text\'];
    $row[\'text\'] = nl2br($row[\'text\']);
    $row[\'reply_text_raw\'] = $row[\'reply_text\'];
    $row[\'reply_text\'] = nl2br($row[\'reply_text\']);

    $row[\'gravatar\'] = $gravatarDefault;
    if(!empty($row[\'user_email\'])) {
        $row[\'gravatar\'] = \'https://www.gravatar.com/avatar/\'.md5(strtolower($row[\'user_email\'])).\'?s=50\';
        if(!empty($gravatarDefault)) {
            $row[\'gravatar\'] .= \'&d=\'.urlencode($gravatarDefault);
        }
    }

    $tpl = $pdoFetch->defineChunk($row);
    if (empty($tpl)) {
        $output[] = \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\';
    }
    else {
        $output[] = $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
    if(empty($output) && !empty($tplEmpty)) {
        $output = $pdoFetch->getChunk($tplEmpty);
    }
    else {
        $output = implode($outputSeparator, $output);
    }
    $output .= $log;
    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $data = array(\'output\' => $output);
        if( (count($threads) == 1) && ($threadObj = $modx->getObject(\'ecThread\', array(\'name\' => $threads[0]))) ) {
            $ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);
            $data = array_merge($data, $threadObj->toArray(),
                array(
                    \'rating_wilson_percent\' => number_format($threadObj->get(\'rating_wilson\') / $ratingMax * 100, 3),
                    \'rating_simple_percent\' => number_format($threadObj->get(\'rating_simple\') / $ratingMax * 100, 3),
                )
            );
        }
        $output = $pdoFetch->getChunk($tplWrapper, $data, $pdoFetch->config[\'fastMode\']);
    }
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    }
    else {
        return $output;
    }
}',
      'locked' => 0,
      'properties' => 'a:17:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"threads";a:7:{s:4:"name";s:7:"threads";s:4:"desc";s:21:"easycomm_prop_threads";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:8:"messages";a:7:{s:4:"name";s:8:"messages";s:4:"desc";s:22:"easycomm_prop_messages";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"subject";a:7:{s:4:"name";s:7:"subject";s:4:"desc";s:21:"easycomm_prop_subject";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"easycomm_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"tpl.ecMessages.Row";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:24:"easycomm_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:8:"tplEmpty";a:7:{s:4:"name";s:8:"tplEmpty";s:4:"desc";s:22:"easycomm_prop_tplEmpty";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:20:"easycomm_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"date";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:21:"easycomm_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:19:"easycomm_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"easycomm_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"easycomm_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:14:"resourceFields";a:7:{s:4:"name";s:14:"resourceFields";s:4:"desc";s:28:"easycomm_prop_resourceFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:29:"easycomm_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"easycomm_prop_toPlaceholder";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:22:"toSeparatePlaceholders";a:7:{s:4:"name";s:22:"toSeparatePlaceholders";s:4:"desc";s:36:"easycomm_prop_toSeparatePlaceholders";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:21:"easycomm_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_messages.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$fastMode = !empty($fastMode);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';
$resourceClass = \'modResource\';
// Query conditions
$select = array(
    $class => $modx->getSelectColumns($class, $class),
    $threadClass => $modx->getSelectColumns($threadClass, \'Thread\', \'thread_\'),
);
$innerJoin = array($threadClass => array(\'alias\' => \'Thread\', \'on\' => "`$class`.`thread` = `Thread`.`id`"));
$leftJoin = array();

if(!empty($resourceFields)) {
    $resourceFields = array_merge(array(\'id\', \'pagetitle\'), explode(",", $resourceFields));
    $resourceFields = array_map("trim", $resourceFields);

    $select[$resourceClass] = $modx->getSelectColumns($resourceClass, \'Resource\', \'resource_\', $resourceFields);
    $leftJoin[$resourceClass] = array(\'alias\' => \'Resource\', \'on\' => "`Thread`.`resource` = `Resource`.`id`");
}


$where = array();
if(count($threads) == 1) {
    $where[\'`Thread`.`name`\'] = $threads[0];
}
if(count($threads) > 1) {
    $where[\'`Thread`.`name`:IN\'] = $threads;
}

// Filter by message ids
$messages = $modx->getOption(\'messages\', $scriptProperties, \'\');
if(!empty($messages)) {
    $messages = explode(",", $messages);
    $messages = array_map("trim", $messages);
    $messages = array_map("intval", $messages);
    if(!empty($messages)) {
        $where[$class.\'.`id`:IN\'] = $messages;
    }
}

if(empty($showUnpublished)) {
    $where[$class.\'.published\'] = 1;
}

if(empty($showDeleted)) {
    $where[$class.\'.deleted\'] = 0;
}

if(!empty($subject)) {
    $where[$class.\'.subject\'] = $subject;
}

// Add custom parameters
foreach (array(\'where\',\'leftJoin\',\'innerJoin\',\'select\',\'groupby\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $modx->fromJSON($scriptProperties[$v]);
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    //\'loadModels\' => \'easyComm\',
    \'disableConditions\' => true,
    \'where\' => $modx->toJSON($where),
    \'select\' => $modx->toJSON($select),
    \'innerJoin\' => $modx->toJSON($innerJoin),
    \'leftJoin\' => $modx->toJSON($leftJoin),
    //\'groupby\' => $class.\'.id\',
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'ec_\'
);


// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);


$rows = $pdoFetch->run();

/* @var $tmpChunk modChunk */
$tmpChunk = $modx->newObject(\'modChunk\', array(\'name\' => "tmp-".uniqid()));
$tmpChunk->setCacheable(false);
$gravatarDefault = $tmpChunk->process(null, $modx->getOption(\'ec_gravatar_default\'));

$gravatarSize = $modx->getOption(\'ec_gravatar_size\', null, 50);

$output = array();
$idx = $pdoFetch->idx;
foreach($rows as $row) {
    $row[\'idx\'] = $idx++;
    $row[\'text_raw\'] = $row[\'text\'];
    $row[\'text\'] = nl2br($row[\'text\']);
    $row[\'reply_text_raw\'] = $row[\'reply_text\'];
    $row[\'reply_text\'] = nl2br($row[\'reply_text\']);

    $row[\'gravatar\'] = $gravatarDefault;
    if(!empty($row[\'user_email\'])) {
        $row[\'gravatar\'] = \'https://www.gravatar.com/avatar/\'.md5(strtolower($row[\'user_email\'])).\'?s=50\';
        if(!empty($gravatarDefault)) {
            $row[\'gravatar\'] .= \'&d=\'.urlencode($gravatarDefault);
        }
    }

    $tpl = $pdoFetch->defineChunk($row);
    if (empty($tpl)) {
        $output[] = \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\';
    }
    else {
        $output[] = $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
    if(empty($output) && !empty($tplEmpty)) {
        $output = $pdoFetch->getChunk($tplEmpty);
    }
    else {
        $output = implode($outputSeparator, $output);
    }
    $output .= $log;
    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $data = array(\'output\' => $output);
        if( (count($threads) == 1) && ($threadObj = $modx->getObject(\'ecThread\', array(\'name\' => $threads[0]))) ) {
            $ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);
            $data = array_merge($data, $threadObj->toArray(),
                array(
                    \'rating_wilson_percent\' => number_format($threadObj->get(\'rating_wilson\') / $ratingMax * 100, 3),
                    \'rating_simple_percent\' => number_format($threadObj->get(\'rating_simple\') / $ratingMax * 100, 3),
                )
            );
        }
        $output = $pdoFetch->getChunk($tplWrapper, $data, $pdoFetch->config[\'fastMode\']);
    }
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    }
    else {
        return $output;
    }
}',
    ),
  ),
  'a8c3cd604ab07af4ff7df4e627d46bb7' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecMessagesCount',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecMessagesCount',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        /* @var string $thread */
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';

$q = $modx->newQuery($class);
$q->innerJoin($threadClass, \'Thread\', "`$class`.`thread` = `Thread`.`id`");

if(count($threads) == 1) {
    $q->where(array(
        \'`Thread`.`name`\' => $threads[0]
    ));
}
if(count($threads) > 1) {
    $q->where(array(
        \'`Thread`.`name`:IN\' => $threads
    ));
}
if(empty($showUnpublished)) {
    $q->where(array(
        $class.\'.published\' => 1
    ));
}
if(empty($showDeleted)) {
    $q->where(array(
        $class.\'.deleted\' => 0
    ));
}
if(!empty($subject)) {
    $q->where(array(
        $class.\'.subject\' => $subject
    ));
}

return $modx->getCount($class, $q);',
      'locked' => 0,
      'properties' => 'a:5:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"threads";a:7:{s:4:"name";s:7:"threads";s:4:"desc";s:21:"easycomm_prop_threads";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"subject";a:7:{s:4:"name";s:7:"subject";s:4:"desc";s:21:"easycomm_prop_subject";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"easycomm_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"easycomm_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_messages_count.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        /* @var string $thread */
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';

$q = $modx->newQuery($class);
$q->innerJoin($threadClass, \'Thread\', "`$class`.`thread` = `Thread`.`id`");

if(count($threads) == 1) {
    $q->where(array(
        \'`Thread`.`name`\' => $threads[0]
    ));
}
if(count($threads) > 1) {
    $q->where(array(
        \'`Thread`.`name`:IN\' => $threads
    ));
}
if(empty($showUnpublished)) {
    $q->where(array(
        $class.\'.published\' => 1
    ));
}
if(empty($showDeleted)) {
    $q->where(array(
        $class.\'.deleted\' => 0
    ));
}
if(!empty($subject)) {
    $q->where(array(
        $class.\'.subject\' => $subject
    ));
}

return $modx->getCount($class, $q);',
    ),
  ),
  '529b237d4860f134a342ad4e6063e552' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecForm',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}
$easyComm->initialize($modx->context->key, $scriptProperties);

$tplForm = $modx->getOption(\'tplForm\', $scriptProperties, \'tpl.ecForm\');
$threadName = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($threadName)) {
    $threadName = \'resource-\'.$modx->resource->get(\'id\');
    $scriptProperties[\'thread\'] = $threadName;
}
$formId = $modx->getOption(\'formId\', $scriptProperties, \'\');
if(empty($formId)) {
    $formId = $threadName;
    $scriptProperties[\'formId\'] = $formId;
}

// Prepare ecThread
/** @var ecThread $thread */
if (!$thread = $modx->getObject(\'ecThread\', array(\'name\' => $threadName))) {
    $thread = $modx->newObject(\'ecThread\');
    $thread->fromArray(array(
        \'resource\' => $modx->resource->id,
        \'name\' => $threadName,
        \'title\' => $modx->getOption(\'threadTitle\', $scriptProperties, \'\'),
    ));
}
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$data = array(
    \'fid\' => $formId,
    \'thread\' => $thread->get(\'name\'),
    \'antispam_field\' => $modx->getOption(\'antispamField\', $scriptProperties)
);

if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $profile = $modx->user->getOne(\'Profile\');
    $data[\'user_name\'] = $profile->get(\'fullname\');
    if(empty($data[\'user_name\'])) {
        $data[\'user_name\'] = $modx->user->get(\'username\');
    }
    $data[\'user_email\'] = $profile->get(\'email\');
}

if($modx->getOption(\'ec_captcha_enable\')) {
    $tplFormReCaptcha = $modx->getOption(\'tplFormReCaptcha\', $scriptProperties, \'tpl.ecForm.ReCaptcha\');
    $data[\'recaptcha\'] = $easyComm->getChunk($tplFormReCaptcha, $data);
}

return $easyComm->getChunk($tplForm, $data);',
      'locked' => 0,
      'properties' => 'a:16:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:6:"formId";a:7:{s:4:"name";s:6:"formId";s:4:"desc";s:20:"easycomm_prop_formId";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"allowedFields";a:7:{s:4:"name";s:13:"allowedFields";s:4:"desc";s:27:"easycomm_prop_allowedFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:54:"user_name,user_email,user_contacts,subject,rating,text";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:28:"easycomm_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:14:"user_name,text";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"antispamField";a:7:{s:4:"name";s:13:"antispamField";s:4:"desc";s:27:"easycomm_prop_antispamField";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:7:"address";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:11:"autoPublish";a:7:{s:4:"name";s:11:"autoPublish";s:4:"desc";s:25:"easycomm_prop_autoPublish";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:2:"No";s:5:"value";s:0:"";}i:1;a:2:{s:4:"text";s:11:"Only logged";s:5:"value";s:10:"OnlyLogged";}i:2;a:2:{s:4:"text";s:3:"All";s:5:"value";s:3:"All";}}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"tplForm";a:7:{s:4:"name";s:7:"tplForm";s:4:"desc";s:21:"easycomm_prop_tplForm";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"tpl.ecForm";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:16:"tplFormReCaptcha";a:7:{s:4:"name";s:16:"tplFormReCaptcha";s:4:"desc";s:30:"easycomm_prop_tplFormReCaptcha";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"tpl.ecForm.ReCaptcha";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:10:"tplSuccess";a:7:{s:4:"name";s:10:"tplSuccess";s:4:"desc";s:24:"easycomm_prop_tplSuccess";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"tpl.ecForm.Success";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:11:"mailManager";a:7:{s:4:"name";s:11:"mailManager";s:4:"desc";s:25:"easycomm_prop_mailManager";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:16:"newEmailSubjUser";a:7:{s:4:"name";s:16:"newEmailSubjUser";s:4:"desc";s:30:"easycomm_prop_newEmailSubjUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"tplNewEmailUser";a:7:{s:4:"name";s:15:"tplNewEmailUser";s:4:"desc";s:29:"easycomm_prop_tplNewEmailUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:25:"tpl.ecForm.New.Email.User";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:19:"newEmailSubjManager";a:7:{s:4:"name";s:19:"newEmailSubjManager";s:4:"desc";s:33:"easycomm_prop_newEmailSubjManager";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:18:"tplNewEmailManager";a:7:{s:4:"name";s:18:"tplNewEmailManager";s:4:"desc";s:32:"easycomm_prop_tplNewEmailManager";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.ecForm.New.Email.Manager";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:19:"updateEmailSubjUser";a:7:{s:4:"name";s:19:"updateEmailSubjUser";s:4:"desc";s:33:"easycomm_prop_updateEmailSubjUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:18:"tplUpdateEmailUser";a:7:{s:4:"name";s:18:"tplUpdateEmailUser";s:4:"desc";s:32:"easycomm_prop_tplUpdateEmailUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.ecForm.Update.Email.User";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_form.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}
$easyComm->initialize($modx->context->key, $scriptProperties);

$tplForm = $modx->getOption(\'tplForm\', $scriptProperties, \'tpl.ecForm\');
$threadName = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($threadName)) {
    $threadName = \'resource-\'.$modx->resource->get(\'id\');
    $scriptProperties[\'thread\'] = $threadName;
}
$formId = $modx->getOption(\'formId\', $scriptProperties, \'\');
if(empty($formId)) {
    $formId = $threadName;
    $scriptProperties[\'formId\'] = $formId;
}

// Prepare ecThread
/** @var ecThread $thread */
if (!$thread = $modx->getObject(\'ecThread\', array(\'name\' => $threadName))) {
    $thread = $modx->newObject(\'ecThread\');
    $thread->fromArray(array(
        \'resource\' => $modx->resource->id,
        \'name\' => $threadName,
        \'title\' => $modx->getOption(\'threadTitle\', $scriptProperties, \'\'),
    ));
}
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$data = array(
    \'fid\' => $formId,
    \'thread\' => $thread->get(\'name\'),
    \'antispam_field\' => $modx->getOption(\'antispamField\', $scriptProperties)
);

if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $profile = $modx->user->getOne(\'Profile\');
    $data[\'user_name\'] = $profile->get(\'fullname\');
    if(empty($data[\'user_name\'])) {
        $data[\'user_name\'] = $modx->user->get(\'username\');
    }
    $data[\'user_email\'] = $profile->get(\'email\');
}

if($modx->getOption(\'ec_captcha_enable\')) {
    $tplFormReCaptcha = $modx->getOption(\'tplFormReCaptcha\', $scriptProperties, \'tpl.ecForm.ReCaptcha\');
    $data[\'recaptcha\'] = $easyComm->getChunk($tplFormReCaptcha, $data);
}

return $easyComm->getChunk($tplForm, $data);',
    ),
  ),
  'a933c00b32fdc8cc1089df3b7b0c1ed4' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecThreadRating',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecThreadRating',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $thread */
$thread = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($thread)) {
    $thread = \'resource-\'.$modx->resource->get(\'id\');
}

$ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);

$data = array(
    \'rating_wilson\' => 0,
    \'rating_simple\' => 0,
    \'rating_wilson_percent\' => 0,
    \'rating_simple_percent\' => 0,
    \'rating_max\' => $ratingMax,
);

/* @var MODx $modx */
/* @var ecThread $thread */
$thread = $modx->getObject(\'ecThread\', array(\'name\' => $thread));

if(!empty($thread)) {
    $data = array_merge(
        $data,
        $thread->toArray(),
        array(
            \'rating_wilson_percent\' => number_format($thread->get(\'rating_wilson\') / $ratingMax * 100, 3),
            \'rating_simple_percent\' => number_format($thread->get(\'rating_simple\') / $ratingMax * 100, 3),
        )
    );
}

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$fastMode = !empty($fastMode);
$output = $easyComm->getChunk($tpl, $data, $fastMode);

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, \'\');
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
}
else {
    return $output;
}',
      'locked' => 0,
      'properties' => 'a:3:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"easycomm_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"tpl.ecThreadRating";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"easycomm_prop_toPlaceholder";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_thread_rating.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $thread */
$thread = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($thread)) {
    $thread = \'resource-\'.$modx->resource->get(\'id\');
}

$ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);

$data = array(
    \'rating_wilson\' => 0,
    \'rating_simple\' => 0,
    \'rating_wilson_percent\' => 0,
    \'rating_simple_percent\' => 0,
    \'rating_max\' => $ratingMax,
);

/* @var MODx $modx */
/* @var ecThread $thread */
$thread = $modx->getObject(\'ecThread\', array(\'name\' => $thread));

if(!empty($thread)) {
    $data = array_merge(
        $data,
        $thread->toArray(),
        array(
            \'rating_wilson_percent\' => number_format($thread->get(\'rating_wilson\') / $ratingMax * 100, 3),
            \'rating_simple_percent\' => number_format($thread->get(\'rating_simple\') / $ratingMax * 100, 3),
        )
    );
}

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$fastMode = !empty($fastMode);
$output = $easyComm->getChunk($tpl, $data, $fastMode);

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, \'\');
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
}
else {
    return $output;
}',
    ),
  ),
  'a041e0c3842edfe323823440ecf42253' => 
  array (
    'criteria' => 
    array (
      'name' => 'easyComm',
    ),
    'object' => 
    array (
      'id' => 1,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'easyComm',
      'description' => '',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'plugincode' => '/** @var array $scriptProperties */
switch ($modx->event->name) {
    case \'OnDocFormRender\':
        /** @var modResource $resource */
        if ($mode == \'new\') {
            return;
        }

        $template = $resource->get(\'template\');
        $showTemplates = trim($modx->getOption(\'ec_show_templates\'));
        $showResources = trim($modx->getOption(\'ec_show_resources\'));
        $showTab = false;
        if($showTemplates == \'*\' || $showResources == \'*\') {
            $showTab = true;
        }
        else {
            $showTemplates = array_map(\'trim\', explode(\',\', $showTemplates));
            $showResources = array_map(\'trim\', explode(\',\', $showResources));
            if (in_array($template, $showTemplates) || in_array($resource->get(\'id\'), $showResources)) {
                $showTab = true;
            }
        }

        if(!$showTab) {
            return;
        }

        $modx23 = !empty($modx->version) && version_compare($modx->version[\'full_version\'], \'2.3.0\', \'>=\');
        $modx->controller->addHtml(\'<script type="text/javascript">
			Ext.onReady(function() {
				MODx.modx23 = \' . (int)$modx23 . \';
			});
		</script>\');


        /** @var easyComm $easyComm */
        $easyComm = $modx->getService(\'easyComm\', \'easyComm\', MODX_CORE_PATH.\'components/easycomm/model/easycomm/\');
        $modx->controller->addLexiconTopic(\'easycomm:default\');
        $url = $easyComm->config[\'assetsUrl\'];
        $modx->controller->addJavascript($url . \'js/mgr/easycomm.js\');

        $modx->controller->addLastJavascript($url . \'js/mgr/misc/utils.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/page.panel.js\');

        $modx->controller->addCss($url . \'css/mgr/main.css\');

        // TODO: разобраться, почему без этого не работает подключение плагинов
        $modx->newObject(\'ecMessage\');

        $pluginsJS = $easyComm->getPluginsJS();
        if(!empty($pluginsJS)){
            foreach($pluginsJS as $js) {
                $modx->controller->addJavascript($js);
            }
        }

        $defaultReplyAuthor = \'\';
        if($modx->getOption(\'ec_auto_reply_author\')) {
            $defaultReplyAuthor = addslashes($modx->user->getOne(\'Profile\')->get(\'fullname\'));
        }

        $defaultThread = $modx->getObject(\'ecThread\', array(\'name\' => \'resource-\'.$resource->get(\'id\')));
        $defaultThread = $defaultThread ? $defaultThread->get(\'id\') : \'null\';

        $ecConfig = \'
            easyComm.config.rating_visual_editor = \' . $modx->getOption(\'ec_rating_visual_editor\', null, true ) . \';
            easyComm.config.thread_fields = \' . json_encode($easyComm->getThreadFields()) . \';
            easyComm.config.thread_grid_fields = \' . json_encode($easyComm->getThreadGridFields()) . \';
            easyComm.config.thread_window_fields = \' . json_encode($easyComm->getThreadWindowFields()) . \';
            easyComm.config.message_fields = \' . json_encode($easyComm->getMessageFields()) . \';
            easyComm.config.message_grid_fields = \' . json_encode($easyComm->getMessageGridFields()) . \';
            easyComm.config.message_window_layout = \' . $easyComm->getMessageWindowLayout() . \';
            easyComm.config.default_reply_author = "\' . $defaultReplyAuthor . \'";
            easyComm.config.default_resource = \' . $resource->get(\'id\') . \';
            easyComm.config.default_thread = \' . $defaultThread . \';
            easyComm.config.default_rating = \' . $modx->getOption(\'ec_rating_default\', null, \'""\') . \';
        \';

        if ($modx->getCount(\'modPlugin\', array(\'name\' => \'AjaxManager\', \'disabled\' => false))) {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.onReady(function() {
					window.setTimeout(function() {
						var tabs = Ext.getCmp("modx-resource-tabs");
						if (tabs) {
							tabs.add({
								xtype: "ec-panel-page",
								id: "ec-panel-page",
								title: _("ec"),
								record: {
									id: \' . $resource->get(\'id\') . \'
								}
							});
						}
					}, 10);
				});
			</script>\');
        }
        else {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.ComponentMgr.onAvailable("modx-resource-tabs", function() {
					this.on("beforerender", function() {
						this.add({
							xtype: "ec-panel-page",
							id: "ec-panel-page",
							title: _("ec"),
							record: {
								id: \' . $resource->get(\'id\') . \'
							}
						});
					});
					Ext.apply(this, {
							stateful: true,
							stateId: "modx-resource-tabs-state",
							stateEvents: ["tabchange"],
							getState: function() {return {activeTab:this.items.indexOf(this.getActiveTab())};
						}
					});
				});
			</script>\');
        }

        break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/plugins/plugin.easycomm.php',
      'content' => '/** @var array $scriptProperties */
switch ($modx->event->name) {
    case \'OnDocFormRender\':
        /** @var modResource $resource */
        if ($mode == \'new\') {
            return;
        }

        $template = $resource->get(\'template\');
        $showTemplates = trim($modx->getOption(\'ec_show_templates\'));
        $showResources = trim($modx->getOption(\'ec_show_resources\'));
        $showTab = false;
        if($showTemplates == \'*\' || $showResources == \'*\') {
            $showTab = true;
        }
        else {
            $showTemplates = array_map(\'trim\', explode(\',\', $showTemplates));
            $showResources = array_map(\'trim\', explode(\',\', $showResources));
            if (in_array($template, $showTemplates) || in_array($resource->get(\'id\'), $showResources)) {
                $showTab = true;
            }
        }

        if(!$showTab) {
            return;
        }

        $modx23 = !empty($modx->version) && version_compare($modx->version[\'full_version\'], \'2.3.0\', \'>=\');
        $modx->controller->addHtml(\'<script type="text/javascript">
			Ext.onReady(function() {
				MODx.modx23 = \' . (int)$modx23 . \';
			});
		</script>\');


        /** @var easyComm $easyComm */
        $easyComm = $modx->getService(\'easyComm\', \'easyComm\', MODX_CORE_PATH.\'components/easycomm/model/easycomm/\');
        $modx->controller->addLexiconTopic(\'easycomm:default\');
        $url = $easyComm->config[\'assetsUrl\'];
        $modx->controller->addJavascript($url . \'js/mgr/easycomm.js\');

        $modx->controller->addLastJavascript($url . \'js/mgr/misc/utils.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/page.panel.js\');

        $modx->controller->addCss($url . \'css/mgr/main.css\');

        // TODO: разобраться, почему без этого не работает подключение плагинов
        $modx->newObject(\'ecMessage\');

        $pluginsJS = $easyComm->getPluginsJS();
        if(!empty($pluginsJS)){
            foreach($pluginsJS as $js) {
                $modx->controller->addJavascript($js);
            }
        }

        $defaultReplyAuthor = \'\';
        if($modx->getOption(\'ec_auto_reply_author\')) {
            $defaultReplyAuthor = addslashes($modx->user->getOne(\'Profile\')->get(\'fullname\'));
        }

        $defaultThread = $modx->getObject(\'ecThread\', array(\'name\' => \'resource-\'.$resource->get(\'id\')));
        $defaultThread = $defaultThread ? $defaultThread->get(\'id\') : \'null\';

        $ecConfig = \'
            easyComm.config.rating_visual_editor = \' . $modx->getOption(\'ec_rating_visual_editor\', null, true ) . \';
            easyComm.config.thread_fields = \' . json_encode($easyComm->getThreadFields()) . \';
            easyComm.config.thread_grid_fields = \' . json_encode($easyComm->getThreadGridFields()) . \';
            easyComm.config.thread_window_fields = \' . json_encode($easyComm->getThreadWindowFields()) . \';
            easyComm.config.message_fields = \' . json_encode($easyComm->getMessageFields()) . \';
            easyComm.config.message_grid_fields = \' . json_encode($easyComm->getMessageGridFields()) . \';
            easyComm.config.message_window_layout = \' . $easyComm->getMessageWindowLayout() . \';
            easyComm.config.default_reply_author = "\' . $defaultReplyAuthor . \'";
            easyComm.config.default_resource = \' . $resource->get(\'id\') . \';
            easyComm.config.default_thread = \' . $defaultThread . \';
            easyComm.config.default_rating = \' . $modx->getOption(\'ec_rating_default\', null, \'""\') . \';
        \';

        if ($modx->getCount(\'modPlugin\', array(\'name\' => \'AjaxManager\', \'disabled\' => false))) {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.onReady(function() {
					window.setTimeout(function() {
						var tabs = Ext.getCmp("modx-resource-tabs");
						if (tabs) {
							tabs.add({
								xtype: "ec-panel-page",
								id: "ec-panel-page",
								title: _("ec"),
								record: {
									id: \' . $resource->get(\'id\') . \'
								}
							});
						}
					}, 10);
				});
			</script>\');
        }
        else {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.ComponentMgr.onAvailable("modx-resource-tabs", function() {
					this.on("beforerender", function() {
						this.add({
							xtype: "ec-panel-page",
							id: "ec-panel-page",
							title: _("ec"),
							record: {
								id: \' . $resource->get(\'id\') . \'
							}
						});
					});
					Ext.apply(this, {
							stateful: true,
							stateId: "modx-resource-tabs-state",
							stateEvents: ["tabchange"],
							getState: function() {return {activeTab:this.items.indexOf(this.getActiveTab())};
						}
					});
				});
			</script>\');
        }

        break;
}',
    ),
  ),
  'f036adab77f466abd5678330c25bec15' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 1,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 1,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);