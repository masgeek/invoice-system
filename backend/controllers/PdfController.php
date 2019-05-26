<?php


namespace backend\controllers;


use common\extend\AdvancedTemplateProcessor;
use common\extend\BaseWebController;
use Exception;
use IRebega\DocxReplacer\Docx;
use kartik\mpdf\Pdf;
use PhpOffice\PhpWord\Exception\CopyFileException;
use PhpOffice\PhpWord\Exception\CreateTemporaryFileException;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\Shared\ZipArchive;
use PhpOffice\PhpWord\TemplateProcessor;
use Yii;
use yii\base\InvalidConfigException;
use yii\web\Controller;

class PdfController extends Controller
{
    /**
     * @throws CopyFileException
     * @throws CreateTemporaryFileException
     */
    public function actionIndexOld()
    {
// Creating the new document...
        $zip = new ZipArchive();

//This is the main document in a .docx file.
        $fileToModify = 'word/document.xml';

        $path = Yii::getAlias('@base');

        $file = "{$path}/documents/invoice_letter.docx";
        $savePath = "$path/documents/";
        $temp_file = $savePath . date('Ymdhis') . '_mas.docx';
        copy($file, $temp_file);

        if ($zip->open($temp_file) === TRUE) {
            //Read contents into memory
            $oldContents = $zip->getFromName($fileToModify);
            //Modify contents:
            $newContents = str_replace('[names]', 'Yahoo \n World', $oldContents);
            $newContentsB = str_replace('{name}', 'Santosh Achari', $newContents);
            $newContents = str_replace('{second}', 'Babu', $newContentsB);

            //Delete the old...
            $zip->deleteName($fileToModify);
            //Write the new...
            $zip->addFromString($fileToModify, $newContents);
            //And write back to the filesystem.
            $return = $zip->close();
            If ($return == TRUE) {
                return "Success!";
            }
        } else {
            return 'failed';
        }
    }

    /**
     * @param $doc
     * @return int|void
     * @throws CopyFileException
     * @throws CreateTemporaryFileException
     * @throws \PhpOffice\PhpWord\Exception\Exception
     * @throws InvalidConfigException
     */
    public function actionIndex($doc)
    {
        //This is the main document in  Template.docx file.
        $path = Yii::getAlias('@base');

        $file = "{$path}/documents/templates/masters.docx";
        if ($doc == 'phd') {
            $file = "{$path}/documents/templates/phd.docx";
        }

        $vendorPath = Yii::getAlias('@vendor');
        $mpdfPath = "{$vendorPath}/mpdf/mpdf";
        Settings::setPdfRendererPath($mpdfPath);
        Settings::setPdfRendererName('MPDF');
        Settings::setDefaultFontSize(5);
        $phpword = new AdvancedTemplateProcessor($file);

        $currentDate = Yii::$app->formatter->asDate('now');
        $examDate = Yii::$app->formatter->asDate('now', 'php:M, Y');

        $search_replace_array = array(
            'title' => 'Mr',
            'prof' => 'Here',
            'studentNames' => 'Munywele Sammy Barasa',
        );

        //$phpword->setValueAdvanced($search_replace_array);
        //$phpword->setMyImage('image1.jpg', 'my_image.jpg');

        $image_path = "$path/documents/templates/logo_small.png";

        $phpword->setImageValue('uniLogo', array(
            'src' => $image_path,
            //'size' => array(102, 40) //px
        ));

        $phpword->setValue('refNo', 'Fxx/11111/2012');
        $phpword->setValue('documentDate', $currentDate);
        $phpword->setValue('thesisExaminationDate', $examDate);
        $phpword->setValue('schoolName', 'School of computing');
        $phpword->setValue('departmentName', 'Department of corrections');
        $phpword->setValue('studentNames', 'Munywele Sammy Barasa');
        $phpword->setValue('title', 'Mr');
        $phpword->setValue('supervisorOne', 'Supervisor One');
        $phpword->setValue('supervisorTwo', 'Supervisor Two');
        $phpword->setValue('supervisorThree', 'Supervisor 3');
        $phpword->setValue('supervisors', 'Supervisor 1, Supervisor 2 and Supervisor 3');
        $phpword->setValue('proposalTitle', 'Influence of leadership skills, stakeholder management and project scope on execution of fibre optic infrastructure in Nairobi County, Kenya');
        $savePath = "$path/documents/";
        $temp_file = $savePath . date('Ymdhis') . $doc . '.docx';
        $phpword->saveAs($temp_file);

        // return 'doc generated';
        $phpWord = IOFactory::load($temp_file);

//Save it
        $pdfPath = $savePath . date('Ymdhis') . $doc . '.pdf';
        $xmlWriter = IOFactory::createWriter($phpWord, 'PDF');
        $xmlWriter->save($pdfPath);
        unlink($temp_file);
        return 8;
    }

    public function actionIndexD()
    {
        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('_reportView');


        return $content;
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader' => ['Krajee Report Header'],
                'SetFooter' => ['{PAGENO}'],
            ]
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }
}