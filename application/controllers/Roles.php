<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends Application
{
	// store the role, return to whatever page that were on when a role is switched
    public function actor($role = ROLE_GUEST)
    {
        $this->session->set_userdata('userrole',$role);
        redirect($_SERVER['HTTP_REFERER']); // back where we came from
    }

}