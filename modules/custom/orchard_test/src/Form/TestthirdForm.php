<?php
namespace Drupal\orchard_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TestthirdForm extends FormBase {
    public function getFormId() {
        return 'orchard_test_third_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['description'] = [
            '#type' => 'item',
            '#markup' => $this->t('Input time in HH:MM:SS format to get the angle between hour and minute hand in analog clock'),
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

    public function submitForm(array &$form, FormStateInterface $form_state) {
        // Call the Static Service Container wrapper
        $messenger = \Drupal::messenger();
        $get_input_string = $form_state->getValue('input_string');
        $messenger->addMessage('Input Time - '.$get_input_string.' - Result: '.$this->getAngle($get_input_string));

        // Redirect to self and display result as a status message
        $form_state->setRebuild(true);

    }

    protected function getAngle($time){
        //https://www.phpliveregex.com/#tab-preg-match
        if(empty($time)) {
            $hour_hand = date("H");
            $minute_hand = date("i");
        } elseif (preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9])|(:([0-5][0-9]))$/", $time)) {
            $hour_hand = date("H", strtotime($time));
            $minute_hand = date("i", strtotime($time));
        } else {
            return "NOT A VALID TIME FORMAT";
        }

        $hour_angle = 0.5*(($hour_hand*60) + $minute_hand); 
        $minute_angle = 6*$minute_hand;
    
        $angle = abs($hour_angle-$minute_angle);
        $degrees = min(360 - $angle, $angle).' degrees';
        return $degrees; //https://math.stackexchange.com/questions/2865175/angle-between-hour-and-minute-hand-at-242
    }


}