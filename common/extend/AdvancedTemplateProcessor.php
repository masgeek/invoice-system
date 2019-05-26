<?php


namespace common\extend;


use PhpOffice\PhpWord\TemplateProcessor;
use yii\base\Exception;

class AdvancedTemplateProcessor extends TemplateProcessor
{
    public function setValueAdvanced(array $search_replace)
    {
        foreach ($this->tempDocumentHeaders as $index => $headerXML) {
            $this->tempDocumentHeaders[$index] = $this->setValueForPartAdvanced($this->tempDocumentHeaders[$index], $search_replace);
        }

        $this->tempDocumentMainPart = $this->setValueForPartAdvanced($this->tempDocumentMainPart, $search_replace);

        foreach ($this->tempDocumentFooters as $index => $headerXML) {
            $this->tempDocumentFooters[$index] = $this->setValueForPartAdvanced($this->tempDocumentFooters[$index], $search_replace);
        }
    }

    protected function setValueForPartAdvanced($documentPartXML, $search_replace)
    {
        $pattern = '/<w:t>(.*?)<\/w:t>/';
        $rplStringBeginOffcetsStack = array();
        $rplStringEndOffcetsStack = array();
        $rplCleanedStrings = array();
        $stringsToClean = array();
        preg_match_all($pattern, $documentPartXML, $words, PREG_OFFSET_CAPTURE);

        $bux_founded = false;
        $searching_started = false;
        foreach ($words[1] as $key_of_words => $word) {
            $exploded_chars = str_split($word[0]);
            foreach ($exploded_chars as $key_of_chars => $char) {
                if ($bux_founded) {
                    if ($searching_started) {
                        if ($char == "}") {
                            $bux_founded = false;
                            $searching_started = false;
                            array_push($rplStringEndOffcetsStack, ($word[1] + mb_strlen($word[0]) + 6));
                        }
                    } else {
                        if ($char == "{") {
                            $searching_started = true;
                        } else {
                            $bux_founded = false;
                            array_pop($rplStringBeginOffcetsStack);
                        }
                    }
                } else {
                    if ($char == "$") {
                        $bux_founded = true;
                        array_push($rplStringBeginOffcetsStack, $word[1] - 5);
                    }
                }
            }
        }
        for ($index = 0; $index < count($rplStringEndOffcetsStack); $index++) {
            $string_to_clean = substr($documentPartXML, $rplStringBeginOffcetsStack[$index], ($rplStringEndOffcetsStack[$index] - $rplStringBeginOffcetsStack[$index]));
            array_push($stringsToClean, $string_to_clean);
            preg_match_all($pattern, $string_to_clean, $words_to_concat);
            $cleaned_string = implode("", $words_to_concat[1]);
            $cleaned_string = preg_replace('/[${}]+/', '', $cleaned_string);
            array_push($rplCleanedStrings, $cleaned_string);
        }
        for ($index = 0; $index < count($rplCleanedStrings); $index++) {
            foreach ($search_replace as $key_search => $replace) {
                if ($rplCleanedStrings[$index] == $key_search) {
                    $documentPartXML = str_replace($stringsToClean[$index], "<w:t>" . $replace . "</w:t>", $documentPartXML);
                    break;
                }
            }
        }
        return $documentPartXML;
    }

    /**
     * Set a new image
     *
     * @param string $search
     * @param string $replace
     */
    public function setMyImage($search, $replace)
    {

        $zip  = $this;

        print_r($zip);
            die;
        // Sanity check
        if (!file_exists($replace)) {
            throw new Exception('Image does not exists');
        }
        // Delete current image
        $this->zipClass->deleteName('word/media/' . $search);

        // Add a new one
        $this->zipClass->addFile($replace, 'word/media/' . $search);
    }
}