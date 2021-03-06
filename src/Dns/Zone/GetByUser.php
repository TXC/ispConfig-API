<?php
namespace ispConfig\Dns;

use ispConfig\Request;

class GetByUser extends Request
{
    protected $Method = 'dns_zone_get';
    /** @var string */
    public $session_id;
    /** @var int */
    public $client_id;
    /** @var int */
    public $server_id;

    /**
     * Get constructor.
     * @param string $session_id
     * @param int $client_id
     * @param int $server_id
     */
    public function __construct($session_id, $client_id, $server_id)
    {
        $this->session_id = $session_id;
        $this->client_id = $client_id;
        $this->server_id = $server_id;
    }
}