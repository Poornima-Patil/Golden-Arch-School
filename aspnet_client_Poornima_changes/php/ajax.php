<?php
include('class.fileuploader.php');
include('../database-config.php');

$album = $_GET['album'];

$uploadDir = 'uploads/' . $album . '/';
$realUploadDir = '../uploads/' . $album . '/';

if (!file_exists($realUploadDir)) {
   mkdir($realUploadDir, 0777, true);
}

$_action = isset($_GET['type']) ? $_GET['type'] : '';
function getRealFile($file)
{
   global $uploadDir, $realUploadDir;

   return str_replace($uploadDir, $realUploadDir, $file);
}

// upload
if ($_action == 'upload') {
   $id = false;
   $title = 'auto';

   // if after editing
   if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['_editorr'])) {
      $_id = $db->real_escape_string($_POST['id']);

      $query = $db->query("SELECT file FROM gallery WHERE id = '$_id'");
      if ($query && $query->num_rows == 1) {
         $row = $query->fetch_assoc();
         $id = $_id;
         $pathinfo = pathinfo($row['file']);

         $realUploadDir = getRealFile($pathinfo['dirname'] . '/');
         $title = $pathinfo['filename'];
      } else {
         exit;
      }
   }

   // initialize FileUploader
   $FileUploader = new FileUploader('files', array(
      'limit' => 1,
      'fileMaxSize' => 20,
      'extensions' => array('image/*', 'video/*', 'audio/*'),
      'uploadDir' => $realUploadDir,

      'required' => true,
      'title' => $title,
      'replace' => $id,
      'editor' => array(
         'maxWidth' => 1980,
         'maxHeight' => 1980,
         'crop' => false,
         'quality' => 90
      )
   ));

   $upload = $FileUploader->upload();

   if (count($upload['files']) == 1) {
      $item = $upload['files'][0];
      $title = $db->real_escape_string($item['name']);
      $type = $db->real_escape_string($item['type']);
      $size = $db->real_escape_string($item['size']);
      $file = $db->real_escape_string($uploadDir . $item['name']);

      if (!$id)
         $query = $db->query("INSERT INTO gallery(`album`, `title`, `file`, `type`, `size`, `index`, `date`) VALUES($album, '$title', '$file', '$type', '$size', 1 + (SELECT IFNULL((SELECT MAX(`index`) FROM gallery g), -1)), NOW())");
      else
         $query = $db->query("UPDATE gallery SET `size` = '$size' WHERE id = '$id'");

      if ($id || $query) {
         $upload['files'][0] = array(
            'title' => $item['title'],
            'name' => $item['name'],
            'size' => $item['size'],
            'size2' => $item['size2'],
            'url' => $file,
            'id' => $id ? $id : $db->insert_id
         );
      } else {
         if (is_file($item['file']))
            @unlink($item['file']);
         unset($upload['files'][0]);
         $upload['hasWarnings'] = true;
         $upload['warnings'][] = 'An error occured.';
      }
   }

   echo json_encode($upload);
   exit;
}

// preload
if ($_action == 'preload') {
   $preloadedFiles = array();

   $queryString = "SELECT * FROM gallery WHERE album=" . $album . " ORDER BY `index` ASC";

   $query = $db->query($queryString);
   if ($query && $query->num_rows > 0) {
      while ($row = $query->fetch_assoc()) {
         $preloadedFiles[] = array(
            'name' => $row['title'],
            'type' => $row['type'],
            'size' => $row['size'],
            'file' => $row['file'],
            'data' => array(
               'readerForce' => true,
               'url' => $row['file'],
               'date' => $row['date'],
               'isMain' => $row['is_main'],
               'listProps' => array(
                  'id' => $row['id'],
               )
            ),
         );
      }
   }

   echo json_encode($preloadedFiles);
   exit;
}

// resize
if ($_action == 'resize') {
   if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['_editor'])) {
      $id = $db->real_escape_string($_POST['id']);
      $editor = json_decode($_POST['_editor'], true);

      $query = $db->query("SELECT file FROM gallery WHERE id = '$id'");
      if ($query && $query->num_rows == 1) {
         $row = $query->fetch_assoc();
         $file = getRealFile($row['file']);

         if (is_file($file)) {
            $info = Fileuploader::resize($file, null, null, null, (isset($editor['crop']) ? $editor['crop'] : null), 100, (isset($editor['rotation']) ? $editor['rotation'] : null));
            $size = filesize($file);

            $db->query("UPDATE gallery SET `size` = '$size' WHERE id = '$id'");
         }
      }
   }

   exit;
}

// sort
if ($_action == 'sort') {
   if (isset($_POST['list'])) {
      $list = json_decode($_POST['list'], true);

      $index = 0;
      foreach ($list as $val) {
         if (!isset($val['id']) || !isset($val['name']) || !isset($val['index']))
            break;

         $id = $db->real_escape_string($val['id']);
         $db->query("UPDATE gallery SET `index` = '$index' WHERE id = '$id'");
         $index++;
      }
   }
   exit;
}

// rename
if ($_action == 'rename') {
   if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['title'])) {
      $id = $db->real_escape_string($_POST['id']);
      $title = substr(FileUploader::filterFilename($_POST['title']), 0, 200);

      $query = $db->query("SELECT file FROM gallery WHERE id = '$id'");
      if ($query && $query->num_rows == 1) {
         $row = $query->fetch_assoc();
         $file = $row['file'];

         $pathinfo = pathinfo($file);
         $newName = $title . (isset($pathinfo['extension']) ? '.' . $pathinfo['extension'] : '');
         $newFile = $pathinfo['dirname'] . '/' . $newName;

         $realFile = str_replace($uploadDir, $realUploadDir, $file);
         $newRealFile = str_replace($uploadDir, $realUploadDir, $newFile);

         if (!file_exists($newRealFile) && rename($realFile, $newRealFile)) {
            $query = $db->query("UPDATE gallery SET `title` = '" . $db->real_escape_string($newName) . "', `file` = '" . $db->real_escape_string($newFile) . "' WHERE id = '$id'");
            if ($query) {
               echo json_encode([
                  'title' => $title,
                  'file' => $newFile,
                  'url' => $newFile
               ]);
            }
         }
      }
   }
   exit;
}

// asmain
if ($_action == 'asmain') {
   if (isset($_POST['id']) && isset($_POST['name'])) {
      $id = $db->real_escape_string($_POST['id']);

      $query = $db->query("UPDATE gallery SET is_main = 0 WHERE album = '$album'");
      $query = $db->query("UPDATE gallery SET is_main = 1 WHERE id = '$id'");
   }
   exit;
}

// remove
if ($_action == 'remove') {
   if (isset($_POST['id']) && isset($_POST['name'])) {
      $id = $db->real_escape_string($_POST['id']);

      $query = $db->query("SELECT file FROM gallery WHERE id = '$id'");

      if ($query && $query->num_rows == 1) {
         $row = $query->fetch_assoc();
         $file = str_replace($uploadDir, $realUploadDir, $row['file']);

         $db->query("DELETE FROM gallery WHERE id = '${id}'");
         if (is_file($file))
            unlink($file);
      }
   }
   exit;
}
