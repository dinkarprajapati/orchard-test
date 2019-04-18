<?php
/**
 * Resources:
 * https://www.php.net/manual/en/function.substr-count.php
 */
namespace Drupal\orchard_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TesttwoForm extends FormBase {
    public function getFormId() {
        return 'orchard_test_two_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['description'] = [
            '#type' => 'item',
            '#markup' => $this->t('Input any string to check Heterogram and Isogram'),
        ];
        
        $form['input_string'] = [
            '#type' => 'textfield',
            '#input_string' => $this->t('Input String'),
            '#required' => TRUE,
        ];

        // Group submit handlers in an actions element with a key of "actions" so
        // that it gets styled correctly, and so that other modules may add actions
        // to the form. This is not required, but is convention.
        $form['actions'] = [
        '#type' => 'actions',
        ];

        // Add a submit button that handles the submission of the form.
        $form['actions']['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Submit'),
        ];

        return $form;

    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        // Call the Static Service Container wrapper
        $messenger = \Drupal::messenger();
        $get_input_string = $form_state->getValue('input_string');
        $messenger->addMessage('Input String - '.$get_input_string.' - Result: '.$this->checkInsta($get_input_string));

        // Redirect to self and display result as a status message
        $form_state->setRebuild(true);

    }

    /**
     *  Checks if the string is some kind of gram
     * 
     * @param string $get_string
     * @return string Output type of gram
     * 
     */
    protected function checkInsta($get_string) {
        $filter_string = preg_replace('/[^a-zA-Z]/', '', strtolower($get_string));
    
        if($this->checkHeterogram($filter_string)) {
            return 'HETEROGRAM';
        } else if($this->checkIsogram(($filter_string))) {
            return 'ISOGRAM';
        } else {
            return 'NOTAGRAM';
        }
    }
    
    /**
     *  Checks Heterogram to the string provided
     * 
     * @param string $get_string
     * @return boolean 
     * 
     */
    protected function checkHeterogram($get_string) {
        $str_array = str_split($get_string);
        for($i=0; $i<strlen($get_string); $i++) {
            if(substr_count($get_string, $str_array[$i]) > 1) {
                return false;
            }
        }
        return true;
    }
    
    /**
     *  Checks Isogram to the string provided
     * 
     * @param string $get_string
     * @return boolean 
     * 
     */
    protected function checkIsogram($get_string) {
        $str_array = str_split($get_string);
        $count_first_letter_repitition = 0;
        for($i=0; $i<strlen($get_string); $i++) {
            if(substr_count($get_string, $str_array[$i]) > 1) {
                if($count_first_letter_repitition > 0) {
                    if($count_first_letter_repitition != substr_count($get_string, $str_array[$i])) {
                        return false;
                    }
                } else {
                    $count_first_letter_repitition = substr_count($get_string, $str_array[$i]);
                }
            } else {
                return false;
            }
        }
        return true;
    }
}