<?php if ( ! defined( 'ABSPATH' ) ) exit;

class PIE_Fields_Hidden extends PIE_Abstracts_Fields
{   

    public function __construct()
    {
        $this->name     = esc_html__( 'Hidden', 'pie-forms' );
		$this->type     = 'hidden';
		$this->icon     = 'hidden';
		$this->order    = 160;
        $this->group    = 'advanced';
        $this->is_pro   = true;

        parent::__construct();
    }
}