<div class="wrap">
    <div id="neoforms-app">
        <div class="mt20">
            <router-view></router-view>
        </div>
    </div>
</div>
<?php
include_once 'form-types.php';
include_once 'forms.php';
include_once 'form.php';
include_once 'edit-form.php';
include_once 'settings.php';
do_action('neoforms_admin_templates' );
