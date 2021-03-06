<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

//Database

$db = array( 	'table_list' => array (
  'archive_documents' => 6,
  'archived_toc' => 26,
  'branch' => 31,
  'captivate' => 6,
  'course_choices' => 10,
  'course_question' => 7,
  'course_question_to_page' => 6,
  'course_server' => 4,
  'course_versions' => 5,
  'document' => 12,
  'document_questions' => 7,
  'document_to_branch' => 3,
  'document_toc' => 10,
  'document_toc_content' => 2,
  'document_toc_history' => 5,
  'document_toc_plan' => 4,
  'documents_comments' => 5,
  'events' => 56,
  'failed_jobs' => 6,
  'google_docs' => 10,
  'institutions' => 11,
  'issues' => 6,
  'lookuptable' => 9,
  'migrations' => 3,
  'modules' => 9,
  'modules_copy' => 9,
  'moodle_content' => 5,
  'moodle_documents' => 9,
  'moodle_servers' => 6,
  'moodle_toc' => 7,
  'oauth_access_tokens' => 9,
  'oauth_auth_codes' => 6,
  'oauth_clients' => 10,
  'oauth_personal_access_clients' => 4,
  'oauth_refresh_tokens' => 4,
  'password_resets' => 3,
  'playback_statistics' => 10,
  'profiles' => 12,
  'project_course_choices' => 10,
  'project_course_question' => 6,
  'project_course_question_to_page' => 6,
  'project_data' => 6,
  'project_data_items' => 4,
  'project_map_privileges' => 7,
  'project_privileges' => 10,
  'project_properties' => 7,
  'project_specification' => 4,
  'project_to_branch' => 3,
  'project_to_relation' => 3,
  'project_to_spreadsheet' => 3,
  'project_to_user' => 6,
  'project_type' => 3,
  'project_user_privileges' => 24,
  'projects_dir' => 13,
  'projects_dir_translation' => 4,
  'projects_monitoring' => 18,
  'projects_object_translation' => 6,
  'projects_objects' => 19,
  'projects_planning' => 3,
  'projects_to_documents' => 6,
  'projects_to_procedures' => 3,
  'projects_uploads' => 11,
  'projects_uploads_to_branch' => 3,
  'question_responces' => 11,
  'relation' => 34,
  'relation_address' => 20,
  'relation_contact' => 58,
  'saved_items' => 5,
  'server' => 8,
  'st_audio_file' => 10,
  'st_audio_language' => 3,
  'st_audiomovie' => 5,
  'st_captiontime' => 4,
  'st_course' => 6,
  'st_media' => 11,
  'st_media_copy' => 10,
  'st_module' => 8,
  'st_procedures' => 2,
  'st_scripts' => 5,
  'st_subject' => 5,
  'st_subtitle_properties' => 7,
  'st_text_files' => 5,
  'st_translations' => 4,
  'st_user_preview_stat' => 7,
  'status' => 3,
  'subjects' => 8,
  'subtitles' => 6,
  'tasks_to_planning' => 3,
  'tasks_to_projects' => 3,
  'tbdocuments' => 22,
  'tbdocuments_history' => 16,
  'tbdocuments_privileges' => 21,
  'toc' => 25,
  'tradestar_report_frequency' => 2,
  'tradestar_reports' => 26,
  'tradestar_reports_archive' => 8,
  'tradestar_reports_category' => 2,
  'tradestar_reports_to_employees' => 2,
  'trainees' => 27,
  'trays' => 8,
  'trs_metadata' => 12,
  'types' => 2,
  'uploads' => 12,
  'users' => 10,
  'views' => 5,
  'xoops_shop_languages' => 7,
), 
'structure' =>'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', 
'contents' =>'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', 
'database' =>'nts_projects', 
); 



//Settings
$settings=array();
$settings['execute'] = '';

