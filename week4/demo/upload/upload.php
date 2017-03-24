<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    </head>
    <body>
        <?php
        /*
         * make sure php_fileinfo.dll extension is enable in php.ini
         */

        class Filehandler {

            function upLoad($keyName) {


                // Undefined | Multiple Files | $_FILES Corruption Attack
                // If this request falls under any of them, treat it invalid.
                if (!isset($_FILES[$keyName]['error']) || is_array($_FILES[$keyName]['error'])) {
                    throw new RuntimeException('Invalid parameters.');
                }

                // Check $_FILES['upfile']['error'] value.
                switch ($_FILES[$keyName]['error']) {
                    case UPLOAD_ERR_OK:
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        throw new RuntimeException('No file sent.');
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        throw new RuntimeException('Exceeded filesize limit.');
                    default:
                        throw new RuntimeException('Unknown errors.');
                }

                // You should also check filesize here. 
                if ($_FILES[$keyName]['size'] > 1000000) {
                    throw new RuntimeException('Exceeded filesize limit.');
                }

                // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
                // Check MIME Type by yourself.
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $validExts = array(
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif'
                );
                $ext = array_search($finfo->file($_FILES[$keyName]['tmp_name']), $validExts, true);


                if (false === $ext) {
                    throw new RuntimeException('Invalid file format.');
                }

                // You should name it uniquely.
                // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
                // On this example, obtain safe unique name from its binary data.

                $salt = uniqid(mt_rand(), true);
                $fileName = 'img_' . sha1($salt . sha1_file($_FILES[$keyName]['tmp_name']));
                $location = sprintf('./uploads/%s.%s', $fileName, $ext);

                if (!is_dir('./uploads')) {
                    mkdir('./uploads');
                }

                if (!move_uploaded_file($_FILES[$keyName]['tmp_name'], $location)) {
                    throw new RuntimeException('Failed to move uploaded file.');
                }

                return $fileName . '.' . $ext;
            }

        }

        $filehandler = new Filehandler();

        try {
            $fileName = $filehandler->upLoad('upfile');
        } catch (RuntimeException $e) {
            $error = $e->getMessage();
        }
        ?>

        <?php if ( isset($fileName) ) : ?>
            <h2><?php echo $fileName; ?> is uploaded successfully.</h2>
        <?php else: ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>

    </body>
</html>