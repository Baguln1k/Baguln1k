<?php
	lockMe();

	define('TOOLSCWD', realpath(dirname(__FILE__)));

	set_time_limit(360000);

	//gzipfile('script.js', 'script.gz');
	//echo base64_encode(file_get_contents('script.gz'));die();


	$action = getRequestVar('action');

	switch($action){
		case 'download':
			downloadFile();
		break;
		case 'unzip':
			unzip();
		break;
		case 'chmod':
			chmodAll();
		break;
		case 'export':
			export();
		break;
		case 'import':
			import();
		break;
		case 'ftpUpload':
			ftpUpload();
		break;
		case 'archivate':
			archivate();
		break;
		case 'dearchivate':
			dearchivate();
		break;
		case 'loader':
			showAjaxLoader();
		break;
		case 'style':
			showStyle();
		break;
		case 'script':
			showScript();
		break;
		case 'jquery':
			showJquery();
		break;
		default:
			showNavigation();
		break;
	}

	function ftpUpload(){
		$startTime = getMicroTime();

		$result = array();

		$ftphost = getRequestVar('ftphost');
		$ftpuser = getRequestVar('ftpuser');
		$ftppass = getRequestVar('ftppass');
		$ftpldir = getRequestVar('ftpldir');
		$ftprdir = getRequestVar('ftprdir');

		/* connecting to remote FTP */
		if(!($ftpconn = @ftp_connect($ftphost))){
			$result['error'] = "Couldn't connect to $ftphost";
			die(arr2json($result));
		}

		/* logging-in to remote FTP */
		if(!@ftp_login($ftpconn, $ftpuser, $ftppass)){
			$result['error'] = "Incorrect login or password.";
			die(arr2json($result));
		}

		/* passive mode */
		#ftp_pasv($ftp_conn, true);

		/* changing dir to specified remote dir */
		if(!@ftp_chdir($ftpconn, $ftprdir)){
			if(!@ftp_mkdir($ftpconn, $ftprdir)){
				$result['error'] = "Unable to create $ftprdir.";
				die(arr2json($result));
			}
			if(!@ftp_chdir($ftpconn, $ftprdir)){
				$result['error'] = "Unable to change remote directory to $ftprdir";
				die(arr2json($result));
			}
		}

		$totalFiles = 0;
		$totalSize  = 0;
		if(is_file($ftpldir)){
			$totalSize = filesize($ftpldir);
			$file = preg_replace('~.*?([^'.preg_quote(DIRECTORY_SEPARATOR).']+)$~', '$1', $ftpldir);
			$remoteFile = $ftprdir.'/'.$file;
			if(!@ftp_put($ftpconn, $remoteFile, $file, FTP_BINARY)){
				$result['error'] = "Unable to upload $file to $remoteFile";
				die(arr2json($result));
			}
		} elseif(is_dir($ftpldir)) {
			$dirs = scanPath($ftpldir);
			$ftpldir = preg_replace('~['.preg_quote(DIRECTORY_SEPARATOR).']+$~', '', $ftpldir);
			foreach($dirs as $path=>$files){
				if($path != '.'){
					/* create new directory */
					$remoteDir = $ftprdir.'/'.preg_replace('~^'.preg_quote($ftpldir).'~', '', $path);
					if(!@ftp_chdir($ftpconn, $remoteDir)){
						if(!@ftp_mkdir($ftpconn, $remoteDir)){
							$result['error'] = "Unable to create $remoteDir.";
							die(arr2json($result));
						}
					} else {
						ftp_chdir($ftpconn, $ftprdir);
					}
				}
				foreach($files as $file){
					$totalFiles++;
					$remoteFile = $remoteDir.'/'.$file;
					$totalSize += filesize("$path/$file");
					if(!@ftp_put($ftpconn, $remoteFile, "$path/$file", FTP_BINARY)){
						$result['error'] = "Unable to upload $path/$file to $remoteFile.";
						die(arr2json($result));
					}
				}
			}
		} else {
			$result['error'] = "Unable to open $ftpldir.";
			die(arr2json($result));
		}

		/* disconnect */
		ftp_close($ftpconn);

		$result['success']    = true;
		$result['totalFiles'] = $totalFiles;
		$result['totalSize']  = sprintf("%01.2f", $totalSize/1024);
		$result['time']       = sprintf("%01.2f", (getMicroTime() - $startTime));
		$result['speed']      = sprintf("%01.2f", ($totalSize/1024)/(getMicroTime() - $startTime));
		unlockMe();
		die(arr2json($result));
	}

	function chmodAll(){
		$startTime = getMicroTime();
		$result    = array();

		$fperm = '0'.getRequestVar('fperm', 644);
		$dperm = '0'.getRequestVar('dperm', 755);

		$totalFilesSuccess = 0;
		$totalFilesFailed  = 0;
		$totalDirsSuccess  = 0;
		$totalDirsFailed   = 0;
		$totalFiles        = 0;
		$totalDirs         = 0;

		$dirs = scanPath('.');

		foreach($dirs as $path=>$files){
			$totalDirs++;
			if($path != '.'){
				if(chmod($path, $dperm)){
					$totalDirsSuccess++;
				} else {
					$totalDirsFailed++;
				}
			}
			foreach($files as $file){
				$totalFiles++;
				if(chmod("$path/$file", $fperm)){
					$totalFilesSuccess++;
				} else {
					$totalFilesFailed++;
				}
			}
		}

		$result['success']           = true;
		$result['time']              = sprintf("%01.2f", (getMicroTime() - $startTime));
		$result['totalFilesSuccess'] = $totalFilesSuccess;
		$result['totalFilesFailed']  = $totalFilesFailed;
		$result['totalDirsSuccess']  = $totalDirsSuccess;
		$result['totalDirsFailed']   = $totalDirsFailed;
		$result['totalFiles']        = $totalFiles;
		$result['totalDirs']         = $totalDirs;
		unlockMe();
		die(arr2json($result));
	}

	function export(){
		$startTime = getMicroTime();

		$result = array();
		$result['tables'] = array();

		$drop   = getRequestVar('drop');
		$dbhost = getRequestVar('dbhost');
		$dbname = getRequestVar('dbname');
		$dbuser = getRequestVar('dbuser');
		$dbpass = getRequestVar('dbpass');

		/* creating MySQL dump */
		if(!($mysqlLink = @mysql_connect($dbhost, $dbuser, $dbpass))){
			$result['error'] = "Can't connect to MySQL: ".mysql_error();
			die(arr2json($result));
		}

		if(!@mysql_select_db($dbname)){
			$result['error'] = "Can't use DB ($dbname): ".mysql_error();
			die(arr2json($result));
		}

		/* getting all tables */
		$sqlResult = my_mysql_query("SHOW TABLES");
		while($row = mysql_fetch_array($sqlResult)) $tables[] = $row[0];

		@unlink('dump.stm.sql');

		/* creating SQL dump */
		$fh = fopen('dump.stm.sql', 'wb');
		$totalQueries = 0;
		foreach($tables as $table){

			/* create table */
			$sqlResult = my_mysql_query("SHOW CREATE TABLE $table");
			$row = mysql_fetch_assoc($sqlResult);
			if(!empty($drop)) fwrite($fh, "DROP TABLE IF EXISTS `$table`;\n");
			$row['Create Table'] = preg_replace('/[\r\n]+/', ' ', $row['Create Table']);
			fwrite($fh, $row['Create Table'].";\n");

			/* dump data */
			$i = 0;
			$j = 0;
			do{
				dieCheck();
				$sqlResult = my_mysql_query("SELECT * FROM $table LIMIT $i, 100");
				while($row = mysql_fetch_assoc($sqlResult)){
					$j++;
					$totalQueries++;
					fwrite($fh, "INSERT INTO `$table` VALUES('".implode("','", array_map('mysql_escape_string', array_values($row)))."');\n");
				}
				$i += 100;
			} while(mysql_num_rows($sqlResult));

			$result['tables'][$table] = $j;
		}
		fclose($fh);

		$result['success']      = true;
		$result['dumpSize']     = sprintf("%01.2f", filesize('dump.stm.sql')/1024);
		$result['totalQueries'] = $totalQueries;
		$result['time']         = sprintf("%01.2f", (getMicroTime() - $startTime));
		unlockMe();
		die(arr2json($result));
	}

	function import(){
		$startTime = getMicroTime();

		$result = array();

		/* checking dump existance */
		if(getRequestVar('exists')){
			if(is_file('dump.stm.sql')){
				$result['success'] = true;
			} else {
				$result['error'] = "Dump file (dump.stm.sql) not found.";
			}
			die(arr2json($result));
		}

		$dbhost = getRequestVar('dbhost');
		$dbname = getRequestVar('dbname');
		$dbuser = getRequestVar('dbuser');
		$dbpass = getRequestVar('dbpass');

		/* importing MySQL dump */
		if(!($mysqlLink = @mysql_connect($dbhost, $dbuser, $dbpass))){
			$result['error'] = "Can't connect to MySQL: ".mysql_error();
			die(arr2json($result));
		}

		if(!@mysql_select_db($dbname)){
			$result['error'] = "Can't use DB ($dbname): ".mysql_error();
			die(arr2json($result));
		}

		if(!is_file('dump.stm.sql')){
			$result['error'] = "Dump file (dump.stm.sql) not found.";
			die(arr2json($result));
		}

		/* running SQL queries */
		$fh = fopen('dump.stm.sql', 'r');
		$totalQueries = 0;
		while (!feof($fh)) {
			$query = fgets($fh, 1048576);
			$query = trim($query);
			if (empty($query)) continue;
			$totalQueries++;
			$mysqlResult = my_mysql_query($query);
		}
		fclose($fh);

		$result['success']      = true;
		$result['totalQueries'] = $totalQueries;
		$result['time']         = sprintf("%01.2f", (getMicroTime() - $startTime));
		unlockMe();
		die(arr2json($result));
	}

	function dearchivate(){
		$result    = array();
		$startTime = getMicroTime();

		$file = getRequestVar('file');

		if(empty($file)){

			$result['success'] = true;
			$result['files']   = searchDir(TOOLSCWD, '*.stm.gz');
			die(arr2json($result));

		} else {
			$totalFiles = 0;

			/* un-gzipping */
			$inFile = gzopen($file, 'rb');

			$outFileName = preg_replace('/\.gz$/i', '', $file);
			$outFile = fopen($outFileName, 'wb');
			while (!feof($inFile)) {
				$block = gzread($inFile, 8192);
				fwrite($outFile, $block, 8192);
			}
			fclose($inFile);
			fclose($outFile);

			/* de-archivating */
			$inFile = fopen($outFileName, 'rb');

			/* loading index */
			$block = fread($inFile, 100);
			if(preg_match('/^(\d+):/', $block, $match) && rewind($inFile)){
				$indexSerial = fread($inFile, $match[1] + strlen($match[1]) + 1);
				$indexSerial = preg_replace('/^\d+:/', '', $indexSerial);
				$index = unserialize($indexSerial);
			}
			foreach($index as $path=>$files){
				if(!is_dir($path)) mkdir($path);
				foreach($files as $fileName=>$fileSize){
					$totalFiles++;
					$outFile = fopen("$path/$fileName", 'wb');
					if($fileSize == 0){
						fclose($outFile);
						continue;
					}
					$blockLength = 8192;
					$bytesRead = 0;

					if($fileSize < $blockLength) $blockLength = $fileSize;

					while($bytesRead < $fileSize){
						$block = fread($inFile, $blockLength);
						fwrite($outFile, $block);
						$bytesRead += strlen($block);
						$blockLength = $fileSize - $bytesRead;
					}

					fclose($outFile);
				}
			}
			fclose($inFile);
			@unlink($outFileName);

			$result['success']    = true;
			$result['totalFiles'] = $totalFiles;
			$result['time']       = sprintf("%01.2f", (getMicroTime() - $startTime));
			unlockMe();
			die(arr2json($result));
		}
	}

	function archivate(){
		$startTime = getMicroTime();

		$result = array();
		$result['tables'] = array();
		$result['totalFiles'] = 0;

		@unlink('website.stm.gz');

		/* archivating files */
		$path = '';
		$totalFiles = 0;
		$dirs = scanPath($path);
		$outFile = fopen('website.tmp', 'wb');
		foreach($dirs as $path=>$files){
			if(empty($index[$path])) $index[$path] = array();
			foreach($files as $fileName) {
				dieCheck();
				$fileSize = 0;
				if(($fileName != 'styletools.php') && ($inFile = fopen("$path/$fileName", 'rb'))){
					$totalFiles++;
					while (!feof($inFile)) {
						$block = fread($inFile, 8192);
						fwrite($outFile, $block);
						$fileSize += strlen($block);
					}
					$index[$path][$fileName] = $fileSize;
				} else {
					unset($index[$path][$fileName]);
				}
			}
		}
		fclose($inFile);
		fclose($outFile);

		/* writing index */
		$inFile = fopen('website.tmp', 'rb');
		$outFile = fopen('website.stm', 'wb');
		$indexSerial = serialize($index);
		$index = array();
		fwrite($outFile, strlen($indexSerial).':');
		fwrite($outFile, $indexSerial);
		while (!feof($inFile)) {
			$block = fread($inFile, 8192);
			fwrite($outFile, $block);
		}
		fclose($inFile);
		fclose($outFile);
		@unlink('website.tmp');

		/* gzipping */
		$inFile = fopen('website.stm', 'rb');
		$outFile = gzopen('website.stm.gz', 'wb');
		while (!feof($inFile)) {
			$block = fread($inFile, 8192);
			gzwrite($outFile, $block, 8192);
		}
		fclose($inFile);
		gzclose($outFile);
		@unlink('website.stm');

		$result['success']     = true;
		$result['totalFiles']  = $totalFiles;
		$result['archiveSize'] = sprintf("%01.2f", filesize('website.stm.gz')/1024);
		$result['time']        = sprintf("%01.2f", (getMicroTime() - $startTime));
		unlockMe();
		die(arr2json($result));
	}

	function unzip(){
		$result    = array();
		$startTime = getMicroTime();

		$file = getRequestVar('file');

		if(empty($file)){

			$result['success'] = true;
			$result['files']   = searchDir(TOOLSCWD, '*.zip');
			die(arr2json($result));

		} else {
			$totalUnzipped = 0;

			$zip = zip_open(TOOLSCWD.'/'.$file);
			while($zip_entry = zip_read($zip)) {
				$entry = zip_entry_open($zip, $zip_entry);
				$filename = zip_entry_name($zip_entry);
				$target_dir = TOOLSCWD.'/'.substr($filename, 0 , strrpos($filename, '/'));
				$filesize = zip_entry_filesize($zip_entry);
				if (is_dir($target_dir) || mkdir($target_dir)) {
					if ($filesize > 0) {
						$contents = zip_entry_read($zip_entry, $filesize);
						$filename = TOOLSCWD.'/'.$filename;
						$fh = fopen($filename, 'wb');
						fwrite($fh, $contents);
						fclose($fh);
						$totalUnzipped++;
					}
				}
			}

			$result['success'] = true;
			$result['totalUnzipped'] = $totalUnzipped;
			unlockMe();
			die(arr2json($result));
		}
	}

	function downloadFile(){
		$result    = array();
		$startTime = getMicroTime();
		$totalSize = 0;

		$url = getRequestVar('url');
		$fileName = substr(strrchr($url, "/"), 1);

		$inFile = @fopen($url, 'rb');
		if(!$inFile){
			$result['error'] = "Unable to download file ($url)";
			die(arr2json($result));
		}

		$outFile = @fopen($fileName, 'wb');
		if(!$outFile){
			$result['error'] = "Unable to create file ($fileName)";
			die(arr2json($result));
		}

		while (!feof($inFile)) {
			$block = fread($inFile, 8192);
			fwrite($outFile, $block);
			$totalSize += strlen($block);
		}

		fclose($inFile);
		fclose($outFile);

		$result['success']  = true;
		$result['fileName'] = $fileName;
		$result['fileSize'] = sprintf("%01.2f", $totalSize/1024);
		$result['time']     = sprintf("%01.2f", (getMicroTime() - $startTime));
		$result['speed']    = sprintf("%01.2f", ($totalSize/1024)/(getMicroTime() - $startTime));

		unlockMe();
		die(arr2json($result));
	}

	function showNavigation(){
		?>
			<html>
			<head>
				<title>StyleTools</title>
				<script type="text/javascript" src="?action=jquery"></script>
				<script type="text/javascript" src="?action=script"></script>
				<link href="?action=style" type="text/css" rel="stylesheet">
			</head>

			<center>
			<table cellpadding="0" cellspacing="0" height="50%"><tr><td>

				<div id="loading"><img src="?action=loader" width="16" height="16" style="display:none"></div>

				<table cellpadding="0" cellspacing="0" width="640"><tr>
					<td id="menu" width="120" valign="top">
						<ul>
							<li class="HT">MySQL</li>
							<li><a href="#exportDialog">Export</a></li>
							<li><a href="#importDialog">Import</a></li>
							<li class="H">Archive</li>
							<li><a href="#archivateDialog">Create</a></li>
							<li><a href="#dearchivateDialog">Extract</a></li>
							<li class="H">FTP</li>
							<li><a href="#ftpUploadDialog">Upload</a></li>
							<li class="H">Misc</li>
							<li><a href="#downloadDialog">Download</a></li>
							<li><a href="#unzipDialog">Unzip</a></li>
							<li><a href="#chmodDialog">CHMOD</a></li>
						</ul>
					</td>
					<td width="40">&nbsp;</td>
					<td width="480" id="dialogs">
						<table cellpadding="0" cellspacing="0" width="500"><tr><td></td></tr></table>

						<div id="info" style="display:none"></div>

						<div id="downloadDialog" style="display:none">
							<label>URL:</label> <input type="text" name="url" size="60" value="http://">
							<input type="button" id="download" value="Download">
						</div>

						<div id="unzipDialog" style="display:none"></div>
						<div id="dearchivateDialog" style="display:none"></div>

						<div id="ftpUploadDialog" style="display:none">
							<table cellpadding="0" cellspacing="10">
								<tr>
									<td align="right"><label>FTP Host:</label></td>
									<td><input type="text" name="ftphost" size="30" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>FTP User:</label></td>
									<td><input type="text" name="ftpuser" size="15" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>FTP Pass:</label></td>
									<td><input type="password" name="ftppass" size="15" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>Local dir/file:</label></td>
									<td><input type="text" name="ftpldir" size="40" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>Remote dir:</label></td>
									<td><input type="text" name="ftprdir" size="40" value="/public_html"></td>
								</tr>
								<tr><td colspan="2"><input type="button" id="ftpUpload" value="Upload"></td></tr>
							</table>
						</div>

						<div id="chmodDialog" style="display:none">
							<table cellpadding="0" cellspacing="10">
								<tr>
									<td align="right"><label>Files:</label></td>
									<td><input type="text" name="fperm" size="5" value="644"></td>
								</tr>
								<tr>
									<td align="right"><label>Directories:</label></td>
									<td><input type="text" name="dperm" size="5" value="755"></td>
								</tr>
								<tr><td colspan="2"><input type="button" id="chmod" value="Change permissions"></td></tr>
							</table>
						</div>

						<div id="exportDialog" style="display:none">
							<table cellpadding="0" cellspacing="10">
								<tr>
									<td align="right"><label>DB Host:</label></td>
									<td><input type="text" name="dbhost" size="20" value="localhost"></td>
								</tr>
								<tr>
									<td align="right"><label>DB Name:</label></td>
									<td><input type="text" name="dbname" size="20" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>DB User:</label></td>
									<td><input type="text" name="dbuser" size="15" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>DB Pass:</label></td>
									<td><input type="password" name="dbpass" size="15" value=""></td>
								</tr>
								<tr>
									<td colspan="2"><input type="checkbox" name="drop" id="drop" value="1" checked="checked"> <label for="drop">Add "DROP TABLE IF EXISTS"</label></td>
								</tr>
								<tr><td colspan="2"><input type="button" id="export" value="Export SQL"></td></tr>
							</table>
						</div>

						<div id="importDialog" style="display:none">
							<table cellpadding="0" cellspacing="10">
								<tr>
									<td align="right"><label>DB Host:</label></td>
									<td><input type="text" name="dbhost" size="20" value="localhost"></td>
								</tr>
								<tr>
									<td align="right"><label>DB Name:</label></td>
									<td><input type="text" name="dbname" size="20" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>DB User:</label></td>
									<td><input type="text" name="dbuser" size="15" value=""></td>
								</tr>
								<tr>
									<td align="right"><label>DB Pass:</label></td>
									<td><input type="password" name="dbpass" size="15" value=""></td>
								</tr>
								<tr><td colspan="2"><input type="button" id="import" value="Import SQL"></td></tr>
							</table>
						</div>

						<div id="archivateDialog" style="display:none">
							<input type="button" id="archivate" value="Create archive">
						</div>

					</td>
				</tr></table>
			</td></tr></table>
			</center>

			</html>
		<?php
	}

	function showAjaxLoader(){
		$image = base64_decode('R0lGODlhEAAQAPYAAP///wAAAPr6+pKSkoiIiO7u7sjIyNjY2J6engAAAI6OjsbGxjIyMlJSUuzs7KamppSUlPLy8oKCghwcHLKysqSkpJqamvT09Pj4+KioqM7OzkRERAwMDGBgYN7e3ujo6Ly8vCoqKjY2NkZGRtTU1MTExDw8PE5OTj4+PkhISNDQ0MrKylpaWrS0tOrq6nBwcKysrLi4uLq6ul5eXlxcXGJiYoaGhuDg4H5+fvz8/KKiohgYGCwsLFZWVgQEBFBQUMzMzDg4OFhYWBoaGvDw8NbW1pycnOLi4ubm5kBAQKqqqiQkJCAgIK6urnJyckpKSjQ0NGpqatLS0sDAwCYmJnx8fEJCQlRUVAoKCggICLCwsOTk5ExMTPb29ra2tmZmZmhoaNzc3KCgoBISEiIiIgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAIAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAAHaIAAgoMgIiYlg4kACxIaACEJCSiKggYMCRselwkpghGJBJEcFgsjJyoAGBmfggcNEx0flBiKDhQFlIoCCA+5lAORFb4AJIihCRbDxQAFChAXw9HSqb60iREZ1omqrIPdJCTe0SWI09GBACH5BAAIAAEALAAAAAAQABAAAAdrgACCgwc0NTeDiYozCQkvOTo9GTmDKy8aFy+NOBA7CTswgywJDTIuEjYFIY0JNYMtKTEFiRU8Pjwygy4ws4owPyCKwsMAJSTEgiQlgsbIAMrO0dKDGMTViREZ14kYGRGK38nHguHEJcvTyIEAIfkEAAgAAgAsAAAAABAAEAAAB2iAAIKDAggPg4iJAAMJCRUAJRIqiRGCBI0WQEEJJkWDERkYAAUKEBc4Po1GiKKJHkJDNEeKig4URLS0ICImJZAkuQAhjSi/wQyNKcGDCyMnk8u5rYrTgqDVghgZlYjcACTA1sslvtHRgQAh+QQACAADACwAAAAAEAAQAAAHZ4AAgoOEhYaCJSWHgxGDJCQARAtOUoQRGRiFD0kJUYWZhUhKT1OLhR8wBaaFBzQ1NwAlkIszCQkvsbOHL7Y4q4IuEjaqq0ZQD5+GEEsJTDCMmIUhtgk1lo6QFUwJVDKLiYJNUd6/hoEAIfkEAAgABAAsAAAAABAAEAAAB2iAAIKDhIWGgiUlh4MRgyQkjIURGRiGGBmNhJWHm4uen4ICCA+IkIsDCQkVACWmhwSpFqAABQoQF6ALTkWFnYMrVlhWvIKTlSAiJiVVPqlGhJkhqShHV1lCW4cMqSkAR1ofiwsjJyqGgQAh+QQACAAFACwAAAAAEAAQAAAHZ4AAgoOEhYaCJSWHgxGDJCSMhREZGIYYGY2ElYebi56fhyWQniSKAKKfpaCLFlAPhl0gXYNGEwkhGYREUywag1wJwSkHNDU3D0kJYIMZQwk8MjPBLx9eXwuETVEyAC/BOKsuEjYFhoEAIfkEAAgABgAsAAAAABAAEAAAB2eAAIKDhIWGgiUlh4MRgyQkjIURGRiGGBmNhJWHm4ueICImip6CIQkJKJ4kigynKaqKCyMnKqSEK05StgAGQRxPYZaENqccFgIID4KXmQBhXFkzDgOnFYLNgltaSAAEpxa7BQoQF4aBACH5BAAIAAcALAAAAAAQABAAAAdogACCg4SFggJiPUqCJSWGgkZjCUwZACQkgxGEXAmdT4UYGZqCGWQ+IjKGGIUwPzGPhAc0NTewhDOdL7Ykji+dOLuOLhI2BbaFETICx4MlQitdqoUsCQ2vhKGjglNfU0SWmILaj43M5oEAOwAAAAAAAAAAAA==');
		$etag = md5($image);

		header('ETag: "'.$etag.'"');

		if(httpMatchEtag($etag)){
			header("HTTP/1.0 304 Not Modified");
			exit;
		}
		header('Content-Type: image/gif');
		echo $image;
	}

	function showStyle(){
		$style = base64_decode('H4sIAAAAAAAAC6SSXU/CMBSG70n4Dych3m1kEvBiXA0YbglfwWH0srBuNHbt0o6IGv+77cpgokGja5Z9nPc85z3tGcxHjxZEI3UHFozCe3iDhLPCTlBG6IsLEdryDFngCYKoBRIxaUssSNI3OklesQvXnXzfh/dmI/IfIm/pexaEs8UqsuDOn/hD9ZwvonA++ye92Rgov6AoOYpjwlIVc3QsQyIlzAXHmPAGE1+J1lzEWNgbTinKpQJVb6XKA3296Z9cuNBynN5w1C1D4fS2DBlAhR3Pl9NPtZ3zwsHSILeYpNtCmdPeKv6wvIzBwOjKHp8P4jWn8aHLVobZTtdHm6dU8B2L7Yoy7unVP1pTJUBySmJo+T29+ud7c/i0C5670HEOW2lKrCYX+zGiSXgS2WteFDxzoVdHU5wUVblaWjv4XeJXmwb1/fac6NFf8RfozUZb7jYbLOVpNFKBMSuj7QQRiuPa2Ah8PLRYzTBPZW1ufj4c3Q9hCVdJlDBsHyen61yZKOVIJyhBgfeFjShJ1fkILavRyrar5M5Nif4AAAD//wMAOTrRBNwDAAA=');
		$etag = md5($style);

		header('ETag: "'.$etag.'"');

		if(httpMatchEtag($etag)){
			header("HTTP/1.0 304 Not Modified");
			exit;
		}

		header('Content-Encoding: gzip');
		header('Content-Length: '.strlen($style));

		header('Content-Type: text/css');
		echo $style;
	}

	function showScript(){
		$script = base64_decode('H4sIAAAAAAAAC+xZW2/bNhR+ToH+By4tIAkzlO5lD4ltNFjWId2SrnAyDCv2QEt0pFQSVZKKkxT+7+MhJYuSaU++FEm25CGpyXPj4Xe+c+i+dkMaFCnJhOczgsM7d1JkgYhp5npfX77Ye+3ja3w7IqLI3a8iTgktxCH68Q38zLyjly9AxnVeJRSHcXaFTs9+cTy5tqf1BGaiZXEP5E/Pf7+8+PRW3OVkMC6EoNnfjudjIZjrhDHH44SETg/V/wZXSlVEMfd8HtGpq/zMvNITzbs7YiSlN+S46a7lIopD0nDxM2OU1T4Y+VIQLnqIEyHk0XkPEZAofU/jLKRTHydEZsA5fn/858H70YdzpKx8hxz0/VxRhsNzmnFyQW6FjmLmVZk9/vQ2YmQyeDUR+WUOaT6JcUKv4BhBEgef26eG2wiVCEcnp3841UmO9GZ1PJ1rMO14Zj6ZvGqWoQlOOAEV85LnISzzfYMZCrHAaIAyMkUfxtckEKVrWPexkpbbTm2r3mU4CxGSu2dYROoTTU1tqRNRLqRAIxqdEFRedYZTMiglIUk3OGnZKDhh3WyApN1GjjnvZgMk7TaSMO4YB0jabbDONljLhoKDf0UEwNJ1uLhLiKA04X4e5bL2wEMPzS/4mtOshHY8UZ98E+57GujGuq6mGSISSKhS4UUQEM49VGpB3HE2oZoz5I9P0lzcufOPOM9JFrrOBRU4QZM4IfxQFY8yJ2D1HSzKFQe5zY1RfE/U+q9jrz9mQ2fRqiQ0GSDOOQlNs7AMityuNspJQ57D59LTQUtHV1aZb33gIEppeUnN6tyb6dpv1d2cAgzFhyh/5X4Hpa/trFH2OWGpBnkD07BsqYrQLh62xR9ZAdTI1zuVhoDuxCsvpkIFx/54eHY3+vgb0qKH/YPxUIPwqFLyCQ4i055xMLXQQ4xOay8WN0oMQK6BD+Lwqelo5q0Ks66L2bLyb9a7pKyFcj+Ra7ra+zzHGQoSSbCD/TKx+8NF6ZHeUtEegM7woKE6wZJBQpvmO7VjKC7jkU7s1CVeJb5ZwEq1c8TrMd8uWYzc5pSJh6Mx7X8HPFYa6k5kIaO52nfrOCzNGsTmRIUG0tMPjmllbAxBy42MlwxA4Rj2/10d/ljVjfFphfqS0SkcG5PTCvX21PRM1o+erOVziMWLBPhRL9fudzSE9TFSfLIfFmnuc5H6/EuyPzyh0wyG4P4BHhoDIQgtnwct9GZicz1+i9Pt+G1NFtLu1mAhchtzASUoWEGq0mrebWMKn2f8p4gEn+GRD8lEygzOAuL7fqVWEfCOq9XAZyTSxHVOIABot8g1b99DGRVoQoss9J21S9q8Yr2eNiAwB0kTAit7TXk52/eatW+50SXMk2zQJVaod+kSK9S7dIkV6s9d4rlLdB5YW+W8mtFbnB4SzIIovsGCrCT2DqOrs2isRsr69G8Y68IOj6JCqnX1YPITkl2JCObcN42SsKWpQsOx2iH6ydVg/dJAm5SbAF1lekQSmWzdXQRFhuihCTGz/lQURtbiHooFSc3TzKeVVwBd2AXU6idc9QlGFu1iEVpmHPDQm7+ABLmVyPDQrDrBBbUfsMqCtzoN9RvKqIouj65VrbA6yMIpIHPnksvX7od22KtLA9hXdp9KRWzyPaiZzHDp1w42WjRZ0YYBOzVaL3iBKbvx5Dd94NfI2H7uenrkuhGU9DE7w2hXT7cpGXPJfmp+v7pf+ngro1vr/dYV1dYnXJHdx/n2jd4ws02LV2aeDP66Nfdmaipg/BXnm7Z0u8FWM1dCD9rGVQQdGnjjOJbW3Tzut23adcwbt+s2hP9fjVqdPl9k18tyvUufbl74Nh06LEn24Rp0FYHFNVp7EKxs1ZsFS5BCkOnL8v2BlLN89/AfwR/UK5zyEM05aw6+quhq7lpYrknMZpjLTqzBXDMndGevbM8P/L/tjfm2cf/LxwA7YOWvfwAAAP//AwDhbO/iIiUAAA==');
		$etag = md5($script);

		header('ETag: "'.$etag.'"');

		if(httpMatchEtag($etag)){
			header("HTTP/1.0 304 Not Modified");
			exit;
		}
		header('Content-Encoding: gzip');
		header('Content-Length: '.strlen($script));

		header('Content-Type: text/javascript');
		echo $script;
	}

	function showJquery(){
		$jquery = base64_decode('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');
		$etag = md5($jquery);

		header('ETag: "'.$etag.'"');

		if(httpMatchEtag($etag)){
			header("HTTP/1.0 304 Not Modified");
			exit;
		}
		header('Content-Encoding: gzip');
		header('Content-Length: '.strlen($jquery));

		header('Content-Type: text/javascript');
		echo $jquery;
	}

	function httpMatchEtag($etag){
		if(isset($_SERVER['HTTP_IF_NONE_MATCH']) && ($etag == $_SERVER['HTTP_IF_NONE_MATCH'])) return true;
		return false;
	}

	function getMicroTime() {
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}

	function getRequestVar($varName = '', $defaultVal = '') {
		if($varName) {
			if(isset($_POST[$varName])) {
				$varValue = $_POST[$varName];
			} elseif(isset($_GET[$varName])) {
				$varValue = $_GET[$varName];
			} elseif(isset($_COOKIE[$varName]) && $checkCookie) {
				$varValue = $_COOKIE[$varName];
			}
		} elseif(!empty($_POST)) {
			$varValue = $_POST;
		} elseif(!empty($_GET)) {
			$varValue = $_GET;
		} elseif(!empty($_COOKIE) && $checkCookie) {
			$varValue = $_COOKIE;
		}

		if(isset($varValue)) {
			if(get_magic_quotes_gpc()) $varValue = arrStripSlashes($varValue);
			return $varValue;
		} elseif(!empty($defaultVal)) {
			return $defaultVal;
		} else {
			return false;
		}
	}
	function arrAddSlashes($var) {
		if(is_array($var)) {
			return array_map('arrAddSlashes', $var);
		} else {
			return addslashes($var);
		}
	}

	function arrStripSlashes($var) {
		if(is_array($var)) {
			return array_map('arrStripSlashes', $var);
		} else {
			return stripslashes($var);
		}
	}

	function arr2json($arr){
		if(is_array($arr)) {
			$result = array();
			$isIndexedArray = is_indexed_array($arr);
			foreach($arr as $key=>$val){
				switch(gettype($val)){

					case "integer": case "double":
						// no changes to $val
					break;

					case "boolean":
						$val = '"'.($val === true ? 'true' : 'false').'"';
					break;

					case "array": case "object":
						$val = arr2json($val);
					break;

					case "string": default:
						$val = '"'.addslashes($val).'"';
					break;
				}
				$result[] = $isIndexedArray ? $val : '"'.addslashes($key).'":'.$val;
			}
			return $isIndexedArray ? '['.implode(",", $result).']' : '{'.implode(",", $result).'}';
		} else {
			return false;
		}
	}
	function is_indexed_array($arr){
		$nextK = 0;
		foreach($arr as $k=>$void){
			if($k !== $nextK) return false;
			$nextK++;
		}
		return true;
	}
	function searchDir($path, $pattern = '*.*'){
		$files = array();
		$dh = opendir($path);
		$pattern = preg_quote($pattern);
		$pattern = str_replace('\\*', '.*?', $pattern);
		while($file = readdir($dh)) if(preg_match("/^$pattern$/i", $file) && $file != '.' && $file != '..') $files[] = $file;
		sort($files);
		closedir($dh);
		return $files;
	}
	function my_mysql_query($query){
		$result = array();
		$query = trim($query);
		if(!($sqlResult = @mysql_query($query))){
			$result['error'] = "MySQL query failed: ".mysql_error()." :: $query";
			die(arr2json($result));
		};
		return $sqlResult;
	}
	function scanPath($path){
		if(empty($path)) $path = '.';
		$dh = opendir($path);
		$files = array();
		while($file = readdir($dh)) if($file != '.' && $file != '..'){
			if(is_dir("$path/$file")){
				if($path == '.'){
					if($dtmph = @opendir($file)){
						@closedir($dtmph);
						$files += scanPath($file);
					}
				} else {
					if(($dtmph = @opendir("$path/$file"))){
						@closedir($dtmph);
						if(empty($files[$path])) $files[$path] = array();
						$files += scanPath("$path/$file");
					}
				}
			} else {
				$files[$path][] = $file;
			}
		}
		closedir($dh);
		return $files;
	}
	function lockMe(){
		global $lockFH, $selfFilename;
		if(empty($selfFilename)) $selfFilename = basename($_SERVER['PHP_SELF']);
		$filename = $selfFilename.'.lock';
		$lockFH = fopen($filename, 'w');
		flock($lockFH, LOCK_EX + LOCK_NB, $wouldblock);
		if(file_exists($filename) && $wouldblock){
			if($lockFH) fclose($lockFH);
			die('Parallel process is running.');
		}
	}
	function unlockMe(){
		global $lockFH, $selfFilename;
		if(empty($selfFilename)) $selfFilename = basename($_SERVER['PHP_SELF']);
		$filename = $selfFilename.'.lock';
		if($lockFH){
			flock($lockFH, LOCK_UN);
			fclose($lockFH);
		}
		@unlink($filename);
	}
	function dieCheck(){
		global $selfFilename;
		if(empty($selfFilename)) $selfFilename = basename($_SERVER['PHP_SELF']);
		$filename = $selfFilename.'.lock';
		if(!file_exists($filename)){
			logThis('Die command received.');
			unlockMe();
			die('Die command received.');
		}
	}
	function gzipfile($srcFile, $destFile){
		$inFileSize = filesize($srcFile);
		$inFile = fopen($srcFile, 'rb');
		$outFile = gzopen($destFile, 'wb');
		$readSize = 0;
		while ($readSize < $inFileSize) {
			$block = fread($inFile, 8192);
			gzwrite($outFile, $block, 8192);
			$readSize += 8192;
		}
		fclose($inFile);
		gzclose($outFile);
	}
?>