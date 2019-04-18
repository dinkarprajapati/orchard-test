<?php
/**
 * Resources
 * http://karimboudjema.com/en/drupal/20181013/create-custom-form-form-api-drupal-8
 * https://www.php.net/manual/en/function.strrev.php
 */
namespace Drupal\orchard_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TestForm extends FormBase {

    /**
     * Returns a unique string identifying the form.
     *
     * The returned ID should be a unique string that can be a valid PHP function
     * name, since it's used in hook implementation names such as
     * hook_form_FORM_ID_alter().
     *
     * @return string
     *   The unique string identifying the form.
     */
    public function getFormId() {
        return 'orchard_test_one_form';
    }

    /**
     * Form constructor.
     *
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     *
     * @return array
     *   The form structure.
     */
    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['description'] = [
            '#type' => 'item',
            '#markup' => $this->t('Input any string to check if PALINDROME'),
        ];
        
        $form['input_string'] = [
            '#type' => 'textfield',
            '#input_string' => $this->t('Input String'),
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

    /**
     * Validate the title and the checkbox of the form
     * 
     * @param array $form
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     * 
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {
        parent::validateForm($form, $form_state);
        $input_string = $form_state->getValue('input_string');
    }

    /**
     * Form submission handler.
     *
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        // Call the Static Service Container wrapper
        $messenger = \Drupal::messenger();
        $get_input_string = $form_state->getValue('input_string');
        $messenger->addMessage('Input String -'.$get_input_string.' : '.$this->checkPalindrome($get_input_string));

        // Redirect to self and display result as a status message
        $form_state->setRebuild(true);

    } 


    /**
     *  Checks if the string is Palindrome
     * 
     * @param string $get_string
     * @return string Palindrome Validation
     * 
     */
    public function checkPalindrome($get_string) {
        if(empty($get_string)) { // CHECKS IF THE STRING IS EMPTY
            return "UNDETERMINED";
        }
        
        // FILTER THE STRING, IGNORE ANY OTHER CHARACTERS EXCLUDING THE ALPHABETS, CASE-INSENSITIVE
        $filter_string = preg_replace('/[^a-zA-Z]/', '', strtolower($get_string));
        
        if(strrev($filter_string) == $filter_string) { // PHP FUNCTION TO REVERSE THE STRING AND TEST IF EQUAL
            return "TRUE";
        } else {
            return "FALSE";
        }
    }

}