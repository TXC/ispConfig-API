<?php
namespace ispConfig\Sites\APS;

use ispConfig\Request;

class InstallPackage extends Request
{
    /** @var string  */
    protected $Method = 'sites_aps_install_package';
    /** @var string */
    public $session_id;
    /** @var int */
    public $primary_id;
    /** @var array */
    public $params;

    /**
     * @param string $session_id
     * @param int $primary_id
     * @param array $params
     *      main_domain     varchar(255)
     */
    public function __construct($session_id, $primary_id, $params = [])
    {
        $this->session_id = $session_id;
        $this->primary_id = $primary_id;
        $this->params = $params;
    }

}