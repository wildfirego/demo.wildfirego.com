<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('../../config-vars.php');
require('UploadHandler.php');
$upload_handler = new UploadHandler(array('upload_dir'=>ABSOLUTE_PATH.'/uploads/files/'.date('Y').'/'.date('m-F').'/'.date('d-D').'/', 'upload_url'=>BASE_URL.'/uploads/files/'.date('Y').'/'.date('m-F').'/'.date('d-D').'/'));