?>
<style>
	html			{ background: #336699; }
	body			{ padding: 10px; background: #fff; font: 12px "Lucida Grande"; color: #333; }
	#title			{ font-size: 18px; }
	#layout			{ width: 500px; border: 1px solid #ccc; border-bottom: 0px; background: #eee; margin-top: 10px; }
	#layout .title	{ background: #ff9900; color: #fff; font-size: 16px; }
	#layout div		{ padding: 10px;  border: 1px solid #fff; border-bottom: 1px solid #ccc; min-height: 20px; }
	#layout span	{ width: 200px; display: block; float: left; }
	
	#doc			{ float: right; margin-right: 30px; width: 300px; border: 1px solid #ccc; background: #eee; padding: 10px; color: #999; }
	
	#list			{ background: #fff; border: 1px solid #ccc; }
	#list th		{ background: #ff9900; color: #fff; font-size: 13px; }
	#list td		{ background: #eee; border-top: 1px solid #fff; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;  border-left: 1px solid #fff; padding: 5px; font-size: 11px; }
	#copyright		{ margin-top: 20px; font-size: 11px; }
	
	fieldset		{ margin-top: 20px; border: 0px; padding: 0px; border:1px solid #999; background:#ddd; }
	input[type='text'], 
	textarea	{ border: 1px solid #aaa; margin:1px; padding: 5px; font-family: Helvetica; font-size: 14px; width: 250px; color: #333; }
	input[type='text']:focus,
	textarea:focus	{ border: 1px solid #6699cc; }
	
	button			{ display:block; margin:0 7px 0 0; background-color:#f5f5f5; border:1px solid #d3d3d3; border-top:1px solid #e9e9e9; border-left:1px solid #e9e9e9; font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif; font-size:100%; line-height:130%; text-decoration:none; font-weight:bold; color:#565656; cursor:pointer; padding:5px 10px 6px 7px; }
	button:hover	{ border: 1px solid #ccc; color: #ff6600; background: white; }
	
	.error			{ border: 1px solid #990000; background: #ffeeee; padding: 5px; margin: 5px; }
</style>
<?php
set_time_limit(300); // 5 minutes
ob_start();

$GLOBALS['HTTP_VARS'] = $_GET + $_POST;

function get($key)
{
    if (isset($GLOBALS['HTTP_VARS'][$key]))
        return $GLOBALS['HTTP_VARS'][$key];
}

function byte($size)
{
    $unim = array("B", "KB", "MB", "GB", "TB", "PB");
    $i = 0;
    while ($size >= 1024) {
        $i++;
        $size = $size / 1024;
    }
    return number_format($size, ($i ? 2 : 0), ",", ".") . " " . $unim[$i];
}

function myFlush()
{
    ob_end_flush();
    ob_flush();
    flush();
    ob_start();
}

if (get('dump') && isset($db)) {

    $structure = base64_decode($db['structure']);
    $structure = gzuncompress($structure);

    $sql = base64_decode($db['contents']);
    $sql = gzuncompress($sql);
    echo "Dump database <b>{$db['database']}</b><br/></br><textarea style=\"width:100%;padding:10px;\" rows=\"30\">$structure\n$sql</textarea>";
    exit;
}

$dir = get('dir');
$execute = isset($settings['execute']) ? $dir . "/" . $settings['execute'] : $dir;
$overwrite = get('overwrite');
$install = get('install');

//se install
if ($install) {

//    if ($dir != "" && substr($dir, strlen($dir) - 1, 1) != "/")
//        $dir .= "/";
//
//    if ($dir != '' && !file_exists($dir))
//        mkdir($dir);


    if (get('db')) {

        $db_hostname = get('db_hostname');
        $db_username = get('db_username');
        $db_password = get('db_password');
        $db_database = get('db_database');

        $dbc = mysqli_connect($db_hostname, $db_username, $db_password);

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // create database if not exist
        mysqli_query($dbc, "CREATE DATABASE IF NOT EXISTS {$db_database}") or die(mysqli_error($dbc));

        // Change db to provided db
        mysqli_select_db($dbc, $db_database) or die(mysqli_error($dbc));

        $db_installed = false;
        $error = false;

        $sql = base64_decode($db['structure']);
        $sql = gzuncompress($sql);
        $query = explode(";\r", $sql);

        echo "<br/><br/><h3>DATABASE: CREATE STRUCTURE</h3>";

        for ($i = 0; $i < count($query); $i++) {
            list($table, $rows) = each($db['table_list']);
            echo "<div>$table ($rows rows)";
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font>' . mysqli_error($dbc);
                } else
                    echo " - OK";
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";
        $error = false;

        $sql = base64_decode($db['contents']);
        $sql = gzuncompress($sql);
        $query = explode(";\n", $sql);

        echo "<br/><br/><hr><h3>DATABASE: INSERT CONTENT</h3>";
        for ($i = 0; $i < count($query); $i++) {
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font> ' . mysqli_error($dbc) . " <div class=\"error\">" . $query[$i] . "</div>";
                }
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";

        mysqli_close($dbc);
        $db_installed = true;

        if ($db_installed) {

            echo "Database Installed";
            //------------------------------------------
            // Open config file
            //------------------------------------------
            $fp = fopen("config.php", "w");
            $settings_file = "<?php" . "\n";
            $settings_file .= "\n" . "//Settings" . "\n";
            $settings_file .= "unset(\$NTS_CFG);";
            $settings_file .= "\n" . "global \$NTS_CFG;";
            $settings_file .= "\n" . "\$NTS_CFG = new stdClass();";
            $settings_file .= "\n" . "\$NTS_CFG->dbhost = '$db_hostname';";
            $settings_file .= "\n" . "\$NTS_CFG->dbuser = '$db_username';";
            $settings_file .= "\n" . "\$NTS_CFG->dbpass = '$db_password';";
            $settings_file .= "\n" . "\$NTS_CFG->dbname = '$db_database';";
            $settings_file .= "\n" . "\$NTS_CFG->wwwroot = '$dir';" . "\n";
            fwrite($fp, $settings_file, strlen($settings_file));
            fclose($fp);

            $fp_env = fopen("nts-video-api/.env", "w");
            $env_file = "APP_NAME=Video" . "\n";
            $env_file .= "APP_KEY=base64:ZoDFmAT6ev1keCiVRo+O4yHkQg940mEBk3zp+ABM5cs=" . "\n";
            $env_file .= "APP_URL=$dir/nts-video-api/public";
            $env_file .= "\n\n" . "LOG_CHANNEL=stack";
            $env_file .= "\n\n" . "DB_CONNECTION=mysql";
            $env_file .= "\n" . "DB_HOST=$db_hostname";
            $env_file .= "\n" . "DB_PORT=3306";
            $env_file .= "\n" . "DB_USERNAME=$db_username";
            $env_file .= "\n" . "DB_PASSWORD=$db_password";
            $env_file .= "\n" . "DB_DATABASE=$db_database";
            fwrite($fp_env, $env_file, strlen($env_file));
            fclose($fp_env);
            myFlush();
        }
    }

    echo " <br><hr><h1>Installation Complete!";

    if ($execute)
        echo "<a href=\"{$execute}\">Click here to go {$execute}</a>.";
} else {
    ?>
    <body>
    <!-- created with PHP Installer -->
    <div id="title">NTS Programs</div>

    <div id="layout">
        <form action="" method="POST">
            <div class="title">Installation</div>
            <div>
                <span>Install path</span>
                <input type="text" name="dir" value="http://localhost/nts-programs">
            </div>
            <input type="hidden" name="db" value="1"> 
            <div>
                Database settings
                <fieldset id="db_fieldset">
                    <div><span>Database Hostname</span>
                        <input type="text" name="db_hostname" value="">
                    </div>
                    <div><span>Database Username</span>
                        <input type="text" name="db_username" value="">
                    </div>
                    <div><span>Database Password</span>
                        <input type="text" name="db_password" value="">
                    </div>
                    <div><span>Database Name</span>
                        <input type="text" name="db_database" value="<?php echo $db['database']; ?>">
                    </div>
                    <div>
                        <a href="?dump=1" target="_blank">Click here to download the database for manual installing.</a>
                    </div>
                </fieldset>
            </div>
            <div>
                <input type="checkbox" name="install" id="install"> <label for="install">Confirm installation.</label>
            </div>
            <div><button>INSTALL</button></div>
        </form>
    </div>
    <br/>
    Database in the package
    <table cellspacing="0" cellpadding="5" id="list">
        <thead>
        <th>Table</th>
        <th>Rows</th>
    </thead>
    <?php
    foreach( $db['table_list'] as $table => $n )
    echo "<tr><td>$table</td><td>{$n}</td></tr>";
    ?>
</table>
</body>
    <?php
}
?>