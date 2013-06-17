<?php

class TestForm extends CFormModel
{
    public $textField;
    public $dropDown;
    public $multiDropDown;
    public $fileField;
    public $textArea;
    public $uneditableField;
    public $disabled;
    public $prepend;
    public $append;
    public $disabledCheckbox;
    public $inlineCheckboxes;
    public $checkboxes;
    public $radioButton;
    public $radioButtons;

	public function rules() {
		return array(
			array('textField, dropDown, multiDropDown, textArea, prepend, append, inlineCheckboxes, checkboxes, radioButton, radioButtons', 'required'),
		);
	}

    public function attributeLabels()
    {
        return array(
            'textField' => 'Text input',
            'dropDown' => 'Select list',
            'multiDropDown' => 'Multiple select',
            'fileField' => 'File input',
            'textArea' => 'Text area',
            'uneditableField' => 'Uneditable input',
            'disabled' => 'Disabled input',
            'prepend' => 'Prepend text',
            'append' => 'Append text',
            'disabledCheckbox' => 'Disabled checkbox',
            'inlineCheckboxes', 'Inline checkboxes',
            'checkboxes' => 'Checkboxes',
            'radioButton' => 'Radio button',
            'radioButtons' => 'Radio buttons',
        );
    }
}